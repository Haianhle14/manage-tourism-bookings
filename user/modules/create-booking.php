<?php
    require_once('../includes/config.php');

    if(isset($_POST['book'])){
        $idtour = $_POST['bookid'];
        $tenkh = $_POST['tenkh'];
        $email = $_POST['email'];
        $sdtkh = $_POST['sdtkh'];
        $ngaydi = $_POST['ngaydi'];
        $ngayve = $_POST['ngayve'];
        $ngaydattour = $_POST['ngaydattour'];
        

        $request = "insert into tblbooking(Idtour, Tenkh, Sdtkh, Email, Ngaydi, Ngayve, Ngaybooking) values
        ('$idtour','$tenkh', '$sdtkh', '$email', '$ngaydi', '$ngayve', '$ngaydattour')";

        mysqli_query($mysqli, $request);

        echo'đặt tour thành công';
    }else {
        echo 'Đã xảy ra lỗi, hãy thử lại';
    }
?>