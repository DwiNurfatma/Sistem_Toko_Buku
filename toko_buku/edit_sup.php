<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id_sup = $_POST['id_sup'];
    $nama_sup=$_POST['nama_sup'];
    $no_hp=$_POST['no_hp'];
    $alamat_sup=$_POST['alamat_sup'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE supplier SET id_sup='$id_sup',nama_sup='$nama_sup',
     no_hp='$no_hp', alamat_sup='$alamat_sup' WHERE id_sup='$id_sup'");

    // Redirect to homepage to display updated user in list
    header("Location: sup.php");
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

$id_sup = $_GET['id_sup'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM supplier WHERE id_sup='$id_sup'");

while($user_data = mysqli_fetch_array($result))
{
?>
    <div class="kotak">
    <form action="edit_sup.php" method="post" class="form_login">
		   <input type="hidden" name="id_sup" class="form_login" value="<?php echo $user_data['id_sup'];?>">
           <label>NAMA SUPPLIER</label>
           <input type="text" name="nama_sup" class="form_login" value="<?php echo $user_data['nama_sup'];?>">
		   <label>NO HP</label>
           <input type="text" name="no_hp" class="form_login" value="<?php echo $user_data['no_hp'];?>">
           <label>ALAMAT</label>
           <input type="text" name="alamat_sup" class="form_login" value="<?php echo $user_data['alamat_sup'];?>">
		   <input type="submit" name="update"  class="submit" value="update">
    </form>
    <?php } ?>
</div>
</body>
</html>
