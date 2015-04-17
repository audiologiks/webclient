<?php
// @start snippet
include 'twilio-php-latest/Services/Twilio/Capability.php';

$accountSid = 'xxxxxxxx';
$authToken  = 'xxxxxxxxx';

$token = new Services_Twilio_Capability($accountSid, $authToken);
$token->allowClientOutgoing('xxxxxxxxxxx');
$token->allowClientIncoming("xxxxxxxxxxx");
// @end snippet
?>
	<!-- Misawa Directory - Phone numbers for businesses in the area without connection to mysql db -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>**** Name of Client ****</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Chivo:400,900" rel="stylesheet" />
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
 <!-- New Relic Tracking -->
<script type="text/javascript">
window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o?o:e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({QJf3ax:[function(t,e){function n(t){function e(e,n,a){t&&t(e,n,a),a||(a={});for(var c=s(e),f=c.length,u=i(a,o,r),d=0;f>d;d++)c[d].apply(u,n);return u}function a(t,e){f[t]=s(t).concat(e)}function s(t){return f[t]||[]}function c(){return n(e)}var f={};return{on:a,emit:e,create:c,listeners:s,_events:f}}function r(){return{}}var o="nr@context",i=t("gos");e.exports=n()},{gos:"7eSDFh"}],ee:[function(t,e){e.exports=t("QJf3ax")},{}],3:[function(t){function e(t,e,n,i,s){try{c?c-=1:r("err",[s||new UncaughtException(t,e,n)])}catch(f){try{r("ierr",[f,(new Date).getTime(),!0])}catch(u){}}return"function"==typeof a?a.apply(this,o(arguments)):!1}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function n(t){r("err",[t,(new Date).getTime()])}var r=t("handle"),o=t(5),i=t("ee"),a=window.onerror,s=!1,c=0;t("loader").features.err=!0,window.onerror=e,NREUM.noticeError=n;try{throw new Error}catch(f){"stack"in f&&(t(1),t(4),"addEventListener"in window&&t(2),window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&t(3),s=!0)}i.on("fn-start",function(){s&&(c+=1)}),i.on("fn-err",function(t,e,r){s&&(this.thrown=!0,n(r))}),i.on("fn-end",function(){s&&!this.thrown&&c>0&&(c-=1)}),i.on("internal-error",function(t){r("ierr",[t,(new Date).getTime(),!0])})},{1:8,2:5,3:9,4:7,5:20,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],4:[function(t){function e(){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var n=t("ee"),r=t("handle"),o=t(2);t("loader").features.stn=!0,t(1),n.on("fn-start",function(t){var e=t[0];e instanceof Event&&(this.bstStart=Date.now())}),n.on("fn-end",function(t,e){var n=t[0];n instanceof Event&&r("bst",[n,e,this.bstStart,Date.now()])}),o.on("fn-start",function(t,e,n){this.bstStart=Date.now(),this.bstType=n}),o.on("fn-end",function(t,e){r("bstTimer",[e,this.bstStart,Date.now(),this.bstType])}),n.on("pushState-start",function(){this.time=Date.now(),this.startPath=location.pathname+location.hash}),n.on("pushState-end",function(){r("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),"addEventListener"in window.performance&&(window.performance.addEventListener("webkitresourcetimingbufferfull",function(){r("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.webkitClearResourceTimings()},!1),window.performance.addEventListener("resourcetimingbufferfull",function(){r("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.clearResourceTimings()},!1)),document.addEventListener("scroll",e,!1),document.addEventListener("keypress",e,!1),document.addEventListener("click",e,!1)}},{1:6,2:8,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],5:[function(t,e){function n(t){i.inPlace(t,["addEventListener","removeEventListener"],"-",r)}function r(t){return t[1]}var o=(t(1),t("ee").create()),i=t(2)(o),a=t("gos");if(e.exports=o,n(window),"getPrototypeOf"in Object){for(var s=document;s&&!s.hasOwnProperty("addEventListener");)s=Object.getPrototypeOf(s);s&&n(s);for(var c=XMLHttpRequest.prototype;c&&!c.hasOwnProperty("addEventListener");)c=Object.getPrototypeOf(c);c&&n(c)}else XMLHttpRequest.prototype.hasOwnProperty("addEventListener")&&n(XMLHttpRequest.prototype);o.on("addEventListener-start",function(t){if(t[1]){var e=t[1];"function"==typeof e?this.wrapped=t[1]=a(e,"nr@wrapped",function(){return i(e,"fn-",null,e.name||"anonymous")}):"function"==typeof e.handleEvent&&i.inPlace(e,["handleEvent"],"fn-")}}),o.on("removeEventListener-start",function(t){var e=this.wrapped;e&&(t[1]=e)})},{1:20,2:21,ee:"QJf3ax",gos:"7eSDFh"}],6:[function(t,e){var n=(t(2),t("ee").create()),r=t(1)(n);e.exports=n,r.inPlace(window.history,["pushState"],"-")},{1:21,2:20,ee:"QJf3ax"}],7:[function(t,e){var n=(t(2),t("ee").create()),r=t(1)(n);e.exports=n,r.inPlace(window,["requestAnimationFrame","mozRequestAnimationFrame","webkitRequestAnimationFrame","msRequestAnimationFrame"],"raf-"),n.on("raf-start",function(t){t[0]=r(t[0],"fn-")})},{1:21,2:20,ee:"QJf3ax"}],8:[function(t,e){function n(t,e,n){var r=t[0];"string"==typeof r&&(r=new Function(r)),t[0]=o(r,"fn-",null,n)}var r=(t(2),t("ee").create()),o=t(1)(r);e.exports=r,o.inPlace(window,["setTimeout","setInterval","setImmediate"],"setTimer-"),r.on("setTimer-start",n)},{1:21,2:20,ee:"QJf3ax"}],9:[function(t,e){function n(){c.inPlace(this,d,"fn-")}function r(t,e){c.inPlace(e,["onreadystatechange"],"fn-")}function o(t,e){return e}var i=t("ee").create(),a=t(1),s=t(2),c=s(i),f=s(a),u=window.XMLHttpRequest,d=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"];e.exports=i,window.XMLHttpRequest=function(t){var e=new u(t);try{i.emit("new-xhr",[],e),f.inPlace(e,["addEventListener","removeEventListener"],"-",function(t,e){return e}),e.addEventListener("readystatechange",n,!1)}catch(r){try{i.emit("internal-error",[r])}catch(o){}}return e},window.XMLHttpRequest.prototype=u.prototype,c.inPlace(XMLHttpRequest.prototype,["open","send"],"-xhr-",o),i.on("send-xhr-start",r),i.on("open-xhr-start",r)},{1:5,2:21,ee:"QJf3ax"}],10:[function(t){function e(t){if("string"==typeof t&&t.length)return t.length;if("object"!=typeof t)return void 0;if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if("undefined"!=typeof FormData&&t instanceof FormData)return void 0;try{return JSON.stringify(t).length}catch(e){return void 0}}function n(t){var n=this.params,r=this.metrics;if(!this.ended){this.ended=!0;for(var i=0;c>i;i++)t.removeEventListener(s[i],this.listener,!1);if(!n.aborted){if(r.duration=(new Date).getTime()-this.startTime,4===t.readyState){n.status=t.status;var a=t.responseType,f="arraybuffer"===a||"blob"===a||"json"===a?t.response:t.responseText,u=e(f);if(u&&(r.rxSize=u),this.sameOrigin){var d=t.getResponseHeader("X-NewRelic-App-Data");d&&(n.cat=d.split(", ").pop())}}else n.status=0;r.cbTime=this.cbTime,o("xhr",[n,r,this.startTime])}}}function r(t,e){var n=i(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}if(window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent)){t("loader").features.xhr=!0;var o=t("handle"),i=t(2),a=t("ee"),s=["load","error","abort","timeout"],c=s.length,f=t(1);t(4),t(3),a.on("new-xhr",function(){this.totalCbs=0,this.called=0,this.cbTime=0,this.end=n,this.ended=!1,this.xhrGuids={}}),a.on("open-xhr-start",function(t){this.params={method:t[0]},r(this,t[1]),this.metrics={}}),a.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),a.on("send-xhr-start",function(t,n){var r=this.metrics,o=t[0],i=this;if(r&&o){var f=e(o);f&&(r.txSize=f)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&&(i.params.aborted=!0),("load"!==t.type||i.called===i.totalCbs&&(i.onloadCalled||"function"!=typeof n.onload))&&i.end(n)}catch(e){try{a.emit("internal-error",[e])}catch(r){}}};for(var u=0;c>u;u++)n.addEventListener(s[u],this.listener,!1)}),a.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),a.on("xhr-load-added",function(t,e){var n=""+f(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),a.on("xhr-load-removed",function(t,e){var n=""+f(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),a.on("addEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-added",[t[1],t[2]],e)}),a.on("removeEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-removed",[t[1],t[2]],e)}),a.on("fn-start",function(t,e,n){e instanceof XMLHttpRequest&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),a.on("fn-end",function(t,e){this.xhrCbStart&&a.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}},{1:"XL7HBI",2:11,3:9,4:5,ee:"QJf3ax",handle:"D5DuLP",loader:"G9z0Bl"}],11:[function(t,e){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");return!r.port&&o[1]&&(r.port=o[1].split("/")[0].split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname),r.sameOrigin=!e.hostname||e.hostname===document.domain&&e.port===n.port&&e.protocol===n.protocol,r}},{}],gos:[function(t,e){e.exports=t("7eSDFh")},{}],"7eSDFh":[function(t,e){function n(t,e,n){if(r.call(t,e))return t[e];var o=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return t[e]=o,o}var r=Object.prototype.hasOwnProperty;e.exports=n},{}],D5DuLP:[function(t,e){function n(t,e,n){return r.listeners(t).length?r.emit(t,e,n):(o[t]||(o[t]=[]),void o[t].push(e))}var r=t("ee").create(),o={};e.exports=n,n.ee=r,r.q=o},{ee:"QJf3ax"}],handle:[function(t,e){e.exports=t("D5DuLP")},{}],XL7HBI:[function(t,e){function n(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:i(t,o,function(){return r++})}var r=1,o="nr@id",i=t("gos");e.exports=n},{gos:"7eSDFh"}],id:[function(t,e){e.exports=t("XL7HBI")},{}],loader:[function(t,e){e.exports=t("G9z0Bl")},{}],G9z0Bl:[function(t,e){function n(){var t=p.info=NREUM.info;if(t&&t.agent&&t.licenseKey&&t.applicationID&&c&&c.body){p.proto="https"===d.split(":")[0]||t.sslForHttp?"https://":"http://",a("mark",["onload",i()]);var e=c.createElement("script");e.src=p.proto+t.agent,c.body.appendChild(e)}}function r(){"complete"===c.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=t("handle"),s=window,c=s.document,f="addEventListener",u="attachEvent",d=(""+location).split("?")[0],p=e.exports={offset:i(),origin:d,features:{}};c[f]?(c[f]("DOMContentLoaded",o,!1),s[f]("load",n,!1)):(c[u]("onreadystatechange",r),s[u]("onload",n)),a("mark",["firstbyte",i()])},{handle:"D5DuLP"}],20:[function(t,e){function n(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(0>o?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=n},{}],21:[function(t,e){function n(t){return!(t&&"function"==typeof t&&t.apply&&!t[i])}var r=t("ee"),o=t(1),i="nr@wrapper",a=Object.prototype.hasOwnProperty;e.exports=function(t){function e(t,e,r,a){function nrWrapper(){var n,i,s,f;try{i=this,n=o(arguments),s=r&&r(n,i)||{}}catch(d){u([d,"",[n,i,a],s])}c(e+"start",[n,i,a],s);try{return f=t.apply(i,n)}catch(p){throw c(e+"err",[n,i,p],s),p}finally{c(e+"end",[n,i,f],s)}}return n(t)?t:(e||(e=""),nrWrapper[i]=!0,f(t,nrWrapper),nrWrapper)}function s(t,r,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<r.length;c++)s=r[c],a=t[s],n(a)||(t[s]=e(a,f?s+o:o,i,s,t))}function c(e,n,r){try{t.emit(e,n,r)}catch(o){u([o,e,n,r])}}function f(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){u([r])}for(var o in t)a.call(t,o)&&(e[o]=t[o]);return e}function u(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=r),e.inPlace=s,e.flag=i,e}},{1:20,ee:"QJf3ax"}]},{},["G9z0Bl",3,10,4]);
;NREUM.info={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",licenseKey:"xxxxxxxx",applicationID:"xxxxxxxx",sa:1,agent:"js-agent.newrelic.com/nr-476.min.js"}
</script>
 <!-- end NR tracking -->
</head>
<body>
	<!-- Google Tag Manager -->
<noscript><iframe src="xxxxxxxx"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','xxxxxxx');</script>
<!-- End Google Tag Manager -->
	<!-- Google Analytics -->
	<?php include_once("analyticstracking.php") ?>
<!-- start header -->
<div id="header">
</div>
<div id="logo">
	<h1><font color="white">
Audiologiks: Misawa Directory</font></h1>
		</div>
<!-- end header -->
<hr />
<!-- start page -->
<div id="page">
	<div id="menu">
	<ul>
			<li class="current_page_item">
				<a href="http://www.audiologiks.com/numerology/index.php">Home</a></li>
						<li><a title="Bars, Beauty & Massage, Churches, Photo Services, Electronics, Real Estate" target="_blank" href="dir-2.php">Bars-Real Estate</a></li>
			<li><a title="Restaurants, Rent-a-Car, Shopping, Travel Agencies" target="_blank" href="dir-3.php">Restaurants-Travel Agencies</a></li>
						<li><a title="Sign-up for Audiologiks Click-2-Call" target="_blank" href="http://www.audiologiks.com/signup">Sign-up</a></li>
		</ul>
	</div>
	<!-- start content -->
	
		<br>
			<a href="http://www.audiologiks.com/mobile_vm"><img src="http://www.audiologiks.com/numerology/images/Voicemail.jpg"></a>
	<div id="content">
		<div class="post">
			<h1 class="title"><a href="#">Click2Call</a></h1>
			<p class="meta"><small>Brought to you by<a href="http://www.audiologiks.com">Audiologiks</a></small></p>
			<div class="entry">

				<h2>Click to Dial Audiologiks</h2>
<p> To reach any company in the directory, click the Directory button, and then click the business you would like to reach. </p>
				<ul>
			<title>
			Click to Call
		</title>
		<!-- @start snippet -->
<script type="text/javascript" src="//static.twilio.com/libs/twiliojs/1.1/twilio.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>

		<script type="text/javascript">
	

		$(document).ready(function(){

			Twilio.Device.setup("<?php echo $token->generateToken();?>");
			var connection=null;
			
			$("#call").click(function() {  
				params = { "tocall" : $('#tocall').val()};
				connection = Twilio.Device.connect(params);
			});
			$("#hangup").click(function() {  
				Twilio.Device.disconnectAll();
			});

			Twilio.Device.ready(function (device) {
				$('#status').text('Ready to start call');
			});

			Twilio.Device.incoming(function (conn) {
				if (confirm('Accept incoming call from ' + conn.parameters.From + '?')){
					connection=conn;
				    conn.accept();
				}
			});

			Twilio.Device.offline(function (device) {
				$('#status').text('Offline');
			});
			    
			    function call() {
        // get the phone number or client to connect the call to
        params = {"PhoneNumber": $("#number").val()};
        Twilio.Device.connect(params);
      };

			Twilio.Device.error(function (error) {
				$('#status').text(error);
			});

			Twilio.Device.connect(function (conn) {
				$('#status').text("Successfully established call");
				toggleCallStatus();
			});

			Twilio.Device.disconnect(function (conn) {
				$('#status').text("Call ended");
				toggleCallStatus();
			});
			
			function toggleCallStatus(){
				$('#call').toggle();
				$('#hangup').toggle();
				$('#dialpad').toggle();
			}

			$.each(['0','1','2','3','4','5','6','7','8','9','star','pound', '50', '123456', '51','60','61','52','53','54','55','56','57','58','59', '70','71','62','63','64','65','66','67','68','69','80','81','72','73','74','75','76','77','78','79',], function(index, value) { 
		    	$('#button' + value).click(function(){ 
					if(connection) {
						if (value=='star')
							connection.sendDigits('*')
						else if (value=='pound')
							connection.sendDigits('#')
						else
							connection.sendDigits(value)
						return false;
					} 
					});
			});


		});

		</script>
		<!-- @end snippet -->
				<div align="center">
			<!-- @start snippet -->
			<input type="button" id="call" value="Click to Call the Misawa Directory"/>
			<input type="button" id="hangup" value="Hangup Call" style="display:none;"/>
			<div id="status">
				Offline
			</div>
			<div id="dialpad" style="display:none;">
				<table>
				<tr>
				<td width="2"  height="2"><input type="button" value="1" id="button1"></td>
				<td width="2"  height="2"><input type="button" value="2" id="button2"></td>
				<td width="2"  height="2"><input type="button" value="3" id="button3"></td>
				</tr>
				<tr>
				<td width="2"  height="2"><input type="button" value="4" id="button4"></td>
			    <td width="2"  height="2">	<input type="button" value="5" id="button5"></td>
				<td width="2"  height="2"><input type="button" value="6" id="button6"></td>
				</tr>
				<tr>
				<td width="2"  height="2"><input type="button" value="7" id="button7"></td>
				<td width="2"  height="2"><input type="button" value="8" id="button8"></td>
				<td width="2"  height="2"><input type="button" value="9" id="button9"></td>
				</tr>
				<tr>
				<td width="2"  height="2"><input type="button" value="*" id="buttonstar"></td>
				<td width="2"  height="2"><input type="button" value="0" id="button0"></td>
				<td width="2"  height="2"><input type="button" value="#" id="buttonpound"></td>
				</tr>
				</table>
			</div>
					</ul>
					</div>
					<div class="entry">
					
				<h2>Misawa Directory</h2>
				<blockquote>	
	This is our page to show a directory of businesses in the Misawa Area
		<div class="post">
			<h1 class="title"><a href="#">1. Accomodations</a></h1>
			<ul>
<li><td><input type="button"  value="Click"  id="button50"></td> Airport Misawa (0176)50-2055 	</li>
<li>	<td><input type="button"  value="Click"  id="button51"> Shangri-La Apts. (0176)53-5581 </td></li>
<li><td>	<input type="button"  value="Click"  id="button52"></td> Misawa Inn Koyo (0176)53-4900 </li>
<li>	<td><input type="button"  value="Click"  id="button53"></td> Sapporo Inn (0176)53-1012 </li>
<li><td>	<input type="button"  value="Click"  id="button54"></td> Misawa Princess Hotel (0176)57-2351 </li>
<li><td><input type="button"  value="Click"  id="button55"></td> Misawa Park Hotel(0176)57-3151 </li>
<li><td>	<input type="button"  value="Click"  id="button56"></td> Misawa City Hotel(0176)86-4103 </li>
<li><td><input type="button"  value="Click"  id="button57"></td> Komaki Spa Resort (0176)51-2121 </li>
<li><td>	<input type="button"  value="Click"  id="button58"></td> Hyper Hotel Misawa (0176)51-8181 </li>
<li><td><input type="button"  value="Click"  id="button60"></td> Hotel Route Inn (0176)50-1011 	</li>
<li><td><input type="button"  value="Click"  id="button61"></td> Hotel Grand Hill (0176)53-1000 	</li>
<li><td><input type="button"  value="Click"  id="button62"></td> Hotel Ginza (0176)52-2911 	</li>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Numerology-Text-Long -->
 <!-- Google add ID Information -->
<ins class="adsbygoogle"
     style="display:inline-block;width:468px;height:15px"
     data-ad-client="xxxxxxxxxxxxxxx"
     data-ad-slot="xxxxxxxxxxxxx"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
		<div class="post">
			<h1 class="title"><a href="#">2. Airlines</a></h1>
Japan Airlines (Reservation) 
<li><input type="button"  value="Click"  id="button59"> - Domestic or International  03-6733-3062 </li>
<input type="button"  value="Click"  id="button65"></td> American Airlines (03)4550-2111 <br>
All Nippon Airways
<li>	<input type="button"  value="Click"  id="button66"></td> Reservation (03)-6741-1120 </li>
<input type="button"  value="Click"  id="button68"></td> Cathay Pacific Airways (03)5159-1700 <br>
	<input type="button"  value="Click"  id="button69"></td> China Airlines (03)5520-0333 <br>
<input type="button"  value="Click"  id="button70"></td> United Continental Airlines (03)-6732-5011<br>
<input type="button"  value="Click"  id="button71"></td> Delta Airlines 0476-31-8000<br>
<input type="button"  value="Click"  id="button72"></td> Korean Airlines (017)732-3311 	<br>
<input type="button"  value="Click"  id="button73"></td> Singapore Airlines (03)3213-3431<br>
<input type="button"  value="Click"  id="button74"></td> Thai Airways (03)3503-3311 	<br>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Numerology-Text-Long -->
 <!-- Google add ID Information -->
<ins class="adsbygoogle"
     style="display:inline-block;width:468px;height:15px"
      data-ad-client="xxxxxxxxxxxxxxx"
     data-ad-slot="xxxxxxxxxxxxx"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
		<div class="post">
			<h1 class="title"><a href="#">6. Banks</a></h1>
<input type="button"  value="Click"  id="button75"> Aomori Bank (0176)53-2191 	<br>
<input type="button"  value="Click"  id="button76"> Tokyo Mitsubishi UFJ (0120)860-777 	<br>
<input type="button"  value="Click"  id="button77"> Citibank (0120)03-9104 <br>
<input type="button"  value="Click"  id="button78"> Michinoku Bank (0176)53-3121 	<br>


					</ul>
				</blockquote>
			</div>
			<p class="tags"><strong>Tags:</strong> <a href="http://www.audiologiks.com">Audiologiks</a> </p>
		</div>
	</div>


	<!-- end content -->
	<!-- start sidebar two -->
	<div id="sidebar2" class="sidebar">
		<ul>
			<li>
								<h2>3. Automobile Accessories</h2>
				<ul>

<li><input type="button"  value="Click"  id="button79"> Go Motors (0176)53-7315</li>
<li><input type="button"  value="Click"  id="button80"> Loop Inc. (0176)50-7888</li>
<li><input type="button"  value="Click"  id="button81"> Misawa Parts (0176)50-7132</li>
<li><input type="button"  value="Click"  id="button82"> Misawa Tire Garden (0176)53-8844</li>
<li><input type="button"  value="Click"  id="button83"> Sanwado (0176)53-1130</li>
<li><input type="button"  value="Click"  id="button84"> Tommy's Junk Yard (0176)53-2660</li>
<li><input type="button"  value="Click"  id="button85"> Wheel Shop Arumiya (0178)50-0731</li>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Numerology-Square -->
 <!-- Google add ID Information -->
<ins class="adsbygoogle"
     style="display:inline-block;width:210px;height:250px"
      data-ad-client="xxxxxxxxxxxxxxx"
     data-ad-slot="xxxxxxxxxxxxx"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
				</ul>
			</li>
			<li>
<h2>4. Automobile - Body Repair</h2>
				<ul>
<li>Auto Garage (0176)54-2943</li>
<li>Auto Service Kohi (0176)54-3222</li>
<li>Body Repair Tate (0176)52-2288</li>
<li>Body Make Shiwa (0176)57-0494</li>
<li>Daiwa Jidosha (0120)08-3645</li>
<li>Miura Jidosha (0176)53-2909</li>
<li>Misawa Toso Center (0176)53-2895</li>
<li>Misawa Body (0176)53-3202</li>
<li>Kamikubo Jidosha (0176)53-6048</li>
<li>Kondo Jidosha (0176)53-2871</li>
<li>Tsukuda Body (0176)52-9906</li>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Numerology Text -->
 <!-- Google add ID Information -->
<ins class="adsbygoogle"
     style="display:inline-block;width:120px;height:90px"
      data-ad-client="xxxxxxxxxxxxxxx"
     data-ad-slot="xxxxxxxxxxxxx"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
      <!-- end google ad information -->
				</ul>
			</li>
			<li>
			<h2>5. Automobile Dealers</h2>
				<ul>
<li>A1 Ltd. (0176)57-0483</li>
<li>AMB Ltd. (0176)50-1156</li>
<li>Broadway Auto (0176)57-5777</li>
<li>Eagle Auto Works (0176)52-5300</li>
<li>Hachinohe Shokai (080)3803-0442</li>
<li>Lucky Motors (0176)53-5959</li>
<li>Kawamura Jidosha (0176)53-2982</li>
<li>M-Style (0176)52-6256</li>
<li>Shinwa Shokai (0176)52-5515</li>
<li>Volvo Military Sales (0176)52-9396</li>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Numerology Text -->
<!-- Google add ID Information -->
<ins class="adsbygoogle"
     style="display:inline-block;width:120px;height:90px"
      data-ad-client="xxxxxxxxxxxxxxx"
     data-ad-slot="xxxxxxxxxxxxx"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
      <!-- end google ad information -->
				</ul>
			</li>
		</ul>
	</div>
	<!-- end sidebar two -->
	<div style="clear: both;">&nbsp;</div>
</div>

<hr />
<!-- start footer -->
<!-- using a free template site, And giving credit -->

<div id="footer">
	<p>&copy;2007 All Rights Reserved. &nbsp;&bull;&nbsp; Designed by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
</div>
<!-- end footer -->

</body>

</html>

