<?php

$isAuthenticated = false;
if(isset($_SESSION) && !empty($_SESSION)){
    $isAuthenticated = true;
    $login = $_SESSION['login'];
    $role = $_SESSION['role'];
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navbar</title>
    <link rel="stylesheet" href="../CSS/navbar.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto+Flex:opsz,wght@8..144,100;8..144,300;8..144,500;8..144,700;8..144,900&display=swap"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet"/>
      <link rel="stylesheet" href="../CSS/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/slider.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Alkalami&family=Great+Vibes&family=Poppins&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.googleapis.com" />
	  <link rel="stylesheet" href="../CSS/indexrecettes.css">
    <link rel="stylesheet" href="../CSS/home.css">
    <link rel="stylesheet" href="../CSS/cookie.css"/>
    <link rel="stylesheet" href="../CSS/shopping.css"/>
    
    
    <?php 
   if($page==='contact'){

   
    ?>
    <link rel="stylesheet" href="../CSS/form.css">
    <?php
   }
    ?>
       <?php 
   if($page==='registerform'){

   
    ?>
    <link rel="stylesheet" href="../CSS/registerform.css">
    <?php
   }
    ?>
  </head>
  <body>
  
    <nav>

      <a class="nav-icon" aria-label="visit homepage" aria-current="page">
        <img src= "../assets/chef-svgrepo-com.svg" alt="chef icon">
        <span>Les recettes de Mam'</span>
      </a>

      <div class="main-navlinks">
        <button class="hamburger" type="button" aria-label="Toggle navigation" aria-expanded="false">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="navlinks-container">
          <a href="../index/home.php" aria-current="page">Accueil</a>
          <a href="../index/slider.php">Galerie</a>
          <a href="../index/indexrecettes.php">Index des recettes</a>
          <a href="../index/shopping.php">La boutique</a>
          <a href="../index/contact.php">Contact</a>
        </div>
      </div>

      <div class="nav-authentication">
        <a href="#" class="sign-user" aria-label="Sign in page">
          <img src="assets/user-svgrepo-com.svg" alt="user-icon">
        </a>
        <div class="sign-btns">
          <a type="button" href="../index/panier.php">Mon panier</a>
          <a type="button" href="registerform.php">Se connecter</a>
        </div>
      </div>
    </nav>
    
 

