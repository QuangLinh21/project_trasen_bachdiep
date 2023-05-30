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
    <link rel="stylesheet" href="./common/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/list_products.css">
    <title>Document</title>
</head>

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
    <section id="banner">
        <img src="./Pictures/san-pham/banner.png" alt="">
        <h3>SẢN PHẨM</h3>
    </section>
    <section id="list-product">
        <div class="products common-section">
            <div class="title mt-3">
                <p><a href="index1.php">Trang chủ</a> > <a href="list_products.php">Sản phẩm</a></p>
                <h3>Sản phẩm</h3>
                <hr>
            </div>
            <div class="box-product">
                <div class="container-fluid">
                    <div class="box-title d-flex justify-content-between">
                        <p>Bộ lọc sản phẩm</p>
                        <div>
                            <select name="" id="">
                                <option value="">Thứ tự mặc định</option>
                                <option value="">Giá thấp đến cao</option>
                                <option value="">Giá cao đến thấp</option>
                                <option value="">Xếp theo đánh giá</option>
                                <option value="">Xếp theo độ phổ biến</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="first-select">
                                <p>Loại sản phẩm</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                        Trà xanh Thái Nguyên
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                        Trà Ôlong
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                        Trà Shan Tuyết
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                        Trà Sen
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                        Trà Lài
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                        Trà thảo dược
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                        Dụng cụ pha trà
                                    </label>
                                </div>
                            </div>
                            <div class="first-select mt-4">
                                <div>
                                    <label for="customRange1" class="form-label">Giá thành</label>
                                    <input type="range" class="form-range" id="customRange1">
                                </div>
                            </div>
                            <div class="first-select mt-4">
                                <p>Thương hiệu</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                        Trà Tân Cương Xanh
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                       Trà Sen Tây Hồ
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                    <label class="form-check-label" for="flexCheckIndeterminate">
                                        Trà Lộc Tân
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9"></div>
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

</body>

</html>