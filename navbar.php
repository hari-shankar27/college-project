<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<style>
    .logo a{
color: black;
text-decoration: none;
    }


    
    .all{
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px;
        gap: 20px;
        font-weight: bold;
        background-color: whitesmoke;

    }
.navbar{
    display: flex;
    gap: 20px;
    

} 

    .navbar a{
        color: black;
        text-decoration: none;
        font-size: 15px;
    }
    
    .search input{
        padding: 5px;
        border-radius: 5px;
        border: none;
    }
    .auth{
        display: flex;
        gap: 15px;
    }
    .auth a{
        color: black;
        text-decoration: none;
        font-size: 15px;
    }
    .login{
        transition-duration: 0.4s;
    }
    .signup{
        margin-right: 5px;
        transition-duration: 0.4s;
    }
    .login:hover{
        padding: 5px 10px;
    background-color: black;
    color: white;
    border-radius: 5px;
    }
    .signup:hover{
        padding: 5px 10px;
    background-color: black;
    color: white;
    border-radius: 5px;
    }
    .logout{
        transition-duration: 0.4s;
    }
    .logout:hover{
        padding: 5px 10px;
    background-color: black;
    color: white;
    border-radius: 5px;
    }

    .cart{
        
        font-weight: bold;
        color: black;
        border: none;   
        border-radius: 5px;
        transition-duration: 0.4s;
    }
    .cart:hover{
        padding: 5px 10px;
        margin: 3px;
        background-color: black;
        color: white;

    }
    .categories{
        display: flex;
padding: 15px;
justify-content: space-between;
padding-bottom: 2px;
        background-color: whitesmoke;
        color: black;
    }
  
    .choice{
        display: flex;
        margin-inline: auto;
        gap:20px;
    }
   .choice a{
    color: black;
    text-decoration: none;
    font-size: 15px;
    font-weight: bold;
    transition: 0.3s;

   }
  .choice a.active{
    border-bottom: 3px solid black;
  }
   .drop{
    width: 120px;
    height: 25px;
display: block;
    position: relative;
    align-items: center;
    font-weight: bold;
    background-color: black;
    color: white;
    padding: 5px 10px;
    border-radius: 5px;
    z-index: 1000;
   }
  
   .drop i{
margin-left: 30px;
   }
   .down{
     display: none;
  position: absolute;
  background-color: white;
  top: 100%;
  left: 0;
  width: 100%;
  border: 1px solid #ccc;
   }
   
   .down a{
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
   }
   .down a:hover{
    background-color: gainsboro;
   }
 .drop:hover .down{
    display: block;
 }
 .footer{
    min-height: 100vh;
      display:flex;
    flex-direction:column;
    left: 0;
    bottom: 0;
 }

     

</style>
<body>
    <div class="all">
<div class="logo"><a href="index.php">My Website</a></div>

<nav class="navbar">
    <a  class="item" href="index.php">Home</a>
        <a class="item" href="about.html">About</a>

            <a class="item" href="services.html">Services</a>

                <a class="item" href="contact.html">Contact</a>
                 <input type="text" placeholder="Search..."> 
                

</nav>
<div class="auth">
   
<?php if(isset($_SESSION['user'])): ?>
    <a class="logout" href="logout.php">Logout</a>
<?php else: ?>
    <a class="login" href="login.php">Login</a>
    <a class="signup" href="signup.php">Signup</a>
<?php endif; ?>
<button class="cart" id="openCart">Cart</button>
</div>
    </div>


<div class="categories">
<div class="drop">
    Categories<i class="fa-solid fa-bars "></i>
<div class="down">
    <a href="#">All Categories</a>
    <a href="electronics.html">Electronics</a>
    <a href="fashion.html">Fashion</a>
    <a href="beauty.html">Beauty</a>
    <a href="groceries.html">Groceries</a>
    <a href="books.html">Books and Stationary</a>
    <a href="kids.html">Kids</a>

    
</div>

</div>
<div class="choice">
    <a class="items" href="electronics.html">Electronics</a>
    <a class="items" href="fashion.html">Fashion</a>
    <a class="items" href="beauty.html">Beauty</a>
    <a class="items" href="groceries.html">Groceries</a>
    <a class="items" href="books.html">Books and stationary</a>
      <a class="items" href="kids.html">Kids section</a>
    
</div>
</div>
<div id="cartOverlay">
    <h2>My Cart <i class="fa-solid fa-cart-arrow-down"></i></h2>
    <div id="cartItems"></div>
    <button class="closeCart" onclick="closeCart()">Close</button>
</div>


<script src="script.js"></script>
</body>
</html>