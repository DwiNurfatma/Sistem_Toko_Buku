
<html>
    <head>
    <title>BOOKSTORE</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
</html>
    <body>
    <header>
    <form action="home_admin.php" method="get" class="cari">
	<input type="text" name="cari" placeholder="Masukkan judul" required>
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

    <h2 align='center' line-height='50%'>KATALOG BUKU</h2>
    <?php  
     include_once("config.php");
     if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
       
    }
    ?>
    <table width='80%'  align='center' class='table'>
    <tr height ="35px">
    <th>Gambar</th>
        <th>Id Buku</th> 
        <th>Judul</th> 
        <th>Pengarang</th> 
        <th>Harga</th>
        <th>Stok</th>
        <th colspan = "2">Opsi</th>
    </tr>
    <?php 
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            $result = mysqli_query($mysqli, "select * from buku where judul like '%".$cari."%'");				
        }else{
            $result = mysqli_query($mysqli,"select * from buku");		
        }
    
     include_once("config.php");
    
    while($user_data = mysqli_fetch_array($result)) {   ?>      
        <tr>
        <td align='center'><?="<img src='image/".$user_data['image']."'style='width:auto; height:100px; padding: 10px 0px 10px 0px'>"?></td>
        <td align='center'><?=$user_data['id_buku']?></td>
        <td align='center'><?=$user_data['judul']?></td>
        <td align='center'><?=$user_data['pengarang']?></td> 
        <td align='center'><?=$user_data['harga']?></td> 
        <td align='center'><?=$user_data['stok']?></td>  
        <td align='center' width='100px'><a  href="edit.php?id_buku=<?php echo $user_data['id_buku']; ?>"><img src="image/edit.png" height="20px"></a></td>
        <td align='center' width='100px'><a  href="delete.php?id_buku=<?php echo $user_data['id_buku']; ?>"><img src="image/hapus.png" height="20px"></a></td>
    </tr>      
    
    <?php }?>
    </table>
    </body>