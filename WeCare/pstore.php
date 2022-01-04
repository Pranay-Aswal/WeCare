

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
  height: 195%;
  width: 100%;
}
.box{
  background-color: #fff;
     box-shadow: #A4A4A4 0px 0px 13px 5px;
     margin: 40px 30px 20px 40px;
     width: 300px;
     height: 380px;
}
.box1{
  background-color: #fff;
     box-shadow: #A4A4A4 0px 0px 13px 5px;
     margin: -355px 30px 20px 380px;
     width: 300px;
     height: 335px;
}
.box2{
  background-color: #fff;
     box-shadow: #A4A4A4 0px 0px 13px 5px;
     margin: -355px 30px 20px 720px;
     width: 300px;
     height: 335px;
}

.button {
  background-color: #9E761A; /* Green */
  border: none;
  color: white;
  padding: 2px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-left: 95px;
  border-radius: 5px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button:hover{
   box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
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

<div class="main">
  <h1 style="text-align: center; font-size: 40px; color: #8F6C1B; margin-top: 10px;"><b>CHOOSE A RIGHT PRODUCT FOR YOUR PET</b></h1>
<div class="box">
  <img src="store/pedigree.jpg" style="height: 260px; width: 300px; object-fit: fill;"></img>
  <h1 style="color: #644A10; margin-top: 10px; text-align: center;  font-size: 22px;"><b>PEDIGREE</b></h1>
    <h2 style="color: #644A10; text-align: center;  font-size: 16px; margin-top: -10px;">MRP 3,198/-</h2>
    <a class="button" href="https://www.amazon.in/dp/B00WUIBRAW/ref=s9_acsd_al_bw_c2_x_0_i?pf_rd_m=A1K21FY43GMZF8&pf_rd_s=merchandised-search-2&pf_rd_r=JN8HQSEMNEYPP8C25461&pf_rd_t=101&pf_rd_p=78200ad8-3633-4948-80d3-566de4935eee&pf_rd_i=4771342031" target="_blank" >BUY NOW</a>
  </div>
  <div class="box" style="float: right; margin-top:-399px; margin-right: 790px;">
  <img src="store/box.jpg" style="height: 260px; width: 300px; object-fit: fill;"></img>
  <h1 style="color: #644A10; margin-top: 10px; text-align: center;  font-size: 22px;"><b>FEEDING BOWL</b></h1>
    <h2 style="color: #644A10; text-align: center;  font-size: 16px; margin-top: -10px;">MRP 199/-</h2>
    <a class="button" href="https://www.amazon.in/Meat-Up-Stainless-Feeding-Medium/dp/B084R5KHRH/ref=lp_4771342031_1_10?th=1" target="_blank" >BUY NOW</a>
  </div>
  <div class="box" style="float: right; margin-top:-399px; margin-right: 420px;">
  <img src="store/couch.jpg" style="height: 260px; width: 300px; object-fit: fill;"></img>
  <h1 style="color: #644A10; margin-top: 10px; text-align: center;  font-size: 22px;"><b>PET BED</b></h1>
    <h2 style="color: #644A10; text-align: center;  font-size: 16px; margin-top: -10px;">MRP 699/-</h2>
    <a class="button" href="https://www.amazon.in/dp/B00PVRNXS8/ref=s9_acsd_al_bw_c2_x_1_i?pf_rd_m=A1K21FY43GMZF8&pf_rd_s=merchandised-search-3&pf_rd_r=RQ3CWS6B11X1TMK448P6&pf_rd_t=101&pf_rd_p=147ee001-9213-495a-911a-25a33c327acf&pf_rd_i=4771342031" target="_blank" >BUY NOW</a>
  </div>
  <div class="box" style="float: right; margin-top:-399px; margin-right: -710px;">
  <img src="store/groom.jpg" style="height: 260px; width: 300px; object-fit: fill;"></img>
  <h1 style="color: #644A10; margin-top: 10px; text-align: center;  font-size: 22px;"><b>GROOMING BRUSH</b></h1>
    <h2 style="color: #644A10; text-align: center;  font-size: 16px; margin-top: -10px;">MRP 249/-</h2>
    <a class="button" href="https://www.amazon.in/Meat-Up-Stainless-Feeding-Medium/dp/B084R5KHRH/ref=lp_4771342031_1_10?th=1" target="_blank" >BUY NOW</a>
</div>


 <div class="box" style="float: right; margin-top:30px; margin-right: 1160px;">
  <img src="store/chain.jpg" style="height: 260px; width: 300px; object-fit: fill;"></img>
  <h1 style="color: #644A10; margin-top: 10px; text-align: center;  font-size: 22px;"><b>COLLAR CHAIN</b></h1>
    <h2 style="color: #644A10; text-align: center;  font-size: 16px; margin-top: -10px;">MRP 179/-</h2>
    <a class="button" href="https://www.amazon.in/Skora-Chrome-Plated-Collar-Choke/dp/B075NK1P7B/ref=sr_1_5?pf_rd_i=4771342031&pf_rd_m=A1K21FY43GMZF8&pf_rd_p=2f3360ef-19f5-4f12-89b5-7753aa6f9527&pf_rd_r=RQ3CWS6B11X1TMK448P6&pf_rd_s=merchandised-search-6&pf_rd_t=101&qid=1638025125&s=pet-supplies&sr=1-5" target="_blank" >BUY NOW</a>
  </div>
  <div class="box" style="float: right; margin-top:-399px; margin-right: 790px;">
  <img src="store/leash.jpg" style="height: 260px; width: 300px; object-fit: fill;"></img>
  <h1 style="color: #644A10; margin-top: 10px; text-align: center;  font-size: 22px;"><b>NECK LEASH</b></h1>
    <h2 style="color: #644A10; text-align: center;  font-size: 16px; margin-top: -10px;">MRP 419/-</h2>
    <a class="button" href="https://www.amazon.in/Skora-Padded-adjustable-Harness-Size1-25/dp/B075QFCTRH/ref=sr_1_4?pf_rd_i=4771342031&pf_rd_m=A1K21FY43GMZF8&pf_rd_p=2f3360ef-19f5-4f12-89b5-7753aa6f9527&pf_rd_r=RQ3CWS6B11X1TMK448P6&pf_rd_s=merchandised-search-6&pf_rd_t=101&qid=1638025125&s=pet-supplies&sr=1-4" target="_blank" >BUY NOW</a>
  </div>
  <div class="box" style="float: right; margin-top:-399px; margin-right: 420px;">
  <img src="store/tunnel.jpg" style="height: 260px; width: 300px; object-fit: fill;"></img>
  <h1 style="color: #644A10; margin-top: 10px; text-align: center;  font-size: 22px;"><b>PLAY TUNNEL</b></h1>
    <h2 style="color: #644A10; text-align: center;  font-size: 16px; margin-top: -10px;">MRP 1044/-</h2>
    <a class="button" href="https://www.amazon.in/Generic-Nylon-Tunnel-Exercise-Activity/dp/B01D1YS6H0/ref=sr_1_11?pf_rd_i=4771342031&pf_rd_m=A1K21FY43GMZF8&pf_rd_p=2f3360ef-19f5-4f12-89b5-7753aa6f9527&pf_rd_r=RQ3CWS6B11X1TMK448P6&pf_rd_s=merchandised-search-6&pf_rd_t=101&qid=1638025468&s=pet-supplies&sr=1-11" target="_blank" >BUY NOW</a>
  </div>
  <div class="box" style="float: right; margin-top:-399px; margin-right: -710px;">
  <img src="store/catfood.jpg" style="height: 260px; width: 300px; object-fit: fill;"></img>
  <h1 style="color: #644A10; margin-top: 10px; text-align: center;  font-size: 22px;"><b>DRY CAT FOOD</b></h1>
    <h2 style="color: #644A10; text-align: center;  font-size: 16px; margin-top: -10px;">MRP 360/-</h2>
    <a class="button" href="https://www.amazon.in/Whiskas-Kitten-Food-Ocean-Flavour/dp/B00LHULLKA/ref=lp_16382901031_1_1?th=1" target="_blank" >BUY NOW</a>
</div>



 <div class="box" style="float: right; margin-top:30px; margin-right: 1160px;">
  <img src="store/scratcher.jpg" style="height: 260px; width: 300px; object-fit: fill;"></img>
  <h1 style="color: #644A10; margin-top: 10px; text-align: center;  font-size: 22px;"><b>CAT SCRATCHER</b></h1>
    <h2 style="color: #644A10; text-align: center;  font-size: 16px; margin-top: -10px;">MRP 499/-</h2>
    <a class="button" href="https://www.amazon.in/Pets-Empire-Scratcher-Curved-Wave/dp/B078RL114X/ref=lp_16422972031_1_3" target="_blank" >BUY NOW</a>
  </div>
  <div class="box" style="float: right; margin-top:-399px; margin-right: 790px;">
  <img src="store/ticks.jpg" style="height: 260px; width: 300px; object-fit: fill;"></img>
  <h1 style="color: #644A10; margin-top: 10px; text-align: center;  font-size: 22px;"><b>TICKS SHAMPOO</b></h1>
    <h2 style="color: #644A10; text-align: center;  font-size: 16px; margin-top: -10px;">MRP 396/-</h2>
    <a class="button" href="https://www.amazon.in/dp/B07BS9739R/ref=s9_acsd_al_bw_c2_x_4_i?pf_rd_m=A1K21FY43GMZF8&pf_rd_s=merchandised-search-3&pf_rd_r=94D8ZDHZYP39E5P09DH8&pf_rd_t=101&pf_rd_p=147ee001-9213-495a-911a-25a33c327acf&pf_rd_i=4771342031&th=1" target="_blank" >BUY NOW</a>
  </div>
  <div class="box" style="float: right; margin-top:-399px; margin-right: 420px;">
  <img src="store/dewormer.jpg" style="height: 260px; width: 300px; object-fit: fill;"></img>
  <h1 style="color: #644A10; margin-top: 10px; text-align: center;  font-size: 22px;"><b>DEWORMER</b></h1>
    <h2 style="color: #644A10; text-align: center;  font-size: 16px; margin-top: -10px;">MRP 259/-</h2>
    <a class="button" href="https://www.amazon.in/dp/B07P42ZM65/ref=redir_mobile_desktop?_encoding=UTF8&aaxitk=caec34d1ebccb9905f671c69ed4f4fee&hsa_cr_id=2517515320502&pd_rd_plhdr=t&pd_rd_r=82494736-eb9d-4436-8cc4-d0fe6a9fed99&pd_rd_w=ftUOW&pd_rd_wg=1fwDm&ref_=sbx_be_s_sparkle_mcd_asin_0_img" target="_blank" >BUY NOW</a>
  </div>
  <div class="box" style="float: right; margin-top:-399px; margin-right: -710px;">
  <img src="store/litter.jpg" style="height: 260px; width: 300px; object-fit: fill;"></img>
  <h1 style="color: #644A10; margin-top: 10px; text-align: center;  font-size: 22px;"><b>CATSAN LITTER</b></h1>
    <h2 style="color: #644A10; text-align: center;  font-size: 16px; margin-top: -10px;">MRP 1360/-</h2>
    <a class="button" href="https://www.amazon.in/dp/B001MZV3OO/ref=s9_acsd_al_bw_c2_x_4_i?pf_rd_m=A1K21FY43GMZF8&pf_rd_s=merchandised-search-6&pf_rd_r=Q2P1NTRMN6WM52D26KTN&pf_rd_t=101&pf_rd_p=10cb60ee-d5d0-4a0c-bb23-9a04b3c01bc6&pf_rd_i=4771341031&th=1" target="_blank" >BUY NOW</a>
</div>
</div>
</body>
</html>
