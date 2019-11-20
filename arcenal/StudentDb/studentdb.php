<?php 
  session_start(); 
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ../login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: ../login.php");
  }
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<title>Home</title>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Blueprint: Horizontal Slide Out Menu</title>
	<link rel="stylesheet" type="text/css" href="../CSS/home.css" />
	<link rel="stylesheet" type="text/css" href="../CSS/navbar.css" />
	<link rel="stylesheet" href="../CSS/footer.css">
	<link rel="stylesheet" href="../CSS/studentdb.css">
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/pure-min.css" integrity="sha384-oAOxQR6DkCoMliIh8yFnu25d7Eq/PHS21PClpwjOTeU2jRSq11vu66rf90/cZr47" crossorigin="anonymous">
	<script src="../JS/SlideOut.js"></script>

</head>

<body>
<div class="container">
			<header class="clearfix">
				<span>Asian Institute of Computer Studies </span>
				<h1>Web Portal</h1>
				<nav>
				<a href="../home.php?logout='1'" data-info="Log out"><img class="loglogo" src="../icons/switch.svg"></a>
				</nav>
			</header>	
			<div class="main">
				<nav class="cbp-hsmenu-wrapper" id="cbp-hsmenu-wrapper">
					<div class="cbp-hsinner">
						<ul class="cbp-hsmenu">
							<li>
								<a href="../home.php">Home</a>
							</li>
							<li>
								<a>About AICS</a>
								<ul class="cbp-hssubmenu cbp-hssub-rows">
									<li><a href="../History.php"><img src="../Pictures/169112.svg" alt="img07"/><span>History</span></a></li>
									<li><a href="../MVission.php"><img src="../Pictures/mission.svg" alt="img08"/><span>Mission and Vision</span></a></li>
									<li><a href="../Facility.php"><img src="../Pictures/facility.svg" alt="img09"/><span>Facility</span></a></li>
								</ul>
							</li>
							<li>
								<a href="#">Database</a>
								<ul class="cbp-hssubmenu">
								<li><a href="../studentdb.php"><img src="../Pictures/student.svg" alt="img10"/><span>Students' PortalDB</span></a></li>
									<li><a href="../Teacherdb/teacherdb.php"><img src="../Pictures/teacher.svg" alt="img06"/><span>Teachers' PortalDB</span></a></li>
								</ul>
							</li>
							<li><a href="../Contact.php">Contact</a></li>
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
		<br><br><br>
		<?php
			$servername = "localhost";
			$username="root";
			$password="";
			$dbname="hack";
			$id="";
			$name="";
			$fname="";
			$email="";
			$phone="";
			$state="";
			$qualification="";
			$branch="";
			$rollno="";
			$gender="";
			$birth="birth";
			mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

			//connect to mysql database
				include_once("config.php");
			//get data from the form
			function getData()
			{
				$data = array();

				$data[1]=$_POST['name'];
				$data[2]=$_POST['fname'];
				$data[3]=$_POST['email'];
				$data[4]=$_POST['phone'];
				$data[5]=$_POST['state'];
				$data[6]=$_POST['qualification'];
				$data[7]=$_POST['branch'];
				$data[8]=$_POST['rollno'];
				$data[9]=$_POST['gender'];
				$data[10]=$_POST['birth'];
				return $data;
			}
			//search
			if(isset($_POST['search']))
			{
				$info = getData();
				$search_query="SELECT * FROM smash WHERE id = '$info[0]'";
				$search_result=mysqli_query($conn, $search_query);
					if($search_result)
					{
						if(mysqli_num_rows($search_result))
						{
							while($rows = mysqli_fetch_array($search_result))
							{
								$id = $rows['id'];
								$name = $rows['name'];
								$fname = $rows['fname'];
								$email = $rows['email'];
								$phone = $rows['phone'];
								$state = $rows['state'];
								$qualification = $rows['qualification'];
								$branch = $rows['branch'];
								$rollno = $rows['rollno'];
								$gender = $rows['gender'];
								$birth = $rows['birth'];

							}
						}else{
							echo("no data are available");
						}
						} else{
							echo("result error");
						}

					}
					//insert
					if(isset($_POST['insert'])){
						$info = getData();
						$insert_query="INSERT INTO `smash`(`name`, `fname`, `email`, `phone`,`state`,`qualification`,`branch`,`rollno`,`gender`,`birth`) VALUES ('$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]','$info[7]','$info[8]','$info[9]','$info[10]')";
						try{
							$insert_result=mysqli_query($conn, $insert_query);
							if($insert_result)
							{
								if(mysqli_affected_rows($conn)>0){
									echo("data inserted successfully");

								}else{
									echo("data are not inserted");
								}
							}
						}catch(Exception $ex){
							echo("error inserted".$ex->getMessage());
						}
					}
					//delete
					if(isset($_POST['delete'])){
						$info = getData();
						$delete_query = "DELETE FROM `smash` WHERE id = '$info[0]'";
						try{
							$delete_result = mysqli_query($conn, $delete_query);
							if($delete_result){
								if(mysqli_affected_rows($conn)>0)
								{
									echo("data deleted");
								}else{
									echo("data not deleted");
								}
							}
						}catch(Exception $ex){
							echo("error in delete".$ex->getMessage());
						}
					}
					//edit
					if(isset($_POST['update'])){
						$info = getData();
						$update_query="UPDATE `smash` SET `name`='$info[1]',fname='$info[2]',email='$info[3]',phone='$info[4]',state='$info[5]',qualification='$info[6]',branch='$info[7]',rollno='$info[8]',rollno='$info[9]',birth='$info[10]' WHERE id = '$info[0]'";
						try{
							$update_result=mysqli_query($conn, $update_query);
							if($update_result){
								if(mysqli_affected_rows($conn)>0){
									echo("data updated");
								}else{
									echo("data not updated");
								}
							}
						}catch(Exception $ex){
							echo("error in update".$ex->getMessage());
						}
					}
					?>
				<div class="formcon">
				<form method="post" action="">
					<h1>Student Name</h1>
  	  				<input type="text" name="name" class="form-control" placeholder="Enter Student Name" value="<?php echo($name);?>" required>

					<h1>Father Name</h1>
					<input type="text" name="fname" class="form-control" placeholder="Enter Father Name" value="<?php echo($fname);?>" required>			

					
					<label for="country">Country</label>
					<select id="country" name="country">
					<option value="australia">Australia</option>
					<option value="canada">Canada</option>
					<option value="usa">USA</option>
					</select>
				
					<input type="submit" value="Submit">
				</form>
				</div>
				</div>
					








































  
  
  <footer>
	  <img class="imgl"src="../Pictures/Aics.png" style>
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

<script src="../js/SlideOutMenu.min.js"></script>
		<script>
			var menu = new cbpHorizontalSlideOutMenu( document.getElementById( 'cbp-hsmenu-wrapper' ) );
		</script>
</html>