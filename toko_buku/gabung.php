
<html>
<head>    
    <title>BOOKSTORE</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
    <button class="toggle-sidebar" id="toggle-sidebar">MENU</button>
        <div class ="search"></div>
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

    <h2 line-height='50%' align='center'>Daftar Buku dan Supplier</h2>
    <table width='80%' border=1 class='table' align='center'>
    <tr>
        <th align='center' height='30px'>JUDUL BUKU</th> 
        <th align='center'>PENGARANG</th> 
        <th align='center'>HARGA</th>
        <th align='center'>SUPPLIER</th>
        <th align='center'>NO HP</th>
        <th align='center'>ALAMAT</th>
    </tr>
    <?php  
    include_once("config.php");
    $result = mysqli_query($mysqli, "SELECT 
    A.nama_sup, A.no_hp, A.alamat_sup, B.judul,
    B.pengarang, B.harga FROM supplier A INNER JOIN buku B
    ON A.id_sup= B.id_sup");
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td height='30px'>".$user_data['judul']."</td>";
        echo "<td>".$user_data['pengarang']."</td>";    
        echo "<td>".$user_data['harga']."</td>";  
        echo "<td>".$user_data['nama_sup']."</td>";  
        echo "<td>".$user_data['no_hp']."</td>";  
        echo "<td>".$user_data['alamat_sup']."</td>";  
    }
    ?>
     </table>
</body>
</html>
 