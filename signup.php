<?php
$connect_mysql=mysqli_connect("localhost","root","","webseriesdb");



if(!$connect_mysql)
{
   echo '<script>
   alert("Connection Failed" . mysqli_connect_error());
   </script> ';
}

$name=$_POST['first'];
$mail=$_POST['mail'];
$password=$_POST['pwd1'];
$type=$_POST['type'];

$sql="INSERT INTO user(name,mail,password,type) values('$name','$mail','$password','$type')";

if(mysqli_query($connect_mysql,$sql))
{
        header("Location:login.php");
}
else {
	header("Location:signuppage.php?msg=Email ID already exist! Please try+&type=$type");
}

?>