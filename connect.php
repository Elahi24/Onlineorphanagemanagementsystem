<?php
$username = $_POST['uname'];
$address = $_POST['adress'];
$bg = $_POST['bg'];
$age = $_POST['age'];


//database connection 
$conn = new mysqli('localhost', 'root','','online orphanage management system',);
if($conn->connect_error){
    die('connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(username, address, bg, age) values(?, ?, ?, ?)");
    $stmt->bind_param("sssi",$username,$address,$bg,$age);
    $stmt->execute();
    header("Location: Donation.php");
    $stmt->close();
    $conn->close();
}
?>