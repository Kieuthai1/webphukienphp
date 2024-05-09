<?php
    if(isset($_POST['doimatkhau'])){
      
        $taikhoan =$_POST['email'];
        $matkhau_cu = md5($_POST['password_cu']);
        $matkhau_moi = md5($_POST['password_moi']);

        $sql= "SELECT * FROM tbl_dangky WHERE email= '".$taikhoan."' AND matkhau='".$matkhau_cu."' LIMIT 1  "; 
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count > 0){
            $sql_update= mysqli_query($mysqli,"UPDATE tbl_dangky SET matkhau= '".$matkhau_moi."' ");
            echo '<p style = "color:green">Mật khẩu đã được thay đổi</p>';

        }else{
            echo '<p style = "color:red">Tài khoản hoặc Mật khẩu cũ không đúng, vui lòng nhập lại."</p>';
        }
    }
?>
 
 
 



<form  class="neumorphic-form" action=""  autocomplete="off" method="POST">
        <div class="neumorphic-card">
        <div class="neumorphic-card__header">Đổi mật khẩu khách hàng</div>
        <form onsubmit="event.preventDefault()"  class="neumorphic-form"  action=""  >
            <div class="neumorphic-input-wrapper">
                <label for="neumorphic-username">Username</label>
                <input type="text" name="email" id="neumorphic-username">
            </div>
            <div class="neumorphic-input-wrapper">
                <label for="neumorphic-password">Password cũ</label>
                <input type="text" name="password_cu" id="neumorphic-password">
            </div>
            <div class="neumorphic-input-wrapper">
                <label for="neumorphic-password">Password mới</label>
                <input type="text" name="password_moi" id="neumorphic-password">
            </div>
            <button type="submit" name="doimatkhau" value="Đổi mật khẩu">Đổi mật khẩu</button>
        </form>
</form>