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
    <title>Trang Cập Nhật Tour - Admin</title>
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
                                    <a href="manage-feedback.php">Quản Lý Câu Hỏi</a>
                                </li>
                                <div style="border-top: 1px ridge rgba(255, 255, 255, 0.15)"></div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 py-5">
                    <div class="header-menu bg-white me-5">
                        <div class="logo-w3-agile m-0 bg-info">
                            <h1>
                                <a href="index-admin.php">HỆ THỐNG QUẢN LÝ DU LỊCH</a>
                            </h1>
                        </div>
                    </div>

                    <div class="header-page bg-white my-5 py-2 ps-3 me-5">
                        <a href="">Trang chủ</a>
                        <i class="fa-solid fa-angle-right"></i>
                        <a href="manage-tour.php">Quản Lý Tour</a>
                        <i class="fa-solid fa-angle-right"></i>
                        <a href="manage-create-tour.php">Sửa Tour</a>
                    </div>

                    <div class="row me-5 bg-white py-2 ps-3">
                        <div>
                            <h3>Cập Nhật Tour</h3>
                        </div>

                        <?php 
                        $id = $_GET['eid'];
                        require_once('includes/config.php');
                        $edit_sql = "SELECT * FROM tbltour WHERE Idtour=$id";
                        $result = mysqli_query($mysqli, $edit_sql);
                        
                        if($result->num_rows > 0)
                            {
                            while($row = mysqli_fetch_assoc($result))
                            {   ?>
                        <form action="modules/update-tour.php" method="POST" class="py-2  me-5">
                            <input type="hidden" name="eid" value="<?php echo $id;?>" id="">
                            <div class="mb-3">
                                <label class="form-label">Tên tour</label>
                                <input class="form-control" type="text" placeholder="Nhập tên tour" name="nametour" value="<?php echo $row['Tentour'];?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Loại tour</label>
                                <input class="form-control" type="text" placeholder="Nhập loại tour (1,2,3,.. người)" name="loaitour" value="<?php echo $row['Loaitour'];?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Vị trí tour</label>
                                <input class="form-control" type="text" placeholder="Nhập vị trí tour" name="vitritour" value="<?php echo $row['Vitritour'];?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Giá tour</label>
                                <input class="form-control" type="number" placeholder=" Nhập giá tour " name="pricetour" value="<?php echo $row['Giatour'];?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tính năng tour</label>
                                <input class="form-control" type="text" placeholder="Nhập các tính năng của tour" name="tinhnangtour" value="<?php echo $row['Tinhnangtour'];?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Chi tiết tour</label>
                                <textarea class="form-control" rows="5" cols="50" name="chitiettour" placeholder="Nhập chi tiết của tour đó" style="width: 100% !important;" required><?php echo $row['Chitiettour'];?></textarea> 
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Ngày cập nhật tour</label>
                                <input class="form-control" type="date" name="ngaycapnhattour" placeholder="Nhập ngày lập tour đó">
                            </div>
                            <div class="mb-3 ">
                                <label class="form-check-label" for="exampleCheck1">Hình ảnh tour</label>
                                <img class="image" src="images/<?php echo $row['Hinhanhtour'];?>"><a href=""></a>
                                <input class="form-control my-2" type="file" name="imagetour">
                            </div>
                            <?php }} ?>
                            <button type="submit" name="update" class="btn-primary btn">Câp Nhật Thông Tin</button>

                            <button type="reset" class="btn-inverse btn">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>