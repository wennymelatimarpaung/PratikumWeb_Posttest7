<?php
    require "config.php";
    if(isset($_POST['submit'])){
        $nama       = $_POST['nama'];
        $email      = $_POST['email'];
        $username   = $_POST['username'];
        $password   = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];
        $query = mysqli_query($db, "SELECT *FROM akun WHERE username='$username'");
        if(mysqli_fetch_assoc($query)){
            echo" 
            <script>
                alert('Username sudah digunakan');
            </script>
            ";
        }else{
            if($password == $konfirmasi){
                $password = password_hash($password,PASSWORD_DEFAULT);
                $query = mysqli_query($db, "INSERT INTO akun (nama, email, username, password) VALUES('$nama','$email','$username','$password')");
                if($query){
                    echo" 
                    <script>
                        alert('Register Berhasil');
                        document.location.href='login.php';
                    </script>
                    ";
                }else{
                    echo" 
                    <script>
                        alert('Register Gagal');
                    </script>
                    ";
                }
            }else{
                echo" 
                <script>
                    alert('Password salah');
                </script>
                ";
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelogin.css">
    <title>Register</title>
</head>
<body>
    <div class="container regis">

        <div class="judul">
            <h2>Registrasi</h2>
        </div>
        
        <div class="form">
            <form action="" method="post">
                <label for="nama">Nama</label><br>
                <input type="text" name="nama" class="input" placeholder="Masukkan nama"><br>

                <label for="email">Email</label><br>
                <input type="email" name="email" class="input" placeholder="Masukkan email"><br>

                <label for="username">Username</label><br>
                <input type="text" name="username" class="input" placeholder="Masukkan username"><br>

                <label for="password">Password</label><br>
                <input type="password" name="password" class="input" placeholder="Password"><br>

                <label for="konfirmasi">Konfirmasi Password</label><br>
                <input type="password" name="konfirmasi" class="input" placeholder="Konfirmasi password"><br>

                <input type="submit" name="submit" class="submit" value="Registrasi"><br><br>
            </form>

            <p>Sudah punya akun?
                <a href="">Login</a>
            </p>
        
        </div>
    </div>
</body>
</html>