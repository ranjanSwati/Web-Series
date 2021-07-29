<?php

session_start();
	$connect_mysql=mysqli_connect("localhost","root","","webseriesdb");

	if(!$connect_mysql)
	{
	    echo '<script>
   alert("Connection Failed" . mysqli_connect_error());
   </script> ';
	}

	$mail=$_POST['mail'];
	$password=$_POST['pswd'];
	$type=$_POST['type'];
	$msg="";



	$result=mysqli_query( $connect_mysql, "SELECT * FROM user WHERE mail='$mail' AND password='$password' AND type ='$type' ");
	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    	while($row = mysqli_fetch_assoc($result)) {

				$_SESSION["mail"] = $row["mail"];;
				$_SESSION["password"] = $row["password"];
				$_SESSION['name']=$row['name'];
				$_SESSION['type']=$row['type'];
				$_SESSION['start'] = time();
				$_SESSION['expire'] = $_SESSION['start'] + (20*3660) ;
			}
				setcookie('mail', $_POST['mail'], time()+3660);
	            setcookie('password', $_POST['pswd'], time()+3660);

				header('location: webseries.php');
			}
			else{
				$message = "Invalid Username or Password!";
				header("Location:signinpage.php?msg=$message+&type=$type");
			}
			
?>