<?php
session_start();

echo "welcome  ".$_SESSION['user_email'];
?>



<?php include 'connect.php'?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <link rel="stylesheet" href="style.css">
    <style>
        th,td{
           border:1px double #000;
           padding:5px;
        }
    </style>
</head>
<body>
    <h1>DISPLAY DATA</h1>
    <a href="index.php">BACK</a>
    
    <?php
    $userprofile=$_SESSION['user_email'];
    if($userprofile == true)
    {

    }
    else{
        header('location:login.php');
    }
    $display_data=mysqli_query($conn,"select * from `cruddata`");
    $num=1;
    //check how many row of data are there
    if($number_row=mysqli_num_rows($display_data)>0){
        echo "<table>
        <thead>
            <th>SLNO</th>
            <th>USERNAME</th>
            <th>EMAIL</th>
            <th>PHONENO</th>
            <th>ADDRESS</th>
            <th>PASSWORD</th>
            <th>OPERATIONS</th>

        </thead>
        <tbody>";
       while( $row=mysqli_fetch_assoc($display_data)){
        //echo $row['name'];
    ?>
          <tr>
            <td><?php echo $num;?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['phno']?></td>
            <td><?php echo $row['address']?></td>
            <td><?php echo $row['password']?></td>
            <td>
                <a href="delete.php?delete=<?php echo $row['id']?>"onclick="return confirm('Are you sure?');">DELETE</a><br>
                <a href="update.php?edit=<?php echo $row['id']?>">EDIT</a>
            </td>
          </tr>
    <?php
    $num++;
       };
    }
    else{
        echo "<div>No Data</div>";
    }
    //echo $number_row;
    ?>
    </tbody>
    <a href="logout.php"><input type="submit" name="" value="LogOut" style="background:aqua";color:white;height:35px;width:100px;margin-top:20px;></a>
    
</body>
</html>