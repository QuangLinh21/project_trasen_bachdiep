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
              <ul class="nav-parent">
                <li><a href="index1.php">TRANG CHỦ</a></li>
                <li><a href="#">GIỚI THIỆU</a></li>
                <li><a href="#">SẢN PHẨM</a></li>
                <li><a href="#">TIN TỨC </a></li>
                <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>

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
  <!-- ---------------------end menu--------------------------------->
  <!-- ---------------------Banner------------------------------->
  <section id="banner-section">
    <div class="banner-img">
      <img src="./Pictures/trang-chu/banner.png" alt="" style="width: 100%;" srcset="">
      <div class="box-content">
        <div class="box-content-header">
          <h3>TRÀ ƯỚP SEN TÂY HỒ</h3>
        </div>
        <div class="box-content-main">
          <p>Sự hòa quyện tuyệt vời giữa hương thơm man mát <br> của sen Bách Diệp Hồ Tây và vị đậm đà của trà Tân Cương</p>
        </div>
        <div class="box-button">
          <button>THỬ NGAY</button>
        </div>
      </div>
    </div>
  </section>

  <!-- --------------------end banner--------------------------->
  <!-- --------------------product--------------------------->
  <section id="product">
    <div class="product-header common-header">
      <h2 class="text-center mb-5">SẢN PHẨM NỔI BẬT</h2>
      <img src="./Pictures/trang-chu/product-la.png" class="la" alt="">
      <div class="container ">


        <div class="row common-section item">
          <?php
          $get_sp = $get_data->se_product();
          if ($get_sp != NULL) {
            foreach ($get_sp as $sp) {
          ?>
              <div class="col-6 col-md-3 text-center">
                <a href="chitietsp.php?id=<?php echo $sp['id_sp']; ?>">
                  <div class="box-item">
                    <img src="img/<?php echo $sp["anh_main"] ?>" alt="">
                  </div>
                  <div class="box-title mt-5">
                    <?php echo $sp["ten_sp"] ?>
                  </div>
                </a>
              </div>
            <?php }
          } else { ?>
            <p> KHÔNG CÓ DỮ LIỆU</p>
          <?php
          }
          ?>

        </div>
      </div>
    </div>
  </section>
  <section class="intro">
    <img src="./Pictures/trang-chu/background2.png" alt="">
    <div class="box-intro">
      <img src="./Pictures/trang-chu/product-sen.png" alt="">
      <h3 class="text-center">GIỚI THIỆU</h3>
      <div class="box-intro-content">
        <p>Trà ướp sen Bích Diệp - Tinh hoa văn hóa Hà Thành là sự hòa quyện tuyệt vời giữa hương thơm man mát của bông sen Bách Diệp Hồ Tây vị đậm đà
          của trà Tân Cương Thái Nguyên. Qua đôi bàn tay tài hoa và bí quyết bí mật của truyền nhiều đời của người thợ trà Thăng Long, tạo ra thức quà tinh túy
          kết tinh văn hóa ngàn năm Thăng Long - Hà Nội
        </p>
        <button>ĐỌC THÊM</button>
      </div>
    </div>
  </section>
  <section id="people">
    <div class="box-people">
      <h3 class="text-center ">NGHỆ NHÂN TRÀ ĐẠO</h3>
      <div class="box-img">
        <img src="./Pictures/trang-chu/TRANGCHU.jpg" alt="">
      </div>
      <div class="container mt-5">
        <div class="row common-section d-flex justify-content-center">
          <div class="col-md-2 ">
            <div class="box-people">
              <img src="./Pictures/trang-chu/professional-tea-1.png" alt="">
              <div class="box-people-title text-center">
                <p>Nn. Nguyễn Cao Sơn</p>
                <p>Nguyễn Cao Dơn được chọn làm đại diện quảng bá văn hóa trà Việt tại ngôi nhà di sản Mã Mây, Hà Nội</p>
              </div>
            </div>
          </div>
          <div class="col-md-2 ">
            <div class="box-people text-center">
              <img src="./Pictures/trang-chu/professional-tea-2.png" alt="">
              <p>Nn. Hướng Anh Sướng</p>
              <p>Truyền nhân đời thứ 6 của dòng trà Trường Xuân, Hà Nội. Chia sẻ về nghệ thuật trà đạo, lĩnh vực mà anh dành hơn nửa cuộ đời để nghiên cứu một cách đam mê</p>
            </div>
          </div>
          <div class="col-md-2 ">
            <div class="box-people text-center">
              <img src="./Pictures/trang-chu/professional-tea-3.png" alt="">
              <p>Nn. Nguyễn Thị Dần</p>
              <p>Vẫn tự tay chọn hoa, tách gạo, thực hiện từng công đoạn ướp trà sen. Cũng như chính bởi nghiện trà, bởi yêu nghề nên cô thiwwus nữ Hà Thành năm xưa vẫn say hương vị trà sen </p>
            </div>
          </div>
          <div class="col-md-2 ">
            <div class="box-people text-center">
              <img src="./Pictures/trang-chu/professional-tea-4.png" alt="">
              <p>Nn. Nguyễn Hoài Linh</p>
              <p>Vô địch toàn thế giới cuộc thi Tea Master Cup International 2018 về pha trà được tổ chức tại Huế</p>
            </div>
          </div>
          <div class="col-md-2 ">
            <div class="box-people text-center">
              <img src="./Pictures/trang-chu/professional-tea-5.png" alt="">
              <p>Nn. Viên Trần</p>
              <p>Sinh ra và lớn lên trong một gia đình quý tộc phong kiến, trong một ngôi trường mà việc uống trà và trà cực ngon, thượng hạng là điều không bao giờ thiếu trong nhà</p>
            </div>
          </div>
        </div>
      </div>
      <div class="box-img-2">
        <img src="./Pictures/trang-chu/thia.jpg" alt="">
        <img src="./Pictures/trang-chu/product-la.png" alt="">
      </div>

    </div>
  </section>
  <section id="buy-product" class="mb-3">
    <h3 class="text-center">MUA NGAY</h3>
    <div class="container">
      <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
          <input type="email" name="" id="">
          <button>Gửi</button>
        </div>
      </div>
    </div>
  </section>
  <section id="footer">
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
</body>

</html>