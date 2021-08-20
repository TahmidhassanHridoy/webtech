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
    <title> Spare Parts Market | Component </title>
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
                <h1>Spare parts Audi:A6</h1>
                <tr>
                    <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Car_img\Audi\A6\air filter.jpg"  width="150" hight = "150">
                        <h2 class="item-title">Air filter</h2>Price:<h4 class="item-price"> $250</h4>
                        <button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div>
                    </td>
                    <td><div class="shop-item"><div><img class="item-image" src="\SparePartsMarket\Car_img\Audi\A6\audi-a6-3-0-2002-side-mirror-left-500x500.jpg"  width="150" hight = "150">
                        <h2 class="item-title">looking glass</h2>Price:<h4 class="item-price"> $850</h4>
                        <button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div>
                    </td>
                        <td><div class="shop-item"><img class="item-image" src="\SparePartsMarket\Car_img\Audi\A6\brake.jpg"  width="150" hight = "150">
                        <h2 class="item-title">Hydrolic brake</h2>Price:<h4 class="item-price"> $1250</h4>
                        <button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div>
                    </td>
                    <td><div class="shop-item"><img class="item-image" src="\SparePartsMarket\Car_img\Audi\A6\car suspension.jpg"  width="150" hight = "150">
                        <h2 class="item-title">suspension</h2>Price:<h4 class="item-price"> $2250</h4>
                        <button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div>
                    </td>
                    <td><div class="shop-item"><img class="item-image" src="\SparePartsMarket\Car_img\Audi\A6\dash board.jpg"  width="150" hight = "150">
                        <h2 class="item-title">dash board</h2>Price:<h4 class="item-price"> $3250</h4>
                        <button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div>
                    </td>
                </tr> 
                <tr>
                    <td><div class="shop-item"><img class="item-image" src="\SparePartsMarket\Car_img\Audi\A6\farurile-frontale-LED-uri-DRL-cuplu-Inside-Tube-LTI.jpg"  width="150" hight = "150">
                        <h2 class="item-title">LED light</h2>Price:<h4 class="item-price"> $1300</h4>
                        <button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div>
                    </td>
                    <td><div class="shop-item"><img class="item-image" src="\SparePartsMarket\Car_img\Audi\A6\oil filter.jpg"  width="150" hight = "150">
                        <h2 class="item-title">Oil filter</h2>Price:<h4 class="item-price"> $550</h4>
                        <button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div>
                    </td>
                    <td><div class="shop-item"><img class="item-image" src="\SparePartsMarket\Car_img\Audi\A6\pare-choc-avant-audi-a6-c6-2009-2012-look-rs6.jpg"  width="150" hight = "150">
                        <h2 class="item-title">Front bumper</h2>Price:<h4 class="item-price"> $950</h4>
                        <button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div>
                    </td>
                    <td><div class="shop-item"><img class="item-image" src="\SparePartsMarket\Car_img\Audi\A6\radiator.jpg"  width="150" hight = "150">
                        <h2 class="item-title">Radiator</h2>Price:<h4 class="item-price"> $1500</h4>
                        <button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div>
                    </td>
                    <td><div class="shop-item"><img class="item-image" src="\SparePartsMarket\Car_img\Audi\A6\s-l300.jpg"  width="150" hight = "150">
                        <h2 class="item-title">Tyre</h2>Price:<h4 class="item-price"> $1250.50</h4>
                        <button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div>
                    </td>
                    <td><div class="shop-item"><img class="item-image" src="\SparePartsMarket\Car_img\Audi\A6\sifter with priston.jpg"  width="150" hight = "150">
                        <h2 class="item-title">Piston</h2>Price:<h4 class="item-price"> $963.56</h4>
                        <button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div>
                        </td>
                </tr> 
          </table> 
    </section> 
          </section>
            <footer class="footer" id="contact">
                <p> 
                        <h1>SPARE PARTS MARKET</h1>
                        <h3>ADDRESS: MOTIJIL DHAKA</h3>
                        <h3>EMAIL:SPAREPARTSMARKET@GMAIL.COM</h3>
                        <h3>PHONENUMBER:0123324809230</h3>
                        <h3>CLICK AND ENJOY BECAUSE EVERYTHING NOW IS IN YOUR HAND. YOU DON'T HAVE TO WASTE YOUR VALUEABLE TIME FOR THIS</h3>
                        <h3>BECAUSE WE ARE HERE FOR YOU. HERE YOU CAN FIND THE GENUINE PARTS HERE.</h3><br>
                        <h3 class="website"><a href="main.php">www.sparepartsmarket.com</a></h3>

                </p>
            </footer>
        </section> 
</body>
</html>