<?php
$username=$_POST['username'];
 $password=$_POST['password'];
 //$log = $_POST['btnLogin'];
 $msg="Incorrect username or password";
 echo $password ;
 echo $username;
 session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
 mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('mimo') or die(mysql_error());
 
 
 if($username!= NULL && $password!= NULL)
 {
   $query=mysql_query("select * from admin where username='".$username."' and password='".$password."'") or die(mysql_error());
   $res=mysql_fetch_row($query);
   if($res)
   {
    $_SESSION['username']=$username;
	//$_SESSION['txtPassword']=$txtPassword;
    
	header('Location:welcome.html');
	
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