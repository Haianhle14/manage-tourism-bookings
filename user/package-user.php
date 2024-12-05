<?php
session_start();
error_reporting(0);
include('includes/config.php');

if(isset($_GET['action'])=='dangxuat') {
    header('location: ../home.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container-flush bg-info">
        <div class="container login ">
            <div>
                <a href="profile.php">Thông Tin</a>
                <a href="change-password.php" class="px-3">Đổi Mật Khẩu</a>
                <a href="tour-history.php" >Lịch Sử Đặt Tour</a>
            </div>
            <div>
                <?php
                    $sql = "SELECT * FROM user_form";
                    $result = $mysqli->query($sql);
                    
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {?>
                            <span href="">welcome: <?php echo $row['name'] ?></span>
                            <span href="">/</span>
                             <a href="home-user.php?action=dangxuat"> Đăng xuất</a>
                    <?php }} ?>
            </div>
        </div>
    </div>
    <section class="header">
        <a href="home-user.php" class="logo">travelVN</a>

        <nav class="navbar">
            <a href="home-user.php">trang chủ</a>
            <a href="about-user.php">thông tin</a>
            <a href="package-user.php">gói tour</a>
            <a href="feedback-user.php">Phản hồi</a>
        </nav>

        <div id="menu-btnn" class="fas fa-bars"></div>
    </section>


    <div class="heading" style="background:url(images/img-tour-halong.jpg) no-repeat">
        <h1>gói tour</h1>
    </div>

    <section class="packages">
        <h1 class="heading-title">những điểm hấp dẫn nhất</h1>
        <div class="box-container">
            <?php 
            if (!$mysqli) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $lietke_sql = "SELECT * FROM tbltour";
            $results = $mysqli->query($lietke_sql);

            if($results->num_rows > 0)
            {
            while($row = $results->fetch_assoc())
            {   ?>
            <div class="box">
                <div class="image">
                    <img src="images/<?php echo $row['Hinhanhtour'];?>" alt="">
                </div>
                <div class="content">
                    <h4>tên gói: <?php echo $row['Tentour'];?></h4>
                    <h6>loại gói: <?php echo $row['Loaitour'];?></h6>
                    <p><b>vị trí gói hàng: <?php echo $row['Vitritour'];?></b></p>
                    <p><b>tính năng: <?php echo $row['Tinhnangtour'];?></b></p>
                    <h5><?php echo $row['Giatour'];?>đ</h5>
                </div>
                <div class="content">
                    <a href="book-user.php?bookid=<?php echo $row['Idtour'] ?>" class="btnn">Chi Tiết</a>
                </div>
            </div>
            <?php }} ?>
        </div>

    </section>

    <section class="footer bg-black">
        <div class="box-container">
            <div class="box">
                <h3>đường dẫn</h3>
                <a href="home-user.php"><i class="fas fa-angle-right"></i> trang chủ</a>
                <a href="about-user.php"><i class="fas fa-angle-right"></i> thông tin</a>
                <a href="package-user.php"><i class="fas fa-angle-right"></i> gói tour</a>
                <a href="book-user.php"><i class="fas fa-angle-right"></i> phản hồi</a>
            </div>

            <div class="box">
                <h3>liên kết bổ sung</h3>
                <a href="#"><i class="fas fa-angle-right"></i> phản hồi</a>
                <a href="#"><i class="fas fa-angle-right"></i> về chúng tôi</a>
                <a href="#"><i class="fas fa-angle-right"></i> chính sách bảo mật</a>
                <a href="#"><i class="fas fa-angle-right"></i> điều khoản người dùng</a>
            </div>

            <div class="box">
                <h3>thông tin liên lạc</h3>
                <a href="#"><i class="fas fa-phone"></i> +84-866-926-322</a>
                <a href="#"><i class="fas fa-phone"></i> +84-888-888-888</a>
                <a href="#"><i class="fas fa-envelop"></i> haianh102003@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i> VietNam</a>
            </div>

            <div class="box">
                <h3>theo dõi</h3>
                <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
                <a href="#"><i class="fab fa-instagram"></i>instagram</a>
                <a href="#"><i class="fab fa-twitter"></i>twitter</a>
                <a href="#"><i class="fab fa-twitter"></i>twitter</a>
            </div>
        </div>
        <div class="credit">created by <span>mr.Haianh</span> | all rights reserved!</div>

    </section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>
</body>
</html>