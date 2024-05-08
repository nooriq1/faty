<?php



if(isset($_POST["send"])){
    $clubname = $_POST["clubname"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $clubage = $_POST["clubage"];
    $about = $_POST["about"];
    $con = mysqli_connect("localhost","root","","football");


    mysqli_query($con,"INSERT INTO `football` (`clubname`, `address`, `email`, `clubage`, `about`) 
    VALUES ('$clubname', '$address', '$email', '$clubage', '$about')");



}





$con = mysqli_connect("localhost","root","","football");


$sql = "SELECT * FROM `football` ORDER BY id DESC ";
$t = mysqli_query($con,$sql);

while($row=mysqli_fetch_assoc($t)){
    echo "
        <div style='width:400px;margin:20px auto;text-align:center;box-shadow:2px 2px 20px black;padding:20px 0px'>
            <h1>$row[clubname]</h1>
            <h1>$row[address]</h1>
            <h1>$row[email]</h1>
           
            
        </div>
    ";
}






