<?php
session_start();
$page = 'registerform';
include '../index/navbar.php';


?>

<div class="formwrapper">
  <div class="wrapper">
    <span class="icon-close">
      <ion-icon name="close"></ion-icon>
    </span>

    <div class="form-box login">
      <h2>Me connecter</h2>
      <form action="#">
        <div class="input-box">
          <span class="icon"><ion-icon name="mail"></ion-icon></span>
          <input type="email" required>
          <label>Email</label>
        </div>
        <div class="input-box">
          <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
          <input type="password" required>
          <label>Mot de passe</label>
        </div>
        <div class="remember-forgot">
          <label><input type="checkbox"> Se souvenir de moi</label>
          <a href="#">Mot de passe oublié ?</a>
        </div>
        <button type="submit" class="btn">Me connecter</button>
        <div class="login-register">
          <p>Créer un compte<a href="#" class="register-link">M'enregistrer</a></p>
        </div>
      </form>
    </div>

    <div class="form-box register">
      <h2>M'enregistrer</h2>
      <form action="#">
        <div class="input-box">
          <span class="icon"><ion-icon name="person"></ion-icon></span>
          <input type="text" required>
          <label>Nom utilisateur</label>
        </div>
        <div class="input-box">
          <span class="icon"><ion-icon name="mail"></ion-icon></span>
          <input type="email" required>
          <label>Email</label>
        </div>
        <div class="input-box">
          <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
          <input type="password" required>
          <label>Mot de passe</label>
        </div>
        <div class="remember-forgot">
          <label><input type="checkbox"> J'accepte les Conditions Générales d'Utilisation</label>
        </div>
        <button type="submit" class="btn">Créer mon compte</button>
        <div class="login-register">
          <p>J'ai déjà un compte <a href="#" class="login-link">Me connecter</a></p>
        </div>
      </form>
    </div>
  </div>
</div>
    <?php
include '../index/footer.html';
?>


