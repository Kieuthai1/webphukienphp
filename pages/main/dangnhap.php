<?php
    if(isset($_POST['dangnhap'])){
      
        $email =$_POST['email'];
        $matkhau = md5($_POST['password']);
        $sql= "SELECT * FROM tbl_dangky WHERE email= '".$email."' AND matkhau='".$matkhau."' LIMIT 1  "; 
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count > 0){
            $row_data = mysqli_fetch_array($row);
            $_SESSION['dangky'] = $row_data['tenkhachhang'];
            header("Location: index.php?quanly=giohang");
        }else{
            echo '<p style="color:red">Mật khẩu hoặc Email sai, vui lòng nhập lại</p>';

        }
    }
?>
<table>
    <form  class="neumorphic-form" action=""  autocomplete="off" method="POST">
        <div class="neumorphic-card">
        <div class="neumorphic-card__header">Đăng nhập khách hàng</div>
        <form onsubmit="event.preventDefault()"  class="neumorphic-form"  action=""  >
            <div class="neumorphic-input-wrapper">
                <label for="neumorphic-username">Username</label>
                <input type="text" name="email"  placeholder="Email...." id="neumorphic-username">
            </div>
            <div class="neumorphic-input-wrapper">
                <label for="neumorphic-password">Password</label>
                <input type="password" name="password" placeholder="password...."  id="neumorphic-password">
            </div>
            <button type="submit" name="dangnhap" value="Đăng nhập">Sign in</button>
        </form>
</form>
</table>
