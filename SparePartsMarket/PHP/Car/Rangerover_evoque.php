

<?php
$token = "";
$token2 ="";
session_start();
if(isset($_SESSION["uname"])){
    
    $token ="\SparePartsMarket\Session\Signoutprocess.php";
    $token2 = "Sign Out";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Spare Parts Market |</title>
   <link rel="stylesheet" href="/SparePartsMarket/Css/Subpages.css">
    <script src="/SparePartsMarket/js/Cart_oparation.js" async></script>
</head>
<body>
        <nav class="navbar">
        <div class="top">
            <div class="left">
               <img src="/SparePartsMarket/View/sparepartsmarket logo.jpg"  width="70" hight = "70">
               <span>Spare Parts Market</span>
            </div>
            <ul class="menu">
                    <li><a href="\SparePartsMarket\View\privatemain.php">Home</a></li>
                
                <li><a href="#contact" >About</a></li>
                <li><a href=<?php echo $token;?>><?php echo $token2 ; ?></a></li>
                <li class="user">
                    <?php
                                if(isset($_SESSION["uname"])){
                                    echo "username:"."<b style=\"color:blue\">".$_SESSION["uname"]."</b>";
                                }   
                                if(isset($_SESSION["uname"])){
                                    echo "<br>Your Profile pic:";
                                    echo "<img src=\"profilepic.jpeg\" width=\"40\" hight=\"30\">";
                                }   
                    ?>
                </li>
            </ul>
        </div>
    </nav>
        <section class="container content-section">
                    <h2 class="section-header">CART</h2>
                    <div class="cart-row">
                        <span class="cart-item cart-header cart-column">ITEM</span>
                        <span class="cart-price cart-header cart-column">PRICE</span>
                        <span class="cart-quantity cart-header cart-column">QUANTITY</span>
                    </div>
                    <div class="cart-items">
                    </div>
                    <div class="cart-total">
                        <strong class="cart-total-title">Total</strong>
                        <span class="cart-total-price">$0</span>
                    </div>
                     <button class="btn btn-primary purchasebutton" type="btn">purchase</button>
        </section>
        <section class="parts">
        <table class="shop-items">
                <h1>Spare parts Rangerover:Evoque</h1>
                <tr>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Car_img\Range rover\RANGE ROVER EVOQUE\14441-scaled.jpg"  width="200" hight = "200"></a>
                        <h2 class="item-title">Headlight</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Car_img\Range rover\RANGE ROVER EVOQUE\53253957_61a44bc9-5342-4078-9dc0-9085be163128_1600x1200.jpg"  width="200" hight = "200"></a>
                        <h2 class="item-title">Bumper</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Car_img\Range rover\RANGE ROVER EVOQUE\air filter.jpg"  width="200" hight = "200"></a>
                        <h2 class="item-title">Air filter</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Car_img\Range rover\RANGE ROVER EVOQUE\brake.jpg"  width="200" hight = "200"></a>
                        <h2 class="item-title">Brake</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Car_img\Range rover\RANGE ROVER EVOQUE\car suspension.jpg"  width="200" hight = "200"></a>
                        <h2 class="item-title">suspension</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div></td>
                </tr> 
              
                <tr>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Car_img\Range rover\RANGE ROVER EVOQUE\dash board.jpg"  width="200" hight = "200"></a>
                        <h2 class="item-title">Dashboard</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Car_img\Range rover\RANGE ROVER EVOQUE\evoque_9_speed_gearbox_270213_07_LowRes.jpg"  width="200" hight = "200"></a>
                        <h2 class="item-title">Gearbox</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Car_img\Range rover\RANGE ROVER EVOQUE\oil filter.jpg"  width="200" hight = "200"></a>
                        <h2 class="item-title">Oil filter</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Car_img\Range rover\RANGE ROVER EVOQUE\radiator.jpg"  width="200" hight = "200"></a>
                        <h2 class="item-title">Radiator</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Car_img\Range rover\RANGE ROVER EVOQUE\s-l400 (1).jpg"  width="200" hight = "200"></a>
                        <h2 class="item-title">Tyre</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Car_img\Range rover\RANGE ROVER EVOQUE\s-l400.jpg"  width="200" hight = "200"></a>
                        <h2 class="item-title">Looking glass</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div></td>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Car_img\Range rover\RANGE ROVER EVOQUE\sifter with priston.jpg"  width="200" hight = "200"></a>
                        <h2 class="item-title">Piston</h2>Price:<h4 class="item-price"> $250</h4><button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div></td>
                  
                </tr> 
                
                </table> 
    </section>
   <footer class="footer" id="footer">
            <p>  
                <h1>SPARE PARTS MARKET</h1>
                <h3 >ADDRESS: MOTIJIL DHAKA</h3>
                <h3 >EMAIL: SPAREPARTSMARKET@GMAIL.COM</h3>
                <h3 >PHONE NUMBER: 0123324809230</h3>
                <h3 >CLICK AND ENJOY BECAUSE EVERYTHING NOW IS IN YOUR HAND. YOU DON'T HAVE TO WASTE YOUR VALUEABLE TIME FOR THIS</h3>
                <h3 >BECAUSE WE ARE HERE FOR YOU. HERE YOU CAN FIND THE GENUINE PARTS HERE.</h3><br>
                <h3 ><a href= "">www.sparepartsmarket.com</a></h3>
            </p>
    </footer>
</body>
</html>