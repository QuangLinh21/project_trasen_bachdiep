<?php
include('connect.php');

class data
{
    public function register($hoten,$email,$username,$password,$quyen){
        global $conn;
        $sql = "insert into user (hoten,email,username,password,quyen)
        values('$hoten','$email','$username','$password',$quyen)";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function get_pages(){
        global $conn;
        $sql = "select * from pages order BY STT ASC";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function login_user($user, $pass)
    { //login with email and password from user
        global $conn;
        $sql = "select*from user where username='$user' and password='$pass'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function login($user, $pass)
    { //login with email and password from user
        global $conn;
        $sql = "select*from user where username='$user' and password='$pass'";
        $run = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($run);
        return $count;
    }
    public function se_product()
    { //login with email and password from user
        global $conn;
        $sql = "select*from product";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function se_product_id($id_sp)
    { //login with email and password from user
        global $conn;
        $sql = "select*from product where id_sp='$id_sp'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function insert_giohang($id_kh,$id_sp, $soluong, $dongia)
    {
        global $conn;
        $sql = "INSERT INTO giohang(id_user, id_sp, soluong,dongia) VALUES ('$id_kh','$id_sp',$soluong,$dongia)";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function get_cart($id)
    {
        global $conn;
        $sql = "SELECT giohang.id_user,product.id_sp,ten_sp,anh_main,soluong,giohang.dongia,soluong*giohang.dongia as Tong from giohang,product WHERE giohang.id_sp = product.id_sp and id_user='$id';";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    public function delete_cart($id_kh, $id_sp)
    {
        global $conn;
        $sql = "delete from giohang where id_user='$id_kh' and id_sp='$id_sp'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
}
