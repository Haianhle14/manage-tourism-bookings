<?php
    require_once('../includes/config.php');
    if(isset($_POST['update'])){
        $tentour = $_POST['nametour'];
        $loaitour = $_POST['loaitour'];
        $vitritour = $_POST['vitritour'];
        $giatour = $_POST['pricetour'];
        $tinhnangtour = $_POST['tinhnangtour'];
        $chitiettour = $_POST['chitiettour'];
        $ngaycapnhattour = $_POST['ngaycapnhattour'];
        $imagetour = $_POST['imagetour'];
        $id = $_POST['eid'];

        $update_sql = "UPDATE tbltour SET Tentour='$tentour', Loaitour='$loaitour', Vitritour='$vitritour', 
        Giatour='$giatour', Tinhnangtour='$tinhnangtour', Chitiettour='$chitiettour', Ngaycapnhaptour='$ngaycapnhattour', 
        Hinhanhtour='$imagetour' WHERE Idtour=$id";


        mysqli_query($mysqli, $update_sql);

        header('location: ../manage-tour.php');
    }else {
        echo 'Đã xảy ra lỗi, hãy thử lại';
    }
?>