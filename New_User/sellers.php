<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
<head>
 
<title>Sellers</title>
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"37c9ba6aa5dd6fec6be32f3f93cd4f1c",petok:"8aa0052272b19b7f9cf3ce9d36d37e9d4da2c45e-1489576851-1800",zone:"template-help.com",rocket:"0",apps:{"abetterbrowser":{"ie":"7"}}}];!function(a,b){a=document.createElement("script"),b=document.getElementsByTagName("script")[0],a.async=!0,a.src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=f2befc48d1/cloudflare.min.js",b.parentNode.insertBefore(a,b)}()}}catch(e){};
//]]>
</script>
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
 
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i%7COpen+Sans:400,600,700">
<link rel="stylesheet" href="css/style.css">
<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="https://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
</head>
<body>
 
<div class="page text-center">
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
<li><a href="welcome.html">Home</a></li>
<li class="active"><a href="buyers.php">Buyers</a>
 

<li><a href="sellers.php">Sellers</a></li>

<li><a href="adminlogin.html">Logout</a></li>
</ul>
</div>
</div>
</div>
</div>
</nav>
</div>
</header>
<script>
$(document).ready(function(){
$("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", true);
            });

        } else {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", false);
            });
        }
    });
    
    $("[data-toggle=tooltip]").tooltip();
});
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
	<div class="row">
		
        
        <div class="col-md-12">
        <h4>List of sellers</h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped"><tr><td>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mimo";

$city = $_GET['city'];
$budget = $_GET['budget'];
$room = $_GET['room'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM move_out";
$result = $conn->query($sql);



echo "<table>";
echo "<tr><td>City</td><td>Name</td><td>Date_of_leaving</td><td>Contact_no</td><td>Room_Size</td><td>No_of_rooms</td><td>Room_cost</td><td>Other_housewares</td></tr>";
if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
	//$id=$row["User_id"];
        echo "<tr>";
		
		echo "<td>" . $row["City"]."</td>";
		echo "<td>" . $row["Name"]."</td>";
		echo"<td>". $row["Date_of_leaving"]."</td>";
		echo "<td>" . $row["Contact_no"]."</td>";
		echo"<td>". $row["Room_size"]."</td>";
		echo "<td>" . $row["No_of_rooms"]."</td>";
		echo "<td>" . $row["Room_cost"]."</td>";
		echo "<td>" . $row["Other_housewares"]."</td>";
		
		
	}
	echo "</table>";
} 
else {
    echo "0 results";
}
$conn->close();
?><br/>

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
<div class="cell-sm-6">


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
 
 
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>
<script>/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/\>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script></body> <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
