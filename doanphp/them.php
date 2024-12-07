<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="them.css">
</head>
<?php
    include("ketnoi.php");
    $sql ="SELECT id, theloai FROM  theloai ";
    $ketqua = mysqli_query($ketnoi, $sql);
?>
<body>
    <center><h3>TRANG THÊM SÁCH</h3>
    <form   action="thuchienthem.php" method="POST" enctype="multipart/form-data" >
        <table border ="1">
            
            <tr>
                <td>HÌNH</td>
                <td ><input type="file" name="hinh"></td>
            </tr>
            <tr>
                <td>TÊN SÁCH</td>
                <td><input type="text"name="tensach"></td>
            </tr>
            <tr>
                <td>TÁC GIẢ</td>
                <td><input type="text" name="tacgia"></td>
            </tr>
            <tr>
                <td>NĂM XUẤT BẢN</td>
                <td><input type="date" name="namxuatban"></td>
            </tr>
            <tr>
                <td>THỂ LOẠI</td>
                <td>
                <select name="theloai" >
                        <?php 
                            while($row = mysqli_fetch_array($ketqua)){
                                echo"<option value=\"".$row['id']."\">".$row['theloai']."</option>";
                            }
                        ?>
                     </select>
                </td>
            </tr>
            <tr>
                <td colspan="7"><input type="submit" value="Thêm"></td>
            </tr>
        </table>
    </form>
</center>
</body>
<script type='text/javascript' src='snow.mini.js'></script>
</html>