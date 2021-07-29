
<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>WEBFLIX</title>
<?php require_once "bootstrap1.php";?>
<?php require_once "bootstrap.php";?>
<style>
	.nav-bar {
    background-color: transparent;
}
.w-container {
    margin-left: auto;
    margin-right: auto;
    max-width: 940px;
}
#nav{
	background-color: transparent;
}
.logo{
	padding-top: 8px;
}
.w-nav {
    position: relative;
    background: #dddddd;
    z-index: 1000;
}
.w-nav-brand {
    position: relative;
    float: none;
    text-decoration: none;
    color: #333333;
}
.w-nav-overlay {
    position: absolute;
    overflow: hidden;
    display: none;
    top: 100%;
    left: 0;
    right: 0;
    width: 100%;
}
a {
    color: #2675ae;
    text-decoration: none;
}
.new{
	margin-top: 16px;
    padding: 15px 20px;
    text-align: center;
}
.head{
	
	text-align: center;
}
.login{
	height: 470px;
	width: 350px;
	margin: auto;
	border: 2px solid black;
	background-color:gray;
	border-radius: 5px;
}
label{
	color: white;
}
.bd1{

	background-color: transparent;
    font-size: 14px;
    padding: 20px;
}
.btn-primary {
    background-color: #2675aed9;
}
form label {
    display: block;
    margin-bottom: 7px;
}
input{
	margin-bottom: 15px;
    margin-top: 5px;
}
body{
	background-image: url("back1.jpg");
	background-size: auto;
	background-repeat: repeat;
}
.label-link{
	margin-left: 7em;
}
.form-control{
	background-color: #ffffffc2;
}
p{
	color: #ffffffba;

}
@keyframes shake {
  10%, 90% {
    transform: translate3d(-1px, 0, 0);
  }
  
  20%, 80% {
    transform: translate3d(2px, 0, 0);
  }

  30%, 50%, 70% {
    transform: translate3d(-4px, 0, 0);
  }

  40%, 60% {
    transform: translate3d(4px, 0, 0);
  }
}
.inc{
	animation-name: shake;
	animation-duration: 1s;
	text-align: center;
	color: red;
}
@media screen and (max-width: 991px){

	.w-container {
    max-width: 728px !important;
	}	
	.w-nav[data-collapse="medium"] .w-nav-menu {
	    display: none;
	}
	.nav-menu {
    padding-top: 18px !important;
    padding-bottom: 18px !important;
    border-top: 1px solid #000 !important;
    background-color: rgba(0, 0, 0, .85) !important;
	}
	.menu-button:hover {
    color: #fff !important;
	}
	.menu-button {
    padding: 20px 0px 20px 20px !important;
    color: hsla(0, 0%, 100%, .62) !important;
    font-size: 25px !important;
    line-height: 22px !important;
	}
	.w-container {
    max-width: 728px !important;
	}
	.logo{
	padding-top: 8px !important;
	width: 10% !important;
	}
}

@media (max-width: 767px){
	.menu-button {
	    margin-right: 7px !important;
	}
	.hero-heading {
    font-size: 61px !important;
	}

	.logo{
	padding-top: 8px !important;
	width: 10% !important;
	}
}

@media screen and (max-width: 479px){
	.w-container {
	    max-width: none !important;
	}
	.hero-container {
    padding-right: 13px !important;
    padding-left: 13px !important;
	}
	.hero-heading {
    font-size: 39px !important;
    line-height: 52px !important;
	}
	.button.big {
    width: 100%;
    margin-right: 0px;
    margin-bottom: 12px;
    margin-left: 0px;
	}

	.logo{
	padding-top: 8px !important;
	width: 10% !important;
	}
}
</style>

</head>
<body>
<?php
    include "navbar.php";
    ?>
<div class="login">
		<!-- <h2>Admin Login</h2> -->
	
	<form action="signin.php" method="POST">
		<div class="head"> 
			<h1 style="text-transform: capitalize;"><b ><?php echo $_REQUEST['type']?>  Sign In</b></h1>
		</div> 
		<div class="bd1">
			<?php
			   
			    if(isset($_REQUEST["msg"])<>"")
			    {
			      echo 	"<h4 class='inc'>".$_REQUEST["msg"]."</h4>";
			    }
			 ?>
			<label for="login">Email</label>
			<input type="email" name="mail" id="login_field" class="form-control input-block" tabindex="1" autofocus="autofocus" required="Enter Email" placeholder="Enter Email ID" value="<?php 

				if (isset($_COOKIE['mail']) && isset($_COOKIE['password'])) {
    			echo $_COOKIE['mail'];
				}
				else
				{
					echo "";
				}

			?>">
			<label for="password">Password</label>
			<input type="password" name="pswd" id="password" placeholder="Enter Password" class="form-control form-control input-block" tabindex="2" required="Enter Password" value="<?php 

				if (isset($_COOKIE['mail']) && isset($_COOKIE['password'])) {
    			echo $_COOKIE['password'];
				}
				else
				{
					echo "";
				}

			?>">



			<?php 
			 echo '<input type="hidden" name="type" value="'.$_REQUEST['type'].'">'
			?>
			<input type="submit" name="commit" value="Sign in" tabindex="3" class="btn btn-primary btn-block" data-disable-with="Signing in…">
		</div>
	</form>
	<?php
	echo '<p class="new">
	"New to site"<i>
	<a data-ga-click="Sign in, switch to sign up" href="signuppage.php?type=user" style="color: white;">Create an  User  account</a></i><br>
	
	</p>';
	if($_REQUEST['type']=='user'){
	echo ' <p class="new"><a data-ga-click="Sign in, switch to sign up" href="signinpage.php?type=admin"  style="color: white;"> 
	<button class ="btn btn-primary ">
	
	Admin Signin </button></a></p>';
	}
	if($_REQUEST['type']=='admin'){
	echo '<p class="new"><a data-ga-click="Sign in, switch to sign up" href="signinpage.php?type=user"  style="color: white;"> 
	<button class ="btn btn-primary ">
	
	User Signin </button></a></p>';
	}
	?>

</div>


</body>
</html>