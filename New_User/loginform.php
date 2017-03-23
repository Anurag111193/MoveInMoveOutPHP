<?php
$txtUser=$_POST['txtUser'];
 $txtPassword=$_POST['txtPassword'];
 $log = $_POST['btnLogin'];
 $msg="Incorrect username or password";
 echo $txtPassword ;
 echo $txtUser;
 session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
 mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('mimo') or die(mysql_error());
 
 
 if($txtUser!= NULL && $txtPassword!= NULL)
 {
   $query=mysql_query("select * from new_user where name='".$txtUser."' and password='".$txtPassword."'") or die(mysql_error());
   $res=mysql_fetch_row($query);
   if($res)
   {
    $_SESSION['txtUser']=$txtUser;
	//$_SESSION['txtPassword']=$txtPassword;
    
	header('Location:MIMObtn.html');
	
   }
   else
   {
     echo '<script>alert("'.$msg.'");window.history.back();</script>';
		 
   }
   
 }
else
	{
       echo '<script>alert("'.$msg.'");window.history.back();</script>';
		
    }

}
?>