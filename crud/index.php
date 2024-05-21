<?php include 'connect.php';
//inserting data table.
if(isset($_POST['submit']))
{
    //echo "success";
    $username=$_POST['name'];
    //echo $username;
    $emailid=$_POST['email'];
    $phoneno=$_POST['phno'];
    $addressf=$_POST['address'];
    $passwordf=$_POST['password'];
    //insert
    $sql="INSERT INTO `cruddata`(name,email,phno,address,password) values('$username','$emailid','$phoneno','$addressf','$passwordf')";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:display.php');
    }
    else{
        echo die("Data not inserted");
    }



}
 ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
    <!--css file-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>PHP CRUD</h1>
    <a href="display.php">VIEW DATA</a>
    <form action="" method="post">
        <input type="text" placeholder="Enter your name" required autocomplete="off"  name="name">
        <input type="text" placeholder="Enter your email" required autocomplete="off" name="email">
        <input type="text" placeholder="Enter your phno" required autocomplete="off" name="phno">
        <input type="text" placeholder="Enter your address" required autocomplete="off" name="address">
        <input type="text" placeholder="Enter your password" required autocomplete="off" name="password">
        <input type="submit"  class="btn" name="submit">
    </form>
</body>
</html>

