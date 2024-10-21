<?php
session_start(); //Memulai sesi

if(isset($_SESSION['username'])){
    header("Location: dashboard.php");
}

$user = [
    'admin1' => 'password123',
    'user1' => 'password321',
];

if(isset ($_POST['submit_login'])){
    //Mengambil data dari superglobal variable $_POST
    $username = $_POST['txt_username'];
    $password = $_POST['txt_password'];
if (isset($user[$username]) && $user[$username] === $password){
    $_SESSION ['username'] = $username;
    header("Location: dashboard.php");
    exit();
}else{
    $err = "password atau username salah.";   
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <?php if(isset($err)):?>
        <p><?= $err; ?></p>
    <?php endif; ?>
    <form method="POST">
        <div style="margin-bottom: 16px">
            <label>username</label>
            <br>
            <input type="text" name="txt_username" placeholder="username">
        </div>
        <div>
            <label style="margin-bottom: 16px">Password</label>
            <br>
            <input type="password" name="txt_password" placeholder="password">
        </div>
        <div>
            <br>
            <button type="submit" name="submit_login">submit</button>
        </div>
    </form>
    
</body>
</html>