<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
<head>
 
<title>Contacts</title>
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
 
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i%7COpen+Sans:400,600,700">
<link rel="stylesheet" href="css/style.css">
<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="https://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
</head>
<header class="page-header">
 
 
<div class="rd-navbar-wrap">
<nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-static" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-md-stick-up-offset="18px" data-lg-stick-up-offset="18px" class="rd-navbar rd-navbar-minimal">
<div class="rd-navbar-inner">
 
<div class="rd-navbar-panel">
 
<button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
<div class="rd-navbar-panel-inner">
 
<div class="rd-navbar-brand"><a href="index.html" class="brand-logo"><img src="MIMO.jpg" alt="" class="img-responsive center-block"></a></div>
<div class="rd-navbar-nav-wrap">
 
<ul class="rd-navbar-nav">
<li><a href="wt_58633.html">Home</a></li>
<li><a href="about.html">About</a>
 

</li>
<li><a href="faq.html">FAQS</a></li>
<li class="active"><a href="contacts.html">Contacts</a></li>
<li><a href="index.html">Logout</a></li>
</ul>
</div>
</div>
</div>
</div>
</nav>
</div>
</header>
<html>
<img src="thank u.jpg" >
</html>
<?php
   
   if(isset($_POST["btnSubmit"]))
   {
    $city = $_POST["txtCity"];
	$name = $_POST["txtName"];
	$date_of_leaving = $_POST["Leaving"];
	$Contact_no = $_POST["txtContact"];
	$Room_address = $_POST["txtAddress"];
	$Room_size = $_POST["txtSize"];
	$No_of_rooms = $_POST["txtno"];
	$Room_setup = $_POST["txtSetup"];
	$Room_cost = $_POST["txtCost"];
	$Otherhousewares = $_POST["txtOtherhousewares"];
	$msg= "Data Submitted";
	
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   $sql = "INSERT INTO move_out " . " (City,Name,Date_of_leaving,Contact_no,Room_address,Room_size, No_of_rooms,Room_setup,Room_cost,Other_housewares) " . " VALUES ( '$city', '$name','$date_of_leaving','$Contact_no', '$Room_address', '$Room_size', '$No_of_rooms', '$Room_setup', '$Room_cost', '$Otherhousewares');";
      
   mysql_select_db('mimo');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   else
   echo '<script>
             alert("'.$msg.'");
          </script>';
		  
   }
   echo '<h3>Thanks for visiting....!!!<h3>';
   
   mysql_close($conn);
?>

<footer style="background: #000 url(images/background-04-2050x677.jpg) center/cover no-repeat;" class="page-footer">
<div class="bg-overlay-gray-base">
<div class="shell section-65 section-md-top-110 section-md-bottom-200">
<div class="range range-xs-center range-xs-middle range-md-justify">
<div class="cell-sm-10 cell-md-8 cell-lg-7 text-sm-left">
<h3 class="text-white">Get In Touch</h3>
<p class="offset-md-top-50 text-left">Our website is made to become your reliable guide being organized in a simple manner, so you can easily find the needed proposition with true-to-life photos and comprehensive descriptions. We are always ready to get in touch and answer all your questions. Your trust will be justified.</p>
<div class="range range-xs-center text-left">
<div class="cell-sm-6">
<p class="text-big-20 text-white">First Impression,Office No.8,Mangalwari Complex,Sadar, <br class="veil reveal-lg-inline-block"> Nagpur-17,Maharashtra,India.</p>
</div>

</div>
</div>
<div class="cell-sm-10 cell-md-4 cell-lg-3 text-md-right offset-top-40 offset-md-top-0">
 
<ul class="list-inline offset-lg-top-100">
<li class="text-center"><a href="contacts.html#" class="icon icon-lg icon-circle icon-gray-dark fa fa-instagram"></a></li>
<li class="text-center"><a href="contacts.html#" class="icon icon-lg icon-circle icon-gray-dark fa fa-twitter"></a></li>
<li class="text-center"><a href="contacts.html#" class="icon icon-lg icon-circle icon-gray-dark fa fa-facebook"></a></li>
</ul>
<p class="offset-lg-top-35 text-white">&#169; <span id="copyright-year"></span> &#124; <a href="privacy.html" class="text-white">Privacy Policy</a></p>
</div>
</div>
</div>
</div>
</footer>
</div>
 
<div id="form-output-global" class="snackbars"></div>
 
<div tabindex="-1" role="dialog" aria-hidden="true" class="pswp">
<div class="pswp__bg"></div>
<div class="pswp__scroll-wrap">
<div class="pswp__container">
<div class="pswp__item"></div>
<div class="pswp__item"></div>
<div class="pswp__item"></div>
</div>
<div class="pswp__ui pswp__ui--hidden">
<div class="pswp__top-bar">
<div class="pswp__counter"></div>
<button title="Close (Esc)" class="pswp__button pswp__button--close"></button>
<button title="Share" class="pswp__button pswp__button--share"></button>
<button title="Toggle fullscreen" class="pswp__button pswp__button--fs"></button>
<button title="Zoom in/out" class="pswp__button pswp__button--zoom"></button>
<div class="pswp__preloader">
<div class="pswp__preloader__icn">
<div class="pswp__preloader__cut">
<div class="pswp__preloader__donut"></div>
</div>
</div>
</div>
</div>
<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
<div class="pswp__share-tooltip"></div>
</div>
<button title="Previous (arrow left)" class="pswp__button pswp__button--arrow--left"></button>
<button title="Next (arrow right)" class="pswp__button pswp__button--arrow--right"></button>
<div class="pswp__caption">
<div class="pswp__caption__cent"></div>
</div>
</div>
</div>
</div>
 
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>
<script>/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/\>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script></body> <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>