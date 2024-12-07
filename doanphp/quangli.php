<?php
    session_start();
    if(!isset($_SESSION['hoten'])){
        header('location:dangnhap.html');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="quangli.css">
</head>
<?php
     include('ketnoi.php');
     $sql ="SELECT sach.id, hinh, tensach, namxuatban,tacgia, theloai FROM sach, theloai WHERE id_theloai = theloai.id";
     $ketqua = mysqli_query($ketnoi, $sql);
?>
<body>
    <center>
    <table border="1" class="bang">
        <tr>
            <td>STT</td>
            <td>Hình</td>
            <td>Tên Sách</td>
            <td>Tác Giả</td>
            <td>Năm xuất bản</td>
            <td>Thể loại</td>
            <td>Tùy Chỉnh</td> 
        </tr>
        <?php
        $stt = 1;
        while($row= mysqli_fetch_array($ketqua)){
        echo"<tr>";
             echo"<td>".$stt."</td>";
             echo "<td><img src=\"imgs\\".$row['hinh']."\" alt=\"\" style=\"width: 80px;\"></td>";
             echo"<td>".$row['tensach']."</td>";
             echo"<td>".$row['tacgia']."</td>";
             echo"<td>".$row['namxuatban']."</td>";
             echo"<td>".$row['theloai']."</td>";
             echo"<td><a  href=\"xoa.php?idxoa=".$row['id']."\">Xóa</a>         
             <a href=\"sua.php?idsua=".$row['id']."\">Sửa</a></td>";
        echo"</tr>";
         $stt++;
        }
        ?>
       <tr>
       <td colspan="7"  ><a href="them.php" >Thêm Sách</a></td>
       </tr>
    </table>
    </center>
</body>

</html>