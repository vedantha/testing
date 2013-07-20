<?php  require_once('./includes/dbconn.php');

       	$username1 = trim($_POST['username']);
       	$password1 = trim($_POST['password']);
       	$username = hash('sha512',$username1);
       	$password = hash('sha512',$password1);
      	$sql="SELECT * FROM users WHERE username='$username' and password='$password'";
    	  $result=mysql_query($sql);
    	  $row=mysql_fetch_assoc($result);
        $count=mysql_num_rows($result);
    	
        if(($count==1)&&($row["admin"]==1)){
            session_start();
            $_SESSION['username'] = "1";
           header("location:admin.php");
                      }
        elseif (($count==1)&&($row["admin"]==0)) {
          # code...
          session_start();
          $_SESSION['username'] = "1";
          header("location:user.php");
        }

        else {
        echo "Wrong Username or Password";
        }
   ?>