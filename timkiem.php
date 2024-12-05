<?php
$link = mysqli_connect("localhost", "root", "", "web_travel");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_REQUEST["term"])){
    $sql = "SELECT Idtour, Tentour, Vitritour, Hinhanhtour FROM tbltour WHERE Tentour LIKE ? OR Vitritour LIKE ?";
    
    if ($stmt = mysqli_prepare($link, $sql)) {
        $param_term = '%' . $_REQUEST["term"] . '%';
        mysqli_stmt_bind_param($stmt, "ss", $param_term, $param_term);
        
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    // Sửa lại phần hiển thị, thêm các trường cần thiết
                    echo "<p data-idtour='" . $row["Idtour"] . "'>";
                    echo "Tên Tour: " . $row["Tentour"] ."<br>";
                    echo "Vị Trí: " . $row["Vitritour"] ."<br>";
                    echo '<img src="images/' . $row["Hinhanhtour"] . '" alt="Hình ảnh Tour">';
                    echo "</p>";
                }
            } else{
                echo "<p>Không tìm thấy tour</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
    mysqli_stmt_close($stmt);
}

mysqli_close($link);
?>
