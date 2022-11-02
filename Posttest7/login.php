<?php
    require "config.php";
    if(isset($_POST['submit'])){
        $user = $_POST['user'];
        $password = $_POST['password'];
        $query = mysqli_query($db, "SELECT * FROM akun WHERE username='$user' OR email ='$user'");
        $result = mysqli_fetch_assoc($query);
        $username = $result['username'];
        if(password_verify($password,$result['password'])){
            echo" 
            <script>
                alert('Selamat datang $username');
                document.location.href='menu.php';
            </script>
            ";
        } else{
            echo" 
            <script>
                alert('Username dan Pasword salah');
            </script>
            ";
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
    <title>Login</title>
</head>
<body>
    <div class="container login">
        <div class="logo">
            <img src="pizza.jpg" alt="logo wenny" width="70%">
        </div>
        <div class="form-login">
            <h3>Login</h3>
            <form action="" method="post">
                <input type="text" name="user" placeholder="email atau username" class="input">
                <input type="password" name="password" placeholder="password" class="input">

                <input type="submit" name="submit" value="Login" class="submit"><br><br>
            </form>

            <p>Belum punya akun?
                <a href="registrasi.php">Register</a>
            </p>
        </div>
    </div>
</body>
</html>