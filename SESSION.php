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