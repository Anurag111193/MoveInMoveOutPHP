<?php

$emp_name = $_POST['emp_name'];
$emp_address = $_POST['emp_address'];
$emp_salary = $_POST['emp_salary'];
                   

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
//$sqlnew = "INSERT INTO storea //(item_name,quantity_q,quantity_k,consumed_q,consumed_k,remaining_q,remaining_k, //cost//_perkg) VALUES ($new,"","","","","","",""); ";
//$countnew = 0;

$co = "SELECT * FROM new_user";
mysql_select_db('mimo');
$countval = mysql_query( $co, $conn );
if(! $countval)
{
  die('Could not insert: ' . mysql_error());
}

$sqlnew = "INSERT INTO new_user ". "(Name,Address,DOB,Email_id) ". "VALUES('$emp_name','$emp_address', NOW())$emp_salary";
               

echo " <script>
      window.location.href = 'saafterenter.html';
    </script>"; 

mysql_select_db('mimo');
$upval = mysql_query( $sqlnew, $conn );
if(! $upval )
{
  die('Could not insert: ' . mysql_error());
}
//echo '<br><br>inserted successfully<br><br>';

echo '<a href = "sa.php"><input type = "button" style="width:70;height:50" name = "btnbck" value = "परत"></a>';
echo '<a href = "index.html"><input type = "button" style="width:70;height:50" name = "btnhome" value = "प्रारंभ पृष्ठ
"></a>';
  
//echo "Fetched data successfully\n";


}
else
{
echo " <script>
      window.location.href = 'staerror.html';
    </script> ";
}

}
else
{
echo " <script>
      window.location.href = 'staerror.html';
    </script> ";
} 
mysql_close($conn);

?>