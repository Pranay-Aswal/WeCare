<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-wrench,.fa-gears,.fa-info-circle{font-size:200px}
html {
  scroll-behavior: smooth;
}
</style>

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <meta name="viewport" content="i
  nitial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>WeCARE.com</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">  
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">


<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
  <!-- loader  -->
  
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
    <div class="header-top">
      <div class="header" style="background-color: white;">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <a href="home.php"><img src="images/logo.png" alt="#" /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">
         
               <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                      <li class="active" > <a style="font-size:20px;" href="home.php">Home</a> </li>
                      <li> <a style="font-size:20px;" href="#testimonial" onclick ="document.location.href = 'login.php'">LOGIN</a> </li>
                      <li> <a style="font-size:20px;" href="#Plants" onclick ="document.location.href = 'profile.php'">My Profile</a> </li>
                      <li> <a style="font-size:20px;" href="#about">About</a> </li>
                      <li> <a style="font-size:20px;" href="#contact">Contact Us</a> </li>
                      <li> <a style="font-size:20px;" href="#about" onclick ="document.location.href = 'logout.php'">LOGOUT</a> </li>
                     <li> <a href="#"><img src="icon/icon_b.png" alt="#" /></a></li>
                     </ul>
                   </nav>
                 </div>
               </div> 
              </div>
           </div>
         </div>
       </div>
     </div>
   </header>

<style>
.main{
  position: absolute;
  height: 90%;
  width: 100%;
}
.box{
  background-color: #fff;
     box-shadow: #A4A4A4 0px 0px 13px 5px;
     margin: 40px 30px 20px 40px;
     width: 95%;
     height: 335px;
}

.button {
  background-color: #283C09; /* Green */
  border: none;
  color: white;
  padding: 10px 36px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-left: 860px;
  margin-top: 12px;
  border-radius: 5px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button:hover{
   box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.info{
  color: #644A10;
  margin-left: 590px;
  margin-top: 15px;
}
.info1{
  color: #644A10;
  margin-left: 890px;
  float: right;
  margin-top: -124px; 
  margin-right: 70px;
}

</style>


<!--- <div class="main">
<div class="box">
  <img src="images/p1.jpg">
  <h1 style="color: #644A10; margin-top: 10px; text-align: center;  font-size: 22px;"><b>BRUNO</b></h1>
    <h2 style="color: #644A10; text-align: center;  font-size: 16px; margin-top: -10px;">Dog - The Beagle</h2>
    <div class="button">More Info</div>
  </div>
  <div class="box1">
  <img src="images/p3.jpg">
  <h1 style="color: #644A10; margin-top: 13px; text-align: center;  font-size: 22px;"><b>OSCAR</b></h1>
    <h2 style="color: #644A10; text-align: center;  font-size: 16px; margin-top: -10px;">Cat - Siberian</h2>
    <div class="button">More Info</div>
  </div>
    <div class="box2">
  <img src="images/p2.jpg">
  <h1 style="color: #644A10; margin-top: 10px; text-align: center;  font-size: 22px;"><b>TOMMY</b></h1>
    <h2 style="color: #644A10; text-align: center;  font-size: 16px; margin-top: -10px;">Dog - Labrador Retriever</h2>
    <div class="button">More Info</div>
    </div>
</div> --->

<?php
include 'insert.php';
$sql = "SELECT * FROM `plant_info`;";
$result = $conn->query($sql)->fetch_all(MYSQLI_ASSOC);
foreach ($result as $row):
?>
<div class="main">
<div class="box">
  <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['Image']);?>" style="height: 335px; width: 500px; object-fit: fill;"></img>
  <h1 style="color: #344D0D; margin-top: -320px; margin-left: 500px; text-align: center;  font-size: 32px; text-transform: uppercase;"><b><?= $row['Plant']; ?></b></h1>
    <h2 style="color: #283C09; text-align: center; margin-left: 500px; font-size: 20px; margin-top: -10px;"><?= $row['Nature']; ?></h2>
    <div class="info" >
      <p style="font-size: 18px;"><b>Age : </b><?= $row['Age']; ?> months</p>
      <p style="font-size: 18px;"><b>Watering Frequency : </b><?= $row['Watering']; ?> hours</p>
    <p style="font-size: 18px;"><b>Date of Lending : </b><?= $row['Date_of_Lending']; ?></p>
      <p style="font-size: 18px;"><b>Date of Return : </b><?= $row['Date_of_Return']; ?></p>
      <p style="font-size: 18px;"><b>Phone Number : </b><?= $row['Phone_Number']; ?></p></div>
       <div class="info1">
      <p style="font-size: 18px;"><b>Address : </b><?= $row['Address']; ?></p>
      <p style="font-size: 18px; "><b>Additional Info : </b><?= $row['Info']; ?></p></div>
      <div class="button" onclick="document.location.href='index.php'">ADOPT THIS PLANT</div>
</div>
<? $_SESSION["Phone_Number"] = $row['Phone_Number'];?>

<?php
endforeach;
?>




</body>
</html>
