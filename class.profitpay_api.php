<?php

class profitpayAPI {
	
	private $apiId = null;
	private $apiKey = null;
	private $real_ip = null;
	
	/**
	 *
	 *
	 */
	public function __construct( $apiId = null, $apiKey = null ) {
		
		try {
			$this->apiId($apiId);
		} catch (Exception $e) {
			throw $e;
		}
		
		try {
			$this->apiKey($apiKey);
		} catch (Exception $e) {
			throw $e;
		}

		$this->real_ip = !empty($_SERVER["HTTP_CF_CONNECTING_IP"]) ? $_SERVER["HTTP_CF_CONNECTING_IP"] : (!empty($_SERVER["HTTP_X_FORWARDED_FOR"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"]);
	}
	
	/**
	 * Get or set API ID.
	 *
	 * @param $apiId integer
	 */
	public function apiId( $apiId = null ) {
		
		if( empty($apiId) )
			return $this->apiId;
		
		if( !is_int($apiId) )		
			throw new Exception("Incorrect 'API ID' parameter, must be integer.");
		
		$this->apiId = $apiId;		
	}
	
	/**
	 * Get or set API key.
	 *
	 * @param $apiKey string
	 */
	public function apiKey( $apiKey = null ) {
		
		if( empty($apiKey) )
			return $this->apiKey;
		
		if( !is_string($apiKey) )		
			throw new Exception("Incorrect 'API Key' parameter, must be string.");
		
		$this->apiKey = $apiKey;		
	}
	
	/**
	 * Registers a new lead.
	 *
	 * @param $data array
	 * @return boolean true
	 */
	public function addLead( $data = array() ) {
		
		if( empty($this->apiId) )		
			throw new Exception("API ID not specified for the 'addLead' method.");

		if( empty($this->apiKey) )		
			throw new Exception("API key not specified for the 'addLead' method.");
		
		if( !is_array($data) ||
			empty($data['flow']) || !is_int($data['flow']) ||
			empty($data['offer']) || !is_int($data['offer']) || 
			empty($data['phone'])
			) {
				throw new Exception("Incorrect data specified for the 'addLead' method.");			
			}
			
		$endpoint = 'https://dashboard.profitpay.pro/api/wm/push.json?id='.$this->apiId.'-'.$this->apiKey;	
		
		$data['ip'] = $this->real_ip;
		$data['ua'] = isset( $_SERVER["HTTP_USER_AGENT"] ) ? $_SERVER["HTTP_USER_AGENT"] : '';
		$data['us'] = isset( $_REQUEST["utm_source"] ) ? $_REQUEST["utm_source"] : '';
		$data['uc'] = isset( $_REQUEST["utm_campaign"] ) ? $_REQUEST["utm_campaign"] : '';
		$data['un'] = isset( $_REQUEST["utm_content"] ) ? $_REQUEST["utm_content"] : '';
		$data['ut'] = isset( $_REQUEST["utm_term"] ) ? $_REQUEST["utm_term"] : '';
		$data['um'] = isset( $_REQUEST["utm_medium"] ) ? $_REQUEST["utm_medium"] : '';
		
		$serverResponse = $this->sendRequest($endpoint, $data);
			
		if( !isset($serverResponse['status']) || $serverResponse['status'] == 'error' )
			throw new Exception('Server error: '.$serverResponse['error']);
		
		return true;
	}
	
	/**
	 * Fetches landing page and prelander URLs from the server.
	 *
	 * @param $offerId integer
	 * @param $flowId integer
	 * @return array
	 */
	public function getLanderUrl( $offerId, $flowId ) {
		
		if( empty($this->apiId) )		
			throw new Exception("API ID not specified for the 'getLanderUrl' method.");

		if( empty($this->apiKey) )		
			throw new Exception("API key not specified for the 'getLanderUrl' method.");
		
		if( empty($offerId) || !is_int($offerId) )		
			throw new Exception("Incorrect offerId parameter specified for the 'getLanderUrl' method.");
	
		if( empty($flowId) || !is_int($flowId) )		
			throw new Exception("Incorrect flowId parameter specified for the 'getLanderUrl' method.");
	
		$endpoint = 'https://dashboard.profitpay.pro/api/wm/flows.json?id='.$this->apiId.'-'.$this->apiKey;
		$data['offer'] = $offerId;
		
		$serverResponse = $this->sendRequest($endpoint, $data);
		
		if( !isset($serverResponse[$flowId]) )
			throw new Exception("The server hasn't returned the flow ID to the 'getLanderUrl' method.");
	
		if( !isset($serverResponse[$flowId]['siteurl']) )
			throw new Exception("The server hasn't returned the site URL to the 'getLanderUrl' method.");
		
		return array(
					'site_url' => $serverResponse[$flowId]['siteurl'],
					'prelander_url' => $serverResponse[$flowId]['spaceurl']
					);		
	}
	
	/**
	 * Registers a page visitor.
	 *
	 * @param $landerUrl string
	 * @param $flowId integer
	 * @return
	 */
	public function logVisitor( $landerUrl, $flowId ) {
		
		if( empty($this->apiId) )		
			throw new Exception("API ID not specified for the 'logVisitor' method.");

		if( empty($this->apiKey) )		
			throw new Exception("API key not specified for the 'logVisitor' method.");
		
		if( empty($landerUrl) || !is_string($landerUrl) )		
			throw new Exception("Incorrect landerUrl parameter specified for the 'logVisitor' method.");
	
		if( empty($flowId) || !is_int($flowId) )		
			throw new Exception("Incorrect flowId parameter specified for the 'logVisitor' method.");
		
		$endpoint = 'https://'.$landerUrl.'/?flow='.$flowId.'&only=code&'.http_build_query($_GET);

		$response = $this->sendRequest($endpoint, array(), false);

		if( !$response )
			throw new Exception("Unable to log the visit.");
		
		return true;		
	}
	
	/**
	 * Fetches data from the server.
	 *
	 * @param $endpointUrl string
	 * @param $data array
	 * @return array
	 */
	private function sendRequest( $endpointUrl, $data, $decodeJson = true ) {

		$ch = curl_init($endpointUrl);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);		
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"]);
		curl_setopt($ch, CURLOPT_HTTPHEADER, [ "X-Real-IP: " . $this->real_ip ] );
		
		if( !empty($data) ) {
			
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		}
		
		$cookieFile = $this->cookieFile();
		
		if( !empty($cookieFile) ) {
			
			curl_setopt($ch, CURLOPT_COOKIEFILE, $cookieFile);
			curl_setopt($ch, CURLOPT_COOKIEJAR, $cookieFile);			
		}
		
		$result = curl_exec($ch);
		curl_close($ch);
	
		if( $result === false )
			return false;
			
		return $decodeJson ? json_decode($result, true) : $result;		
	}
	
	/**
	 * Create a cookie storage file and/or return its name.
	 *
	 * @return string
	 */
	private function cookieFile() {
		
		$userCookie = 'pp_user';
		$cookieStoreDir = dirname(__FILE__).'/cookies';
		$cookieFileName = isset($_COOKIE[$userCookie]) ? $_COOKIE[$userCookie] : 'usr_'.time().rand();
		
		clearstatcache();
		
		if( !file_exists( $cookieStoreDir ) )
			mkdir( $cookieStoreDir, 0766 );
		
		if( !file_exists( $cookieStoreDir.'/'.$cookieFileName.'.txt' ) ) {
			
			$f = fopen($cookieStoreDir.'/'.$cookieFileName.'.txt', 'w');
			
			if(!$f) return false;
			
			fclose($f);
			
			setcookie($userCookie, $cookieFileName, time()+60*60*24*365);
		}
		
		return $cookieStoreDir.'/'.$cookieFileName.'.txt';		
	}
	
// End of class	
}

?>
