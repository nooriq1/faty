<?php 
	session_start();

	// variable declaration
    $dep    = "";
	$topic    = "";
	$details    = "";



	// connect to database
	$db = mysqli_connect('localhost', 'abdullah', '12345678', 'newsweb');

	// REGISTER USER
	if (isset($_POST['add'])) {
		// receive all input values from the form
        $dep = mysqli_real_escape_string($db, $_POST['dep']);
		$topic = mysqli_real_escape_string($db, $_POST['topic']);
		$details = mysqli_real_escape_string($db, $_POST['details']);
		
if($dep=='كرة قدم'){
		
			$query = "INSERT INTO football(dep,topic,details) 
					  VALUES('$dep','$topic','$details')";
           
			mysqli_query($db, $query);
          
         
              $dep="";
            $topic="";
			$details="";

}
if($dep=='سباحة'){
		
			$query = "INSERT INTO swiming(dep,topic,details) 
					  VALUES('$dep','$topic','$details')";
           
			mysqli_query($db, $query);
          
         
              $dep="";
            $topic="";
			$details="";

}
if($dep=='تنس'){
		
			$query = "INSERT INTO tns(dep,topic,details) 
					  VALUES('$dep','$topic','$details')";
           
			mysqli_query($db, $query);
          
         
              $dep="";
            $topic="";
			$details="";

}

	}
                                

?>