<?php
	session_start();
	include('includes/config.php');
	if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['usename'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_admin WHERE usename='".$taikhoan."' AND password ='".$matkhau."'";
		$row = mysqli_query($mysqli, $sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$_SESSION['dangnhap'] = $taikhoan;
			header("Location:index-admin.php");
		}else{
			echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng, vui lòng thử nhập lại.")</script>';
			header("Location:login-admin.php");
		}
	}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Travel | Đăng Nhập Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style-login.css" rel='stylesheet' type='text/css' />
</head> 
<body>
	<div class="form-container">
		<form action="" method="POST" class="col-md-6 bg-light py-3 my-3 shadow">
			<h3>đăng nhập</h3>
			<?php
			if(isset($error)){
				foreach($error as $error){
					echo '<span class="error-msg">'.$error.'</span>';
				};
			};
			?>
			<input type="text" name="usename" required placeholder="Nhập tên tài khoản của bạn">
			<input type="password" name="password" required placeholder="Nhập mật khẩu của bạn">
			<input type="submit" name="dangnhap" value="Đăng nhập" class="form-btn">
			<p>Quay lại trang chủ? <a href="../home.php">Trang Chủ</a></p>
		</form>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>
</html>