<?php 
require_once('lib/functions.php');
$db = new class_functions();  
?>
<html>
<head>
  <title>Welcome-Home 
  </title>
  <link rel="icon" href="images\logo.png" type="png">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.css">
  <link rel="stylesheet" type="text/css" href="css/Style.css">
  <script type="text/javascript" src="js\\bootstrap.js"> </script>
  <script type="text/javascript" src="js\\bootstrap.bundle.js"> </script>
<style>
  </style> 
</head>
<body  style="background-repeat:no-repeat; background-size: 100% 100%;background-color:#ffffe6;">
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background: linear-gradient(to right, #9900ff 0%, #ff99cc 100%) !important;">
  <div class="container-fluid" style="background-color:black;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a href="index.php"> <img class="comp_logo"src="images/logo.png"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav_btn" style="--clr:#1e9bff" href="admin_login.php">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav_btn" style="--clr:#1e9bff" href="registration.php">SignUp</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav_btn" style="--clr:#1e9bff" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav_btn" style="--clr:#1e9bff" href="contact_us.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav_btn" style="--clr:#1e9bff" style="--clr:#1e9bff" href="about_us.php">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>
<br>
<div class="heading" >
<center><h1>#Solution_Tech Courses</h1></center>
<center><h4>Interactive Technical Courses</h4></center>
</div>
<br>
<br>
<br>
<br>
<div style=" width:1300px; margin-left:100px; margin-bottom: 50px; border-radius: 10px;background-image: url(images/Bg_img.png) ;background-repeat:no-repeat;  background-size: 100% 100%;">
<br>
<br>
<h1 style="  background: linear-gradient(to right, #6666ff 0%, #ff99cc 100%);border:2px solid white;"><label style="margin-left:120px; color:white; font-size: 30px;">Our Courses :</label></h1>
<br>
    <?php
			$users_data = array();
			$users_data = $db-> get_course_data();
			if(!empty($users_data))
			{
				$counter = 0;
				foreach( $users_data as $record)
				{
					$res_id			=	$users_data[$counter]['id'];
					$res_image 	= 	$users_data[$counter]['image'];
					$res_amount=	$users_data[$counter]['amount'];
					$res_title	=	$users_data[$counter]['title'];
					$res_description	=	$users_data[$counter]['description'];
				?>
<div class="card cstm-card c " style="width: 18rem; display:inline-table; margin-left:110px; margin-bottom:40px;border:1px solid black; height:300px !important;">
  <img style="height:135px;" src="<?php echo $res_image?>" class="card-img-top cstm-img" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $res_title?><br><br><label style="color:green; font-weight: bold;"><?php echo $res_amount?>₹</label></h5><br>
    <p class="card-text"><?php echo $res_description?></p>
	<center><a href="course_detail.php?id=<?php echo $res_id	 ?>&amount=<?php  echo 	$res_amount?>&title=<?php echo $res_title?>"><input   type="submit" class="btn btn-primary" value="Buy Now" > </a></center>
  </div>
</div>
<?php
					$counter++;	
				}
			}
			else
			{
                ?>
			<label style="margin-left:500px; font-size:30px;"><?php	echo "No data found ... 😟!";?></label>
            <?php
			}
		?>
      </div>
    </div>
  </div>
</body>
</html>
