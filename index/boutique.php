<?php
session_start();
$page = 'boutique';
include '../index/navbar.php';

?>
    <div>
        <!-- Nav -->
        <div class="nav-container">
            <a href="#" class="logo">Ecommerce</a>
            <!-- Icone panier -->
            <i class='bx bx-shopping-bag' id="cart-icon"></i>
            <!-- Panier -->
            <div class="cart">
                <h2 class="cart-title">Votre panier</h2>
                <!-- Contenu -->
                <div class="cart-content">

                </div>
                <!-- Total -->
                <div class="total">
                    <div class="total-title">Total</div>
                    <div class="total-price">0€</div>
                </div>
                <!-- Bouton Achat -->
                <button type="button" class="btn-buy">Acheter maintenant</button>
                <!-- Fermeture Panier -->
                <i class='bx bx-x' id="close-cart"></i>
            </div>
        </div>
</div>
    <!-- Shop -->
    <section class="shop-container">
        <h2 class="section-title">Shop Products</h2>
        <!-- Contenu -->
        <div class="shop-content">
            <!-- Box 1 -->
            <div class="product-box">
                <img src="../Images/Balancecuisine17.99.PNG" alt="balancecuisine" class="product-img">
                <h2 class="product-title">Balance de cuisine</h2>
                <span class="price">17.99 €(dont 0.01 € d'éco-part. DEEE)</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- Box 2 -->
            <div class="product-box">
                <img src="../Images/CerclepatisserieAcierInoxydable14.99.PNG" alt="cercleagateaux" class="product-img">
                <h2 class="product-title">Cercle à pâtisserie</h2>
                <span class="price">14.99 €</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- Box 3 -->
            <div class="product-box">
                <img src="../Images/Culdepoule19.99.PNG" alt="saladierinox" class="product-img">
                <h2 class="product-title">Saladiers en inox</h2>
                <span class="price">19.99 €</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
             <!-- Box 4 -->
             <div class="product-box">
                <img src="../Images/Rouleaupatisserieboisdehetre9.49.PNG" alt="rouleaupatissier" class="product-img">
                <h2 class="product-title">Rouleau à pâtisserie</h2>
                <span class="price">9.49 €</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- Box 5 -->
            <div class="product-box">
                <img src="../Images/Sacochedecouteaux9pieces42.30.PNG" alt="sacochecouteauxcuisine" class="product-img">
                <h2 class="product-title">Sacoche de couteaux de cuisine</h2>
                <span class="price">42.30 €</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- Box 6 -->
            <div class="product-box">
                <img src="../Images/Spatulesbois29.99.PNG" alt="spatulesbois" class="product-img">
                <h2 class="product-title">Spatules en bois</h2>
                <span class="price">29.99 €</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- Box 7 -->
            <div class="product-box">
                <img src="../Images/Minuteurdecuisine13.59.PNG" alt="minuteurcuisine" class="product-img">
                <h2 class="product-title">Minuteur de cuisine</h2>
                <span class="price">13.59 €</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- Box 8 -->
            <div class="product-box">
                <img src="../Images/Moulesabaguettes39cmlong18.47.PNG" alt="moulesbaguettes" class="product-img">
                <h2 class="product-title">Plaque à pain </h2>
                <span class="price">18.47 €</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
              <!-- Box 9 -->
              <div class="product-box">
                <img src="../Images/Moulestartelettes10cmdediametre13.99.PNG" alt="moulestartelettes" class="product-img">
                <h2 class="product-title">Moules à tartelettes</h2>
                <span class="price">13.99 €</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- Box 10 -->
            <div class="product-box">
                <img src="../Images/Pincecuisine8.99.PNG" alt="pincecuisine" class="product-img">
                <h2 class="product-title">Pince de cuisine</h2>
                <span class="price">8.99 €</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- Box 11 -->
            <div class="product-box">
                <img src="../Images/Plaquepizza32cmdiamlotde4antiadhesif29.99.PNG" alt="plaquepizza" class="product-img">
                <h2 class="product-title">Plaque à pizza</h2>
                <span class="price">29.99 €</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
             <!-- Box 12 -->
             <div class="product-box">
                <img src="../Images/Chalumeaudecuisineblack18.99.PNG" alt="chalumeau" class="product-img">
                <h2 class="product-title">Chalumeau de cuisine</h2>
                <span class="price">18.99 €</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
             <!-- Box 13 -->
             <div class="product-box">
                <img src="../Images/CouteauJaponaisAcierDamas69.99.PNG" alt="couteauxjap" class="product-img">
                <h2 class="product-title">Couteaux japonais</h2>
                <span class="price">69.99 €</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
             <!-- Box 14 -->
             <div class="product-box">
                <img src="../Images/CouteauxdechefSantokuAcierInoxydable20.99.PNG" alt="couteauxsantoku" class="product-img">
                <h2 class="product-title">Couteaux de chef Santoku</h2>
                <span class="price">20.99 €</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
             <!-- Box 15 -->
             <div class="product-box">
                <img src="../Images/Douillepatisserie10.89.PNG" alt="douillepatiss" class="product-img">
                <h2 class="product-title">Douilles à pâtisserie</h2>
                <span class="price">10.89 €</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
             <!-- Box 16 -->
             <div class="product-box">
                <img src="../Images/GantsAntiChaleur10.99.PNG" alt="gantscuisine" class="product-img">
                <h2 class="product-title">Gants anti chaleur</h2>
                <span class="price">10.99 €</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
             <!-- Box 17 -->
             <div class="product-box">
                <img src="../Images/Gantsetmanique9.99.PNG" alt="maniquecuisine" class="product-img">
                <h2 class="product-title">Gants et manique anti chaleur</h2>
                <span class="price">9.99 €</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
             <!-- Box 18 -->
             <div class="product-box">
                <img src="../Images/KitasushiBambou9.99.PNG" alt="kitsushis" class="product-img">
                <h2 class="product-title">Kit à makis et sushis</h2>
                <span class="price">9.99 €</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
             <!-- Box 19 -->
             <div class="product-box">
                <img src="../Images/Tamisdecuisine8cm12cm18cm20cm12.11.PNG" alt="tamisscuisine" class="product-img">
                <h2 class="product-title">Tamis de cuisine</h2>
                <span class="price">12.29 €</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
             <!-- Box 20 -->
             <div class="product-box">
                <img src="../Images/zesteurrape17.94.PNG" alt="zesteurrape" class="product-img">
                <h2 class="product-title">Zesteur rapeur</h2>
                <span class="price">17.94 €</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
             <!-- Box 21 -->
             <div class="product-box">
                <img src="../Images/Verremesureur3.99.PNG" alt="verremesure" class="product-img">
                <h2 class="product-title">Verre mesureur</h2>
                <span class="price">3.29 €</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
             <!-- Box 22 -->
             <div class="product-box">
                <img src="../Images/Spatulesilicone6.99.PNG" alt="spatulesilicone" class="product-img">
                <h2 class="product-title">Spatules en silicone</h2>
                <span class="price">6.99 €</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
             <!-- Box 23 -->
             <div class="product-box">
                <img src="../Images/Pochepatisserie8.99les100pieces.PNG" alt="pochesadouille" class="product-img">
                <h2 class="product-title">Poches à pâtisserie</h2>
                <span class="price">8.69 €</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
             <!-- Box 24 -->
             <div class="product-box">
                <img src="../Images/Plaqueapatisserie26.40.PNG" alt="plaquespatisse" class="product-img">
                <h2 class="product-title">Plaques à pâtisserie</h2>
                <span class="price">26.40 €</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
             <!-- Box 25 -->
             <div class="product-box">
                <img src="../Images/Batteurelectrique500watts32.94.PNG" alt="batteurelec" class="product-img">
                <h2 class="product-title">Batteur électrique</h2>
                <span class="price">32.94 €</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
             <!-- Box 26 -->
             <div class="product-box">
                <img src="../Images/Papiercuissonpaquetde100feuilles21.98.PNG" alt="feuillepapier" class="product-img">
                <h2 class="product-title">Papier cuisson</h2>
                <span class="price">21.98 €</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
               <!-- Box 27 -->
            <div class="product-box">
                <img src="../Images/Mugmamnew.png" alt="mug" class="product-img">
                <h2 class="product-title">Mug</h2>
                <span class="price">15 €</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- Box 28 -->
            <div class="product-box">
                <img src="../Images/MagnetMam.PNG" alt="magnetcuisine" class="product-img">
                <h2 class="product-title">Magnet</h2>
                <span class="price">4.99 €</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- Box 29 -->
            <div class="product-box">
                <img src="../Images/Tshirtmam.PNG" alt="tshirt" class="product-img">
                <h2 class="product-title">T-shirt</h2>
                <span class="price">9 €</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
           <!-- Box 30 -->
            <div class="product-box">
                <img src="../Images/Tabliermam.PNG" alt="tabliercuisine" class="product-img">
                <h2 class="product-title">Tablier de cuisine</h2>
                <span class="price">25 €</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
           
        
          
        </div>
    </section>
 
    <?php
include '../index/footer.html';
?>