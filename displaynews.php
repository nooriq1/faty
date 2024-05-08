<?php


$con = mysqli_connect("localhost","root","","football");


$sql = "SELECT * FROM `footballnew` ORDER BY `id` DESC";
$t = mysqli_query($con,$sql);

while($row=mysqli_fetch_assoc($t)){
    echo "
        <div style='width:400px;margin:20px auto;text-align:center;box-shadow:2px 2px 20px black;padding:20px 0px <tr> <td></td> </tr>'>
            <h1>$row[dep]</h1>
            <h1>$row[address]</h1>
            <h1>$row[details]</h1>
          
            
        </div>
    ";
}

?>