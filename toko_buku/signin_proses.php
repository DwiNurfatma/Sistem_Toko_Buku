<?php
     include_once("config.php");
     if(isset($_POST['Submit'])) {
          $id_user = $_POST['id_user'];
          $email = $_POST['email'];
          $password = md5($_POST['password']);
          $nama = $_POST['nama'];
          $alamat = $_POST['alamat'];

    // cek nilai variable
     if (empty($id_user)){
          echo "<script>alert('Nama belum diisi')</script>";
          echo "<meta http-equiv='refresh' content='1 url=signin.php'>";
     }
     else if (empty($email)){
          echo "<script>alert('Email belum diisi')</script>";
          echo "<meta http-equiv='refresh' content='1 url=signin.php'>";
     }
     else if(empty($password)){
          echo "<script>alert('Username belum diisi')</script>";
          echo "<meta http-equiv='refresh' content='1 url=signin.php'>";
     }
     else if (empty($nama)){
          echo "<script>alert('Password belum diisi')</script>";
          echo "<meta http-equiv='refresh' content='1 url=signin.php'>";
     }
     else if (empty($alamat)){
          echo "<script>alert('Alamat belum diisi')</script>";
          echo "<meta http-equiv='refresh' content='1 url=signin.php'>";
     }
     else
     {
     $daftar = mysqli_query($mysqli, "INSERT INTO  pembeli (id_user,  email, password, nama,alamat) 
     VALUES ('$id_user','$email','$password', '$nama',   '$alamat')");
     if ($daftar){
          echo "<script>alert('Berhasil Mendaftar')</script>";
          echo "<meta http-equiv='refresh' content='1 url=login.php'>";
     }
     else{
          echo "<script>alert('Username telah dipakai')</script>";
          echo "<meta http-equiv='refresh' content='1 url=signin.php'>";
          }
     }
}
?>