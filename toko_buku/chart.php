<html>
<head>    
    <title>BOOKSTORE</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2 align='center' line-height='50%'>Maukkan Id Buku</h2>

    <div class="kotak">
    <form action="chart.php" method="post" class="form_login">
        <label>ID BELANJA</label>
           <input type="text" name="id_belanja" class="form_login">
        <label>ID BUKU</label>
           <input type="text" name="id_buku" class="form_login">
           <label>JUMLAH</label>
           <input type="text" name="jumlah" class="form_login">
        <input type="submit" name="Submit" class="submit" value="Beli"></td>
        
    </form>
   
    </div>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $id_belanja = $_POST['id_belanja'];
        $id_buku = $_POST['id_buku'];
        $jumlah = $_POST['jumlah'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO pembelian (id_belanja, id_buku, jumlah) 
        VALUES('$id_belanja','$id_buku', '$jumlah')");

        // Show message when user added
        echo "Book added successfully. <a href='rincian.php'>View Users</a>";
        header("Location: rincian.php");
    }
    ?>
</body>
</html>
