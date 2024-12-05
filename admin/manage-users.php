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
    <title>Trang Quản Lý Người Dùng - Admin</title>
</head>
<body>
    <div class="wapper">
        <header class="container-flush bg-info fixed-top">
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
                <div class="col-md-10 my-5">
                    <div class="header-menu bg-white me-5 shadow">
                        <div class="logo-w3-agile m-0 bg-info">
                            <h1>
                                <a href="index-admin.php">HỆ THỐNG QUẢN LÝ DU LỊCH</a>
                            </h1>
                        </div>
                    </div>

                    <div class="header-page bg-white my-5 py-2 ps-3 me-5 shadow">
                        <a href="index-admin.php">Trang Chủ</a>
                        <i class="fa-solid fa-angle-right"></i>
                        <a href="manage-users.php">Quản Lý Tài Khoản</a>
                    </div>

                    <div class="row me-5">
                    <div class="container mt-3">
                            <h2>Quản Lý Đặt Tour</h2>
                        
                            <div class="table-responsive shadow">
                                <table class="table table-bordered m-0">
                                <thead class="bg-info text-white">
                                    <tr>
                                    <th>ID</th>
                                    <th>Họ Và Tên</th>
                                    <th>Số Điện Thoại</th>
                                    <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                if (!$mysqli) {
                                        die("Connection failed: " . mysqli_connect_error());
                                    }

                                    $lietke_sql = "SELECT * FROM user_form";
                                    $results = $mysqli->query($lietke_sql);

                                    if($results->num_rows > 0)
                                    {
                                    while($row = $results->fetch_assoc())
                                    {   ?>
                                    <tr>
                                    <td><?php echo $row['id'];?></td>
                                    <td><?php echo $row['name'];?></td>
                                    <td><?php echo $row['sdt'];?></td>
                                    <td><?php echo $row['email'];?></td>
                                    </tr>
                                    <?php }} ?>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>