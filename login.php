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
            <img src="./Pictures/trang-chu/banner.png" alt="" style="width: 100%;" srcset="">
            <div class="box-content">
                <form action="" class="mt-5 pt-5" method="post">
                    <h2 class="mt-3 text-danger ms-5 ps-5">Đăng nhập</h2>
                    <table>
                        <tr>
                            <td><label for="user">Tên đăng nhập</label></td>
                            <td> <input type="text" class="form-control ms-3 mt-2" name="username" id="user"></td>
                        </tr>
                        <tr>
                            <td><label for="mk">Mật khẩu</label></td>
                            <td><input type="password" class="form-control ms-3 mt-2" name="password" id="mk"></td>
                        </tr>
                        <tr>
                            <td><a href="./register.php" class="btn btn-warning mt-4 ms-3 p-2">Đăng ký</a></td>
                            <td><input type="submit" name="sbm" class="btn btn-success mt-4 p-2" value="Đăng nhập"></td>
                        </tr>
                    </table>
                </form>
                <?php
                if (isset($_POST["sbm"])) {
                    if (empty($_POST["username"]) || empty($_POST["password"])) {
                        echo ("<script>alert('Không được để trống');</script>");
                    } else {
                        $login = $get_data->login($_POST["username"], $_POST["password"]);
                        if ($login == 1) {
                            $_SESSION["username"] = $_POST["username"];
                            $_SESSION["password"] = $_POST["password"];
                            $get = $get_data->login_user($_POST["username"], $_POST["password"]);
                            foreach ($get as $se) {
                                $quyen = $se["quyen"];
                                $_SESSION["quyen"] = $se["quyen"];
                                $_SESSION["username"] = $se["username"];
                            }

                            if ($quyen == 1) { ?>
                                <script>
                                    location.href = 'admin.php';
                                </script>
                            <?php
                            } else { ?>
                                <script>
                                    
                                    location.href = 'index1.php';
                                </script>
                <?php
                            }
                        } else
                            echo ("<script>alert('login that bai!!!');</script>");
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