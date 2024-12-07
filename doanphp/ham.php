<?php
    function sach($img, $ten, $tacgia, $theloai, $xuatban){
        echo"<div class=\"col-3\">";
            echo"<div class=\"card\" style=\"width: 18rem;\">";
                echo"<img src=\"imgs//".$img."\" class=\"card-img-top\" >";
                echo"<div class=\"card-body\">";
                    echo"<h5 class=\"card-title\">".$ten."</h5>";
                    echo"<p class=\"card-text\">".$tacgia."</p>";
                    echo"<p class=\"card-text\">".$theloai."</p>";
                    echo"<p class=\"card-text\">".$xuatban."</p>";
                    echo"<a href=\"#\" class=\"btn btn-primary\">Mượn ngay</a>";
                echo"</div>";
            echo"</div>";
        echo"</div>";
    }
?>