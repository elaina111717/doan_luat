<?php
    include('ketnoi.php');
    $idcanxoa = $_GET['idxoa'];
    $sql = "DELETE FROM sach WHERE sach.id = $idcanxoa";
    $ketqua = mysqli_query($ketnoi, $sql);
   
    echo"<script>";
    if($ketqua){ 
  echo  "alert('Xóa sách thành công');";
  echo "window.location= 'quangli.php';";
} 
else{
  echo  "alert('Xóa sách không thành công!');";
}
echo "window.location= 'quangli.php';";
echo "</script>";
?>