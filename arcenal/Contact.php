<?php 
  session_start(); 
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Lowkey Esports Philippines Contact</title>
	<link rel="stylesheet" type="text/css" href="CSS/home.css" />
	<link rel="stylesheet" type="text/css" href="CSS/navbar.css" />
	<link rel="stylesheet" href="CSS/footer.css">
	<link rel="stylesheet" href="CSS/contact.css">
	<script src="JS/SlideOut.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<style>
    body  {
    background-image: url("Pictures/lkb.png");
    }
</style>
</head>

<body>

<div class="container">
			<header class="clearfix">
				<span>Lowkey Esports Philippines Contact</span>
				<nav>
				<a href="home.php?logout='1'" data-info="Log out"><img class="loglogo" src="Pictures/logout.png"></a>
				</nav>
			</header>	
	
				
			<div class="main">
				<nav class="cbp-hsmenu-wrapper" id="cbp-hsmenu-wrapper">
					<div class="cbp-hsinner">
						<ul class="cbp-hsmenu">
							<li>
								<a href="home.php">Home</a>
							</li>
							<li>
								<a>About Lowkey Esports</a>
								<ul class="cbp-hssubmenu cbp-hssub-rows">
									<li><a href="history.php"><img src="Pictures/scroll.png" alt="img07"/><span>History</span></a></li>
									<li><a href="mission.php"><img src="Pictures/mission.png" alt="img08"/><span>Mission</span></a></li>
									<li><a href="teams.php"><img src="Pictures/team.png" alt="img09"/><span>Teams</span></a></li>
								</ul>
							</li>
							<li>
								<a href="#">Add Database</a>
								<ul class="cbp-hssubmenu">
									<li><a href="add.html"><img src="Pictures/academy.png" alt="img10"/><span>Lowkey Esports Academy Database</span></a></li>
									<li><a href="index1.php"><img src="Pictures/player.png" alt="img06"/><span>Lowkey Esports Player Database</span></a></li>
								</ul>
							</li>
							<li>
								<a href="#">View Database</a>
								<ul class="cbp-hssubmenu">
									<li><a href="index3.php"><img src="Pictures/academy.png" alt="img10"/><span>Lowkey Esports Academy Database</span></a></li>
									<li><a href="index1.php"><img src="Pictures/player.png" alt="img06"/><span>Lowkey Esports Player Database</span></a></li>
								</ul>
							</li>
							<li><a href="Contact.php">Contact</a></li>
							<li>
								
							<div class="pcon">
							<div class="textcon">
								<p>You're logged in as <strong><?php echo $_SESSION['username']; ?>!</strong></p>
							</div>
							</div>
                            
							</li>
						</ul>

					</div>
				</nav>
			</div>
		</div>

			<div class="containbox">
				<div class="row">
					<div class="column" >
					<b>Contact Us:</b>
  					<br><br>
					Lowkey Esports Philippines
					<br><br><br>
					<b>Email Address:</b>
					<br><br>
					remee@lowkeycommunity.com
					<br><br><br>
					<b>Telephone Number:</b>
					<br><br>
					+1 323-982-5579
					<br><br><br>
					<b>Website:</b>
					<br><br>
					lowkeyesports.gg
					<br><br>
					</div>
					<div class="column" >
							<div class="imgcon">
								<center><img class="imgsoc" src="Pictures/social.png" alt=""></center>
							</div>
							<div class="thead">
							<h1>Social Media</h1>
							</div>
							
							<div class="imgcon1">
							<center><a href="https://www.facebook.com/LowkeyEsportsPH/"><img class="imgsoc1" src="Pictures/facebook.png" alt=""></a></center>
							</div>
							<div class="imgcon1">
							<center>	<a href="https://twitter.com/account/suspended"><img class="imgsoc1" src="Pictures/twitter.png" alt=""></a></center>
							</div>
							
					</div>
				</div>
			</div>

			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

  <footer>
	  <img class="imgl"src="Pictures/lowkey.png" style>
  </footer>
  <div class="content">
				<!-- notification message -->
				<?php if (isset($_SESSION['success'])) : ?>
				<div class="error success" >
					<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
					</h3>
				</div>
				<?php endif ?>
</body>

<script src="js/SlideOutMenu.min.js"></script>
		<script>
			var menu = new cbpHorizontalSlideOutMenu( document.getElementById( 'cbp-hsmenu-wrapper' ) );
		</script>
</html>