<?php
$servername = "localhost";
$username = "acbs"; //edit if you have set a username for MySQL
$password = "pass"; // edit if you have set a password
$dbname = "acbs";

// Create connection syntax
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    #$Pet=$_POST['Pet'];
    #$Breed =$_POST['Breed '];
    #$Pet_Name=$_POST['Pet Name'];
    #$Age=$_POST['Age'];
    #$Gender=$_POST['Gender'];
    #$Weight=$_POST['Weight'];
    #$Vaccination=$_POST['Vaccination'];
    #$Date_of Lending=$_POST['Date of Lending'];
    #$Date of Return=$_POST['Date of Return'];
    #$Phone Number=$_POST['Phone Number'];
   # $Address=$_POST['Address'];
    #$Additional Info=$_POST['Additional Info'];
?>