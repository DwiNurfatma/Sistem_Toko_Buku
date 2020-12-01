<html>
    <head>
    <title>BOOKSTORE</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
</html>
    <body>
        <header>
        <button class="toggle-sidebar" id="toggle-sidebar">MENU</button>
        <div class ="search"></div>
        </header>
   
                <ul class="sidebar">
                    <li><a href="login_admin.php">Log in as admin</a></li>
                    <li><a href="login.php">Log in as user</a></li>
                    <li><a href="signin.php">Sign in</a></li>
                </ul>
    <script src="script.js"></script>
    </body>
    <?php 
session_start();	
$sid = session_id();
include_once "config.php";
echo"<h1>Keranjang Belanja</h1>
          <table border=1>
          <tr>
				<th>Nama Produk</th>
				<th>jumlah</th>
				<th>Harga</th>
				<th>Sub Total</th>
		  </tr>
		  ";	

//jalankan perintah inner join dari tabel keranjang dan produk
$sql = mysqli_query($mysqli, "SELECT * FROM buku, pembelian WHERE 
 buku.id_buku= pembelian.id_buku");		  
while($user_data=mysqli_fetch_array($sql)){
    $subtotal    = $d['harga']* $d['jumlah'];
    $total       = $total + $subtotal;
        echo "<tr>";
        echo "<td height='30px'>".$user_data['judul']."</td>";
        echo "<td>".$user_data['harga']."</td>";    
        echo "<td>".$user_data['jumlah']."</td>";  
        echo "<td>".$subtotal."</td>";  
        echo "<td>".$user_data['id_buku']."</td>";  
        echo "<td>".$user_data['alamat_sup']."</td>";  
}
?>