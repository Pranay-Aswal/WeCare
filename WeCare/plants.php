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
  height: 230%;
  width:100%;
}
 .lend {
     background-color: #fff;
     box-shadow: #A4A4A4 0px 0px 13px 5px;
     margin: 40px 30px 20px 30px;     
}
 .lend .lend-box {
text-align: left;
float: right;
width: 100%;
max-width: 539px;
padding: 40px 0;
    
}



.lend .lend-box::after {
     position: absolute;
     content: "";
     background: url(../images/crros.png);
     height: 244px;
width: 187px;
bottom: 0;
left: 0;
background-repeat: no-repeat;
}
 .lend .lend-box h2 {

     font-weight: bold;
     color: #fff;
     line-height: 40px;
     font-size: 45px;
     text-transform:uppercase;
     background: #547d13;
     display: inline-block;
     padding: 20px 30px;

 }
 .lend .lend-box p {
     font-size: 17px;
     line-height: 28px;
     color: #000;
     padding: 40px 0px;
}

 .lend .lend-box a {
     font-size: 16px;
border: #070905 solid 1px;
background-color: #070905;
color: #fff;
padding: 9px 0px;
max-width: 171px;
width: 100%;
display: inline-block;
text-align: center;
text-transform: uppercase;
border-radius: 30px;
 }


 .lend .lend-box a:hover{ 
     background-color: #428713;
     border: #428713 solid 1px;
    color: #fff;
 }
 .lend .lend-box_img figure {
     margin: 0;
}
 .lend .lend-box_img figure img {
    width: 100%;
}

 .adopt {
     background-color: #fff;
     box-shadow: #A4A4A4 0px 0px 13px 5px;
     margin: 60px 30px 20px 30px;
         
}
 .adopt .adopt-box {
text-align: left;
float: right;
width: 100%;
max-width: 539px;
padding: 40px 0;
    
}



.adopt .adopt-box::after {
     position: absolute;
     content: "";
     background: url(../images/crros.png);
     height: 244px;
width: 187px;
bottom: 0;
left: 0;
background-repeat: no-repeat;
}
 .adopt .adopt-box h2 {

     font-weight: bold;
     color: #fff;
     line-height: 40px;
     font-size: 45px;
     text-transform:uppercase;
     background: #547d13;
     display: inline-block;
     padding: 20px 30px;

 }
 .adopt .adopt-box p {
     font-size: 17px;
     line-height: 28px;
     color: #000;
     padding: 40px 0px;
}

 .adopt .adopt-box a {
     font-size: 16px;
border: #070905 solid 1px;
background-color: #070905;
color: #fff;
padding: 9px 0px;
max-width: 171px;
width: 100%;
display: inline-block;
text-align: center;
text-transform: uppercase;
border-radius: 30px;
 }


 .adopt .adopt-box a:hover{ 
     background-color: #428713;
     border: #428713 solid 1px;
    color: #fff;
 }
 .adopt .adopt-box_img figure {
 margin: 0;
}
 .adopt .adopt-box_img figure img {
    width: 100%;
}

.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
 bottom: 23px;
  right: 28px;
  width: 280px;
 float: middle;
 margin-left: 40%;
 margin-top: 30px;
}.open-button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}.open-button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}.open-button:hover span {
  padding-right: 25px;
}.open-button:hover span:after {
  opacity: 1;
  right: 0;
}
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 25px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}
.form-container {
  max-width: 300px;
  padding: 10px;
}
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}
.form-container .cancel {
  background-color: #215A16;
}
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

.gotop {
  list-style: none;
  float: right;
  padding-left: 250px;
  margin-top: 90px;
   bottom: 0;
}

ul.a {
  list-style-type: square;
}
</style>

<div class="main">
  <!-- lend  -->
<div id="lend" class="lend">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="lend-box">
          <h2 style="margin-left: 5px; ">LEND A PLANT</h2>
          <ul class="a" style="margin-top: 30px; margin-left: -70px; margin-right: 30px;" >
            <li style="font-size: 20px;">-> Let others take care of your plant while you're on a vacation</li>
           <li style="font-size: 20px;">-> Click the <b>LEND</b> button below and enter the details of your plant</li>
            <li style="font-size: 20px;">-> Please specify the special requirements your plant need in additional info section</li>
          </ul>
          <a href="#" onclick="document.location.href='tlend.php'" style="margin-top: 30px; margin-left: 90px;">LEND</a>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding_rl">
        <div class="lend-box_img">
          <figure><img src="images/plant.jpg" style="height: 485px;"></figure>
        </div>
      </div>
    </div>

  </div>
</div>

<div id="adopt" class="adopt">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" style="margin-left: 50%;">
        <div class="adopt-box">
          <h2 style="margin-left: 5px;">ADOPT A PLANT</h2>
          <ul class="a" style="margin-top: 30px; margin-right: 70px; margin-left: -30px;">
            <li style="font-size: 20px;">-> Help in taking care of other's plants</li>
           <li style="font-size: 20px;">-> Click the <b>ADOPT</b> button below and choose the plant you would like to take care of</li>
            <li style="font-size: 20px;">-> Please go through the plant details carefully before selecting</li>
          </ul>
          <a href="#" style="margin-top: 30px; margin-left: 130px;" onclick="document.location.href='tadopt.php'">ADOPT</a>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding_rl" style="margin-left: 0.1px; margin-top: -31%; ">
        <div class="adopt-box_img">
          <figure><img src="images/test1.jpg" style="height: 460px; margin-top: -2.5px;"></figure>
        </div>
      </div>
    </div>

  </div>
</div>

<div id="adopt" class="adopt">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
        <div class="adopt-box">
          <h2 style="margin-left: 20px;">PLANT CARE</h2>
           <ul class="a" style="margin-top: 30px; margin-left: -70px; margin-right: 30px;" >
            <li style="font-size: 20px;">-> Follow our plant caring tips as advised by experts</li>
           <li style="font-size: 20px;">-> Click the <b>TIPS</b> button below and follow the caring tips for your plant</li>
            <li style="font-size: 20px;">->  Watch the attached videos for any practical tips required for your pet</li>
          </ul>
          <a href="#" onclick="document.location.href='ttips.php'" style="margin-top: 30px; margin-left: 90px;">TIPS</a>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding_rl">
        <div class="adopt-box_img">
          <figure><img src="images/pcare.jpg" style="height: 450px;"></figure>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="adopt" class="adopt">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" style="margin-left: 50%;">
        <div class="adopt-box">
          <h2 style="text-align: center; margin-left: 35px;">PLANT STORE</h2>
          <ul class="a" style="margin-top: 30px; margin-right: 70px; margin-left: -30px;">
            <li style="font-size: 20px;">-> Shop for your plant on WeCARE.com</li>
           <li style="font-size: 20px;">-> Click the <b>SHOP NOW</b> button below and choose the product you would like to buy</li>
            <li style="font-size: 20px;">-> Please check the specifications of the products you wish to buy carefully</li>
          </ul>
          <a href="#" onclick="document.location.href='tstore.php'" style="margin-top: 30px; margin-left: 125px;">SHOP NOW</a>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding_rl" style="margin-left: 0.1px; margin-top: -31.1%; ">
        <div class="adopt-box_img">
          <figure><img src="images/shop1.jpg" style="height: 460px; margin-top: -2.5px;"></figure>
        </div>
      </div>
    </div>

  </div>
</div>
<button class="open-button" onclick="openTC()" style="width: 320px; height: 60px; font-size: 20px" ><span>Terms & Conditions</span></button>
<div class="form-popup" id="myForm">
  <form class="form-container">
  <h1><u>T & C</u> </h1>
   <p>    1)  Please ensure that your profile credentials are correct and verified. <br>
     2)  Please go through the pet/plant details carefully before selecting. <br>
      3)  Mention all details of your pet/plant correctly while lending <br>
       4)  Please specify if your pet is allergic to any food or medicine in additional info section. <br>
        5)  Please specify if your plant requires any specific special attention regarding any concern. <br>
          <br> 
  </b></p>
   <button type="button" class="btn cancel" onclick="closeTC()">Close</button>
  </form>
</div>
<script>
function openTC() {
  document.getElementById("myForm").style.display = "block";
}

function closeTC() {
  document.getElementById("myForm").style.display = "none";
}

</script>
<div class="gotop">
<a href="#top"> <i class="fa fa-angle-double-up" style="font-size:55px;color:white"></i></a>
</div>

</div>
