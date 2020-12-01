<html>
<head>    
    <title>BOOKSTORE</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <header>
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
    <h2 align='center' line-height='50%'>Tambah Data Buku</h2>

    <div class="kotak">
    <form action="add.php" method="post" class="form_login">
        <label>ID BUKU</label>
           <input type="text" name="id_buku" class="form_login">
        <label>JUDUL</label>
           <input type="text" name="judul" class="form_login">
        <label>GAMBAR</label>
           <input type="text" name="image" class="form_login">
        <label>PENGARANG</label>
           <input type="text" name="pengarang" class="form_login">
        <label>HARGA</label>
           <input type="text" name="harga" class="form_login">
        <label>STOK</label>
           <input type="text" name="stok" class="form_login">
        <label>SUPPLIER</label>
           <input type="text" name="id_sup" class="form_login">
        <input type="submit" name="Submit" class="submit" value="Simpan"></td>
        
    </form>
   
    </div>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $id_buku = $_POST['id_buku'];
        $judul = $_POST['judul'];
        $image = $_POST['image'];
        $pengarang = $_POST['pengarang'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        $id_sup = $_POST['id_sup'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO buku (id_buku, judul, image, pengarang, harga, stok, id_sup) 
        VALUES('$id_buku','$judul', '$image','$pengarang','$harga','$stok', '$id_sup')");

        // Show message when user added
        echo "Book added successfully. <a href='home_admin.php'>View Users</a>";
        header("Location: home_admin.php");
    }
    ?>
</body>
</html>
