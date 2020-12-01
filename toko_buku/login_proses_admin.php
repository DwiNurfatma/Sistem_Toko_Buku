<?php
include "config.php";
$id_admin = $_POST['id_admin'];
$password = md5($_POST['password']);
    if (empty($id_admin)){
        echo "<script>alert('Username belum diisi')</script>";
        echo "<meta http-equiv='refresh' content='1 url=login_admin.php'>";
    }
    else if (empty($password)){
        echo "<script>alert('Password belum diisi')</script>";
        echo "<meta http-equiv='refresh' content='1 url=login_admin.php'>";
    }
    else{
        session_start();
$login = mysqli_query($mysqli, "select * from admin where id_admin='$id_admin' and password='$password'");
    if (mysqli_num_rows($login) > 0){
        $_SESSION['id_admin'] = $id_admin;
        header("location:home_admin.php");
    }else{
        echo "<script>alert('Username atau Password salah')</script>";
        echo "<meta http-equiv='refresh' content='1 url=login_admin.php'>";
}
}

?>