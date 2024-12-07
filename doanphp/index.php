<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">

</head>
<body>
    <?php
        include('ketnoi.php');
        $sql ="SELECT sach.id, hinh, tensach, namxuatban,tacgia, theloai FROM sach, theloai WHERE id_theloai = theloai.id";
        $ketqua = mysqli_query($ketnoi, $sql);
        include('ham.php');
    ?>
    <div class="header">
       <nav class="navbar navbar-expand-lg navbar-light bg-secondary bg-gradient">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">THẾ GIỚI SÁCH</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Trang Chủ</a>
                </li>
                <?php
                    if(isset($_SESSION['hoten'])){
                        echo"<li class=\"nav-item\" >";
                        echo"<a class=\"nav-link\" href=\"quangli.php\">Xin chào Lê Quốc Kỳ</a>";
                        echo"</li>";
                        echo"<li class=\"nav-item\" >";
                        echo"<a class=\"nav-link\" href=\"quangli.php\">Trang quảng lí</a>";
                        echo"</li>";
                        echo"<li class=\"nav-item\" >";
                        echo"<a class=\"nav-link\" href=\"dangxuat.php\">Đăng xuất</a>";
                        echo"</li>";

                    }else{
                         echo"<li class=\"nav-item\" >";
                         echo"<a class=\"nav-link\" href=\"dangnhap.html\">Đăng nhập</a>";
                         echo"</li>";
                    }
                ?>
                    
                        
                    
                </li>
                
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
        </nav>
            <div class="container">
                <div class="row" >
                        <h1>THẾ GIỚI SÁCH </h1>
                        
                </div><br><br><br><br><br><br>
                <center>
                <button type="button" class="btn btn-primary">ANIME</button>
                <button type="button" class="btn btn-secondary">HÀI HƯỚC</button>
                <button type="button" class="btn btn-success">KINH DỊ</button>
                <button type="button" class="btn btn-danger">VUI NHỘN</button>
                <button type="button" class="btn btn-warning">CỔ TÍCH</button>
                <button type="button" class="btn btn-info">NGÔN TÌNH</button>
                


                </center><br><br><br>
            </div>
    <div class="khung2">
         <div class="mau">
         <center><h3>MỘT SỐ THỂ LOẠI</h3></center>
        </div><br><br><br>
        <div class="container2">
           
        <hr style="color:red; font-weight:bold; border: 3px;">
            <div class="row">
            <?php
                while($row = mysqli_fetch_array($ketqua)){
                    echo sach($row['hinh'],$row['tensach'],$row['tacgia'],$row['namxuatban'],$row['theloai']);
                }
            ?>
            </div>
            <br><br><br><br>
        </div>
    </div>  
    <div class="khung3">
        <div class="container3">
            <div class="row">
                <div class="col-7">
                    <h5>Địa chỉ: đường cách mạng tháng 8, ninh kiều thành phố cần thơ</h5>
                    <h5>Điện thoại:09876548899</h5>
                    <h5>Gmail:ctec2020@gmail.com</h5>

                </div>
                <div class="col-5">
                    <h3>Trường Cao Đẳng Kinh Tế Kỹ Thuật Cần Thơ</h3>
                </div>
            </div>
        </div>
    </div> 
</div> 
</body>

</html>