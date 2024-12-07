<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
<body>
    <form action="thuchiensua.php" method="POST" enctype="multipart/form-data">
        <table>
            <h3>Trang sua thoong tin sach </h3>
            <tr>
                <td>Hinh</td>
                <td><input type="file" name="hinh"></td>
            </tr>
            <tr>
                <td>TEN SACH</td>
                <td><input type="text"name="tensach" value="<?php echo $row_ttsach['tensach'] ?>"></td>
            </tr>
            <tr>
                <td>TAC GIA</td>
                <td><input type="text" name="tacgia" value="<?php echo $row_ttsach['tacgia'] ?>"></td>
            </tr>
            <tr>
                <td>NAM XUAT BAN</td>
                <td><input type="date" name="namxuatban" value="<?php echo $row_ttsach['namxuatban'] ?>"></td>
            </tr>
            <tr>
                <td>THE LOAI</td>
                <td>
                <select name="theloai" >
                        <?php 
                            while($row = mysqli_fetch_array($ketqua)){
                                echo"<option value=\"".$row['id']."\"";
                                if($row['id'] == $row_ttsach['id_theloai']){
                                    echo "selected";}
                                echo">".$row['theloai']."</option>";
                                
                            }
                        ?>
                     </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Sửa thông tin"></td>
                <input type="hidden" name="idsua" value=" <?php echo $row_ttsach['id']; ?>" >
                <input type="hidden" name="hinhcu" value="<?php echo $row_ttsach['hinh']; ?>">
            </tr>
        </table>
    </form>
</body>
</html>