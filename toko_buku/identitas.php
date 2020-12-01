
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
                    <li><a href="add.php">tambah buku</a></li>
                    <li><a href="sup.php">daftar supplier</a></li>
                    <li><a href="gabung.php">daftar buku dan supplier</a></li>
                    <li><a href="welcome.php">Log out</a></li>
                </ul>
    <script src="script.js"></script>

    <h2 align='center' line-height='50%'>Daftar Buku</h2>
    <table width='80%'  align='center' class='table'>
    <tr height ="35px">
        <th>Nama</th>
        <th>Username</th> 
        <th>Email</th> 
        <th>Alamat</th> 
        <th>Opsi</th>
    </tr>

    <?php  
     include_once("config.php");
     $result = mysqli_query($mysqli, "select * from admin where id_admin='$id_admin' and password='$password'");
    while($user_data = mysqli_fetch_array($result)) {   ?>      
        <tr>
        <td align='center'><?=$user_data['nama']?></td>
        <td align='center'><?=$user_data['id_user']?></td>
        <td align='center'><?=$user_data['email']?></td> 
        <td align='center'><?=$user_data['alamat']?></td>   
        <td align='center' width='100px'><a  href="edit.php?id_buku=<?php echo $user_data['id_buku']; ?>"><img src="image/edit.png" height="20px"></a></td>
    </tr>      
    
    <?php }?>
    </table>
    </body>