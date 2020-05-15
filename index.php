<?php

/* 
	Инструкция по подключению API находится в файле readme.txt
*/

/**
 * API ID и API-ключ находятся здесь: https://dashboard.profitpay.pro/profile
 */	
$apiId = 0; // Укажите ваш API-ID в виде числа.
$apiKey = 'PASTE_YOUR_API_KEY_HERE'; // Укажите ваш API-ключ в виде строки.
$tankyouPage = 'success.php'; // Ссылка на страницу спасибо. При пустом значении, переадресации не будет.

/* Если вы устанавливаете код на прокладку, то откомментируйте нижнюю строку */
// $isPrelander = true;

/** 
 * Вам потребуется идентификатор потока и идентификатор офера, которые
 * находятся в вашем аккаунте. Для этого выберите в меню:
 * Потоки -> Потоки по офферам -> далее кнопка "Настройки" -> далее кнопка в самом низу страницы "Сгенерировать образец кода API для отправки лидов".
 * Из открывшегося окна, вам нужно скопировать значение первых двух параметров: flow и offer. 
 */
$flow = 0; // Укажите ID потока в виде числа.
$offer = 0; // Укажите ID офера в виде числа.

// Установите значение TRUE для регистрации кликов
$logClicks = false;

/*
	Эта опция работает при установке $logClicks = true;
	
	Укажите ссылки на посадочную страницу и/или прокладку прописанные 
	в созданном вами потоке. Атрибуция кликов будет происходить на эти ссылки.
	Ссылку на реальную посадочную страницу, которая на вашем домене, указывать нельзя.
	Не используйте префиксы "http://" и "https://" в начале ссылки и слеш "/" в конце.
	
	Ниже приведены примеры.
*/

$urls['site_url'] = 'r.profitpay.pro/vam-pomojem/ru';
$urls['prelander_url'] = '';

require 'profitpay-api-function.php';

?>
<head>
<title>A-cardin</title>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link type="text/css" href="./files/phone.css" rel="stylesheet" media="all">

<link rel='stylesheet' id='contact-form-7-css'  href='css/styles1748.css?ver=5.0.5' type='text/css' media='all' />
<link rel='stylesheet' id='monogo-sales-module-css'  href='css/order.mind87f.css?ver=4.9.9' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='css/alld87f.css?ver=4.9.9' type='text/css' media='all' />
<link rel='stylesheet' id='promotion-css'  href='css/promotion8a54.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='tooltip_css-css'  href='css/order-tooltip8a54.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='webpush-sale-pl-css'  href='css/webpush-sale-pld87f.css?ver=4.9.9' type='text/css' media='all' />
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta name="generator" content="WordPress 4.9.9" />

<meta name="viewport" content="width=device-width, initial-scale=1.0"> <link rel="icon" href="img/79d04412ac7af3ab13262602c42879b5.png" sizes="32x32" />
<link rel="icon" href="img/79d04412ac7af3ab13262602c42879b5.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="img/79d04412ac7af3ab13262602c42879b5.png" />
<meta name="msapplication-TileImage" content="img/79d04412ac7af3ab13262602c42879b5.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300italic,400,400italic,700,700italic&amp;subset=latin,latin-ext" type="text/css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300italic,400,400italic,700,700italic&amp;subset=latin,latin-ext" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;subset=latin-ext" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Neuton:300,400,400italic,700&amp;subset=latin,latin-ext" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="css/Lato-Heavy.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/carditens.css" type="text/css" rel="stylesheet">
	<link href="css/order-new.css" type="text/css" rel="stylesheet">
    <link href="css/style_form.css" type="text/css" rel="stylesheet">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/scripts.js"></script>
	<style>
	html {
		scroll-behavior: smooth;
	}
	
		#orderBottom{
            max-width: 760px;
            margin: 0 auto;
        }
        .monogo-form {
            margin-top: 0;
            padding-top: 2rem;
            padding-bottom: 2rem;
        }
	</style>

</head>
<body data-rsssl=1>

	<section class="block-1">
		<div class="container">
			<img class="logo" src="img/a-cardin.png" alt="A-cardin">

            <div class="clear"></div>

            <div class="left-top">

                <h1 class="bold">Za 28 dni udrożnisz tętnice i przywrócisz prawidłowe krążenie krwi – efekt potwierdzony niezależnymi testami medycznymi</h1>

                <div class="clear"></div>

                <h4>W 1 MIESIĄC</h4>
                <ul>
                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Cofniesz zmiany miażdżycowe</li>
                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Wzmocnisz serce</li>
                    <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> A następnie zredukujesz "ZŁY"<br class="hide-for-mobile" /> cholesterol o 74%</li>
                </ul>
                
            </div>

            <div class="right-top">
                <div class="top-img-prod">
                    <img src="img/a-cardin-1.png" alt="product"/>  
                </div>

                <div class="clear"></div>

                <div class="mg-a">
                    <a class="cta" href="#form-order">Zamów teraz</a>
                    <span>Odczuwalne efekty już po 7 dniach</span>
                </div>
                
            </div>
		</div>
	</section>

    <div class="clear"></div>

    <section class="block-2">
        <div class="container">

            <div class="clear"></div>

            <div class="frame-1">
                <img src="img/doctor.jpg" alt="doctor">
                <article>
                    <h2>Witaj</h2>
                    
                    <p>"Nazywam się prof. Zygmunt Jan Słowik i jestem naukowcem, specjalistą z zakresu biologii molekularnej. Na tej stronie chcę przedstawić Ci największe osiągnięcie mojego życia, za które otrzymałem już kilkanaście prestiżowych nagród, w tym Nagrodę Światowego Towarzystwa Walki z Miażdżycą. Opracowałem metodę, dzięki której każdy może naturalnie, bezpiecznie i oszczędnie oczyścić tętnice z blaszek miażdżycowych, złogów cholesterolu i toksyn, a w efekcie przywrócić w nich prawidłowe krążenie krwi i zmniejszyć ryzyko zawału serca o 185% i udaru mózgu o 168%. A to wszystko w 28 dni!”</p>
                    <p class="sign">
                        <span>prof. Zygmunt Jan Słowik</span>
                    </p>
                </article>
            </div>
        </div>
    </section>
    <section class="block-3">
        <div class="container">
            <h2>Opracowałem naturalną metodę, która oczyszcza tętnice z blaszek miażdżycowych, cholesterolu i toksyn i przywraca im 100% naturalnej przepustowości</h2>
            <div class="frame-2">
                <p>Dzięki niej – odgonisz widmo zawału i udaru mózgu, a także uchronisz swoje tętnice przed miażdżycą… Zapomnisz o tych wszystkich problemach, które dokuczają Ci z powodu złego krążenia. Przestaniesz męczyć się podczas najprostszych czynności, oraz wstydliwie ukrywać zadyszkę. <b>Wreszcie poczujesz pełnię swojej naturalnej sprawności i odetchniesz pełną piersią!</b></p>
                <img src="img/serce.png" alt="A-cardin">
            </div>
            
            <p>Dłuższe spacery przestaną stanowić problem, a zaczną sprawiać przyjemność. Uwolnisz się od uciążliwego bólu za mostkiem, zapomnisz o ciągłych skurczach i uczuciu ziębnących stóp i dłoni. Odzyskasz sprawność i poczucie bezpieczeństwa. A to wszystko dzięki temu, że udało mi się opracować formułę, która <b>rozpuszcza 99,7% blaszek miażdżycowych</b>, złogów cholesterolu i toksyn, które uniemożliwiają prawidłowe funkcjonowanie układu krwionośnego. Dzięki temu przywraca tętnicom 100% ich naturalnej przepustowości i pozwala im odżywić każdą komórkę naszego ciała. W efekcie zmniejsza ryzyko zawału serca o 185% i udaru mózgu aż o 168% oraz chroni tętnice przed miażdżycą. A to wszystko zaledwie w 28 dni! <b>Jak tego dokonałem?</b></p>
            
        </div>
    </section>
    <section class="block-4">
        <div class="container">
            <h2>Chciałem uwolnić moją żonę od wiszącego nad nią widma zawału</h2>
            <div class="frame-3">
                <p>Według najnowszych badań, <b>1 na 5 osób w Polsce cierpi na jakiś rodzaj niewydolności krążenia</b>. Osoby te często nie zdają sobie sprawy, że noszą w ciele tykającą bombę, która w każdej chwili może wybuchnąć. Ignorują zmęczenie, bóle i duszności – myślą, że to normalne, po prostu pojawia się z wiekiem. Jednak fakty są takie, że problemy z krążeniem to poważna przypadłość, która – lekceważona – może mieć tragiczne konsekwencje (zawał, udar, przewlekła miażdżyca kończyn dolnych). <b>Pierwszy zawał to poważny sygnał ostrzegawczy. Drugi przeżywa tylko 50% osób. Trzeci już tylko 3%...</b> Niestety, dotknęło to także moją żonę Dagmarę. 48-letnią kobietę, która nie pali, nie pije i w miarę zdrowo się odżywia! Na początku narzekała tylko na skurcze łydek i ziębnące stopy. Czasem łapała małą zadyszkę. „Nic wielkiego” – myślałem sobie. Ale później było już tylko coraz gorzej…</p>
                <img class="vein" src="img/1.jpg" alt="A-cardin">
            </div>
            <p>Dagmara zawsze była aktywna. Śmialiśmy się, że najbardziej męczy ją bezczynność. Lubiliśmy razem jeździć na rowerach, biegać, albo po prostu spacerować po lesie… Z czasem moja żona coraz szybciej się męczyła, po przejściu kilku kroków musiała przystawać, by złapać oddech. W końcu poszła na badania, które wykazały zaawansowaną, ciężką miażdżycę tętnicy wieńcowej. Lekarz zlecił żonie tonę proszków i powiedział, że ma się oszczędzać. Rowery zaczęły zbierać kurz w garażu, a ja przestałem poznawać moją żonę. Siedzenie w miejscu strasznie ją męczyło, całkowicie się zaniedbała. Przykro mi to mówić, ale miałem wrażenie, że z dnia na dzień coraz bardziej się poddaje…</p>
        </div>

        <div class="container">
            <h2>To zagrażało jej życiu!</h2>
            <p>Ale najgorsze nadeszło w dniu jej 50. urodzin. Kiedy otwierałem drzwi, w jednej ręce trzymając tort, a w drugiej kwiaty, czułem, że coś jest nie tak. Absolutną ciszę w domu przerywało tylko szczekanie psa. Nie mogłem go przywołać. Pobiegłem do kuchni, gdzie leżała Dagmara, trzymając się za serce. <b>Okazało się, że miała zawał. To był palec boży, bo gdybym przyszedł kilka minut później… Prawdopodobnie nie zastałbym żony przy życiu.</b></p>
            <p class="small-article">Nie mogłem w to uwierzyć. Całe życie sądziłem, że zdrowy tryb życia, dobra dieta i aktywność uchronią mnie i moich najbliższych przed problemami z krążeniem. Że zawał serca to coś, o co sami się prosimy. Jakże się myliłem… Wiedziałem, że nie mam wiele czasu. Drugi zawał przeżywa tylko 50% osób, trzeci już tylko 3%.</p>
        </div>

        <div class="container">
            <h2>Jak wynalazłem „antidotum na problemy z krążeniem"?</h2>
            <p>Musiałem pomóc mojej żonie pozbyć się miażdżycy, a tym samym <b>uchronić ją od pewnej śmierci</b>. Chciałem, aby nie musiała żyć w ciągłym strachu i mogła wreszcie wrócić do dawnej sprawności. Pomyślałem sobie wtedy: „Człowieku, przecież jesteś naukowcem! Biologię i chemię masz w małym palcu. Opracowałeś już wiele środków na różne schorzenia. Wymyśl coś na problemy z krążeniem!”. I wtedy rozpocząłem badania…</p>
            <p class="small-article">Przez rok prowadziłem intensywne badania laboratoryjne. Testowałem na mojej żonie różne połączenie substancji aktywnych. Zaznaczę tylko, że wszystkie były 100% naturalne i bezpieczne dla organizmu. Wiedza naukowa i odrobina szczęścia szybko zaowocowały - opracowałem <b>unikalną formułę kardio-cyrkulacyjną</b>. Natychmiast zgłosiłem ją do badań na szeroką skalę. Jej 98% skuteczność potwierdziły największe ośrodki badawcze w Europie i USA! Jeszcze w trakcie testów moja formuła w naturalny sposób uwolniła od problemów z krążeniem setki ochotników.</p>

            <div class="frame-4">
                <p><b>Moja żona, już po 1 tygodniu stosowania tej formuły przestała odczuwać ciągłe zmęczenie i pozbyła się skurczów łydek.</b> Cieszyła się, że nie musi już zakładać 3 par ciepłych skarpet do łóżka, bo w końcu nie marzły jej stopy. A to był dopiero początek. W kolejnym tygodniu czuła coraz więcej energii i nie łapała już co chwilę zadyszki. Pewnego dnia, gdy nie zastałem jej w domu, nieźle się wystraszyłem. Zajrzałem do garażu – nie było tam roweru! Gdy wróciła z długiej przejażdżki, powiedziała mi cała w skowronkach: „Janek, czuję się jak nowonarodzona. Jakby te przejścia z miażdżycą to był jakiś zły sen. <b>Ty wynalazłeś antidotum na problemy z krążeniem.</b> Pomyśl, ilu ludziom to pomoże. Tak bardzo Ci dziękuję.”</p>
                <img class="bike" src="img/imgimg.jpg" alt="A-cardin">
            </div>
            
            

            <h5>Oto, dlaczego moja metoda to doskonała alternatywa dla<br class="hide-for-mobile" /> tradycyjnych sposobów walki z niewydolnością układu krążenia:</h5>
        </div>
    </section>
    <section class="block-5">
        <div class="container">
            <div class="col">
                <i class="fa fa-check-square-o"></i>
                <p><b>zawiera tylko naturalne składniki aktywne</b> – dzięki temu nie podrażnia żołądka i nie powoduje skutków ubocznych</p>
            </div>
            <div class="col">
                <i class="fa fa-check-square-o"></i>
                <p><b>nie wymaga stosowania diety ani zwiększonej aktywności fizycznej</b> – jeśli chcesz ćwiczyć albo ograniczać spożycie niektórych produktów spożywczych to oczywiście możesz – ale absolutnie nie musisz</p>
            </div>
            <div class="col">
                <i class="fa fa-check-square-o"></i>
                <p><b>pozwala zaoszczędzić tysiące złotych</b> – zamiast trwonić je na pigułki pełne chemii albo nieskuteczne kuracje</p>
            </div>

            <div class="clear"></div>

            <div class="center-text button-order">
                <a class="cta" href="#form-order">Zamów teraz</a>
            </div>
                
        </div>
    </section>
    <section class="block-6">
        <div class="container">
            <h2>Formuła A-cardin polecana przez specjalistów</h2>
            <img src="img/doctor.jpg" alt="A-cardin">
            <p>Do tej pory jedynym sposobem na problemy z krążeniem było łykanie ton chemicznych substancji, które tylko wyciszały problem. W ostateczności można było zdecydować się na ryzykowną operację – o ile ktoś się w ogóle kwalifikował do zabiegu. Dziś, z pomocą mojej formuły kardio-cyrkulacyjnej można nie tylko w pełni naturalnie pozbyć się problemów z krążeniem, ale też całkowicie zapobiec ich nawrotom w przyszłości</p>

            <p>Pozwól, że wyjaśnię Ci pokrótce, skąd biorą się problemy z krążeniem. Proces ten jest bardzo skomplikowany, jednak postaram się wyjaśnić to językiem zrozumiałym dla osoby, która nie jest naukowcem.</p>

            <p>Otóż tętnice są jak przewody, dzięki którym krew dostarcza niezbędne do życia składniki do wszystkich komórek Twojego organizmu.</p>
            <p class="orange">Gdy te przewody są zatkane, części ciała zostają „odcięte” od dostaw energii i składników odżywczych i dosłownie obumierają</p>
            <p>Dzieje się tak, gdy na skutek rozmaitych czynników tętnice zostają albo zapchane, albo uszkodzone. Skąd to się bierze? Nawet mała ranka na ścianie tętnicy może zamienić się w skrzep krwi – czyli tak zwaną <b>blaszkę miażdżycową</b>. Z czasem blaszek jest coraz więcej i do akcji wkracza cholesterol. To taki rodzaj woskowej mazi, która stara się uleczyć stan zapalny w naszym organizmie i zaleczyć mikroranki. Ale zamiast tego zapycha tętnicę jeszcze bardziej. W efekcie krew krąży coraz słabiej i przestaje dostarczać wszystkim organom koniecznego do życia tlenu i pożywienia.</p>
            <p>Całe ciało zaczyna szwankować. Ale najgorsze, że <b>przylegające do ścian tętnic blaszki miażdżycowe są jak tykająca bomba</b>! Jeśli tętnica zapcha się w 100% wywołuje to zawał serca. Jeśli duży skrzep złożony z blaszek urwie się (np. pod wpływem stresu) może dotrzeć do mózgu i spowodować udar.</p>
            <p>Dlatego moim wyzwaniem było stworzyć formułę, która będzie miała radykalne działanie: udrożni tętnice, zregeneruje i wzmocni ich ścianki i uchroni je przed kolejnymi uszkodzeniami w przyszłości. Dokonałem tego! Opracowałem silnie udrażniająco-regenerującą formułę kardio-cyrkulacyjną. Nazwałem ją A-cardin.</p>
        </div>
    </section>
    <section class="block-7">
        <div class="container">
            <h2>Dlaczego moja formuła kardio-cyrkulacyjna okrzyknięta została „cudownym antidotum na problemy z krążeniem”?</h2>
            <h3>MA PONAD 98% SKUTECZNOŚCI W UDRAŻNIANIU I REGENEROWANIU TĘTNIC</h3>
            <ul>
                <li>
                    <img src="img/ba.png" alt="A-cardin">
                    <h4 style="text-align: right;">PRZED</h4>
                    <p>Zapchane, uszkodzone tętnice niezdolne do prawidłowego przepływu krwi</p>
                </li>
                <li>
                    <img src="img/ba-2.png" alt="A-cardin">
                    <h4 style="text-align: right;">PO</h4>
                    <p>Udrożnione i zregenerowane tętnice – prawidłowe krążenie w całym ciele</p>
                </li>
            </ul>
        </div>
        <div class="container article-1">
            <p>Do tej pory mogłoby się wydawać, że to cud. Jednak to fakt, który potwierdza przypadek mojej żony oraz 14 tys. osób, które już pozbyły się problemów z krążeniem dzięki mojej metodzie. Co więcej, <b>skuteczność formuły kardio-cyrkulacyjnej została dowiedziona ponad wszelką wątpliwość przez brytyjski ośrodek badawczy w Liverpoolu</b>. To odkrycie na skalę światową, które zdobyło uznanie i podziw wybitnych specjalistów ds. kardiologii.</p>
        </div>
        <div class="container">
            <h3>JEST W 100% BEZPIECZNA I DZIECINNIE PROSTA W STOSOWANIU</h3>
            <img src="img/specj.png" alt="A-cardin">
            <p class="article-2">Naturalne składniki czynią cuda – wystarczy, że nauka opracuje ich idealną kompozycję! Oto hasło, które przyświecało mi przy tworzeniu formuły udrażniającej tętnice. Kuracja zawiera <b>wyłącznie naturalne, bezpiecznie i super-skuteczne substancje</b>. Zawarłem je w formie łatwych do przyswojenia kapsułek, żeby każdy bez problemu mógł przeprowadzić kurację samodzielnie w domu. Wystarczy 2 razy dziennie wziąć po 1 kapsułce, żeby już za 28 dni na zawsze uwolnić się od problemów z krążeniem. Bez żadnych skutków ubocznych i niszczenia układu trawiennego.</p>
        </div>

        <div class="container">
            <div class="clear"></div>
            <h3>Odzyskasz sprawność, zapomnisz o bólu i będziesz dumny ze swojej energii i wigoru!</h3>
            <div class="clear"></div>
            <div class="center-text">
                <img class="img-2" src="img/img-2.jpg" alt="A-cardin">
            </div>
        </div>
    </section>
    <section class="block-8-1">
        <h2>Dlatego, jeśli chcesz BEZ operacji:</h2>
    </section>
    <section class="block-8">
        <div class="container">
            <article>
                
                <ul>
                    <li><b>pozbyć się 99,7% blaszek miażdżycowych, złogów cholesterolu i toksyn</b> - w 28 dni;</li>
                    <li><b>przywrócić tętnicom 100% ich naturalnej przepustowości</b> – i dotlenić każdą komórkę swojego ciała;</li>
                    <li><b>zmniejszyć ryzyko zawału serca o 185% i udaru mózgu o 168%;</b></li>
                    <li>raz na zawsze <b>wyeliminować uczucie marznących stóp i dłoni</b> i zapomnieć o bólu w okolicach mostka;</li>
                    <li>pozbyć się 98,9% szpecących i bolesnych żylaków;</li>
                    <li><b>odzyskać pełnię sił witalnych</b> i sprawność 20-25 latka;</li>
                    <li>a dzięki temu <b>na nowo cieszyć się życiem!</b></li>
                </ul>
            </article>
        </div>
    </section>
    <section class="block-9">
        <div class="container">
            <h3>"Czułam, że coś jest nie tak z moimi nogami. Miałam obrzęki, bóle i najgorsze – coraz słabsze czucie w stopach. Po 2 tygodniach stosowania A-cardin miałam już niższy cholesterol, a po miesiącu badania wykazały, że skrzepy zostały rozbite, a żyły i tętnice z powrotem odzyskały drożność. Z całego serca polecam!"</h3>

            <div class="clear"></div>

            <div class="center-text button-order">
                <a class="cta" href="#form-order">Zamów teraz</a>
            </div>

            <h2>Osoby, które zaufały A-cardin dzielą się swoimi rezultatami:</h2>
        </div>
    </section>
    <section class="block-10">
        <div class="container">
            <ul>
                <li>
                    <h4>Wystarczyło 19 dni – uczucie duszności i ciężkości całkowicie minęło</h4>
                    <img src="img/meta1.jpg" alt="A-cardin">
                    <p>„Problemy z nogami od pewnego czasu były dla mnie przeszkodą nie do pokonania. Ciężko było chodzić po mieszkaniu, a co dopiero pracować! Do tego doszło puchnięcie w nogach, bóle w mostku i nadciśnienie. Co tu dużo mówić – groził mi zawał. Bardziej bałem się jednak szpitala… Na szczęście znajomy lekarz polecił mi A-cardin i co się okazało: po niespełna 20 dniach wszystkie dolegliwości ustąpiły! Dziś czuję się świetnie – chodzę normalnie, a nawet biegam i co najważniejsze, czuje się nadzwyczaj lekko.”</p>
                    <p class="sign">
                        <span>Waldemar Zarzycki, 65 lat</span>
                        Zgierz                    </p>
                </li>
                <li>
                    <h4>Bóle minęły jak ręką odjął</h4>
                    <img src="img/meta2.jpg" alt="A-cardin">
                    <p>"Wysoki cholesterol towarzyszył mi od wielu lat. Nigdy się tym za bardzo nie przejmowałem, jednak gdy zaczęły się problemy z nogami i bóle w okolicach mostka, nieco się przestraszyłem. Zdiagnozowano przewlekłe niedokrwienie kończyn. Stwierdziłem, że nie czas na umieranie. Polecono mi A-cardin i przyznam szczerze, że to był strzał w dziesiątkę. Dolegliwości ustąpiły już po kilkunastu dniach. Przypominam sobie, że nawet mój lekarz był zaskoczony, jak spojrzał na wyniki moich badań po kuracji. Do dziś stosuję te kapsułki profilaktycznie i wszystko jest w jak najlepszym porządku."</p>
                    <p class="sign">
                        <span>Józef Domagała, 60 lat</span>
                        Kędzierzyn-Koźle                    </p>
                </li>
                <li>
                    <h4>Zmiana diety to nie wszystko</h4>
                    <img src="img/meta3.jpg" alt="A-cardin">
                    <p>„Czuję się jeszcze całkiem młodo, w miarę witalnie i nie ukrywam, że wyniki badania cholesterolu były dla mnie sporym zaskoczeniem. Prawie 350 mg/dl cholesterolu całkowitego! Przestraszyłam się bardzo. Tym bardziej, że u mnie w rodzinie wiele osób ma z tym problem. Trzeba było się za siebie wziąć. Włączyłam do diety A-cardin i co? Efekty były bardzo dobre już po 2 tygodniach kuracji. Cholesterol spadł poniżej 150 mg/dl i wciąż utrzymuje się na tym poziomie.”</p>
                    <p class="sign">
                        <span>Elżbieta Kubicka, 63 lata</span>
                        Sochaczew                    </p>
                </li>
                <li>
                    <h4>Cholesterol pod całkowitą kontrolą</h4>
                    <img src="img/meta4.jpg" alt="A-cardin">
                    <p>„Wszyscy w mojej rodzinie mieli lub mają problem z wysokim cholesterolem. W niektórych przypadkach było to lekceważone i potem źle się kończyło… Ja postanowiłem zadbać o siebie już teraz. Tym bardziej, że ostatnie badania wykazały 285 mg/dl cholesterolu całkowitego - przy moim siedzącym i ubogim w ruch trybie życia to nie przelewki. Zacząłem stosować A-cardin i po 3 tygodniach widać znaczącą poprawę. Patrzę na wyniki badań i trudno mi uwierzyć, ale tak jest: cholesterol się unormował i obecnie wynosi dużo poniżej 200 mg/dl.”</p>
                    <p class="sign">
                        <span>Henryk Blacharz, 66 lat</span>
                        Wejherowo                    </p>
                    
            </ul>
        </div>
    </section>
    <section class="block-11">
        <div class="container">
            <h2>Jak mógłbyś przegapić tę szansę na uwolnienie się od problemów z krążeniem?</h2>
            <p>Możesz dalej męczyć się z powodu skurczów, żylaków i uczucia zimnych stóp i dłoni. Możesz także nadal tolerować zadyszkę, ciągłe uczucie zmęczenia i ból w piersiach oraz ignorować ryzyko, które za sobą niosą… Ale po co, skoro gwarantuję Ci <b>naturalny, prosty i oszczędny</b> sposób na zlikwidowanie problemów z krążeniem raz na zawsze? Wystarczy zaledwie 28 dni kuracji, żebyś dołączył do 14 tys. zadowolonych użytkowników A-cardin, którzy już zapomnieli o uczuciu zmęczenia, zadyszce i żylakach i odzyskali 100% dawnej sprawności.</p>
        </div>
    </section>
    <section class="block-11">
        <div class="container">
            <h2>Nic nie ryzykujesz!</h2>
            <p>Stosując A-cardin udrożnisz tętnice w 28 dni. Dodatkowo nic nie ryzykujesz! Jako osiągnięcie na skalę światową moja formuła otrzymała <b>prestiżową gwarancję</b> potrójnej satysfakcji: oryginalności, jakości oraz zadowolenia.</p>
        </div>
    </section>
    
    <section class="block-14">
        <div class="container">
            <div class="col">
                <h4>Gwarancja oryginalności</h4>
                <p>W kuracji kardio-cyrkulacyjnej A-cardin zamknięto formułę na bazie najsilniejszych substancji udrożniających tętnice i wzmacniających ich ścianki. Jej skuteczność w likwidowaniu blaszek miażdżycowych potwierdzają testy kliniczne. To jedyna tak innowacyjna formuła. Dlatego możesz mieć pewność, że trafi do Ciebie oryginalny produkt, dostępny jedynie za pośrednictwem tej strony.</p>
            </div>
            <div class="col">
                <h4>Gwarancja jakości</h4>
                <p>Ze względu na zaawansowany proces wytwarzania formuły kardio-cyrkulacyjnej, A-cardin spełnia najwyższe standardy jakości. W trosce o Twoje zdrowie i dobre samopoczucie, stężenie substancji aktywnych zostało dobrane tak, aby kuracja była całkowicie bezpieczna. Wszystko po to, żeby jej efekty w 100% spełniły Twoje oczekiwania.</p>
            </div>
            <div class="col">
                <h4>Gwarancja zadowolenia</h4>
                <p>Liczne testy laboratoryjne i konsumenckie potwierdzają najwyższą skuteczność A-cardin. Na podstawie tych wyników kuracja zdobyła uznanie specjalistów z całego świata, którzy polecają ją wszystkim, którzy zwracają się do nich po pomoc. Są oni przekonani, że w 28 dni całkowicie udrożnisz tętnice i zablokujesz powstawanie blaszek miażdżycowych w przyszłości.</p>
            </div>
        </div>
    </section>
    <section class="block-15">
        <div class="container">
            <h5>Gwarancja Skuteczności</h5>
            <p>Jesteśmy całkowicie pewni skuteczności preparatu A-cardin - dlatego bierzemy ryzyko na siebie i dajemy Ci</p>
            <span>100% na gwarancję zwrotu pieniędzy</span>
            <p>Oznacza to, że możesz w każdej chwili zwrócić produkt, jeśli z jakiegoś powodu uznasz, że nie spełnił Twoich oczekiwań. Bez małych kruczków, bez podania powodu.</p>
        </div>
    </section>
    <section class="block-12">
        <div class="container">
            <h2>Udrożnij tętnice w 28 dni z A-cardin naturalnie, łatwo i oszczędnie</h2>
            <p>Wielkie koncerny farmaceutyczne z USA i Japonii dosłownie biją się o patent na moją formułę kardio-cyrkulacyjną. Gdy już odsprzedam patent, kuracja będzie dostępna na całym świecie, ale na pewno bardzo droga.</p>
            <p>Zanim do tego dojdzie, <b>postanowiłem najpierw udostępnić ją w Polsce za udział w klubie rabatowym – z dofinansowaniem 67% taniej</b>. Wszystko po to, żeby pomóc przywrócić prawidłowe krążenie jak największej liczbie osób w moim ojczystym kraju.</p>
            <p>Dlatego zachęcam Cię do skorzystania z tej szansy! Zamówienie klubu rabatowego jest proste. Nie musisz wysyłać żadnych pieniędzy przez internet, ani płacić kartą, żeby otrzymać A-cardin. <b>Wystarczy, że wypełnisz formularz w 2 minuty</b> i już po kilku dniach otrzymasz przesyłkę, którą opłacisz wygodnie u kuriera lub listonosza.</p>
            <p>Dziękuję Ci za czas, który przeznaczyłeś na przeczytanie mojej wiadomości. Życzę Ci dużo szczęścia w Twoim nowym życiu wolnym od problemów z krążeniem i strachu przed zawałem, udarem i miażdżycą. Już za 28 dni w ogóle zapomnisz, że kiedykolwiek dotyczył Cię ten problem!</p>
        </div>
    </section>
    
    <section class="block-16">
        <div class="container">

            <p>To najprostsza oferta pod słońcem, w której płacisz tylko za wyniki, a nie obietnice. Aby z niej skorzystać, wystarczy dołączyć do klubu rabatowego i wypełnić formularz rezerwacyjny. Nic nie ryzykujesz, ponieważ to ja pokrywam koszty przesyłki.</p>
            <p>Pamiętaj, ta oferta jest wolna od ryzyka. Dlatego jeśli akurat w Twoim przypadku kuracja nie przyniesie efektów zagwarantowanych w testach – koniecznie skontaktuj się ze mną. Dołożę wszelkich starań, aby jak najszybciej rozwiązać problem i pomóc Ci osiągnąć upragnione rezultaty.</p>
            <p>Jeśli mimo tego nie będziesz w 100% usatysfakcjonowany, po prostu wyślij puste opakowanie po produkcie na adres zwrotny, a w odpowiedzi otrzymasz zwrot pieniędzy – bez zadawania pytań.</p>
            <p>Czy może być jakaś bezpieczniejsza decyzja? Zapasy są bardzo ograniczone. Oferta próbna szybko się nie powtórzy, dlatego <b>DZIAŁAJ TERAZ!</b></p>

            <h2>A-cardin na problem z cholesterolem LDL<br /> oraz miażdżycą</h2>

            <a name="form-order"></a>
            <div class="row">
                <div class="left-col-order">
                    <div class="order-image center-text">
                        <img src="img/a-cardin-1.png" alt="a-cardin" />
                    </div> 
                </div>

                <div class="right-col-order">
                    <div class="formularz">
                                <div class="form-style center">
                                    <form method="post" id="formularz1">
									
								
                                        <select id='country' name='country' onchange="funkcja_1()">
                                            <option value="AL" id="+355">Albania</option>
                                            <option value="AD" id="+376">Andora</option>
                                            <option value="AT" id="+43">Austria</option>                        
                                            <option value="BE" id="+32">Belgia</option>
                                            <option value="BY" id="+375">Białoruś</option>
                                            <option value="BA" id="+387">Bośnia i Hercegowina</option>
                                            <option value="BG" id="+359">Bułgaria</option>
                                            <option value="HR" id="+385">Chorwacja</option>
                                            <option value="ME" id="+382">Czarnogóra</option>
                                            <option value="CZ" id="+420">Republika Czeska</option>
                                            <option value="DK" id="+45"> Dania</option>
                                            <option value="EE" id="+372"> Estonia</option>
                                            <option value="FI" id="+358"> Finlandia</option>
                                            <option value="FR" id="+33"> Francja</option>
                                            <option value="GR" id="+30"> Grecja</option>
                                            <option value="ES" id="+34"> Hiszpania</option>
                                            <option value="NL" id="+31"> Holandia</option>
                                            <option value="IE" id="+353"> Irlandia</option>
                                            <option value="IS" id="+354"> Islandia</option>
                                            <option value="CA" id="+1"> Kanada</option>
                                            <option value="KZ" id="+7"> Kazachstan</option>
                                            <option value="LI" id="+423"> Liechtenstein</option>
                                            <option value="LT" id="+370"> Litwa</option>
                                            <option value="LU" id="+352"> Luksemburg</option>
                                            <option value="LV" id="+371"> Łotwa</option>
                                            <option value="MK" id="+389"> Macedonia</option>
                                            <option value="MT" id="+356"> Malta</option>
                                            <option value="MD" id="+373"> Mołdawia</option>
                                            <option value="MC" id="+377"> Monako</option>
                                            <option value="DE" id="+49"> Niemcy</option>
                                            <option value="PL" id="+48" selected="selected">Polska</option>
                                            <option value="PT" id="+351"> Portugalia</option>
                                            <option value="RU" id="+7"> Rosja</option>
                                            <option value="RO" id="+40"> Rumunia</option>
                                            <option value="SM" id="+378"> San Marino</option>
                                            <option value="XS" id="+381"> Serbia</option>
                                            <option value="SK" id="+421"> Słowacja</option>
                                            <option value="SI" id="+386"> Słowenia</option>
                                            <option value="US" id="+1"> Stany Zjedn. Ameryki</option>
                                            <option value="CH" id="+41"> Szwajcaria</option>
                                            <option value="SE" id="+46"> Szwecja</option>
                                            <option value="TR" id="+90"> Turcja</option>
                                            <option value="UA" id="+380"> Ukraina</option>
                                            <option value="VA" id="+39"> Watykan</option>
                                            <option value="HU" id="+36"> Węgry</option>
                                            <option value="GB" id="+44"> Wielka Brytania</option>
                                            <option value="IT" id="+39"> Włochy</option>
                                            <option value="NO" id="+47"> Norwegia</option>
                                            <option value="CY" id="+357"> Cypr</option>
                                        </select>
                                    
                                
                                    <input type='text' id="name" style="" placeholder="Imię i nazwisko" name='name' required>
                                
                                    <input type='text' name='country_phone' id='country_phone' value="+48">
                                    <input  id="phone" type='text' placeholder="Telefon" name='phone' required>

                                    <div class="clear"></div>
                                    <div class="button" id="btn-order" onclick="check(this.parentElement)">
                                        <h3>Zamawiam</h3>
                                    </div>
                               
                                </form>
                            </div>
                        </div>
                        <div class="article-text">
                            <h2 class="center-text bold"><span class="old-price">299 PLN</span>&nbsp;&nbsp;&nbsp;&nbsp;137 PLN</h2>
                        </div>
                    </div>
                <div class="clear"></div>
            <p class="lead">Zamów dzisiaj i oszczędź 162 PLN oraz otrzymaj darmową wysyłkę.</p>
        </div>
    </section>
    

    <footer>
        <div class="clear"></div>
        <div class="article-2 center-text container">
            <p>W trosce o bezpieczeństwo oraz zapewnienie usług na najwyższym poziomie właściciel strony zastrzega sobie prawo do wprowadzenia zmian zawartych w polityce prywatności. Działanie to ma na celu zachowanie pełnej anonimowości klientów, dlatego w dbałości o ich satysfakcję ze świadczonych usług zamieszczone imiona i nazwiska zostały zmienione. Jednocześnie właściciel strony zaznacza, że wszelkie podobieństwo do postaci rzeczywistych jest przypadkowe i nie zostało wykorzystane w sposób celowy.</p>
        </div>
    </footer>

</body>
</html>               