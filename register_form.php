<?php

include 'includes/config.php';

if(isset($_POST['submit'])){

   $name = ($_POST['name']);
   $sdt = ($_POST['sdt']);
   $email = ($_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($mysqli, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'Người dùng đã tồn tại!';

   }else{

      if($pass != $cpass){
         $error[] = 'Mật khẩu không khớp!';
      }else{
         $insert = "INSERT INTO user_form(name, sdt, email, password) VALUES('$name','$sdt','$email', '$pass')";
         mysqli_query($mysqli, $insert);
         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style-login.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Đăng kí ngay</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="Nhập tên của bạn">
      <input type="number" name="sdt" required placeholder="Nhập số điện thoại của bạn">
      <input type="email" name="email" required placeholder="Nhập email của bạn">
      <input type="password" name="password" required placeholder="Nhập mật khẩu của bạn">
      <input type="password" name="cpassword" required placeholder="Xác nhận mật khẩu của bạn">
      <input type="submit" name="submit" value="Đăng kí ngay" class="form-btn">
      <p>Bạn đã có tài khoản? <a href="login_form.php">Đăng nhập ngay</a></p>
   </form>

</div>

</body>
</html>