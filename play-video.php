<?php
    require_once('api/login_with_google/setup.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Video Share Website</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="javascript/style.js"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
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
			<button type="submit" class="sign">
				<a href="<?php echo $google->createAuthUrl();?>">Sign in</a>
			</button>
		</div>
	</nav>

	<!--------- sidebar ----------------->
	<div class="sidebar-open" id="mySidebar">
			<button class="closebtn" onclick="closeNav()">☰ <img src="images/logo.png" class="logo_1"></button>
			<a href="index.php"><img src="images/home.png"><p>Home</p></a>
  			<a href=""><img src="images/shorts.png"><p>Shorts</p></a>
  			<a href="subscriprion.php"><img src="images/subscriprion.png"><p>Subscriprion</p></a>
  			<hr>
  			<a href=""><img src="images/library.png"><p>Library</p></a>
  			<a href=""><img src="images/history.png"><p>History</p></a>
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
	<div class="container-fluid play-container">
		<div class="row">
			<div class="play-video">
				<video controls autoplay>
					<source src="images/video.mp4" type="video/mp4">
				</video>
				<div class="tags">
					<a href="">#Coding</a>
					<a href="">#HTML</a> 
					<a href="">#CSS</a> 
					<a href="">#Javascript</a>
				</div>
				<h3>Best Youtube Channel To Learn Web Development</h3>
				<div class="play-video-info">
					<p>1225 Views &bull; 2 days ago</p>
					<div>
						<a href=""><img src="images/like.png">125</a>
						<a href=""><img src="images/dislike.png">2</a>
						<a href=""><img src="images/share.png">Share</a>
						<a href=""><img src="images/save.png">Save</a>
					</div>
				</div>
				<hr>
				<div class="plublisher">
					<img src="images/jack.png">
					<div>
						<p>Easy Tutorials</p>
						<span>500k Subscribers</span>
					</div>
					<button type="button">Subscribers</button>
				</div>
				<div class="vid-decription">
					<p>Channel that makes learning easy</p>
					<p>Subscribe Easy Tutorials to watch more tutorials on web development</p>
					<hr>
					<h4>133 Comments</h4>
					<div class="add-comments">
						<img src="images/jack.png">
						<input type="text" placeholder="Write Comments....">
					</div>
					<div class="old-comment">
						<img src="images/jack.png">
						<div>
							<h3>Jack Nicholson <span>2 days ago</span></h3>
							<p>Since comments are created one at a time, usually singular applies. But you can enter multiple comments in one comment field.</p>
							<div class="acomment-action">
								<img src="images/like.png">
								<span>244</span>
								<img src="images/dislike.png">
								<span>2</span>
								<span>REPLY</span>
								<a href="">All replies</a>
							</div>
						</div>
					</div>
					<div class="old-comment">
						<img src="images/jack.png">
						<div>
							<h3>Jack Nicholson <span>2 days ago</span></h3>
							<p>Since comments are created one at a time, usually singular applies. But you can enter multiple comments in one comment field.</p>
							<div class="acomment-action">
								<img src="images/like.png">
								<span>244</span>
								<img src="images/dislike.png">
								<span>2</span>
								<span>REPLY</span>
								<a href="">All replies</a>
							</div>
						</div>
					</div>
					<div class="old-comment">
						<img src="images/jack.png">
						<div>
							<h3>Jack Nicholson <span>2 days ago</span></h3>
							<p>Since comments are created one at a time, usually singular applies. But you can enter multiple comments in one comment field.</p>
							<div class="acomment-action">
								<img src="images/like.png">
								<span>244</span>
								<img src="images/dislike.png">
								<span>2</span>
								<span>REPLY</span>
								<a href="">All replies</a>
							</div>
						</div>
					</div>
					<div class="old-comment">
						<img src="images/jack.png">
						<div>
							<h3>Jack Nicholson <span>2 days ago</span></h3>
							<p>Since comments are created one at a time, usually singular applies. But you can enter multiple comments in one comment field.</p>
							<div class="acomment-action">
								<img src="images/like.png">
								<span>244</span>
								<img src="images/dislike.png">
								<span>2</span>
								<span>REPLY</span>
								<a href="">All replies</a>
							</div>
						</div>
					</div>
					<div class="old-comment">
						<img src="images/jack.png">
						<div>
							<h3>Jack Nicholson <span>2 days ago</span></h3>
							<p>Since comments are created one at a time, usually singular applies. But you can enter multiple comments in one comment field.</p>
							<div class="acomment-action">
								<img src="images/like.png">
								<span>244</span>
								<img src="images/dislike.png">
								<span>2</span>
								<span>REPLY</span>
								<a href="">All replies</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="right-sidebar">
				<div class="side-video-list">
					<a class="small-thumbnail"><img src="images/thumbnail1.png"></a>
					<div class="vid-info">
						<a href="">Best Channel to learn coding that help you to be a web developer</a>
						<p>Easy Tutorials</p>
						<p>15k Vies &bull; 2 days</p>  
					</div>
				</div>
				<div class="side-video-list">
					<a class="small-thumbnail"><img src="images/thumbnail1.png"></a>
					<div class="vid-info">
						<a href="">Best Channel to learn coding that help you to be a web developer</a>
						<p>Easy Tutorials</p>
						<p>15k Vies &bull; 2 days</p>  
					</div>
				</div>
				<div class="side-video-list">
					<a class="small-thumbnail"><img src="images/thumbnail1.png"></a>
					<div class="vid-info">
						<a href="">Best Channel to learn coding that help you to be a web developer</a>
						<p>Easy Tutorials</p>
						<p>15k Vies &bull; 2 days</p>  
					</div>
				</div>

				<div class="side-video-list">
					<a class="small-thumbnail"><img src="images/thumbnail1.png"></a>
					<div class="vid-info">
						<a href="">Best Channel to learn coding that help you to be a web developer</a>
						<p>Easy Tutorials</p>
						<p>15k Vies &bull; 2 days</p>  
					</div>
				</div>
				<div class="side-video-list">
					<a class="small-thumbnail"><img src="images/thumbnail1.png"></a>
					<div class="vid-info">
						<a href="">Best Channel to learn coding that help you to be a web developer</a>
						<p>Easy Tutorials</p>
						<p>15k Vies &bull; 2 days</p>  
					</div>
				</div>
				<div class="side-video-list">
					<a class="small-thumbnail"><img src="images/thumbnail1.png"></a>
					<div class="vid-info">
						<a href="">Best Channel to learn coding that help you to be a web developer</a>
						<p>Easy Tutorials</p>
						<p>15k Vies &bull; 2 days</p>  
					</div>
				</div>
				<div class="side-video-list">
					<a class="small-thumbnail"><img src="images/thumbnail1.png"></a>
					<div class="vid-info">
						<a href="">Best Channel to learn coding that help you to be a web developer</a>
						<p>Easy Tutorials</p>
						<p>15k Vies &bull; 2 days</p>  
					</div>
				</div>

				<div class="side-video-list">
					<a class="small-thumbnail"><img src="images/thumbnail1.png"></a>
					<div class="vid-info">
						<a href="">Best Channel to learn coding that help you to be a web developer</a>
						<p>Easy Tutorials</p>
						<p>15k Vies &bull; 2 days</p>  
					</div>
				</div>
				<div class="side-video-list">
					<a class="small-thumbnail"><img src="images/thumbnail1.png"></a>
					<div class="vid-info">
						<a href="">Best Channel to learn coding that help you to be a web developer</a>
						<p>Easy Tutorials</p>
						<p>15k Vies &bull; 2 days</p>  
					</div>
				</div>
			</div>
		</div>
		
	</div>
</body>
</html>