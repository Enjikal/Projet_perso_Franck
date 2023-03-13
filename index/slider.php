<?php
session_start();
$page = '../CSS/slider';
include '../index/navbar.php';
$page = './navbar';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../CSS/slider.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Alkalami&family=Great+Vibes&family=Poppins&display=swap" rel="stylesheet"> 

    <title>Slider</title>
  </head>
  <body>
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
            <img src="../Images/Baguettes fait maison.jpg" alt="Pain fait mmaison" />
            <div class="description"><h4>Baguettes faites maison</h4></div>
          </div>
         <div class="swiper-slide">
            <img src="../Images projet redimensionnées/Tarte fine aux pommes et verrine.jpg" alt="Tarte fine aux pommes"/>
            <div class="description"><h4>Verrines aux agrumes</h4></div>
          </div>
          <div class="swiper-slide">
            <img src="../Images/Makis oeufs de truite.jpg" alt="Makis"/>
            <div class="description"><h4>Makis et Sushis</h4></div>
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
     



    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
      const swiper = new Swiper(".swiper", {
        loop: true,

        // If we need pagination
        pagination: {
          el: ".swiper-pagination",
        },

        // Navigation arrows
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
  </body>

  <?php
include '../index/footer.html';
?>