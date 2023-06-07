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
  <link rel="stylesheet" href="./style/cart.css">

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
  <div id="body">
          <div class="container p-5 cart">
            <h4 class="text-dark mt-3 mb-5 text-center">Giỏ hàng của bạn || <a href="user_donhang.php" id="t"> Lịch sử mua hàng</a></h4>
            <form action="" method="post">
              <table class="table text-dark ">
                <tr>
                  <th>MÃ SẢN PHẨM</th>
                  <th>SẢN PHẨM</th>
                  <th>GIÁ</th>
                  <th>SỐ LƯỢNG</th>
                  <th>TỔNG CỘNG</th>
                  <th>THAO TÁC</th>
                </tr>
                <?php
                $get_cart=$get_data->get_cart($idkh);
                foreach($get_cart as $cart){
                 ?>
                <tr>
                  <td><p class="mt-4"><?php echo $cart["id_sp"] ?></p></td>
                  <td class="d-flex flex-wrap ">
                    <img src="./img/<?php echo $cart["anh_main"]?>" width="100px" height="100px" alt="">
                    <h5 class="mt-4 ms-3"><?php echo $cart["ten_sp"] ?> </h5>
                  </td>
                  <td ><p class="mt-4"><?php echo $cart["dongia"] ?></p></td>
                  <td><input type="number" name="" min="1"  class="mt-4" value="1" max="10" width="100px" id=""></td>
                  <td><p  class="mt-4"><?php echo $cart["Tong"] ?></p></td>
                  <td><a href="delete_cart.php?idkh=<?php echo $cart["id_user"]?> &id_sp=<?php echo $cart["id_sp"] ?>" onclick="return (confirm('Xóa sản phẩm?'))" class="text-danger "><i class="fa fa-minus-square mt-4" style="font-size:24px"></i></a></td>
                </tr>
                <?php
                }
                ?>              
              </table>
              <div class="d-flex justify-content-between link mt-5" >
                <a href="index1.php">Tiếp tục xem sản phẩm</a>
                <input type="submit" value="Cập nhật giỏ hàng">
                <a href="pay.php?id_kh=<?php echo $idkh ?>">Đặt hàng</a>
              </div>
            </form>
          </div>
        </div>
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