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
	<title>Lowkey Esports Mission</title>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Blueprint: Horizontal Slide Out Menu</title>
	<link rel="stylesheet" type="text/css" href="CSS/home.css" />
	<link rel="stylesheet" type="text/css" href="CSS/navbar.css" />
	<link rel="stylesheet" href="css/mv.css">
	<link rel="stylesheet" href="CSS/footer.css">
	<script src="JS/SlideOut.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<style>
    body  {
    background-image: url("Pictures/lowback.png");
    }
</style>
</head>

<body>

<div class="container">
			<header class="clearfix">
				<h1>Lowkey Esports Mission</h1>
				
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
									<li><a href="mission.php"><img src="Pictures/mission.png" alt="img08"/><span>Mission</span></a></li>
									<li><a href="teams.php"><img src="Pictures/team.png" alt="img09"/><span>Teams</span></a></li>
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
  			<center><img class="vis" src="Pictures/pubg.jpg" alt="">
			  <img class="vis" src="Pictures/lol.jpg" alt="">
			  <img class="vis" src="Pictures/cod.jpg" alt="">
			  </center>	
		</div>
		</div>
		<div class="cimg">
  			<center><img class="vis" src="Pictures/mission1.svg" alt=""></center>	
		</div>
		<div class="thead">
  			<h1>Our Mission</h1>
		</div>
		<div class="qtext">
  			<div class="text">
		
				<p>Lowkey Community is an esports and well-established multi-gaming platform. We involve a wide variety of gamers who strive to build a positive environment that embraces honesty, passion, dedication, loyalty, and consistency. We strive to provide quality and transparency to our members, staff, and our fans. </p>
				<br>
				
				<p>Lowkey Esports started as a dream for the people behind its birth. They wanted an organization that allows everyone involved to continue their lifestyle, and most of all, enjoy their lifestyle. Our founders are no different from any other video game enthusiasts, and they seek to give back to the community. Since our launch in January 2019, we have been blown away with the talent in our teams and staff. In just a few months, Lowkey Esports has succeeded in reaching hundreds of thousands of audiences, as well as signing 8 teams from various popular games.</p>
				<br>
			  </div>
		</div>
		
		
			

		


<br><br><br><br><br>
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