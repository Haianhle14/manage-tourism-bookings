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
    <title>đặt tour</title>
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



    <div class="heading" style="background:url(images/img-about-1.png) no-repeat">
        <h1>đặt ngay</h1>
    </div>


    <section class="">
        <div class="py-4 px-5 my-5">
            <?php 
                $id = $_GET['bookid'];
                require_once('includes/config.php');
                $book = "SELECT * FROM tbltour WHERE Idtour=$id";
                $result = mysqli_query($mysqli, $book);
                    if($result->num_rows > 0)
                        {
                        while($row = mysqli_fetch_assoc($result))
                        {   ?>
                        <form action="modules/create-booking.php" method="POST" >
                            <div class="row shadow mb-5 pt-3">
                                <div class="row mb-5">
                                    <div class="col-md-4">
                                        <img style="width: 100%;" class="image" src="images/<?php echo $row['Hinhanhtour'];?>"><a href=""></a>
                                    </div>
                                    <div class="col-md-8 ps-5">
                                        <h2 style="font-size: 3rem;" class="text-muted"><?php echo $row['Tentour'];?></h2>
                                        <span style="font-size: 1.5rem;" class="text-secondary">#BOOKID - </sp><input style="font-size: 1.5rem;" class="dow text-secondary" value="<?php echo $row['Idtour'];?>" name="bookid"></input>
                                        <p style="font-size: 1.5rem;" class="text-secondary"><b style="font-size: 1.5rem;" class="text-muted">Loại Tour:</b> <?php echo $row['Loaitour'];?></p>
                                        <p style="font-size: 1.5rem;" class="text-secondary"><b style="font-size: 1.5rem;" class="text-muted">Vị Trí Tour:</b> <?php echo $row['Vitritour'];?></p>
                                        <p style="font-size: 1.5rem;" class="text-secondary"><b style="font-size: 1.5rem;" class="text-muted">Tính năng Tour</b> <?php echo $row['Tinhnangtour'];?></p>
                                        <div class="row justify-content-around">
                                            <div class="col-md-4" style="font-size: 1.5rem;">
                                                <h3 class="text-muted">Ngày Đi</h3>
                                                <input class="text-secondary" style="width: 100%;" type="date" placeholder="dd-mm-yyyy"  name="ngaydi" required="">
                                            </div>
                                            <div class="col-md-4 me-5" style="font-size: 1.5rem;">
                                                <h3 class="text-muted">Ngày Về</h3>
                                                <input class="text-secondary"  style="width: 100%;" type="date" placeholder="dd-mm-yyyy" name="ngayve" required="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-5">
                                    <div class="col-md-11">
                                        <h3>Chi Tiết Tour</h3>
                                        <p style="font-size: 1.5rem;"><?php echo $row['Chitiettour'];?> </p>	
                                    </div>
                                    <div class="col-md-1">
                                        <h3  style="text-align: center;">Giá</h3>
                                        <p class="text-info" style="font-size: 1.5rem;"><?php echo $row['Giatour'];?>đ</p>	
                                    </div>
                                </div>
                            </div>

                            <h2 class="heading-title">đặt chuyến đi của bạn!</h2>

                            <div class="row book-form shadow">
                                <div class="col-md-6">
                                    <div class="inputBox">
                                        <span>họ và tên:</span>
                                        <input type="text" placeholder="Nhập họ và tên của bạn" name="tenkh">
                                    </div>
                                    <div class="inputBox">
                                        <span>email:</span>
                                        <input type="email" placeholder="Nhập email của bạn" name="email">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="inputBox">
                                        <span>số điện thoại:</span>
                                        <input type="number" placeholder="Nhập số điện thoại của bạn" name="sdtkh">
                                    </div>
                                    <div class="inputBox">
                                        <span>ngày đặt tour:</span>
                                        <input type="date" placeholder="Nhập nơi bạn muốn đến" name="ngaydattour">
                                    </div>
                                    
                                </div>
                            </div>
                            <input type="submit" value="Đặt Tour" class="btnn" name="book">
                            <?php }} ?>
                        </form>
            </div>
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
    <!-- footer section ends -->


<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>
</body>
</html>