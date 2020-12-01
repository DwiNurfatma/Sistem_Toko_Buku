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
                    <li><a href="welcome.php">Back</a></li>
                </ul>
    <script src="script.js"></script>
        <h2 align='center' line-height='50%'>Pendaftaran Fatma Bookstore</h2>
            <div class="kotak">
                <form action="signin_proses.php" method="post" class="form_login">
                <label>Username</label>
                     <input type="text" name="id_user" class="form_login">
                <label>Email</label>
                     <input type="text" name="email" class="form_login">
                <label>Password</label>
                     <input type="password" name="password" class="form_login">
                <label>Nama</label>
                     <input type="text" name="nama" class="form_login">
                <label>Alamat</label>
                     <input type="text" name="alamat" class="form_login">
                <input type="submit" name="Submit" class="submit" value="Simpan"></td>
                </form>
            </div>
    

     </body>
</html>