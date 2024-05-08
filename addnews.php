
<!DOCTYPE html>
<html>
   <head>

      <titl></title>
      <link rel="stylesheet" type="text/css" href="style1.css">
   </head>
   <body>
        <div class="headerhome">
		<h2> صفحه ادخال اخبار</h2>
	</div>
     
    <form method="post" class="style.css"  style="text-align: center">
        
        <div class="input-group">

			<label>القسم</label>
			<input type="text" name ="department"
		</div>
        <div class="input-group">
			<labe> عنوان الخبر</labe>
			<input type="text" name="topic" >
		</div>
		<div class="input-groups">
			<labe>  التفاصيل</labe>
			<input type="text" name="comment">
		</div>
		<div class="input-group">
			<button type="submit"  name="add">اضافة خبر</button>
		</div>
		
	</form>
   </body>


</html>


<?php

if(isset($_POST["add"])){

	$department = $_POST["department"];
	$topic = $_POST["topic"];
	$comment = $_POST["comment"];

	$con = mysqli_connect("localhost","root","","football");


	$sql = "INSERT INTO `footballnew` (`dep`, `address`, `details`) VALUES ('$department', '$topic', '$comment')";
	$t = mysqli_query($con,$sql);

	echo "<script>location.assign('displaynews.php')</script>";

}

?>







