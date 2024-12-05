<?php
    require_once('../includes/config.php');

    if(isset($_POST['send'])){
        $namefeedback = $_POST['namefeedback'];
        $emailfeedback = $_POST['emailfeedback'];
        $sdtfeedback = $_POST['sdtfeedback'];
        $ndfeedback = $_POST['ndfeedback'];
        $ngayguifeedback = $_POST['ngayguifeedback'];

        $request = "insert into tbl_feedback(fullname, email, sdt, noidung, Ngaydang) values
        ('$namefeedback','$emailfeedback', '$sdtfeedback', '$ndfeedback', '$ngayguifeedback')";

        mysqli_query($mysqli, $request);

        header('location: ../feedback.php');
    }else {
        echo 'Đã xảy ra lỗi, hãy thử lại';
    }
?>