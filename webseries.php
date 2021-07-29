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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

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
		margin:auto;
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

	<hr>
	<!--for home css-->
	<link rel="stylesheet" type="text/css" href="../css/demo.css">


	<div class="container-fluid">
		<div class="row" style="margin-top: -20px;">
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
					<li data-target="#myCarousel" data-slide-to="4"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="images/slide4.jpg" alt="Chicago" style="width:100%; height: 500px; transition-duration: 2s;">
						<div class="carousel-caption">
							<h1>Cubicles</h1>
							<pr>Entertainment</pr>
						</div>
					</div>



					<div class="item">
						<img src="images/slide5.jpg" alt="Chicago" style="width:100%; height: 500px; transition-duration: 2s;">
						<div class="carousel-caption">
							<h1>Mismatched</h1>
							<pr> Romance</pr>
						</div>
					</div>

					<div class="item">
						<img src="images/slide3.jpg" alt="Chicago" style="width:100%; height: 500px; transition-duration: 2s;">
						<div class="carousel-caption">
							<h1>Girl In The City</h1>
							<pr>Drama</pr>
						</div>
					</div>

					<div class="item">
						<img src="images/slide2.webp" alt="Los Angeles" style="width:100%; height: 500px; transition-delay: 1s;">
						<div class="carousel-caption">
							<h1>The Raikar Case</h1>
							<pr>Crime</pr>
						</div>
					</div>

					<div class="item">
						<img src="images/slide1.jpg" alt="New york" style="width:100%; height: 500px; transition-duration: 2s;">
						<div class="carousel-caption">
							<h1>Dark</h1>
							<pr>Thriller</pr>
						</div>
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<!--for row-->
	</div>
	<!--container fluid-->
	<hr>
	<div class="content-wrapper w-container">
		<h1 class="page-title">
			<font style="vertical-align: inherit;">
				<font style="vertical-align: inherit; background: linear-gradient(to right,#E20D13, #F0E300, #A4C615, #4363AB,#BE4A94,#E30922);-webkit-background-clip: text;-webkit-text-fill-color: transparent; font-family: sans-serif;">Webseries</font>
			</font>
		</h1>

	</div>
	<div class="content-wrapper w-container">
		<?php
		include("config.php");

		if (isset($_POST['submit'])) {
			$maxsize = 52428800; // 50MB

			$name = $_FILES['file']['name'];
			$target_dir = "image/";
			$target_file = $target_dir . $_FILES["file"]["name"];
			$vname = $_POST['vname'];
			$genre = $_POST['genre'];
			$season = $_POST['season'];
			$episode = $_POST['episode'];
			$duration = $_POST['duration'];
			$rating = $_POST['rating'];
			$imdb = $_POST['imdb'];
			$publish = $_POST['publish'];

			// Select file type
			$videoFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

			// Valid file extensions
			$extensions_arr = array("jpg", "png", "jpeg", "gif", "psd", "jpeg");

			// Check extension
			if (in_array($videoFileType, $extensions_arr)) {

				// Check file size
				if (($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
					echo "File too large. File must be less than 50MB.";
				} else {
					// Upload
					if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
						// Insert record
						$query = "INSERT INTO images(name,location,vname,genre,season,episode,duration,rating,imdb,publish) VALUES('$name','$target_file','$vname','$genre',$season,$episode,'$duration','$rating','$imdb','$publish')";

						$r=mysqli_query($con, $query);
                       if($r){
						echo "Upload successfully.";
					   }
					   else{
						   echo'not uploaded';
					   }
					
					}
				}
			} else {
				echo "Invalid file extension.";
			}
		}

		if (isset($_SESSION['mail'])) {
			if ($_SESSION['type'] == 'admin') {

				echo '<div>
				
				
				<button type="button" style=" margin:10px; hieght:150px; width:150px; background-color:pink; height:40px; " data-toggle="modal" data-target="#myModal" style="background-color: transparent; height: 225px; width: 300px; text-align: center;">
				Upload
			  </button>
			  </div> <hr>';
			}
		}
		?>



	</div>

	<div class="w-container">
		<div class="row">
			<!-- <div class="col-md-4"> -->
			<div class="video" style="color:#fff">

				<?php
				$fetchVideos = mysqli_query($con, "SELECT * FROM images ORDER BY id DESC");
				while ($row = mysqli_fetch_assoc($fetchVideos)) {
					$location = $row['location'];
					$vname = $row['vname'];
					$season = $row['season'];


					echo '<a href="videos.php?vname=' . $vname . '&season='.$season.'">     
						<div class="card-body col" >
						  <img src="' . $location . '" style="width: 290px; height: 350px;"></a>
						  <h4 class="card-title" style="color:yellow; text-transformation:capitalize;"><b>' . $vname . '<b></h4>
						  <table style="width:76%; color:lightgreen">
							
							<tr>
								<td>Season No : - </td>
								<td>' . $row['season'] .' </td>
								
							</tr>
							<tr>
								<td>Episodes : -</td>
								<td>' . $row['episode'] .' </td>
								
							</tr>
							<tr>
								<td>Duration : - </td>
								<td>' .  $row['duration'] .' </td>
								
							</tr>
							<tr>
								<td>Rating : - </td>
								<td>' . $row['rating'] .' </td>
								
							</tr>
							<tr>
								<td> Imdb Rating : - </td>
								<td>' . $row['imdb'] .' </td>
								
							</tr>
							<tr>
								<td> Publish Date : - </td>
								<td>' . $genre = $row['publish'] .' </td>
								
							</tr>
</table>
						  
						   
						  
						
						 <a href="videos.php?vname=' . $vname . '&season='.$season.'" class="btn btn-warning" style="width:100%;">watch</a>
						  
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

	<!-- The Modal -->
	<div class="modal" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<p class="modal-title" style="font-size: 33px; color: #215d88;">WebSeries Upload Form</p>
					<button type="button" class="close" data-dismiss="modal" style="color: red;">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<form action="webseries.php" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="exampleInput">Name of Web Series</label>
							<input type="text" class="form-control" id="inputname" aria-describedby="emailHelp" placeholder="Enter web series" name="vname">
						</div>

						<div class="form-group">
							<label for="sel1">Genre of Web Series</label>
							<select class="form-control" id="genre" name="genre">
								<option>Comedy</option>
								<option>Drama</option>
								<option>Thriller</option>
								<option>Entertainment</option>
								<option>Children</option>
								<option>Sci-fi/Fantacy</option>
								<option>Other</option>
							</select>
						</div>

						<div class="form-group">
							<label for="sel1">Number of Seasons</label>
							<input type="number" class="form-control" id="inputseason" aria-describedby="emailHelp" placeholder="Enter seasons" name="season">
						</div>

						<div class="form-group">
							<label for="sel1">Number of Episodes</label>
							<input type="number" class="form-control" id="inputepisode" aria-describedby="emailHelp" placeholder="no. of episodes" name="episode">
						</div>

						<div class="form-group">
							<label for="sel1">Duration of Episodes</label>
							<input type="text" class="form-control" id="inputduration" aria-describedby="emailHelp" placeholder="Duration" name="duration">
						</div>


						<div class="form-group">
							<label for="sel1"> Rating</label>
							<select class="form-control" id="rating" name="rating">
								<option>1 star</option>
								<option>2 star</option>
								<option>3 star</option>
								<option>4 star</option>
								<option>5 star</option>
							</select>
						</div>

						<div class="form-group">
							<label for="sel1"> IMDB</label>
							<select class="form-control" id="imdb" name="imdb">
								<option>1 star</option>
								<option>2 star</option>
								<option>3 star</option>
								<option>4 star</option>
								<option>5 star</option>
							</select>
						</div>

						<div class="form-group">
							<label for="sel1">Publish Date</label>
							<input type="text" class="form-control" id="inputpublish" aria-describedby="emailHelp" placeholder="publish" name="publish">
						</div>


						<div class="form-group">
							<label for="exampleFormControlFile1">Image and video input</label>
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

</body>