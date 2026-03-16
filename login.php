<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="center">
<div class="box">
    <h1><a class="home" href="index.html">Login Page</a></h1>
    <br>
    <form action="log.php" method="post">
        <label>Email:</label>
        <br>
        <input type="email" name="email" placeholder=" Enter your email" required>
        <br>
        <br>
        <label>Password:</label><br>
        <input type="password" name="password" placeholder=" Enter your password" required>
        <br>
        <br>
        <button class="btn1" type="submit">Login</button>
        <br>
        <br>
           <p class="fp">Forgot password?</p>
           <br>
           
           <hr>
           <br>
           
           <button class="btn2"><a href="signup.php">Create a new account</a></button>
    </form> 
    </div>
    </div>
</body>
</html>