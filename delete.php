<html>
<head>
</head>
<body>
<form action="" method="get">

    Name
    <input type="text" name="name" value="<?php error_reporting(0); echo $_GET['nm']; ?>"><br><br>
    Email <input type="text" name="email"value="<?php  error_reporting(0);echo $_GET['em']; ?>"><br><br>
    Phone <input type="numeric" name='phone'value="<?php error_reporting(0); echo $_GET['ph']; ?>"><br><br>
    Id <input type="numeric" name="id"value="<?php error_reporting(0); echo $_GET['id']; ?>" ><br><br>
    <input type="submit" name="submit"value="Delete">

    
    
    </form>

</body>
</html>
<?php
include("connection.php");
error_reporting(0);
if(isset($_GET['submit'])){
    $name=$_GET['name'];
    $email=$_GET['email'];
    $phone=$_GET['phone'];
    $id=$_GET['id'];
    
    $quer="DELETE FROM student WHERE Id ='$id'";
$chek=mysqli_query($conn,$quer);
if($chek)
echo"<font  color='green'>updated";
else echo"<font color='red'>not updated";
}

?>