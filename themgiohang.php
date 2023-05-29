<?php
session_start();
include("control.php");
$get_data=new data();
if (empty($_SESSION["username"]) && empty($_SESSION["password"])){
 
?> 
<script>
location.href = 'login.php';
</script>
<?php }
else{
              $id_sp=$_GET["id"];
              $id_kh=$_GET["idkh"];
              $soluong=$_GET["sl"];
              $dongia=$_GET["dg"];
              $insert_giohang=$get_data->insert_giohang($id_kh,$id_sp,$soluong,$dongia);
              if($insert_giohang){?>

                <script>
                location.href = 'cart.php';
                </script>
                <?php
              }
              else{?>

                <script>
                alert("Không thành công, liên hệ hotline để được hỗ trợ!");
                </script>
                <?php

              }
    }
              ?>