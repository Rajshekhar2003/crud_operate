<?php
include 'connect.php';
if(isset($_GET['delete'])){
    $delete_id=$_GET['delete'];
    echo $delete_id;
    //delete query
    $delete_data=mysqli_query($conn,"Delete from `cruddata` where id=$delete_id") or die("data is not deleted successfully");
    if($delete_data){
        header('location:display.php');
    }
    else{
        header('location:display.php');
    }
}
?>