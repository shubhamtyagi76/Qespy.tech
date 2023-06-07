<?php
    require_once('api/login_with_google/setup.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Play Video</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="javascript/style.js"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body class="body">
	<nav class="flex-div">
		<div class="nav-left flex-div">
			<button class="openbtn" onclick="openNav()">☰</button>
			<a href="index.php"><img src="images/logo.png" class="logo"></a>
		</div>
		<div class="nav-middle flex-div">
			<div class="search-box flex-div">
				<input type="text" name="" placeholder="Search">
				<img src="images/search.png">
			</div>
			<img src="images/voice-search.png" class="mic-icon">
		</div>
		<div class="nav-right flex-div ">
			<button class="dots" onclick="dots()"><img src="images/dots.png">
				<div class="popuptext" id="myPopup">
					<a href=""><img src="images/home.png"><p>Your data in YouTube</p></a>
					<hr>
					<a href=""><img src="images/theme.png"><p class="appearance">Apppearance:Device theme</p></a>
					<hr>
					<a href=""><img src="images/setting.png"><p class="setting">Setting</p></a>
					<hr>
					<a href=""><img src="images/help.png"><p class="help">Help</p></a>
					<a href=""><img src="images/feedback.png"><p class="feedback">Send Feedback</p></a>
				</div>
			</button>
			<button type="" class="sign">
				<a href="<?php echo $google->createAuthUrl();?>">Sign in</a>
			</button>
		</div>
	</nav>


	<!--------- sidebar ----------------->


	<div class="sidebar">
		<div class="w3-sidebar w3-bar-block">
			<a href="index.php" class="w3-bar-item w3-button" ><img src="images/home.png"><p>Home</p></a>
			<a class="w3-bar-item w3-button"><img src="images/shorts.png"><p>Shorts</p></a>
			<a href="subscriprion.php" class="w3-bar-item w3-button"><img src="images/subscriprion.png"><p>Subscriprion</p></a>
			<a class="w3-bar-item w3-button"><img src="images/library.png"><p>Library</p></a>
			<a href="history.php" class="w3-bar-item w3-button"><img src="images/history.png"><p>History</p></a>
		</div>
	</div>

	<!--------- sidebar Open Content ----------------->


	<div class="sidebar-open" id="mySidebar">
			<button class="closebtn" onclick="closeNav()">☰ <img src="images/logo.png" class="logo_1"></button>
			<a href="index.php"><img src="images/home.png"><p>Home</p></a>
  			<a href=""><img src="images/shorts.png"><p>Shorts</p></a>
  			<a href="subscriprion.php"><img src="images/subscriprion.png"><p>Subscriprion</p></a>
  			<hr>
  			<a href=""><img src="images/library.png"><p>Library</p></a>
  			<a href="history.php"><img src="images/history.png"><p>History</p></a>
  			<hr>
  			<p class="sub">Sign in to like videos, comment, and subscribe.</p>
  			<button class="sign" onclick="sign">
  				<a href="<?php echo $google->createAuthUrl();?>">Sign in</a>
  			</button>
  			<hr>
  			<h5>Explore</h5>
  			<a href=""><img src="images/trending.png"><p>Trending</p></a>
  			<a href=""><img src="images/shoping.png"><p>Shopping</p></a>
  			<a href=""><img src="images/music.png"><p>Music</p></a>
  			<a href=""><img src="images/movies.png"><p>Movies & Shows</p></a>
  			<a href=""><img src="images/live.png"><p>Live</p></a>
  			<a href=""><img src="images/gaming.png"><p>Gaming</p></a>
  			<a href=""><img src="images/news.png"><p>News</p></a>
  			<a href=""><img src="images/sports.png"><p>Sports</p></a>
  			<a href=""><img src="images/learning.png"><p>Learning</p></a>
  			<a href=""><img src="images/fashion.png"><p>Fashion & Beauty</p></a>
  			<hr>
  			<a href=""><img src="images/add.png"><p>Browse Channels</p></a>
  			<hr>
  			<h5>More from YouTube</h5>
  			<a href=""><img src="images/youtube.png"><p>YouTube Premium</p></a>
  			<a href=""><img src="images/youtube_music.png"><p>YouTube Music</p></a>
  			<a href=""><img src="images/youtube_kids.png"><p>YouTube Kids</p></a>
  			<hr>
  			<a href=""><img src="images/setting.png"><p>Setting</p></a>
  			<a href=""><img src="images/report.png"><p>Report History</p></a>
  			<a href=""><img src="images/feedback.png"><p>Send Feedback</p></a>
  			<hr>
		</div>
	</div>


	<!--------- Home Page Video Part ----------------->


	<div class="container">
		<div class="banner">
			<img src="images/banner.png">
		</div>
		<div class="row">
			<div class="col-sm-3">
				<div class="vid-list">
					<a href="play-video.php"><img src="images/thumbnail1.png" class="thumbnail"></a>
					<div class="flex-div">
						<img src="images/jack.png">
						<div class="vid-info">
							<a href="">Best Channel to learn coding that help you to be a web developer</a>
							<p>Easy Tutorials</p>
							<p>15k Vies &bull; 2 days</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="vid-list">
				<a href=""><img src="images/thumbnail2.png" class="thumbnail"></a>
				<div class="flex-div">
					<img src="images/jack.png">
					<div class="vid-info">
						<a href="">Best Channel to learn coding that help you to be a web developer</a>
						<p>Easy Tutorials</p>
						<p>15k Vies &bull; 2 days</p>
					</div>
				</div>
			</div>
			</div>
			<div class="col-sm-3">
				<div class="vid-list">
				<a href=""><img src="images/thumbnail3.png" class="thumbnail"></a>
				<div class="flex-div">
					<img src="images/jack.png">
					<div class="vid-info">
						<a href="">Best Channel to learn coding that help you to be a web developer</a>
						<p>Easy Tutorials</p>
						<p>15k Vies &bull; 2 days</p>
					</div>
				</div>
			</div>
			</div>
			<div class="col-sm-3">
				<div class="vid-list">
				<a href=""><img src="images/thumbnail4.png" class="thumbnail"></a>
				<div class="flex-div">
					<img src="images/jack.png">
					<div class="vid-info">
						<a href="">Best Channel to learn coding that help you to be a web developer</a>
						<p>Easy Tutorials</p>
						<p>15k Vies &bull; 2 days</p>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3">
				<div class="vid-list">
					<a href="play-video.php"><img src="images/thumbnail1.png" class="thumbnail"></a>
					<div class="flex-div">
						<img src="images/jack.png">
						<div class="vid-info">
							<a href="">Best Channel to learn coding that help you to be a web developer</a>
							<p>Easy Tutorials</p>
							<p>15k Vies &bull; 2 days</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="vid-list">
				<a href=""><img src="images/thumbnail2.png" class="thumbnail"></a>
				<div class="flex-div">
					<img src="images/jack.png">
					<div class="vid-info">
						<a href="">Best Channel to learn coding that help you to be a web developer</a>
						<p>Easy Tutorials</p>
						<p>15k Vies &bull; 2 days</p>
					</div>
				</div>
			</div>
			</div>
			<div class="col-sm-3">
				<div class="vid-list">
				<a href=""><img src="images/thumbnail3.png" class="thumbnail"></a>
				<div class="flex-div">
					<img src="images/jack.png">
					<div class="vid-info">
						<a href="">Best Channel to learn coding that help you to be a web developer</a>
						<p>Easy Tutorials</p>
						<p>15k Vies &bull; 2 days</p>
					</div>
				</div>
			</div>
			</div>
			<div class="col-sm-3">
				<div class="vid-list">
				<a href=""><img src="images/thumbnail4.png" class="thumbnail"></a>
				<div class="flex-div">
					<img src="images/jack.png">
					<div class="vid-info">
						<a href="">Best Channel to learn coding that help you to be a web developer</a>
						<p>Easy Tutorials</p>
						<p>15k Vies &bull; 2 days</p>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3">
				<div class="vid-list">
					<a href="play-video.php"><img src="images/thumbnail1.png" class="thumbnail"></a>
					<div class="flex-div">
						<img src="images/jack.png">
						<div class="vid-info">
							<a href="">Best Channel to learn coding that help you to be a web developer</a>
							<p>Easy Tutorials</p>
							<p>15k Vies &bull; 2 days</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="vid-list">
				<a href=""><img src="images/thumbnail2.png" class="thumbnail"></a>
				<div class="flex-div">
					<img src="images/jack.png">
					<div class="vid-info">
						<a href="">Best Channel to learn coding that help you to be a web developer</a>
						<p>Easy Tutorials</p>
						<p>15k Vies &bull; 2 days</p>
					</div>
				</div>
			</div>
			</div>
			<div class="col-sm-3">
				<div class="vid-list">
				<a href=""><img src="images/thumbnail3.png" class="thumbnail"></a>
				<div class="flex-div">
					<img src="images/jack.png">
					<div class="vid-info">
						<a href="">Best Channel to learn coding that help you to be a web developer</a>
						<p>Easy Tutorials</p>
						<p>15k Vies &bull; 2 days</p>
					</div>
				</div>
			</div>
			</div>
			<div class="col-sm-3">
				<div class="vid-list">
				<a href=""><img src="images/thumbnail4.png" class="thumbnail"></a>
				<div class="flex-div">
					<img src="images/jack.png">
					<div class="vid-info">
						<a href="">Best Channel to learn coding that help you to be a web developer</a>
						<p>Easy Tutorials</p>
						<p>15k Views &bull; 2 days</p>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3">
				<div class="vid-list">
					<a href="play-video.php"><img src="images/thumbnail1.png" class="thumbnail"></a>
					<div class="flex-div">
						<img src="images/jack.png">
						<div class="vid-info">
							<a href="">Best Channel to learn coding that help you to be a web developer</a>
							<p>Easy Tutorials</p>
							<p>15k Vies &bull; 2 days</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="vid-list">
				<a href=""><img src="images/thumbnail2.png" class="thumbnail"></a>
				<div class="flex-div">
					<img src="images/jack.png">
					<div class="vid-info">
						<a href="">Best Channel to learn coding that help you to be a web developer</a>
						<p>Easy Tutorials</p>
						<p>15k Vies &bull; 2 days</p>
					</div>
				</div>
			</div>
			</div>
			<div class="col-sm-3">
				<div class="vid-list">
				<a href=""><img src="images/thumbnail3.png" class="thumbnail"></a>
				<div class="flex-div">
					<img src="images/jack.png">
					<div class="vid-info">
						<a href="">Best Channel to learn coding that help you to be a web developer</a>
						<p>Easy Tutorials</p>
						<p>15k Vies &bull; 2 days</p>
					</div>
				</div>
			</div>
			</div>
			<div class="col-sm-3">
				<div class="vid-list">
				<a href=""><img src="images/thumbnail4.png" class="thumbnail"></a>
				<div class="flex-div">
					<img src="images/jack.png">
					<div class="vid-info">
						<a href="">Best Channel to learn coding that help you to be a web developer</a>
						<p>Easy Tutorials</p>
						<p>15k Vies &bull; 2 days</p>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>