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
	<title>Lowkey Esports Teams</title>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Blueprint: Horizontal Slide Out Menu</title>
	<link rel="stylesheet" type="text/css" href="CSS/home.css" />
	<link rel="stylesheet" type="text/css" href="CSS/navbar.css" />
	<link rel="stylesheet" href="CSS/footer.css">
	<link rel="stylesheet" href="CSS/Facility.css">
	<script src="JS/SlideOut.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<style>
    body  {
    background-image: url("Pictures/background.png");
	}
	</style>
</head>

<body>

<div class="container">
			<header class="clearfix">
				<h1>Lowkey Esports Teams</h1>
				
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
									<li><a href="History.php"><img src="Pictures/scroll.png" alt="img07"/><span>History</span></a></li>
									<li><a href="MVission.php"><img src="Pictures/mission.png" alt="img08"/><span>Mission</span></a></li>
									<li><a href="Facility.php"><img src="Pictures/team.png" alt="img09"/><span>Teams</span></a></li>
								</ul>
							</li>
							<li>
								<a href="#">Database</a>
								<ul class="cbp-hssubmenu">
									<li><a href="Studentdb/index.php"><img src="Pictures/student.svg" alt="img10"/><span>Students' PortalDB</span></a></li>
									<li><a href="Teacherdb/index.php"><img src="Pictures/teacher.svg" alt="img06"/><span>Teachers' PortalDB</span></a></li>
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
		
		<div class="cimg">
		<center><h1>East Teams</h1></center>
  			<center>
			  <img class="vis" src="Pictures/lowkeym1.png" alt="">
			  <img class="vis" src="Pictures/lowkey1.png" alt="">
			  <img class="vis" src="Pictures/lowkeym2.png" alt="">
			  </center>	
		</div>
		<div class="cimg">
		<center><h1>West Teams</h1></center>
  			<center>
			  <img class="vis" src="Pictures/lowkey3.png" alt="">
			  <img class="vis" src="Pictures/lowkey.png" alt="">
			  <img class="vis" src="Pictures/lowkey2.png" alt="">
			  </center>	
		</div>
		</div>
		<br><br><br><br><br><br><br>
			

		



  <footer>
	  <img class="imgl"src="Pictures/lk.png" style>
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