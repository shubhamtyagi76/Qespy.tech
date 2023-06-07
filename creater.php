<?php
    error_reporting(0);
    require_once('api/login_with_google/setup.php');
    if(isset($_GET['code'])){
        //token
        $token = $google->fetchAccessTokenWithAuthCode($_GET['code']);
        $_SESSION['token'] = $token;
        if(!isset($token["error"])){
            $google->setAccessToken($token['access_token']);
            $service = new Google_Service_Oauth2($google);

            $data = $service->userinfo->get();

            $_SESSION['name'] = $data['name'];
            $_SESSION['src'] = $data[picture];
            $_SESSION['email'] = $data['email'];
        }
    }
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
  	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
  	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript">
	window.onload = function () {
        OpenBootstrapPopup();
    };
    function OpenBootstrapPopup() {
        $("#simpleModal").modal('show');
    }
</script>
<style type="text/css">
	.modal{
		background-color:white ;
	}
	.modal-content {
		height: 550px;
		width:1000px;
		margin-left: -250px;
		box-shadow: -27px 10px 500px rgb(180, 180, 180);
	}
	.modal-header img
	{
		width: 22px;
		margin-left: 720px;
		margin-top: 5px;
	}
	.modal-body h6
	{
		text-align: center;
		margin-top: 200px;
	}
	.modal-body p
	{
		font-size: 13px;
		text-align: center;
		color: rgb(120, 120, 120);
	}
	.modal-body .btn
	{
		text-align: center;
		margin-left: 400px;
		margin-top: 20px;
		background-color: #065fcd;
		border: none;
		color: #fff;
		padding: 7px 30px;
		margin-bottom: 40px;
	}
	.modal-body .select-p
	{
		text-align: center;
		color: rgb(120, 120, 120);
	}
	.modal-body .select-p a{
		font-size: 13px;
		color: blue;
		cursor: pointer;

	}
	.modal-body .select-p a:hover{
		color: blue;
	}
	.modal-body .select-p-1
	{
		text-align: center;
		color: rgb(120, 120, 120);
		margin-top: -10px;
	}
	.modal-body .select-p-1 a{
		font-size: 13px;
		color: blue;
		cursor: pointer;

	}
	.modal-body .select-p-1 a:hover{
		color: blue;
	}
	.modal-body form input
	{
    	margin-left: 400px;
	}
</style>
</head>
<body class="body">


	 <!-- <------------ Onload Popup System ---------->

		
	<div id="simpleModal" class="modal" tabindex="-1" role="dialog">
	   	<div class="modal-dialog" role="document">
		    <div class="modal-content">
		        <div class="modal-header">
		            <h3 class="modal-title">Upload Videos</h3>
				    <img src="images/comment.png">
				    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				    </button>
				</div>
				<div class="modal-body">
				    <h6>Drag and drop video files to upload</h6>
					<p>Your videos will be private until you publish them.</p>
					<form action="controllor/uploader.php" method="post" enctype="multipart/form-data">
						<input type="file"  name="fileToUpload">
						<br>
						<button type="submit" class="btn" name="submit">SUBMIT</button>
					</form>
					<p class="select-p">By submitting your videos to YouTube, you acknowledge that you agree to YouTube's<a> Terms of Service </a>and <a>Community Guidelines.</a></p>
					<p class="select-p-1">Please be sure not to violate others' copyright or privacy rights.<a> Learn more</a></p>
				</div>
			</div>
	    </div>
	</div>


	<!-- <----------- Nav Bar System --------->


	<nav class="flex-div">
		<div class="nav-left flex-div">
			<button class="openbtn" onclick="openNav()">☰</button>
			<a href="index.html"><img src="images/logo.png" class="logo"></a>
		</div>
		<div class="nav-middle flex-div">
			<div class="search-box flex-div">
				<input type="text" name="" placeholder="Search Your acrosh Channel">
				<img src="images/search.png">
			</div>
		</div>
		<div class="nav-right flex-div ">
			<button><img src="images/help.png"></button>
			<button class="create"><img src="images/upload.png">
			</button>
			<button class="profile" onclick="profile()"><img src="<?php echo $_SESSION['src']?>">
				<div class="pro_popuptext" id="pro_Popup">
					<a href=""><img class="pro_image" src="<?php echo $_SESSION['src']?>"></a>
					<p class="pro_name"><?php echo $_SESSION['name']?></p>
					<br>
					<p class="pro_mail"><?php echo $_SESSION['email']?></p>
					<br>
					<a href=""><p class="pro_manage">Manage your Google Account</p></a>
					<hr>
					<a href=""><img src="images/theme.png"><p class="channel">Your Channel</p></a>
					<a href="api/login_with_google/logout.php"><img src="images/setting.png"><p class="sign_out">Sign out</p></a>
					<hr>
					<a href=""><img src="images/theme.png"><p class="appearance">Apppearance:Device theme</p></a>
					<hr>
					<a href=""><img src="images/setting.png"><p class="setting">Setting</p></a>
					<hr>
					<a href=""><img src="images/help.png"><p class="help">Help</p></a>
					<a href=""><img src="images/feedback.png"><p class="feedback">Send Feedback</p></a>
				</div>
			</button>
		</div>
	</nav>


	<!-- <------- siderbar System ------->


	<div class="sidebar">
		<div class="w3-sidebar w3-bar-block">
			<a class="w3-bar-item"><button class="create_profile"><img src="<?php echo $_SESSION['src']?>"></button></a>
			<a class="w3-bar-item w3-button" ><img src="images/dashboard.png"></a>
			<a class="w3-bar-item w3-button"><img src="images/playlist.png"></a>
			<a class="w3-bar-item w3-button"><img src="images/analytics.png"></a>
			<a class="w3-bar-item w3-button"><img src="images/comment.png"></a>
			<a class="w3-bar-item w3-button"><img src="images/subtitles.png"></a>
			<a class="w3-bar-item w3-button"><img src="images/copyright.png"></a>
			<a href="history.html" class="w3-bar-item w3-button"><img src="images/profit.png"></a>
			<a class="w3-bar-item w3-button"><img src="images/customize.png"></a>
			<a class="w3-bar-item w3-button"><img src="images/music.png"></a>
		</div>
	</div>

	
	<!-- <------------ Sidebar Open System ----------->


	<div class="sidebar-open" id="mySidebar">
			<button class="closebtn" onclick="closeNav()">☰ <img src="images/logo.png" class="logo_1"></button>
			<a class="w3-bar-item_1"><button class="create_profile"><img src="<?php echo $_SESSION['src']?>"></button></a>
			<br>
			<br>
			<br>
			<a class="w3-bar-item_1"><p class="channel_name">Your Channel</p></a>
			<a class="w3-bar-item_1"><p class="pro_name"><?php echo $_SESSION['name']?></p></a>
			<a class="w3-bar-item w3-button" ><img src="images/dashboard.png"><p>Dashboard</p></a>
			<a class="w3-bar-item w3-button"><img src="images/playlist.png"><p>Contant</p></a>
			<a class="w3-bar-item w3-button"><img src="images/analytics.png"><p>Analytics</p></a>
			<a class="w3-bar-item w3-button"><img src="images/comment.png"><p>Comments</p></a>
			<a class="w3-bar-item w3-button"><img src="images/subtitles.png"><p>Subtitles</p></a>
			<a class="w3-bar-item w3-button"><img src="images/copyright.png"><p>Copyright</p></a>
			<a class="w3-bar-item w3-button"><img src="images/profit.png"><p>Earn</p></a>
			<a class="w3-bar-item w3-button"><img src="images/customize.png"><p>customization</p></a>
			<a class="w3-bar-item w3-button"><img src="images/music.png"><p>Auto Library</p></a>
  			<hr>
  			<a href=""><img src="images/setting.png"><p>Setting</p></a>
  			<a href=""><img src="images/report.png"><p>Report History</p></a>
  			<a href=""><img src="images/feedback.png"><p>Send Feedback</p></a>
  			<hr>
		</div>
	</div>
</body>
</html>