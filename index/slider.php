<?php
session_start();
$page = 'slider';
include '../index/navbar.php';

?>

    <div class="container">
      <!-- Slider container principal -->
      <div class="swiper">
        <!-- Container additionnel -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <img src="../Images/Thé,madeleine et nappe vichy.jpg" alt="Madeleines"/>
            <div class="description"><h4>Madeleines et thé citron</h4></div>
          </div>
          <div class="swiper-slide">
            <img src="../Images/Gâteau aux pommes caramélisées.jpg" alt="Gâteau aux pommes"/>
            <div class="description"><h4>Gâteau aux pommes caramélisées</h4></div>
          </div>
          <div class="swiper-slide">
            <img src="../Images/Domes chocolat.jpg" alt="Domes au chocolat"/>
            <div class="description"><h4>Demies sphères chocolat noir</h4></div>
          </div>
         <div class="swiper-slide">
            <img src="../Images/tarte.png.jpg" alt="Tarte aux abricots" />
            <div class="description"><h4>Tarte fine aux abricots</h4></div>
          </div>
         <div class="swiper-slide">
            <img src="../Images/Baguettes fait maison.jpg" alt="Pain fait maison" />
            <div class="description"><h4>Baguettes faites maison</h4></div>
          </div>
         <div class="swiper-slide">
            <img src="../Images projet redimensionnées/Tarte fine aux pommes et verrine.jpg" alt="Tarte fine aux pommes"/>
            <div class="description"><h4>Verrines aux agrumes</h4></div>
          </div>
          <div class="swiper-slide">
            <img src="../Images/Baba au rhum.jpg" alt="Babarhum"/>
            <div class="description"><h4>Baba au rhum</h4></div>
          </div>
          <div class="swiper-slide">
            <img src="../Images/Choux caramel et craquelin.JPG" alt="Choux"/>
            <div class="description"><h4>Choux caramel et craquelin</h4></div>
          </div>
          <div class="swiper-slide">
            <img src="../Images/Bavarois passion.jpg" alt="Bavaroispassion"/>
            <div class="description"><h4>Tarte au citron meringuée</h4></div>
          </div>
          <div class="swiper-slide">
            <img src="../Images/Crevettes et blé.jpg" alt="Burgers"/>
            <div class="description"><h4>Crevettes et "Ebly"</h4></div>
          </div>
          
        </div>
        <!-- En cas de pagination -->
        <div class="swiper-pagination"></div>

        <!-- Boutons de navigation -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
     
        
         
      </div>
      </div>
    </div>
     



 


  <?php
include '../index/footer.html';
?>