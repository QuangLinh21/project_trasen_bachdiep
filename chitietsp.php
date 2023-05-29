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
  <title>Document</title>
</head>
<style>
  html,
  body {
    margin: 0;
    padding: 0;
  }

  * {
    box-sizing: border-box;
  }

  .slider {
    width: 70%;

  }

  .slick-slide {
    margin: 0px 20px;
  }

  .slick-slide img {

    border-radius: 50%;
    width: 100%;
  }

  .slick-prev:before,
  .slick-next:before {
    color: black;
  }


  .slick-slide {
    transition: all ease-in-out .3s;
    opacity: .2;
  }

  .slick-active {
    opacity: .5;
  }

  .slick-current {
    opacity: 1;
  }

  #chitiet .common-section .sp img {
    width: 100%;
    height: auto;
    position: relative;
  }

  .link {
    position: absolute;
    top: 15%;
    left: 12%;
  }

  .intro-product {
    position: absolute;
    top: 25%;
    left: 12%;
  }

  #img-tra {
    margin-left: -50px;
  }
</style>

<body>
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
              <ul class="nav-parent">
                <li><a href="index1.php">TRANG CHỦ</a></li>
                <li><a href="#">GIỚI THIỆU</a></li>
                <li><a href="#">SẢN PHẨM</a></li>
                <li><a href="#">TIN TỨC </a></li>
                <li><a href="#"><i class="fa-solid fa-cart-shopping"></i></a></li>
                <?php if (!empty($idkh)) { ?>
                  <li><a href="logout.php">LOGOUT</i></a></li>
                <?php } else { ?>

                  <li><a href="login.php"><i class="fa-solid fa-user"></i></a></li>
                <?php } ?>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="chitiet">
    <div class="common-section">
      <?php
      $id_sp = $_GET['id'];
      $get_info = $get_data->se_product_id($_GET['id']);
      foreach ($get_info as $se_if) {
      ?>
        <div class="sp">
          <img src="./Pictures/chitietsanpham/background.jpg" alt="">
          <div class="link d-flex">
            <a href="index1.php">Trang chủ &nbsp;</a> <span>></span>
            <a href="chitietsp.php"> &nbsp;Chi tiết sản phẩm</a>
          </div>
          <div class="intro-product">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6">
                  <section class="vertical-center slider">
                    <div>
                      <img src="./img/<?php echo $se_if["anh1"] ?>">
                    </div>
                    <div>
                      <img src="./img/<?php echo $se_if["anh2"] ?>">
                    </div>
                    <div>
                      <img src="./img/<?php echo $se_if["anh3"] ?>">
                    </div>
                  </section>
                </div>
                <div class="col-md-4">
                  <h4><?php echo $se_if["ten_sp"] ?></h4>
                  <div class="d-flex mb-2">
                    <h5 class="mt-2 me-3"><?php echo $se_if["gia"] ?> <span>VND</span></h5>

                    <?php if (!empty($idkh)) { ?>
                      <a href="themgiohang.php?id=<?php echo $se_if["id_sp"] ?>  &idkh=<?php echo $idkh; ?> &sl=1 &dg=<?php echo $se_if["gia"] ?> "class="btn btn-warning">Thêm
                        vào giỏ hàng</a>
                    <?php } else { ?>
                      <a href="login.php?page=1" class="btn btn-warning"> Đăng nhập để mua hàng</a>
                    <?php } ?>
                  </div>
                  <p>SẢN PHẨM CHUẨN VỆ SINH AN TOÀN THỰC PHẨM </p>
                  <p><?php echo $se_if["thong_tin"] ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 p-5">
                  <h5 class="ms-3 mb-3 ps-5"><?php echo $se_if["huong_dan"] ?></h5>
                  <p class="ms-3 ps-5"><i class="fa-solid fa-droplet ms-3 me-3"></i><?php echo $se_if["nuoc"] ?></p>
                  <p class="ms-3 ps-5"><i class="fa-solid fa-temperature-three-quarters ms-3 me-3"></i><?php echo $se_if["nhiet_do"] ?></p>
                  <p class="ms-3 ps-5"><i class="fa-solid fa-clock ms-3 me-3"></i><?php echo $se_if["thoi_gian"] ?></p>
                </div>
              <?php } ?>
              <div class="col-md-5" id="img-tra">
                <img src="./Pictures/chitietsanpham/phatra.jpg" class=" pe-5" alt="phatra">
              </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>
  <section id="footer" class="ft">
    <div class="container-fluid">
      <div class="row common-section d-flex justify-content-center p-4">
        <div class="col-md-4 ">
          <h4><img src="./Pictures/trang-chu/logophongtra.png" alt=""></h4>
          <ul>
            <li><a href="#"><i class="fa-solid fa-phone-volume"></i>: 0999999999</a></li>
            <li><a href="#"><i class="fa-solid fa-envelope"></i>: trasenbichdiep@gmail.com</a></li>
            <li><a href="#"><i class="fa-solid fa-house"></i>: Số 12, Tây Hồ Hà Nội</a></li>
          </ul>
        </div>
        <div class="col-md-4 mt-4">
          <h4>VỀ CHÚNG TÔI</h4>
          <ul>
            <li><a href="#">Giới thiệu</a></li>
            <li><a href="#">Sản phẩm</a></li>
            <li><a href="#">Tin tức</a></li>
          </ul>
        </div>
        <div class="col-md-4 mt-4">
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
    <div class="footer-img">
      <img src="./Pictures/trang-chu/fotter-tea.png" alt="">
    </div>
  </section>
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="./common/slick-1.8.1/slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".vertical-center").slick({
        dots: false,
        vertical: true,
        centerMode: true,
      });
    });
  </script>
</body>

</html>