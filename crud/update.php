<?php
session_start();
?>


<?php include 'connect.php';
$userprofile=$_SESSION['user_email'];
if($userprofile == true)
{

}
else{
    header('location:login.php');
}
//update query logic
if(isset($_POST['update_btn'])){
    $data_id=$_POST['data_id'];
    $username=$_POST['name'];
    //echo $username;
    $emailid=$_POST['email'];
    $phoneno=$_POST['phno'];
    $addressf=$_POST['address'];
    $passwordf=$_POST['password'];
    $sql="update `cruddata` set name='$username',email='$emailid',phno='$phoneno',address='$addressf',password='$passwordf' where id=$data_id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header ('location:display.php');
    }
    else{
        echo die("Error in updating data");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE DATA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>UPDATE DATA</h1>
    <a href="display.php">View data</a>
    <?php
    if(isset($_GET['edit'])){
        $edit_id=$_GET['edit'];
        //echo $edit_id;
        $get_data=mysqli_query($conn,"Select * from `cruddata` where id=$edit_id");
        if(mysqli_num_rows($get_data)>0){
            $fetch_data=mysqli_fetch_assoc($get_data);
            ?>
    <form action="" method="post">
        <input type="hidden" name="data_id" value="<?php echo $fetch_data['id']?>">
        <input type="text"  required autocomplete="off" value="<?php echo $fetch_data['name']?>" name="name">
        <input type="text"  required autocomplete="off" value="<?php echo $fetch_data['email']?>" name="email">
        <input type="number"  required autocomplete="off" value="<?php echo $fetch_data['phno']?>" name="phno">
        <input type="text"  required autocomplete="off" value="<?php echo $fetch_data['address']?>" name="address">
        <input type="text"  required autocomplete="off" value="<?php echo $fetch_data['password']?>" name="password">
        <input type="submit"  class="btn" name="update_btn" value="update">
    </form>

        <?php
        }
    }
    ?>
</body>
</html>