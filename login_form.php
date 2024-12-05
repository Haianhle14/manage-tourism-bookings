<?php

include 'includes/config.php';

session_start();

if(isset($_POST['submit'])){
   $email = $_POST['email'];
   $pass = md5($_POST['password']);
   

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $row = mysqli_query($mysqli, $select);
	$count = mysqli_num_rows($row);
   if($count>0){
      $_SESSION['dangnhap'] = $email;
      header("Location: user/home-user.php");
   }else{
      echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng, vui lòng thử nhập lại.")</script>';
      header("Location:login_form.php");
   }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>
   <link rel="stylesheet" href="css/style-login.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>đăng nhập</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="Nhập email của bạn">
      <input type="password" name="password" required placeholder="Nhập mật khẩu của bạn">
      <input type="submit" name="submit" value="Đăng nhập" class="form-btn">
      <p>Bạn không có tài khoản? <a href="register_form.php">đăng kí ngay</a></p>
   </form>

</div>

</body>
</html>