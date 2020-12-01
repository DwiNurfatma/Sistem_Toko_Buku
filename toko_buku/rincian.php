
<html>
    <head>
    <title>BOOKSTORE</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
</html>
    <body>
    <header>
    <button class="toggle-sidebar" id="toggle-sidebar">MENU</button>
        </header>
        <ul class="sidebar">
        <li><a href="home_user.php">Katalog buku</a></li>
                    <li><a href="rincian.php">Keranjang Saya</a></li>
                    <li><a href="beli.php">Beli Buku</a></li>
                    <li><a href="welcome.php">Log out</a></li>
                </ul>
    <script src="script.js"></script>

    <h2 align='center' line-height='50%'>Keranjang Saya</h2>
    <table width='80%'  align='center' class='table'>
    <tr height ="35px">
        <th>Id Belanja</th> 
        <th>Id Buku</th> 
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Opsi</th>
    </tr>

    <?php  
     include_once("config.php");
     $result = mysqli_query($mysqli, "SELECT 
     A.id_buku, A.judul, A.pengarang, A.harga,
     B.id_belanja, B.jumlah FROM buku A INNER JOIN pembelian B
     ON A.id_buku= B.id_buku");
    while($user_data = mysqli_fetch_array($result)) {   ?>      
        <tr>
        <td align='center'><?=$user_data['id_belanja']?></td>
        <td align='center'><?=$user_data['id_buku']?></td>
        <td align='center'><?=$user_data['judul']?></td>
        <td align='center'><?=$user_data['pengarang']?></td>
        <td align='center'><?=$user_data['harga']?></td>
        <td align='center'><?=$user_data['jumlah']?></td>
        <td align='center' width='100px'><a  href="delete_beli.php?id_belanja=<?php echo $user_data['id_belanja']; ?>"><img src="image/hapus.png" height="20px"></a></td>
    </tr>      
    
    <?php }?>
    </table>
    </body>