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

.new{
	margin-top: 16px;
    padding: 15px 20px;
    text-align: center;
}
.head{
	
	text-align: center;
}
.login{
    width: 200px;
    height: 220px;
    border: 3px solid white;
    background-color: gray;
    border-radius: 10px;
	margin: 0 auto;
    width: 340px;
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
	background-image: url("logo2.jpg");
	background-size: cover ;
	background-repeat: no-repeat;
	color: white;
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
input{
    width:100px;
}
</style>
</head>
<body>
<?php
    include "navbar.php";
    ?>
<div class="login">

<div style="margin-left:20%">
     
     <form action="signinpage.php">
         

         <input class="btn btn-primary " style="margin-top: 15%;" type="submit" name="type" value="admin"> &nbsp; &nbsp; &nbsp;  <img src="admin.jpg" alt="" ; width="80px"; height="80px"; > <br> <br>
         <input class="btn btn-primary " style="margin-top: 15%;" type="submit" name="type" value="user"> &nbsp; &nbsp; &nbsp;  <img src="user.jpg" alt="" ; width="80px"; height="80px"; >
        </form>
	
</div>
      
</div>


</body>

</html>