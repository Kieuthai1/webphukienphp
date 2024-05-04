<?php
    session_start();
    include('config/config.php');
    if(isset($_POST['dangnhap'])){
      
        $taikhoan =$_POST['username'];
        $matkhau = md5($_POST['password']);
        $sql= "SELECT * FROM tbl_admin WHERE username= '".$taikhoan."' AND password='".$matkhau."' LIMIT 1  "; 
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count > 0){
            $_SESSION['dangnhap'] = $taikhoan;
            header("Location: index.php");
        }else{
            echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng, vui lòng nhập lại.");</script>';
            header("Location: login.php");

        }
    }
?>


<!DOCTYPE html>
<!-- how to create loging page in html and css -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styleadmincp.css">

    <title>Đăng nhập Admincp</title>
</head>

<body class="login">
<form  class="neumorphic-form" action=""  autocomplete="off" method="POST">
<div class="neumorphic-card">
        <div class="neumorphic-card__header">Đăng nhập Admin</div>
        <form onsubmit="event.preventDefault()"  class="neumorphic-form"  action=""  >
            <div class="neumorphic-input-wrapper">
                <label for="neumorphic-username">Username</label>
                <input type="text" name="username" id="neumorphic-username">
            </div>
            <div class="neumorphic-input-wrapper">
                <label for="neumorphic-password">Password</label>
                <input type="password" name="password" id="neumorphic-password">
            </div>
            <button type="submit" name="dangnhap" value="Đăng nhập">Sign in</button>
        </form>
     


</form>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
</body>
</html>