<?php 

	// connect to database
	$db = mysqli_connect('localhost', 'abdullah', '12345678', 'newsweb');?>

<!DOCTYPE html>
<html>
   <head>
      
      <title>نادي ديالى</title>
      <link rel="stylesheet" type="text/css" href="style1.css">
   </head>
<style>
table, th, td {
    border: 2px solid black;
}
</style>

   <body>
        <div class="headerhome">
		<h2>السباحة</h2>
	</div>
     
    <form method="post" action="swiming.php">
              
<table dir="rtl" style="font-size: 30px;width:100%">
  <tr>
    <th > ت</th>
    <th>القسم</th>
    <th>عنوان الخبر</th>
       <th>التفاصيل</th>
       
  </tr>
  <td> <?php
      
                       $query= "select * from swiming ";
                        $result=mysqli_query($db,$query);
                        
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                           
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['id'].'</li>';
                            }?></td>

 
     <td> <?php
      
                       $query= "select * from swiming ";
                        $result=mysqli_query($db,$query);
                        
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                           
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['dep'].'</li>';
                            }?></td>

     <td> <?php
      
                       $query= "select * from swiming ";
                        $result=mysqli_query($db,$query);
                        
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                           
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['topic'].'</li>';
                            }?></td>

     <td> <?php
      
                       $query= "select * from swiming ";
                        $result=mysqli_query($db,$query);
                        
                        if(! $result){
                            die("Error in query");
                           
                        }
                    ?>
                        <?php
                           
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<li>'.$row['details'].'</li>';

                            }?></td>

    




     <tr>
        <td>
        </td>  
        
	</form>
   </body>


</html>

