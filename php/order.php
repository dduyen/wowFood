
<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style_order.css">
    <style>
        
    </style>
</head>
<body>
    <div class="navbar">
        <div class="container">
            <h1> <a href="#"> <img src="../imgs/logo.png" alt="wowFood"></a> </h1>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Foods</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>
    <div class="food-search">
        <div class="container">
          
                <form action="POST">
                    <h3> <span>Fill this form to confirm your order</span> </h3>
                    <div class="select_food" >
                        <h5>Select Foods</h5>
                        <div class="food_block">
                            <img src="../imgs/menu-burger.jpg" alt="burger">
                            <div>
                                <h4>Food Title</h4>
                                <h4>$2.3</h4>
                                <h3>Quantity</h3>
                                <input  type="number" id="quantity" name="quantity" min="0" max="100" step="1" value="0">
                            </div>
                        </div>
                    </div>
                    <div class="delivery">
                        <h5>Delivery Details</h5>
                        <label for="fullName">Full Name</label>
                        <input type="text" name="fullName" placeholder="eg.Do Thi Mai Duyen">
                        <label for="phone">Phone Number</label>
                        <input type="text" name="phone" placeholder="eg.033123456">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="eg.name.domain">
                        <label for="address">Address</label>
                        <textarea rows="9" cols="70" name="address"> </textarea>  
                        <input type="submit"  value="Confirm Order" class="submit">
                    </div>
                </form>
        </div>
    </div>

    <div class="social">
        <div class="container">
            <ul>
                <li><a href="https://www.facebook.com/profile.php?id=100009087953637"><img src="../imgs/facebook.png" alt="facebook"></a></li>
                <li><a href="#"><img src="../imgs/instagram.png" alt="instagram"></a></li>
                <li><a href="#"><img src="../imgs/twiter.png" alt="twiter"></a></li>

            </ul>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <p>All right resevered Design By <a href="#">VijayThapa</a></p>
        </div>
    </div>
</body>
</html>

</body>
</html>