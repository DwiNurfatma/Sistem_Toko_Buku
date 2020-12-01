<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id_buku = $_POST['id_buku'];
    $judul=$_POST['judul'];
    $pengarang=$_POST['pengarang'];
    $harga=$_POST['harga'];
    $stok=$_POST['stok'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE buku SET id_buku='$id_buku',judul='$judul',
     pengarang='$pengarang', harga='$harga', stok='$stok' WHERE id_buku='$id_buku'");

    // Redirect to homepage to display updated user in list
    header("Location: home_admin.php");
}
?>

<html>
<head>    
    <title>Tugas 1 SBD</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2 align='center' line-height='50%'>Edit Data Karyawan</h2>
    <?php

$id_buku = $_GET['id_buku'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM buku WHERE id_buku='$id_buku'");

while($user_data = mysqli_fetch_array($result))
{
?>
    <div class="kotak">
    <form action="edit.php" method="post" class="form_login">
		   <input type="hidden" name="id_buku" class="form_login" value="<?php echo $user_data['id_buku'];?>">
           <label>JUDUL</label>
           <input type="text" name="judul" class="form_login" value="<?php echo $user_data['judul'];?>">
		   <label>PENGARANG</label>
           <input type="text" name="pengarang" class="form_login" value="<?php echo $user_data['pengarang'];?>">
           <label>HARGA</label>
           <input type="text" name="harga" class="form_login" value="<?php echo $user_data['harga'];?>">
           <label>STOK</label>
		   <input type="text" name="stok" class="form_login" value="<?php echo $user_data['stok'];?>">
		   <input type="submit" name="update"  class="submit" value="update">
    </form>
    <?php } ?>
</div>
</body>
</html>
