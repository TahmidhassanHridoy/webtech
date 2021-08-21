<?php
$token = "";
$token2 ="";
session_start();
if(isset($_SESSION["uname"])){
    
    echo " ";
    $token ="\SparePartsMarket\Session\Signoutprocess.php";
    $token2 = "Sign Out";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Spare Parts Market  | Component</title>
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
                    
                    <li><a href="#footer" >About</a>
       
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
            <h1>Spare parts Bajaj | Avenger Street</h1>
                <tr>
                   <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Bike_img\Bajaj\avenger street\61Fk5BScwrL._SL1500_.jpg"  width="150" hight = "150">
                        <h2 class="item-title">spark plug</h2>Price:<h4 class="item-price"> $250</h4>
                        <button class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div>
                    </td>
                   <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Bike_img\Bajaj\avenger street\412rvSRjQjL._SX355_.jpg"  width="150" hight = "150">
                        <h2 class="item-title">foot rest</h2>Price:<h4 class="item-price"> $250</h4>
                        <button  class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div>
                    </td>
                   <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Bike_img\Bajaj\avenger street\2015-Bajaj-Avenger-220-Street-Detail-Shots-Exhaust.jpg"  width="150" hight = "150">
                        <h2 class="item-title">exhaust pipe</h2>Price:<h4 class="item-price"> $250</h4>
                        <button  class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div>
                    </td>
                   <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Bike_img\Bajaj\avenger street\4195s5VKrUL._SY355_.jpg"  width="150" hight = "150">
                        <h2 class="item-title">seat</h2>Price:<h4 class="item-price"> $250</h4>
                        <button  class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div>
                    </td>
                   <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Bike_img\Bajaj\avenger street\AIR FILTER.jpg"  width="150" hight = "150">
                        <h2 class="item-title"> airfilter</h2>Price:<h4 class="item-price"> $250</h4>
                        <button  class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div>
                    </td>
                </tr> 
                <tr>
                   <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Bike_img\Bajaj\avenger street\bajaj-bike-cable-250x250.jpg"  width="150" hight = "150">
                        <h2 class="item-title">cluch cable</h2>Price:<h4 class="item-price"> $250</h4>
                        <button  class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div></td>
                   <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Bike_img\Bajaj\avenger street\bajaj-bike-spare-parts-500x500.jpg"  width="150" hight = "150">
                        <h2 class="item-title">crank shifter kit</h2>Price:<h4 class="item-price">$250</h4>
                        <button  class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div></td>
                   <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Bike_img\Bajaj\avenger street\brake-shoe-for-bajaj-caliber-250x250.jpg"  width="150" hight = "150">
                        <h2 class="item-title">brake shoe front </h2>Price:<h4 class="item-price"> $250</h4>
                        <button  class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div></td>
                   <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Bike_img\Bajaj\avenger street\BRAKESHOE.jpeg"  width="150" hight = "150">
                        <h2 class="item-title">brake shoe rear </h2>Price:<h4 class="item-price"> $250</h4>
                        <button  class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div></td>
                   <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Bike_img\Bajaj\avenger street\cea18fe1b7611b0f8fa29798138a3e5d.jpg"  width="150" hight = "150">
                        <h2 class="item-title"> iridiam spark</h2>Price:<h4 class="item-price"> $250</h4>
                        <button  class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div></td>
                   <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Bike_img\Bajaj\avenger street\CHAIN.png"  width="150" hight = "150">
                        <h2 class="item-title"> timing chain spoket</h2>Price:<h4 class="item-price"> $250</h4>
                        <button  class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div></td>
                </tr> 
                <tr>
                   <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Bike_img\Bajaj\avenger street\CLAUCH CABLE.png"  width="150" hight = "150">
                        <h2 class="item-title">accelator cable</h2>Price:<h4 class="item-price"> $250</h4>
                        <button  class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div></td>
                   <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Bike_img\Bajaj\avenger street\CLAUCH PLATE.jpg"  width="150" hight = "150">
                        <h2 class="item-title">clutch plate</h2>Price:<h4 class="item-price"> $250</h4>
                        <button  class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div></td>
                   <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Bike_img\Bajaj\avenger street\CYLINDER KIT.jpg"  width="150" hight = "150">
                        <h2 class="item-title">piston kit </h2>Price:<h4 class="item-price"> $250</h4>
                        <button  class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div></td>
                   <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Bike_img\Bajaj\avenger street\DISKBRAKE.jpg"  width="150" hight = "150">
                        <h2 class="item-title"> hydrolic brake</h2>Price:<h4 class="item-price"> $250</h4>
                        <button  class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div></td>
                   <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Bike_img\Bajaj\avenger street\headlight_grill_cap_combo_set_for_bajaj_avenger_indicator_set_tail-back_light_grill_.jpg"  width="150" hight = "150">
                        <h2 class="item-title"> headlight cover</h2>Price:<h4 class="item-price"> $250</h4>
                        <button  class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div></td>
                   <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Bike_img\Bajaj\avenger street\HEADLIGHT.jpg"  width="150" hight = "150">
                        <h2 class="item-title">head light</h2>Price:<h4 class="item-price"> $250</h4>
                        <button  class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div></td>
                </tr> 
                <tr>
                   <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Bike_img\Bajaj\avenger street\images (2).jpg"  width="150" hight = "150">
                        <h2 class="item-title"> back seat</h2>Price:<h4 class="item-price"> $250</h4>
                        <button  class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div></td>
                   <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Bike_img\Bajaj\avenger street\images.jpg"  width="150" hight = "150">
                        <h2 class="item-title">gear shifter </h2>Price:<h4 class="item-price"> $250</h4>
                        <button  class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div></td>
                   <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Bike_img\Bajaj\avenger street\INDECATOR.jpeg"  width="150" hight = "150">
                        <h2 class="item-title"> indicator </h2>Price:<h4 class="item-price"> $250</h4>
                        <button  class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div></td>
                   <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Bike_img\Bajaj\avenger street\master cylinder kit.jpg"  width="150" hight = "150">
                        <h2 class="item-title">janina tool</h2>Price:<h4 class="item-price"> $250</h4>
                        <button  class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div></td>
                   <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Bike_img\Bajaj\avenger street\METER.gif"  width="150" hight = "150">
                        <h2 class="item-title"> meter</h2>Price:<h4 class="item-price"> $250</h4>
                        <button  class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div></td>
                </tr> 
                <tr>
                   <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Bike_img\Bajaj\avenger street\OIL FILTER.jpeg"  width="150" hight = "150">
                        <h2 class="item-title"> oil filter</h2>Price:<h4 class="item-price"> $250</h4>
                        <button  class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div></td>
                   <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Bike_img\Bajaj\avenger street\RIM.jpg"  width="150" hight = "150">
                        <h2 class="item-title">rim</h2>Price:<h4 class="item-price"> $250</h4>
                        <button  class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div></td>
                   <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Bike_img\Bajaj\avenger street\SPOKET.jpg"  width="150" hight = "150">
                        <h2 class="item-title">chain spoket</h2>Price:<h4 class="item-price"> $250</h4>
                        <button  class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div></td>
                   <td><div class="shop-item">
                        <img class="item-image" src="\SparePartsMarket\Bike_img\Bajaj\avenger street\WHEEL BEARING.jpg"  width="150" hight = "150">
                        <h2 class="item-title"> bearing</h2>Price:<h4 class="item-price"> $250</h4>
                        <button  class="btn btn-primary addbutton" type="btn">ADD TO CART</button></div></td>
                </tr> 
                </table> 
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
</body>
</html>