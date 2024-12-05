<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thông tin</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container-flush bg-info">
        <div class="container login">
            <div>
                <a href="admin/login-admin.php">Đăng nhập admin</a>
            </div>
            <div>
                <a href="login_form.php">Đăng nhập</a>
                <span href="">/</span>
                <a href="register_form.php"> Đăng ký</a>
            </div>
        </div>
    </div>

    <section class="header">
        <a href="home.php" class="logo">travelVN</a>

        <nav class="navbar">
            <a href="home.php">trang chủ</a>
            <a href="about.php">thông tin</a>
            <a href="package.php">gói tour</a>
            <a href="feedback.php">Phản hồi</a>
        </nav>

        <div id="menu-btnn" class="fas fa-bars"></div>
    </section>



    <div class="heading" style="background:url(images/img-tour-taynguyen.jpg) no-repeat">
        <h1>gửi phản hồi của bạn</h1>
    </div>

    <div class="container my-5">
        <div class="me-5 bg-white py-2 ps-3 shadow feedback">
            <form action="modules/send-feedback.php" method="POST" class="py-2  me-5">
            <div class="mb-3">
                <label class="form-label fs-s">Họ Và Tên</label>
                <input class="form-control" type="text" placeholder="Nhập họ và tên của bạn" name="namefeedback">
            </div>
            <div class="mb-3">
                <label class="form-label">Số Điện Thoại</label>
                <input class="form-control" type="number" placeholder="Nhập số điện thoại của bạn" name="sdtfeedback">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input class="form-control" type="text" placeholder="Nhập Email của bạn" name="emailfeedback">
            </div>
            <div class="mb-3">
                <label class="form-label">Nội Dung Phản Hồi</label>
                <textarea class="form-control" rows="5" cols="50" name="ndfeedback" placeholder="Nhập nội dung bạn muốn gửi cho chúng tôi" style="width: 100% !important; font-size: 1.5rem;" required></textarea> 
            </div>
            <div class="mb-3">
                <label class="form-label">Ngày Gửi Phản Hồi</label>
                <input class="form-control" type="date" name="ngayguifeedback" placeholder="Nhập ngày gửi phản hồi">
            </div>
            <button type="submit " style="font-size: 1.5rem" name="send" class="btn-primary btn shadow">Gửi</button>

            <button type="reset" class="btn-inverse btn shadow" style="font-size: 1.5rem">Reset</button>
            </form>
        </div>
    </div>

    <section class="footer bg-black">
        <div class="box-container">
            <div class="box">
                <h3>đường dẫn</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> trang chủ</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> thông tin</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> gói tour</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> phản hồi</a>
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