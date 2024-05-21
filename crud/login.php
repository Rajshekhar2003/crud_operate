<?php
session_start();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEW FORM PROJECT </title>
    <link rel="stylesheet" href="login_css.css">
    <script>
        function message(){
            alert("IF SURE CLICK OK!");
        }
    </script>
</head>
<body>
    <h1>LOGIN CREDENTIALS</h1>
    <div class="container">
        <form action="#" method="POST">
            <div>
                <label >NAME</label>
                <input type="text" name="name" placeholder="enter the full name " required>
            </div>
            <div>
                <label >EMAIL</label>
                <input type="email" name="email" placeholder="enter the full email here" required>
            </div>
            <div id="gendercontain">
                <label >GENDER</label>
                <input class="gender1" type="radio",name="gender",value="m">Male
                <input class="gender1" type="radio",name="gender",value="f">Female
                <input class="gender1" type="radio",name="gender",value="o">Others
            </div>
            <div>
                <label >MOBILE</label>
                <input type="text" name="mobile" placeholder="+91XXXXXXX.." required>
            </div>
            <div>
                <label >PASSWORD</label>
                <input type="password" name="password" placeholder="password" required>
            </div>
            <center class="forgetpass"><a href="#" class="link">FORGET PASSWORD?</a></center>
            <div class="btn">
                <button type="submit" name="login"onclick="message()">Submit Data</button>
            </div>
            <center>IF YOU ARE A NEW MEMBER </center>
            <center class="signup"><a href="#" class="link">SIGN UP HERE</a></center>
        </form>
    </div>
</body>
</html>
<?php
include("connect.php");
if(isset($_POST['login']))
{
    $emailsub=$_POST['email'];
    $mobilesub=$_POST['mobile'];
    $query="SELECT * FROM cruddata WHERE email='$emailsub' && phno='$mobilesub'";
    $data= mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
    //echo $total;
    if($total==1)
    {
        $_SESSION['user_email']=$emailsub;
        header('location:display.php');
    }
    else
    {
        echo "login failed";
    }
}

?>