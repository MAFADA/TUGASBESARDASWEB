<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="DefaultCSS.css">
    <link rel="stylesheet" href="LogInCSS.css">
    <title>Login Page</title>
</head>
<body>

    <?php
        session_start();
        //muncul pesan error
        // if(isset($_SESSION['error'])){
    ?>

    <!-- <div class="alert" role="alert">
        <center>?=$_SESSION['error']?></center>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">×</span>
    </button>
    </div> -->
    <h2>LogIn</h2>
    <div class="container">
        <form action="SessionLoginMultiProses.php" method="POST">
            <!--        <div class='form-group'>
                <label for="username">Username</label>
                <input type="text" name="ni" id="ni" class='a' 
                placeholder='Masukkan username' autofocus>
            </div>
            <div class='form-group'>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class='a' 
                placeholder='Masukkan password' autofocus>
            </div> -->
            <input type="text" class="a" name="ni" id="ni" placeholder="Nomor Induk/Username"><br>
            <input type="password" class="a" name="password" id="password" placeholder="Password"><br>
            <label for="Level">Level</label>
            <select name="level" class='form-control' id='level'>
                <option value="">-- Masuk Sebagai --</option>
                <option value="2">Operator</option>
                <option value="1">Admin</option>
            </select>
            <!-- <button type="submit" class="login" name="login" id="login" value="login"> LogIn
            <button type="submit" class="register" name="register" id="register" value="register">  <a href="RegisterForm.html">Register</a>  -->
            <input class="login" type="submit" value="Login"><br>
        </form>
        <a href="RegisterForm.html"><input class="register" type="button" value="Register"></a>
        <br>
        
    </div>

</body>
</html>
