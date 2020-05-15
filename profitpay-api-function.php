<?php

require 'class.profitpay_api.php';

function apiCall($apiId, $apiKey, $offer, $flow, $prelandClick = false) {
	
	global $tankyouPage, $urls, $logClicks;
	
	try {
		$api = new profitpayAPI($apiId, $apiKey);
	} catch (Exception $e) {
		echo "<script>window.addEventListener('load', ()=>{
			setTimeout(console.log, 20, 'Error: ".addslashes( $e->getMessage() )."');
			setTimeout(alert, 20, 'Error: ".addslashes( $e->getMessage() )."');
			});</script>\n";
	}
	
	if( $_SERVER['REQUEST_METHOD'] == 'POST') {
		
		foreach($_POST as $key => $value)
			$data[$key] = trim($value);
			
		$data['flow'] = $flow;
		$data['offer'] = $offer;
			
		try {
			$api->addLead($data);
			
			if( !empty($tankyouPage) ) {
				header('Location: '.$tankyouPage);
				exit;		
			}
			
		} catch (Exception $e) {
			echo "<script>window.addEventListener('load', ()=>{
			setTimeout(console.log, 20, 'Lead not submitted. ".addslashes( $e->getMessage() )."');
			setTimeout(alert, 20, 'Lead not submitted. ".addslashes( $e->getMessage() )."');
			});</script>\n";
		}		
	} elseif( isset($logClicks) && $logClicks ) {
		
		try {
			if( isset($api) && !isset($urls) )
				$urls = $api->getLanderUrl($offer, $flow);
		} catch (Exception $e) {
			echo "<script>window.addEventListener('load', ()=>{
			setTimeout(console.log, 20, 'Error: ".addslashes( $e->getMessage() )."');
			setTimeout(alert, 20, 'Error: ".addslashes( $e->getMessage() )."');
			});</script>\n";
		}
		
		try {			
			if( isset($urls) )
				if( $prelandClick && !empty($urls['prelander_url']) )
					$result = $api->logVisitor($urls['prelander_url'], $flow);
				elseif( !$prelandClick && !empty($urls['site_url']) )
					$result = $api->logVisitor($urls['site_url'], $flow);
		} catch (Exception $e) {
			echo "<script>window.addEventListener('load', ()=>{
			setTimeout(console.log, 20, 'Error: ".addslashes( $e->getMessage() )."');
			setTimeout(alert, 20, 'Error: ".addslashes( $e->getMessage() )."');
			});</script>\n";
		}
	}	
}

if( isset($apiId) &&
	isset($apiKey) &&
	isset($offer) &&
	isset($flow) ) {
		
		if( !isset($isPrelander) )
			$isPrelander = false;
		
		apiCall($apiId, $apiKey, $offer, $flow, $isPrelander);		
	}

?>
