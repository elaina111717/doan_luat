<?php
    include('ketnoi.php');
   
    // $hinh = $_POST['Hinh'];
    $tensach = $_POST['tensach'];
    $tacgia = $_POST['tacgia'];
    $namxuatban = $_POST['namxuatban'];
    $theloai = $_POST['theloai'];
    $idsua = $_POST['idsua'];
    $hinhcu = $_POST['hinhcu'];
    if(!empty($_FILES['hinh']['tmp_name'])){
        move_uploaded_file($_FILES['hinh']['tmp_name'],'imgss/'.$_FILES['hinh']['name']);
        $hinh = $_FILES['hinh']['name'];
    }else {
        $hinh = $hinhcu;
    }
    // $hinh = $_FILES['hinh']['name'];

    $sql = "UPDATE sach SET tensach = ' $tensach', tacgia = '$tacgia', namxuatban = '$namxuatban', id_theloai = '$theloai' WHERE sach.id ='$idsua'";
    $ketqua = mysqli_query($ketnoi, $sql);
    echo $idsua;
    echo $sql;
    echo "<script>";
        if($ketqua){
            echo "alert('sửa thành công');";
            echo "window.location = 'quangli.php';";
        }else{
            echo "alert('sửa không thành công');";
        }
        echo "window.location = 'quangli.php';";
    echo "</script>";
?>