<!DOCTYPE html>
<?php
session_start();
include("control.php");
$get_data = new data();
if (!empty($_SESSION["username"]) && !empty($_SESSION["password"])) {
    $getdata = $get_data->login_user($_SESSION["username"], $_SESSION["password"]);
    foreach ($getdata as $sel) {
        $idkh = $sel["id_user"];
        $_SESSION["hoten"] = $sel["hoten"];
    }
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./common/slick-1.8.1/slick/slick.css">
    <link rel="stylesheet" href="./common/slick-1.8.1/slick/slick-theme.css">
    <link rel="stylesheet" href="./common/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/style-intro.css">
    <title>Document</title>
</head>

<body>
    <!-- --------------------------------menu------------------------------- -->
    <section id="menu-section">
        <div id="menu" class="common-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5">
                        <div class="logo">
                            <img src="./Pictures/trang-chu/logophongtra.png" alt="" style="width: 185px ;height: 55px;" srcset="">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <nav>

                            <nav>
                                <ul class="nav-parent">
                                    <li><a href="index1.php">TRANG CHỦ</a></li>
                                    <li><a href="introduce.php">KHÁCH HÀNG</a></li>
                                    <li><a href="products.php">SẢN PHẨM</a></li>
                                    <li><a href="products.php">HÓA ĐƠN</a></li>
                                    <li><a href="news.html">TIN TỨC</a></li>
                                    
                                </ul>
                            </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ---------------------end menu--------------------------------->
    <!-- ---------------------Banner------------------------------->
   

    <!-- ----------------------------footer------------------------------- -->
    <section id="footer" class="ft">
        <div class="container-fluid">
            <div class="row common-section d-flex justify-content-center p-4">
                <div class="col-md-4 d-flex justify-content-center">
                    <div>
                        <h4><img src="./Pictures/trang-chu/logophongtra.png" alt=""></h4>
                        <ul>
                            <li><a href="#"><i class="fa-solid fa-phone-volume"></i>: 0999999999</a></li>
                            <li><a href="#"><i class="fa-solid fa-envelope"></i>: trasenbichdiep@gmail.com</a></li>
                            <li><a href="#"><i class="fa-solid fa-house"></i>: Số 12, Tây Hồ Hà Nội</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 mt-4 d-flex justify-content-center">
                    <div>
                        <h4>VỀ CHÚNG TÔI</h4>
                        <ul>
                            <li><a href="#">Giới thiệu</a></li>
                            <li><a href="#">Sản phẩm</a></li>
                            <li><a href="#">Tin tức</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 mt-4 d-flex justify-content-center">
                    <div>
                        <h4>LIÊN HỆ</h4>
                        <ul>
                            <li><a href="#">
                                    <ul class="d-flex ">
                                        <li class="me-2"><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                        <li class="me-2"><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                    </ul>
                                </a></li>
                            <li><a href="#">Nguyễn Quang Linh</a></li>
                            <li><a href="#">Mỹ Hào - Hưng Yên</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-img">
            <img src="./Pictures/trang-chu/fotter-tea.png" alt="">
        </div>
    </section>
</body>

</html>