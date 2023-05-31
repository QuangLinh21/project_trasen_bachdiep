<!DOCTYPE html>
<?php
session_start();
include("control.php");
$get_data = new data();
if (!empty($_SESSION["username"]) && !empty($_SESSION["password"])) {
    $getdata = $get_data->login_user($_SESSION["username"], $_SESSION["password"]);
    foreach ($getdata as $sel) {
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
    #banner-section .banner-img .box-content{
    position: absolute;
    top: 0rem;
    margin-left: 250px ;
    
}
</style>
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
            <img src="./Pictures/trang-chu/backBanner.png" alt="" style="width: 100%;" srcset="">
            <div class="box-content">
                <form action="" class="" method="post">
                    <h2 class="mt-3 text-danger ms-5 ps-5">Đăng nhập</h2>
                    <table>
                        <tr>
                            <td><label for="hoten">Họ và tên</label></td>
                            <td> <input type="text" class="form-control ms-3 mt-2" name="hoten" id="hoten"></td>
                        </tr>
                        <tr>
                            <td><label for="email">Email</label></td>
                            <td> <input type="email" class="form-control ms-3 mt-2" name="email" id="email"></td>
                        </tr>
                        <tr>
                            <td><label for="user">Tên đăng nhập</label></td>
                            <td> <input type="text" class="form-control ms-3 mt-2" name="username" id="user"></td>
                        </tr>
                        <tr>
                            <td><label for="mk">Mật khẩu</label></td>
                            <td><input type="password" class="form-control ms-3 mt-2" name="password" id="mk"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="btn" class="btn btn-success mt-4 ms-3 p-2 ps-4 pe-4" value="Đăng ký"></td>
                        </tr>
                    </table>
                </form>
                <?php
                $quyen=2;
                if (isset($_POST["btn"])) {
                    if (empty($_POST["username"]) || empty($_POST["password"])) {
                        echo ("<script>alert('Không được để trống');</script>");
                    } else {
                        $register = $get_data->register($_POST["hoten"],$_POST["email"],$_POST["username"], $_POST["password"],$quyen);
                        if ($register == 1) {
                             ?>
                            <script>
                                location.href = 'login.php';
                            </script> <?php
                                    } else
                                        echo ("<script>alert('Đăng ký không thành công!!!');</script>");
                                }
                            }

                                        ?>
            </div>
        </div>
    </section>

    <!-- --------------------end banner--------------------------->
    <!-- --------------------product--------------------------->

</body>

</html>