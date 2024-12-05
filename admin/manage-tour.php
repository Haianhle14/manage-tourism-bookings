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
    <title>Trang Quản Lý tour - Admin</title>
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
                <div class="col-md-10 py-5">
                    <div class="header-menu bg-white me-5">
                        <div class="logo-w3-agile bg-info m-0">
                            <h1>
                                <a href="index-admin.php">HỆ THỐNG QUẢN LÝ DU LỊCH</a>
                            </h1>
                        </div>
                    </div>

                    <div class="header-page bg-white my-5 py-2 ps-3 me-5">
                        <a href="index-admin.php">Trang Chủ</a>
                        <i class="fa-solid fa-angle-right"></i>
                        <a href="manage-tour.php">Quản Lý Tour</a>
                    </div>

                    <div class="row me-5">
                        <div class="container mt-3">
                            <h2>Quản Lý Đặt Tour</h2>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                <thead class="bg-info text-white">
                                    <tr>
                                    <th>#</th>
                                    <th>Hình Ảnh</th>
                                    <th>Tên</th>
                                    <th>Loại Tour</th>
                                    <th>Vị Trí</th>
                                    <th>Giá</th>
                                    <th>Ngày Tạo</th>
                                    <th>Thao Tác</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    if (!$mysqli) {
                                        die("Connection failed: " . mysqli_connect_error());
                                    }

                                    $lietke_sql = "SELECT Idtour, Tentour, Loaitour, Vitritour, Giatour, Ngaylaptour, Hinhanhtour FROM tbltour ";
                                    $results = $mysqli->query($lietke_sql);

                                    if($results->num_rows > 0)
                                    {
                                    while($row = $results->fetch_assoc())
                                    {   ?>
                                    <tr>
                                        <td><?php echo $row['Idtour'];?></td>
                                        <td><img class="image" src="images/<?php echo $row['Hinhanhtour'];?>" alt=""></td>
                                        <td><?php echo $row['Tentour'];?></td>
                                        <td><?php echo $row['Loaitour'];?></td>
                                        <td><?php echo $row['Vitritour'];?></td>
                                        <td><?php echo $row['Giatour'];?></td>
                                        <td><?php echo $row['Ngaylaptour'];?></td>
                                        <td>
                                            <a href="manage-update-tour.php?eid=<?php echo $row['Idtour'];?>"><button type="button" class="btn btn-info btn-block text-white">Sửa</button></a>
                                            <a onclick="return confirm('Bạn có muốn xóa dòng này không?')"href="modules/delete-tour.php?sid=<?php echo $row['Idtour'];?>"><button type="button" class="btn btn-danger btn-block ">Xóa</button></a>
                                        </td>
                                        
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