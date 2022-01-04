<?php
require_once "pdo.php";
    session_start();

    $id=session_id();
    if(isset($_SESSION['name']) && isset($_SESSION['email_id']) && isset($_SESSION['userID']))
    {  $sql = "SELECT session_id FROM customer_details WHERE email_id=:id";

        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(':id' => $_SESSION['email_id']));
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if($row[0]['session_id']==$id)
        {

        }
        else
        {
      echo("Multiple Logins From Same User Detected...Latest can continue. You are being LOGGED-OUT.");
      sleep(2);
      session_unset();
      header( 'Location: logout.php' ) ;
      return;
        }

    }
      else {echo("ACCESS DENIED!! LOGIN FIRST");
      sleep(2);
      header( 'Location: login.php' ) ;
      return;
    }

    if(isset($_POST['Time']))
    {
     header( 'Location: payments.php' ) ;
      return;
    }

    // till here into any page after login.
?>

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

<html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 <head>
  <script type="text/javascript" src="jquery.min.js"></script>
 <title>Book_page</title>
 </head>
<style>
.w3-bar {font-family: "Montserrat", sans-serif}
.main{
   position: absolute;
  width: 100%;
  height: 144%;

 background-color:#EEEDED;
}



.hero-text {
  text-align: center;
  position: absolute;
  top: 9%;
  left: 31%;
  transform: translate(-50%, -50%);
  color: #274F0A;
}
.hi {
top: 400px;
left: 500px;
}
html {
  scroll-behavior: smooth;
}


.form{
  position: absolute;
 top: 20%;
  left: 6.5%;
 background-color: #DCDCDC;
width: 48%;
height: 790px;
border-style: solid;
  border-color: #193306;
  border: #e8e8e8 solid 1px;
     padding: 12px 29px;
     margin-bottom: 26px;
      border-radius: 1px;
  box-shadow: 0px 0px 19px 3px #274F0A;
}
.button3{

 top: 350px;
  right: 490px;
color: white;
  text-align: center;
 padding: 7px 15px;
 font-size: 15px;
}
.from{
 
.pet{
}
.to{
}
.time{
}
.con{
 left: 420px;
}
.footer{
 width: 100%;
  height: 350px;
 background-color: #282828;
}
.extra{
  width: 100%;
  height: 27px;
 background-color: white;
color: red;
font-size: 20px;
opacity: 0.7px;
 text-align: center
}


</style>
<body >
<header>
    <!-- header inner -->
    <div class="header-top">
      <div class="header">
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
     <!-- end header inner -->
     <div class="main">
      <img src="images/watering.png" style="height: 95%; float: right; margin-right: 23px; margin-top: 35px;">
  <div class="hero-text">
    <h1 style="font-size:40px; text-shadow: 2px 2px 4px #644A10;"><b>WHAT ARE YOU LENDING?</b></h1>
    <h3 style="font-family:monospace,monaco;">Enter the Details</h3>
<div class="hi">
</div>
</div>

<div class="form">
<br>
<form id="form" action="" method="POST" enctype="multipart/form-data">
  <label for="Plant">Plant type : </label>
<input type="text" id="Plant" name="Plant" placeholder="Enter type of your Plant" required>
</select><br/><br>

  <label for="Age">Age : </label>
<input type="text" id="Age" name="Age" placeholder="Enter age in months" required>
</select><br/><br>

<label for="Nature" style="vertical-align: middle;">Nature of Plant : </label>
  <select id="Nature" style="width: 200px; height: 27px;" name="Nature" required>
<option selected hidden>Select a option</option>
  <option value="Indoor">Indoor</option>
  <option value="Outdoor">Outdoor</option>
</select><br/><br>


  <label for="Watering" style="vertical-align: middle;">Watering frequency: </label>
<input type="text" id="Watering" name="Watering" placeholder="Enter Watering period in hours" required>
</select><br/><br>

  <label for="Date of Lending">Date of Lending : </label>
  <input type="date" id="date of Lending" name="Date of Lending" required><br><br>

  <label for="Date of Return">Date of Return : </label>
  <input type="date" id="Date of Return" name="Date of Return" required><br><br>

<label for="Phone_Number" style="vertical-align: middle;">Phone number : </label>
<input type="text" id="Phone_Number" name="Phone_Number" placeholder="Enter your Phone number" required>
</select><br/><br>

<label for="Address" style="vertical-align: top;">Address : </label>
<textarea name="Address" cols="40" rows="5"></textarea>
<br/><br>

<label for="Info" style="vertical-align: top;">Additional Info :</label>
<textarea name="Info" cols="60" rows="6"></textarea>
 <br/><br>

<label for="image">Select Images :</label>
<input id="select_file" type='file' name="image" multiple accept=".png, .jpg, .jpeg"  />
<br></br>

<label style="margin-right: 45%;"></label>
  <input type="submit" value="SUBMIT" name="submit" class="btn btn-primary py-3 px-4"><br />
</form>
</div>
</div>
</header>
</body>

</html>
</head>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<?php
if(isset($_POST["submit"])){
include 'insert.php';
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert = $conn->query("INSERT into plant_info(Plant, Age, Nature, Watering, Date_of_Lending, Date_of_Return,Phone_Number, Address, Info, Image) VALUES ('".$_POST["Plant"]."','".$_POST["Age"]."','".$_POST["Nature"]."','".$_POST["Watering"]."','".$_POST["Date_of_Lending"]."','".$_POST["Date_of_Return"]."','".$_POST["Phone_Number"]."','".$_POST["Address"]."','".$_POST["Info"]."','$imgContent')"); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
if ($insert === TRUE)
{
    echo 
    "<script type= 'text/javascript'>
        alert('Details submitted successfully');
    </script>";
}
else
{
    echo 
    "<script type= 'text/javascript'>
        alert('Error: " . $sql . "<br>" . $conn->error."');
    </script>";
}

$conn->close();
}
?>

