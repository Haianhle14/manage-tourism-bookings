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
    <title>trang chủ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">

</head>
<style>
    /* Định dạng hộp tìm kiếm */
    .search-box {
        width: 400px;
        /* Điều chỉnh độ rộng của hộp tìm kiếm */
        position: relative;
        display: inline-block;
        font-size: 14px;
    }

    .search-box input[type="text"] {
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
        width: 100%;
        box-sizing: border-box;
    }

    .result {
        position: absolute;
        z-index: 999;
        top: 100%;
        left: 0;
        background-color: #fff;
        /* Thêm màu nền trắng */
        border: 1px solid #CCCCCC;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        width: 100%;
        box-sizing: border-box;
        max-height: 500px;
        /* Giới hạn chiều cao của khung kết quả và thêm thanh trượt */
        overflow-y: auto;
        /* Thêm thanh trượt khi nội dung vượt quá chiều cao */
    }

    /* Định dạng các mục kết quả */
    .result p {
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }

    .result p:hover {
        background: #f2f2f2;
    }

    /* Định dạng ảnh */
    .result img {
        max-width: 100%;
        /* Đảm bảo ảnh không vượt quá chiều rộng của khung kết quả */
        height: auto;
        /* Cho phép tỷ lệ khung hình được giữ nguyên */
    }
</style>
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
        <form>
            <div class="search-box">
                <input type="text" autocomplete="off" placeholder="Tìm kiếm nơi bạn muốn đến" id="search-input">
                <div id="result" class="result"></div>
            </div>
        </form>
        <nav class="navbar">
            <a href="home-user.php">trang chủ</a>
            <a href="about-user.php">thông tin</a>
            <a href="package-user.php">gói tour</a>
            <a href="feedback-user.php">Phản hồi</a>
        </nav>

    </section>

    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(images/img-slide-1.jpg)no-repeat">
                    <div class="content">
                        <span>khám phá, phiêu lưu, du lịch</span>
                        <h3>đi du lịch mọi nơi</h3>
                        <a href="package-user.php" class="btnn">khám phá nhiều hơn</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/img-tour-chua1cot.jpg)no-repeat">
                    <div class="content">
                        <span>khám phá, phiêu lưu, du lịch</span>
                        <h3>đi du lịch mọi nơi</h3>
                        <a href="package-user.php" class="btnn">khám phá nhiều hơn</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/img-tour-halong.jpg)no-repeat">
                    <div class="content">
                        <span>khám phá, phiêu lưu, du lịch</span>
                        <h3>đi du lịch mọi nơi</h3>
                        <a href="package-user.php" class="btnn">khám phá nhiều hơn</a>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next text-info"></div>
            <div class="swiper-button-prev text-info"></div>

        </div>
    </section>

    <section class="services">
        <h1 class="heading-title">Dịch vụ của chúng tôi</h1>
        <div class="box-container">
            <div class="box">
                <img src="images/icon-1.png" alt="">
                <h3>cuộc phiêu lưu</h3>
            </div>
            <div class="box">
                <img src="images/icon-2.png" alt="">
                <h3>hướng dẫn viên</h3>
            </div>
            <div class="box">
                <img src="images/icon-3.png" alt="">
                <h3>leo núi</h3>
            </div>
            <div class="box">
                <img src="images/icon-6.png" alt="">
                <h3>cắm trại</h3>
            </div>
        </div>
    </section>

    <section class="home-about">
        <div class="image">
            <img src="images/img-slide-1.jpg" alt="">
        </div>

        <div class="content">
            <h3>thông tin về chúng tôi</h3>
            <p>Liên hệ : 19001868 – 0909886688</p>
            <p>Văn phòng du lịch: Tòa nhà Công Nghệ Đông Á, P.Trịnh Văn Bô, Xuân Phương, Nam Từ Liêm, Hà Nội</p>
            <a href="about-user.php" class="btnn">đọc thêm</a>
        </div>
    </section>

    <section class="home-packages">
        <h1 class="heading-title"> top 3 tour hấp dẫn</h1>
        <div class="box-container">
            <?php 
            if (!$mysqli) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $lietke_sql = "SELECT t.Idtour, t.Tentour, t.Loaitour, t.Vitritour, t.Giatour, t.Tinhnangtour, t.Hinhanhtour FROM tbltour t
            JOIN (
                SELECT idtour, COUNT(idtour) AS SoLanChon
                FROM tblbooking
                GROUP BY idtour
                ORDER BY SoLanChon DESC
                LIMIT 3
            ) AS MaxIdtour ON t.Idtour = MaxIdtour.idtour;";
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
        <div class="load-more"><a href="package-user.php" class="btnn">xem thêm</a></div>
    </section>

        <!-- gg map -->
        <div class="container my-5">   
            <h1 class="text-center mb-3 heading-title">Địa chỉ liên hệ</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.816939728027!2d105.7393833750318!3d21.040009480612184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135096b31fa7abb%3A0xff645782804911af!2zVHLGsOG7nW5nIMSR4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgxJDDtG5nIMOB!5e0!3m2!1svi!2s!4v1703517292465!5m2!1svi!2s" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function() {
        $('.search-box input[type="text"]').on("keyup input", function(e) {
            var inputVal = $(this).val();
            var resultDropdown = $(this).siblings(".result");
                // Xử lý khi nhập
                if (inputVal.length) {
                    $.get("./timkiem-user.php", {
                        term: inputVal
                    }).done(function(data) {
                        resultDropdown.html(data);
                    });
                } else {
                    resultDropdown.empty();
                }
            
        });

        $(document).on("click", ".result p", function() {
            var selectedItemId = $(this).data('idtour'); // Use 'idtour' instead of 'id'
            window.location.href = "./book-user.php?bookid=" + selectedItemId; // Redirect to search.php with the selected item ID
        });
    });
</script>