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
    <h2 align='center' line-height='50%'>Tambah Data Supplier</h2>

    <div class="kotak">
    <form action="add_sup.php" method="post" class="form_login">
        <label>ID SUPPLIER</label>
           <input type="text" name="id_sup" class="form_login">
        <label>NAMA SUPPLIER</label>
           <input type="text" name="nama_sup" class="form_login">
        <label>NO HP</label>
           <input type="text" name="no_hp" class="form_login">
        <label>ALAMAT</label>
           <input type="text" name="alamat_sup" class="form_login">
        <input type="submit" name="Submit" class="submit" value="Simpan"></td>
        
    </form>
   
    </div>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $id_sup = $_POST['id_sup'];
        $nama_sup = $_POST['nama_sup'];
        $no_hp = $_POST['no_hp'];
        $alamat_sup = $_POST['alamat_sup'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO supplier (id_sup, nama_sup, no_hp, alamat_sup) 
        VALUES('$id_sup','$nama_sup', '$no_hp','$alamat_sup')");

        // Show message when user added
        echo "Book added successfully. <a href='sup.php'>View Users</a>";
        header("Location: sup.php");
    }
    ?>
</body>
</html>
