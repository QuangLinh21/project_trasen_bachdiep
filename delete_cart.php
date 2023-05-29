<?php

$idkh=$_GET["idkh"];
$id_sp=$_GET["id_sp"];
include("control.php");
$get_data=new data();
$delete=$get_data->delete_cart($idkh,$id_sp);
if($delete){
    ?>
    <script>
        alert('Đã xóa sản phẩm ');
        location.href = 'cart.php';
    </script>
    <?php
}
else{?>
    <script>
        alert('Xóa thất bại, mời thử lại');
        location.href = 'cart.php';
    </script>
    <?php
}

?>