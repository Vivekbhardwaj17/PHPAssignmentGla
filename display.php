<?php
include("connection.php");
error_reporting(0);
$quer="SELECT * FROM student";
$res=mysqli_query($conn,$quer);

$count=mysqli_num_rows($res);


?>
<!DOCTYPE html>
<html>
<head>
<style>
td {
  padding :10px;
}
</style>
</head>

<table>

  
  
  <tr>

    <th>Name</th>

    <th>Email Addres</th>
    <th>Phone Number</th>
    <th>Id</th>
    <th colspan=2>Actions</th>

    
  </tr>
 <?php
           while($str=mysqli_fetch_assoc($res)){
    echo"<tr>

             <td>".$str['Name']."</td>
             <td>".$str['Email']."</td>
             <td>".$str['Phone']."</td>
             <td>".$str['Id']."</td>
            <td><a href='delete.php?nm=$str[Name]&em=$str[Email]&ph=$str[Phone]&id=$str[Id]'>Delete</a></td>
             <td><a href='update.php?nm=$str[Name]&em=$str[Email]&ph=$str[Phone]&id=$str[Id]'>Update</a></td>
            
        </tr>";
            #echo $str['Name']." ".$str["Email"]." ". $str["Phone"]." " .$str['Id']."<br/>";}
            
           }
 ?>
</table>
<p>
</html>