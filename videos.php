<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>WEBFLIX</title>
	<?php include "session.php"; ?>
	<?php include "config.php"; ?>
	<?php require_once "bootstrap.php"; ?>
	<?php require_once "bootstrap1.php"; ?>
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


	<link rel="stylesheet" href="magnific-popup/dist/magnific-popup.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	<style type="text/css">
		.nav-bar {
			background-color: transparent;
		}

		.w-container {
			margin-left: auto;
			margin-right: auto;
			max-width: 940px;
		}

		#nav {
			background-color: transparent;
		}

		.logo {
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

		body {

			background-image: url(logo2.jpg);
			background-size: cover;
			overflow: scroll;
			background-repeat: no-repeat;
			background-attachment: fixed;
		}

		.content-wrapper {
			margin-top: 78px;
		}

		.w-container {
			margin-left: auto;
			margin-right: auto;
			max-width: 940px;
		}

		.page-title {
			margin-top: 0px;
			margin-bottom: 86px;
			font-size: 45px;
			line-height: 51px;
			font-weight: 300;
			text-align: center;
			text-transform: uppercase;
		}

		.footer {
			padding-top: 43px;
			padding-bottom: 43px;
			background-color: transparent;
			color: #222;
			text-align: center;
		}

		@media screen and (max-width: 991px) {

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

			.w-container {
				max-width: 728px !important;
			}

			.logo {
				padding-top: 8px !important;
				width: 10% !important;
			}
		}

		@media (max-width: 767px) {


			.logo {
				padding-top: 8px !important;
				width: 10% !important;
			}
		}

		@media screen and (max-width: 479px) {
			.w-container {
				max-width: none !important;
			}

			.logo {
				padding-top: 8px !important;
				width: 10% !important;
			}
		}

		.row {
			text-align: center;
		}

		.thumb {
			width: 100%;
			margin-bottom: 60px;
			float: left;
		}

		.elastic {
			max-width: 80%;
		}

		 #modal-content{
			background-color: pink;
		} 

		.title {
			margin: 18px 0 10px;
			font-family: sans-serif;
			font-size: 18px;
			line-height: 21px;
			text-align: center;
			color: white;
		}

		.timestamp {
			height: 11px;
			font-size: 11px;
			letter-spacing: 1px;
			line-height: 11px;
			font-style: italic;
			color: #636363;
			text-align: center;
			text-transform: uppercase;
		}

		.timestamp img {
			display: inline;
			margin-right: 3px;
			margin-bottom: 1px;
		}

		.nav-link.w--current {
			color: #fff;
			text-decoration: none;
		}
		.col {
		float: left;
		margin: 15px;
	}
		
	</style>
</head>

<body>
	<?php require_once "navbar.php"; ?>
	
	<div class="content-wrapper w-container">
		<h1 class="page-title">
			<font style="vertical-align: inherit;">
			<font style="vertical-align: inherit; background: linear-gradient(to right,#E20D13, #F0E300, #A4C615, #4363AB,#BE4A94,#E30922);-webkit-background-clip: text;-webkit-text-fill-color: transparent; font-family: sans-serif;"> <?php echo $_REQUEST['vname']?> Episodes</font>
			</font>
		</h1>

	</div>
	<div class="content-wrapper w-container">
	<?php
    include("config.php");
       $v_name=$_REQUEST['vname'];
	   $season=$_REQUEST['season'];
	   if(isset($_POST['submit'])){
		$episode=$_POST['episode'];
		$maxsize = 5000000000; // 500MB
		// $vname=$_POST['vname'];
 
       $name = $_FILES['file']['name'];
       $target_dir = "videos/";
	   $target_file = $target_dir . $_FILES["file"]["name"];

       // Select file type
       $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       // Valid file extensions
       $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

       // Check extension
       if( in_array($videoFileType,$extensions_arr) ){
 
          // Check file size
          if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
            echo "File too large. File must be less than 500MB.";
          }else{
            // Upload
            if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
              // Insert record
              $query = "INSERT INTO videos(name,location,vname,season,episode) VALUES('$name','$target_file','$v_name','$season','$episode')";

              mysqli_query($con,$query);
              echo "<script> alert('video uploaded Successfully')</script>";
            }
          }

       }else{
          echo "Invalid file extension.";
       }
 
	 } 
	 
                if(isset($_SESSION['mail']))
                    {
						if($_SESSION['type']=='admin'){
							echo '<div>
				
				
							<button type="button" style=" margin:50px; hieght:150px; width:150px; background-color:pink; height:40px; " data-toggle="modal" data-target="#myModal" style="background-color: transparent; height: 225px; width: 300px; text-align: center;">
							Upload
			  				</button>
						  </div> <hr>';

						
						}
                  
					}
     ?>
  
   

	</div>
	<!-- The Modal -->
	<div class="modal" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<p class="modal-title" style="font-size: 33px; color: #215d88;">Episode Upload Form</p>
					<button type="button" class="close" data-dismiss="modal" style="color: red;">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<form action="videos.php" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="exampleInput">Name of Web Series</label>
							<input type="text" class="form-control" id="inputname" aria-describedby="emailHelp" placeholder="Enter web series" name="vname" value="<?php echo $_REQUEST['vname']?>" readonly>
						</div>

						

						<div class="form-group">
							<label for="sel1"> Seasons</label>
							<input type="number" class="form-control" id="inputseason" aria-describedby="emailHelp" placeholder="Enter seasons" name="season" value="<?php echo $_REQUEST['season']?>" readonly>
						</div>

						<div class="form-group">
							<label for="sel1"> Episodes No.</label>
							<input type="number" class="form-control" id="inputepisode" aria-describedby="emailHelp" placeholder="no. of episodes" name="episode">
						</div>


						<div class="form-group">
							<label for="exampleFormControlFile1">video input</label>
							<input type="file" name="file">
							<button type="submit" name="submit" class="btn btn-primary" style="float: left;">Upload</button><br><br>
						</div>

				


					</form>
				</div>

				<!-- Modal footer -->
				<div class="modal-footer">

					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>

			</div>
		</div>
	</div>


	<div class="w-container">
		<div class="row">
			<!-- <div class="col-md-4"> -->
				<div class="video" style="color:#fff" >

					<?php
					$webname=$_REQUEST['vname'];
					$fetchVideos = mysqli_query($con, "SELECT * FROM videos WHERE vname='$webname' ");
					while ($row = mysqli_fetch_assoc($fetchVideos)) {
						$location = $row['location'];
						$vname=$row['vname'];
						$season=$row['season'];
						$episode=$row['episode'];

					
					echo '<div>    
					<div class="card-body col" >
					  <video src="' . $location . '" controls width="450px" height="300px" > </video>
		 
					  <h4 class="card-title" style="color:black; text-transformation:capitalize;"><b>' . $vname . '<b></h4>
					  <table style="margin:auto" color:lightgreen">
						
						<tr>
							<td>Season No : - </td>
							<td>' . $season .' </td>
							
						</tr>
						<tr>
							<td>Episodes : - </td>
							<td>' . $episode.' </td>
							
						</tr>
					
						</table>
					  </div>
					  
					  
					  
						</div>
				  ';
					   
					
					}
					?>

				</div>
			<!-- </div> -->

		</div>
	</div>

	</div>

	<?php require_once "footer.php"; ?>

</body>