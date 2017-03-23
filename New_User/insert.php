      <?php
 
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
          if(! get_magic_quotes_gpc() ) {
               $emp_name = addslashes ($_POST['emp_name']);
               $emp_address = addslashes ($_POST['emp_address']);
            }else {
               $emp_name = $_POST['emp_name'];
               $emp_address = $_POST['emp_address'];
            }if(! get_magic_quotes_gpc() ) {
            
            $emp_salary = $_POST['emp_salary'];
            
            $sql = "INSERT INTO new_user ". "(Name,Address,DOB,Email_id) ". "VALUES('$emp_name','$emp_address', NOW())$emp_salary";
               
            mysql_select_db('mimo');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
            
            echo "Entered data successfully\n";
            
            mysql_close($conn);
         }else {
            ?>
			
