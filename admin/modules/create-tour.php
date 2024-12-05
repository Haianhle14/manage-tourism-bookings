<?php
    $connection = mysqli_connect('localhost', 'root','','web_travel');

    if(isset($_POST['create'])){
        $tentour = $_POST['nametour'];
        $loaitour = $_POST['loaitour'];
        $vitritour = $_POST['vitritour'];
        $giatour = $_POST['pricetour'];
        $tinhnangtour = $_POST['tinhnangtour'];
        $chitiettour = $_POST['chitiettour'];
        $ngaylaptour = $_POST['ngaylaptour'];
        $imagetour = $_POST['imagetour'];

        $request = "insert into tbltour(Tentour, Loaitour, Vitritour, Giatour, Tinhnangtour, Chitiettour, Hinhanhtour, Ngaylaptour) values
        ('$tentour', '$loaitour', '$vitritour', '$giatour', '$tinhnangtour', '$chitiettour', '$imagetour', '$ngaylaptour')";

        mysqli_query($connection, $request);

        header('location: ../manage-tour.php');
    }else {
        echo 'Đã xảy ra lỗi, hãy thử lại';
    }
?>