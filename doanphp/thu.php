<?php
    include("ketnoi.php");
    $idsua = $_GET['idsua'];
    $sql_ttsach ="SELECT sach.id, hinh, tensach, namxuatban, tacgia ,id_theloai FROM sach, theloai WHERE id_theloai = theloai.id AND sach.id = '$idsua'";
    $ketqua_ttsach = mysqli_query($ketnoi, $sql_ttsach);
    $row_ttsach = mysqli_fetch_array($ketqua_ttsach);
    echo $sql_ttsach;
    echo $idsua;
    $sql ="SELECT id, theloai FROM  theloai ";
    $ketqua = mysqli_query($ketnoi, $sql);
    
?>