<?php
    include('ketnoi.php');
   
    // $hinh = $_POST['Hinh'];
    $tensach = $_POST['tensach'];
    $tacgia = $_POST['tacgia'];
    $namxuatban = $_POST['namxuatban'];
    $theloai = $_POST['theloai'];
    move_uploaded_file($_FILES['hinh']['tmp_name'],'imgs/'.$_FILES['hinh']['name']);
    $hinh = $_FILES['hinh']['name'];
    $sql = "INSERT INTO sach(hinh, tensach, tacgia, namxuatban, id_theloai ) values ('$hinh','$tensach','$tacgia','$namxuatban','$theloai')";
    $ketqua = mysqli_query($ketnoi, $sql);
    echo "<script>";
        if($ketqua){
            echo "alert('thêm thành công');";
            echo "window.location = 'them.php';";
        }else{
            echo "alert('thêm không thành công');";
        }
        echo "window.location = 'them.php';";
    echo "</script>";
?>