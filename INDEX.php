<!DOCYTIPE html>
<html>
    <head>
        <title> Form  </title>
        <link rel="stylesheet" type"type" href="LOGIN.css"
    </head>
    <body>
        <div class="container">
        <form action="SESSION.php" method="post">
            <img src="IMG/IMG.png" width="300" class="rounded-circle">
            <div class="form-input">
            <input type="text" name="username" placeholder="Masukan Nama Anda">
            </div>
            <div class="form-input">
            <input type="text" name="nim" placeholder="Masukkan nim anda">
            </div>
            <input type="submit" name="submit"
            value="LOGIN" class="btn-login"><br>
            </form>
            <?php
    session_start();
        if (isset($_POST['submit'])){
    //session_start();
            $nama = $_POST['username'];
            $password = $_POST ['password'];

    if ($nama == "Melati" && $password == "rimarimot"){
        $_SESSION['nama'] = $nama;

        header("location: OUTP.php");
    }else {
        echo "<script>alert('Gunakan Akun Lainnya');</script>";
    }
    
} else {
    echo "Akun yang anda gunakan salah, coba gunakan akun yang lainnya";
}
?>
        </div>
    </body>
</html>