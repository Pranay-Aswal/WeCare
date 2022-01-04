

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
  background-color: #145517; /* Green */
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
  <h1 style="text-align: center; font-size: 40px; color: #145517; margin-top: 10px;"><b>CHOOSE A RIGHT PRODUCT FOR YOUR PLANT</b></h1>
<div class="box">
  <img src="store/watering.jpg" style="height: 260px; width: 300px; object-fit: fill;"></img>
  <h1 style="color: #145517; margin-top: 10px; text-align: center;  font-size: 22px;"><b>WATERING SPRAY</b></h1>
    <h2 style="color: #145517; text-align: center;  font-size: 16px; margin-top: -10px;">MRP 319/-</h2>
    <a class="button" href="https://www.amazon.in/SHAFIRE-Garden-Spray-Pump-Watering/dp/B07ZGGF9V5/ref=sr_1_12?crid=19S32QOQOO712&keywords=plant+watering+can&qid=1638033193&sprefix=plant+wa%2Caps%2C344&sr=8-12" target="_blank" >BUY NOW</a>
  </div>
  <div class="box" style="float: right; margin-top:-399px; margin-right: 790px;">
  <img src="store/pot.jpg" style="height: 260px; width: 300px; object-fit: fill;"></img>
  <h1 style="color: #145517; margin-top: 10px; text-align: center;  font-size: 22px;"><b>PLASTIC POTS</b></h1>
    <h2 style="color: #145517; text-align: center;  font-size: 16px; margin-top: -10px;">MRP 675/-</h2>
    <a class="button" href="https://www.amazon.in/Meat-Up-Stainless-Feeding-Medium/dp/B084R5KHRH/ref=lp_4771342031_1_10?th=1" target="_blank" >BUY NOW</a>
  </div>
  <div class="box" style="float: right; margin-top:-399px; margin-right: 420px;">
  <img src="store/trowel.jpg" style="height: 260px; width: 300px; object-fit: fill;"></img>
  <h1 style="color: #145517; margin-top: 10px; text-align: center;  font-size: 22px;"><b>SEEDS TROWEL</b></h1>
    <h2 style="color: #145517; text-align: center;  font-size: 16px; margin-top: -10px;">MRP 118/-</h2>
    <a class="button" href="https://www.amazon.in/Kraft-Seeds-Trowel/dp/B0151NNL1U/ref=sr_1_3?keywords=home%2Bplant%2Baccessories&qid=1638033535&sr=8-3&th=1" target="_blank" >BUY NOW</a>
  </div>
  <div class="box" style="float: right; margin-top:-399px; margin-right: -710px;">
  <img src="store/cutter.jpg" style="height: 260px; width: 300px; object-fit: fill;"></img>
  <h1 style="color: #145517; margin-top: 10px; text-align: center;  font-size: 22px;"><b>PLANT CUTTER</b></h1>
    <h2 style="color: #145517; text-align: center;  font-size: 16px; margin-top: -10px;">MRP 449/-</h2>
    <a class="button" href="https://www.amazon.in/dp/B093FDQ5HK?pd_rd_i=B093FDQ5HK&pd_rd_w=FlTUD&pf_rd_p=a75ba368-11d2-4ce4-98f8-b19ed03dc54e&pd_rd_wg=MG7KU&pf_rd_r=88Z4938ZMXQXVRW8TKDZ&pd_rd_r=f8139de7-39de-4ac4-94fd-542312edc251&th=1" target="_blank" >BUY NOW</a>
</div>


 <div class="box" style="float: right; margin-top:30px; margin-right: 1160px;">
  <img src="store/stand.jpg" style="height: 260px; width: 300px; object-fit: fill;"></img>
  <h1 style="color: #145517; margin-top: 10px; text-align: center;  font-size: 22px;"><b>POT STAND</b></h1>
    <h2 style="color: #145517; text-align: center;  font-size: 16px; margin-top: -10px;">MRP 1,199/-</h2>
    <a class="button" href="https://www.amazon.in/ORCHID-ENGINEERS-Indoor-Outdoor-Balcony/dp/B09BXCD3WD/ref=sr_1_8?keywords=home%2Bplant%2Baccessories&qid=1638033535&sr=8-8&th=1" target="_blank" >BUY NOW</a>
  </div>
  <div class="box" style="float: right; margin-top:-399px; margin-right: 790px;">
  <img src="store/hanger.jpg" style="height: 260px; width: 300px; object-fit: fill;"></img>
  <h1 style="color: #145517; margin-top: 10px; text-align: center;  font-size: 22px;"><b>POT HANGER</b></h1>
    <h2 style="color: #145517; text-align: center;  font-size: 16px; margin-top: -10px;">MRP 499/-</h2>
    <a class="button" href="https://www.amazon.in/Leafy-Tales-Hanger-Brackets-Mounted/dp/B08TVPFB59/ref=sr_1_2_sspa?crid=1B5ENFT0C2ZDO&keywords=plant%2Bhangers%2Bfor%2Bbalcony&qid=1638033860&sprefix=plant%2Bhanger%2Caps%2C338&sr=8-2-spons&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUEzVzNPU1lFSU0yVkJPJmVuY3J5cHRlZElkPUEwOTkzMTkyMjc4UUUwT1JUOFhLRyZlbmNyeXB0ZWRBZElkPUEwMTcxOTcxMzYwUkczSDJWOEs2MyZ3aWRnZXROYW1lPXNwX2F0ZiZhY3Rpb249Y2xpY2tSZWRpcmVjdCZkb05vdExvZ0NsaWNrPXRydWU&th=1" target="_blank" >BUY NOW</a>
  </div>
  <div class="box" style="float: right; margin-top:-399px; margin-right: 420px;">
  <img src="store/pipe.jpg" style="height: 260px; width: 300px; object-fit: fill;"></img>
  <h1 style="color: #145517; margin-top: 10px; text-align: center;  font-size: 22px;"><b>WATERING PIPE  </b></h1>
    <h2 style="color: #145517; text-align: center;  font-size: 16px; margin-top: -10px;">MRP 799/-</h2>
    <a class="button" href="https://www.amazon.in/GARBNOIRE-Heavy-Layered-Braided-Water/dp/B08KW7QLC1/ref=sr_1_16?keywords=watering%2Bpipe&qid=1638033999&sr=8-16&th=1" target="_blank" >BUY NOW</a>
  </div>
  <div class="box" style="float: right; margin-top:-399px; margin-right: -710px;">
  <img src="store/tools.jpg" style="height: 260px; width: 300px; object-fit: fill;"></img>
  <h1 style="color: #145517; margin-top: 10px; text-align: center;  font-size: 22px;"><b>GARDENING TOOLS SET</b></h1>
    <h2 style="color: #145517; text-align: center;  font-size: 16px; margin-top: -10px;">MRP 521/-</h2>
    <a class="button" href="https://www.amazon.in/GARDEN-Spectacular-Gardening-Tools-Gloves/dp/B07D7WGBBR/ref=sr_1_1_sspa?crid=3V4AGQ2HS7QFC&keywords=garden%2Btools&qid=1638034148&sprefix=garden%2Bt%2Caps%2C342&sr=8-1-spons&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUFUOTE2VzRGTlZTQjAmZW5jcnlwdGVkSWQ9QTAzOTgyNzhMTDBMTlFSVDM5MVkmZW5jcnlwdGVkQWRJZD1BMDg5MDE4NzFNQlNHS1ZYMDZBN1kmd2lkZ2V0TmFtZT1zcF9hdGYmYWN0aW9uPWNsaWNrUmVkaXJlY3QmZG9Ob3RMb2dDbGljaz10cnVl&th=1" target="_blank" >BUY NOW</a>
</div>



 <div class="box" style="float: right; margin-top:30px; margin-right: 1160px;">
  <img src="store/fence.jpg" style="height: 260px; width: 300px; object-fit: fill;"></img>
  <h1 style="color: #145517; margin-top: 10px; text-align: center;  font-size: 22px;"><b>GARDEN FENCING NET</b></h1>
    <h2 style="color: #145517; text-align: center;  font-size: 16px; margin-top: -10px;">MRP 699/-</h2>
    <a class="button" href="https://www.amazon.in/SAI-PRASEEDA-Fencing-Stabilized-Guarantee/dp/B07ZPDVQCK/ref=sr_1_11?keywords=garden%2Bfence&qid=1638034124&sr=8-11&th=1" target="_blank" >BUY NOW</a>
  </div>
  <div class="box" style="float: right; margin-top:-399px; margin-right: 790px;">
  <img src="store/FERTILIZER.jpg" style="height: 260px; width: 300px; object-fit: fill;"></img>
  <h1 style="color: #145517; margin-top: 10px; text-align: center;  font-size: 22px;"><b>ORGANIC FERTILIZER</b></h1>
    <h2 style="color: #145517; text-align: center;  font-size: 16px; margin-top: -10px;">MRP 199/-</h2>
    <a class="button" href="https://www.amazon.in/ARSH-Seaweed-Granules-Organic-Fertilizer/dp/B09DPW8T2Y/ref=sr_1_4_sspa?crid=2L8LGDNFR1ZFO&keywords=house%2Bplant%2Bfertilizer&qid=1638034462&sprefix=houseplant%2Bfer%2Clawngarden%2C328&sr=8-4-spons&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUExSVlPWTROMzNMVTlCJmVuY3J5cHRlZElkPUExMDQwNDE1M05UVDVVUFJRN1FPNCZlbmNyeXB0ZWRBZElkPUEwNzg0MzIzMjlHNk8yUUVYWEtUMCZ3aWRnZXROYW1lPXNwX2F0ZiZhY3Rpb249Y2xpY2tSZWRpcmVjdCZkb05vdExvZ0NsaWNrPXRydWU&th=1" target="_blank" >BUY NOW</a>
  </div>
  <div class="box" style="float: right; margin-top:-399px; margin-right: 420px;">
  <img src="store/nutrient.jpg" style="height: 260px; width: 300px; object-fit: fill;"></img>
  <h1 style="color: #145517; margin-top: 10px; text-align: center;  font-size: 22px;"><b>PLANT NUTRIENT</b></h1>
    <h2 style="color: #145517; text-align: center;  font-size: 16px; margin-top: -10px;">MRP 196/-</h2>
    <a class="button" href="https://www.amazon.in/Trust-basket-Concentrated-Purpose-Nutrient/dp/B07GKT86YW/ref=sr_1_1_sspa?crid=1M3H6I0EWJCGA&keywords=house%2Bplant%2Bnutrient&qid=1638034566&sprefix=houseplant%2Bnu%2Caps%2C317&sr=8-1-spons&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUFWUzVONFM3MUYzSSZlbmNyeXB0ZWRJZD1BMDMwOTIyMTJMNkZTVEtOOEpZTlQmZW5jcnlwdGVkQWRJZD1BMDIwMDMwMzNURjBWS1NBMFVSVkUmd2lkZ2V0TmFtZT1zcF9hdGYmYWN0aW9uPWNsaWNrUmVkaXJlY3QmZG9Ob3RMb2dDbGljaz10cnVl&th=1" target="_blank" >BUY NOW</a>
  </div>
  <div class="box" style="float: right; margin-top:-399px; margin-right: -710px;">
  <img src="store/soil.jpg" style="height: 260px; width: 300px; object-fit: fill;"></img>
  <h1 style="color: #145517; margin-top: 10px; text-align: center;  font-size: 22px;"><b>POTTING SOIL</b></h1>
    <h2 style="color: #145517; text-align: center;  font-size: 16px; margin-top: -10px;">MRP 599/-</h2>
    <a class="button" href="https://www.amazon.in/Trust-Enriched-Organic-Potting-Fertilizer/dp/B07L6BLSDL/ref=sr_1_1_sspa?crid=3SZ24VM5PANOH&keywords=house%2Bplant%2Bpotting%2Bmix&qid=1638034687&sprefix=house%2Bplant%2B%2Caps%2C342&sr=8-1-spons&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUEyNVMyNThXSTFDUUxYJmVuY3J5cHRlZElkPUEwNzM5MzUyMjNGSTBEME5BUFlKTyZlbmNyeXB0ZWRBZElkPUEwMDQ0Njc3MVcwVlVUTUxQQ1pBVSZ3aWRnZXROYW1lPXNwX2F0ZiZhY3Rpb249Y2xpY2tSZWRpcmVjdCZkb05vdExvZ0NsaWNrPXRydWU&th=1" target="_blank" >BUY NOW</a>
</div>
</div>
</body>
</html>
