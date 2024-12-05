<?php
include('includes/config.php');
    
    if(isset($_GET['action'])=='dangxuat') {
        unset($_SESSION['dangnhap']);
        header('location:login-admin.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5a0343e969.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style-admin.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Trang Quản Lý - Admin</title>
</head>
<body>
    <div class="wapper">
        <header class="container-flush bg-info fixed-top ">
            <div class="container home">
                <div class="header__home">
                    <a href="">TravelVN</a>
                </div>
                <div class="header__signout">
                    <a href="index-admin.php?action=dangxuat">Đăng Xuất</a>
                </div>
            </div>
        </header>

        <div class="container-flush">
            <div class="row">
                <div class="col-md-2 px-0">
                    <div class="menu-sidebar">
                        <div class="menu ">
                            <ul class="menu-list ">
                                <li class="menu-item py-2 ps-3 pe-3">
                                    <i class="fa-solid fa-house text-white "></i>
                                    <a href="index-admin.php">Trang Chủ</a>
                                </li>
                                <div style="border-top: 1px ridge rgba(255, 255, 255, 0.15)"></div>
                                
                                <li class="menu-item py-2 ps-3 pe-1">
                                    <div class="menu-item--manage">
                                        <i class="fa-solid fa-briefcase text-white"></i>
                                        <a href="manage-tour.php">Quản Lý Tour</a>
                                        <i class="fa-solid fa-angle-right text-white ps-1"></i>
                                    </div>
                                    <ul class="menu-item--manage-tour bg-dark">
                                        <li class="p-2">
                                            <a href="manage-create-tour.php">Thêm Tour</a>
                                        </li>
                                        <li class="p-2">
                                            <a href="manage-tour.php">Quản Lý</a>
                                        </li>
                                    </ul>
                                </li>
                                <div style="border-top: 1px ridge rgba(255, 255, 255, 0.15)"></div>

                                <li class="menu-item py-2 ps-3 pe-3">
                                    <i class="fa-solid fa-fire text-white"></i>
                                    <a href="manage-booking.php">Quản Lý Đặt Tour</a>
                                </li>
                                <div style="border-top: 1px ridge rgba(255, 255, 255, 0.15)"></div>

                                <li class="menu-item py-2 ps-3 pe-3">
                                    <i class="fa-solid fa-users text-white"></i>
                                    <a href="manage-users.php">Quản Lý Người Dùng</a>
                                </li>
                                <div style="border-top: 1px ridge rgba(255, 255, 255, 0.15)"></div>

                                <li class="menu-item py-2 ps-3 pe-3">
                                 <i class="fa-solid fa-question text-white"></i>
                                    <a href="manage-feedback.php">Quản Lý Phản Hồi</a>
                                </li>
                                <div style="border-top: 1px ridge rgba(255, 255, 255, 0.15)"></div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 py-5">
                    <div class="header-menu bg-white me-5 shadow">
                        <div class="logo-w3-agile bg-info m-0">
                            <h1>
                                <a href="index-admin.php">HỆ THỐNG QUẢN LÝ DU LỊCH</a>
                            </h1>
                        </div>
                    </div>

                    <div class="header-page bg-white my-5 py-2 ps-3 me-5 shadow">
                        <a href="">Trang Chủ</a>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>

                    <div class="row me-5 ">
                        <div class="col-md-3 shadow">
                            <div class="four-agileits bg-danger my-2">
                                <div>
                                    <i class="fa-solid fa-user fs-3 pb-3"></i>
                                </div>
                                <p>Tài Khoản</p>
                                <?php
                                $totaltour_sql = "SELECT * FROM user_form ";
                                $result = $mysqli->query($totaltour_sql);
                                if ($result->num_rows > 0) 
                                {                                    
                                    $total = $result->num_rows;
                                        ?>
                                        <h4><?php echo ($total)?></h4>
                                <?php }?>
                            </div>
                        </div>
                        <div class="col-md-3 shadow">
                            <div class="four-agileits bg-info my-2">
                                <div>
                                    <i class="fa-solid fa-fire fs-3 pb-3"></i>
                                </div>
                                <p>Đặt Chuyến</p>
                                <?php
                                $totaltour_sql = "SELECT * FROM tblbooking ";
                                $result = $mysqli->query($totaltour_sql);
                                if ($result->num_rows > 0) 
                                {                                    
                                    $total = $result->num_rows;
                                        ?>
                                        <h4><?php echo ($total)?></h4>
                                <?php }?>
                            </div>
                        </div>
                        <div class="col-md-3 shadow">
                            <div class="four-agileits my-2" style="background: #a2d200;">
                                <div>
                                <i class="fa-solid fa-briefcase fs-3 pb-3"></i>
                                </div>
                                <p>Tổng Gói</p>
                                <?php
                                $totaltour_sql = "SELECT * FROM tbltour ";
                                $result = $mysqli->query($totaltour_sql);
                                if ($result->num_rows > 0) 
                                {                                    
                                    $total = $result->num_rows;
                                        ?>
                                        <h4><?php echo ($total)?></h4>
                                <?php }?>
                            </div>
                        </div>
                        <div class="col-md-3 shadow">
                            <div class="four-agileits my-2" style="background: #d200b6a2;">
                                <div>
                                    <i class="fa-solid fa-question fs-3 pb-3"></i>
                                </div>
                                <p>Phản Hồi</p>
                                <?php
                                $totaltour_sql = "SELECT * FROM tbl_feedback ";
                                $result = $mysqli->query($totaltour_sql);
                                if ($result->num_rows > 0) 
                                {                                    
                                    $total = $result->num_rows;
                                        ?>
                                        <h4><?php echo ($total)?></h4>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>