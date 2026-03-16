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
    <div class="container">
        <h1>Sign Up</h1>
        <br>
        <form action="register.php" method="post">
                 <label>Name:</label>
                 <br>
            <div class="name">
 
      
         <input type="text" name="firstname" placeholder="First name" required>  
         
          <input type="text" name="lastname" placeholder="Last name" required>  
          </div>
          <br>
           <label>Email:</label>
           <br>
<input type="email" name="email" placeholder=" Email" required>
<br>
<br>
 <label>Password:</label>
 <br>
<input type="password" name="password" placeholder=" Password" required>

<br>
<br>
<button class="btn3" >Sign Up</button>
<br>
<br>
<a class="al" href="login.php">
<p>Already have an account?</p></a>
<hr>


        </form>
    </div>
    </div>
</body>
</html>