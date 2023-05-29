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

              <ul class="nav-parent">
                <?php
                $get_pages = $get_data->get_pages();
                if ($get_pages != NULL) {
                  foreach ($get_pages as $gp) {
                ?>
                    <li><a href="<?php echo $gp['link']; ?>"><?php echo $gp['ten_trang']; ?></a></li>
                  <?php }
                } else { ?>
                  <p> KHÔNG CÓ DỮ LIỆU</p>
                <?php
                }
                ?>
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
      <img src="./Pictures/gioi-thieu/banner.jpg" alt="" style="width: 100%;" srcset="">
      <div class="box-content box-content-intro">
        <h4>TRÀ SEN</h4>
        <h1>BÁCH DIỆP</h1>
      </div>
    </div>
  </section>
  <section id="introduce">
    <img src="./Pictures/trang-chu/product-la.png" class="img-intro" width="80rem" alt="">
    <div class="box-introduce mt-5 common-section-2">
      <h3 class="text-center">GIỚI THIỆU</h3>

      <div class="box-introduce-content ">
        <p class="mt-5">Băng sự nỗ lực không ngừng, trải qua hơn 10 năm xây dựng và phát triển trong lĩnh vực trà Thái Nguyên, tháng 06/2017, công ty TNHH Tân Cương Xanh chính thức kỷ niệm 20 năm thành lập (1997 - 2017). Trong 20 năm qua thương hiệu trà Tân Cương Xanh đã ngày càng đi sâu vào thị trường trà Việt nói riêng
          và thế giới đồ uống nói chung.
        </p>
        <p>Với mục tiêu mang đến thị trường một sản phẩm trà mang thương hiệu Thái Nguyên "sạch" chính hiệu cũng như sự trăn trở về sự phát triền của thị trường chè Việt Nam, cách đây 10 năm trên thị trường trà Việt, người con ưu tú đó đã thành lập một công ty chuyên sản xuất và phân phối trè sạch mang thương hiệu "Tân Cương Xanh"</p>
        <img src="./Pictures/gioi-thieu/intro1.jpg" width="100%" alt="" class="mt-4">
        <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam dolore impedit magnam, possimus est incidunt saepe cum similique unde excepturi explicabo natus iure facere assumenda sit dicta libero? Dicta, fugit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error magnam, aliquid ipsam dignissimos, expedita alias rem mollitia quae magni, facilis quidem ipsa quos sapiente optio id tempore fugiat beatae nesciunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum adipisci reiciendis sed impedit. Nihil qui incidunt voluptatibus est aliquid fugiat, a minus praesentium quos. Quasi expedita assumenda maxime ducimus consequuntur! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos nostrum quod quidem veniam officia excepturi alias quos quasi veritatis dolore. Eligendi voluptates porro possimus saepe neque voluptas facere atque enim!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut harum neque dicta eum atque reprehenderit omnis, quae ullam. Blanditiis quibusdam, placeat vel quae ratione voluptatibus cupiditate eius vitae suscipit obcaecati? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio sit rem ea optio quam earum atque. Libero nam impedit nesciunt esse repellendus, saepe labore iusto soluta necessitatibus repellat aliquam quidem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit consequuntur ipsam doloremque voluptas nobis quos repudiandae hic quas. Doloribus enim soluta quia minus perferendis ad in? Temporibus fugit perferendis illum. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore, asperiores incidunt eveniet sequi et sed, pariatur ipsam, illo velit ducimus voluptate odio! Corrupti modi atque odit ratione dolorum rerum reprehenderit! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas enim ratione quaerat illo! Atque architecto officia est reiciendis. Amet consequatur rem quae nostrum nisi repudiandae eum dolorum accusantium, libero nihil?</p>
        <img src="./Pictures/gioi-thieu/intro2.jpg" width="100%" class="mt-4" alt="">
      </div>
    </div>
    <img src="./Pictures/trang-chu/product-la.png" class="img-intro-2" width="100rem" alt="">
  </section>

  <!-- --------------------end banner--------------------------->
  <!-- --------------------product--------------------------->


  <!-- ----------------------------footer------------------------------- -->
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