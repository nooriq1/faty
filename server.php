<?php
    	session_start();
	// variable declaration
    $clubname="";
	$email    = "";
    $address="";
    $clubage="";
    $about="";
  

if (isset($_POST['send']))
 {
    
// receive all input values from the form
        $clubname = mysqli_real_escape_string($db, $_POST['clubname']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$address = mysqli_real_escape_string($db, $_POST['address']);
		$clubage = mysqli_real_escape_string($db, $_POST['clubage']);
		$about = mysqli_real_escape_string($db, $_POST['about']);
        
      
        $query="insert into clubinfo(clubname,email,address,clubage,about)Values('$clubname','$email','$address','$clubage','$about')";
        mysqli_query($db,$query);


     //  header('location: index.php');
}
?>