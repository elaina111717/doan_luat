<?php
session_start();
$ketnoi = mysqli_connect("localhost","root","","tv");
    if(!$ketnoi){exit('ket noi that bai!');}
$ten = $_POST['user'];
$mk = $_POST['pass'];
echo $ten;
echo $mk;

$sql = "SELECT hoten FROM taikhoang WHERE tendangnhap = '$ten' AND matkhau = '$mk'";


$ketqua = mysqli_query($ketnoi, $sql);
$row = mysqli_fetch_array($ketqua);
$taikhoang = mysqli_num_rows($ketqua);
echo $taikhoang;
    if($taikhoang >0 ){
        $_SESSION['hoten'] = $row['hoten'];
        echo"<script>";
        echo" window.location = 'index.php';";
        echo"</script>";
    }else{
        echo"<script>";
        echo"alert('Đăng nhập không thành công')";
        echo" window.location = 'dangnhap.html';";
        echo"</script>";
    }
?>