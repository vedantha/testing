<?php  mysql_connect("localhost", "root", "")or die("cannot connect"); 
  	   mysql_select_db("testing")or die("cannot select DB");

       	$username1 = trim($_POST['username']);
       	$password1 = trim($_POST['password']);
       	$username = hash('sha512',$username1);
       	$password = hash('sha512',$password1);
      	$sql="SELECT * FROM users WHERE username='$username' and password='$password'";
    	$result=mysql_query($sql);
    	echo($result);
       
    	$count=mysql_num_rows($result);
    	
        if($count==1){
            session_start();
            $_SESSION['username'] = "1";
            header("location:loggedin.php");
                      }
        else {
        echo "Wrong Username or Password";
        }
   ?>