<html>
    <head>
    <title>BOOKSTORE</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
</html>
    <body>
    <header>
    <form action="sup.php" method="get" class="cari">
	<input type="text" name="cari">
	<input type="submit" class="cari" value="SEARCH">
    </form>
    <button class="toggle-sidebar" id="toggle-sidebar">MENU</button>
        </header>
        <ul class="sidebar">
                <li><a href="home_admin.php">daftar buku</a></li>
                <li><a href="sup.php">daftar supplier</a></li>
                    <li><a href="add.php">tambah buku</a></li>
                    <li><a href="add_sup.php">tambah supplier</a></li>
                    <li><a href="gabung.php">daftar buku dan supplier</a></li>
                    <li><a href="welcome.php">Log out</a></li>
                </ul>
    <script src="script.js"></script>

    <h2 align='center' line-height='50%'>Daftar Supplier</h2>
    <?php  
     include_once("config.php");
     if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
    }
    ?>
    <table width='80%' align='center' class='table'>
    <tr height ="30px">
        <th>Id Supplier</th> 
        <th>Nama Supplier</th>
        <th>No HP</th> 
        <th>Alamat</th> 
        <th colspan = "2">Opsi</th>
    </tr>

    <?php 
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            $result = mysqli_query($mysqli, "select * from supplier where nama_sup like '%".$cari."%'");				
        }else{
            $result = mysqli_query($mysqli,"select * from supplier");		
        }
    
     include_once("config.php");
     
    while($user_data = mysqli_fetch_array($result)) {   ?>      
        <tr height ="40px">
        <td align='center'><?=$user_data['id_sup']?></td>
        <td align='center'><?=$user_data['nama_sup']?></td>
        <td align='center'><?=$user_data['no_hp']?></td> 
        <td align='center'><?=$user_data['alamat_sup']?></td>  
        <td align='center' width='100px'><a  href="edit_sup.php?id_sup=<?php echo $user_data['id_sup']; ?>"><img src="image/edit.png" height="20px"></a></td>
        <td align='center' width='100px'><a  href="delete_sup.php?id_sup=<?php echo $user_data['id_sup']; ?>"><img src="image/hapus.png" height="20px"></a></td>
    </tr>      
    
    <?php }?>
    </table>
    </body>