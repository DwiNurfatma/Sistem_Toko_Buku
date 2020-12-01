
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

    <h2 align='center' line-height='50%'>Katalog Buku</h2>
    <table width='65%' border=0 align='center' class='table_1'>
    <?php  
    $kolom = 5;    
    $i=1; 
     include_once("config.php");
     $result = mysqli_query($mysqli, "SELECT * FROM buku ORDER by id_buku ASC");
     while($user_data = mysqli_fetch_array($result)) {  
        if(($i) % $kolom== 1) {    
        echo'<tr height="200px" class ="tabel">';			
        }  
        
        echo '<td align="center"><img src="image/'.$user_data['image'].'" height="100px"  />
        <br><br><mark style="background: #FFDEAD; "margin: 5px;"><b>'.$user_data['judul'].'</b></mark>
        <br><mark style="background: #FFDEAD;"><b>'.$user_data['pengarang'].'</b></mark>
        </td>';
        if(($i) % $kolom== 0) {    
        echo'</tr>';				
        }
    $i++;
     }?>
    </table>
    </body>
