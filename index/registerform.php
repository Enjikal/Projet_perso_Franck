<?php
session_start();
$page = 'registerform';
include '../index/navbar.php';
include '../repository/UserRepository.php';

if (isset($_POST['formType'])) {
  $userRepository = new UserRepository();
  if ($_POST['formType'] == 'register') {
      $firstName = $_POST['firstName'];
      $lastName = $_POST['lastName'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $role = $_POST['role'];
      $userRepository->createUser($firstName, $lastName, $email, $password, $role);
      // Rediriger l'utilisateur vers une page de confirmation ou d'erreur
  } elseif ($_POST['formType'] == 'login') {
      $email = $_POST['email'];
      $password = $_POST['password'];
      $user = $userRepository->findByEmail($email);
      if ($user !== null && password_verify($password, $user->getPasswords())) {
          // Connecter l'utilisateur et le rediriger vers la page d'accueil
      } else {
          // Afficher un message d'erreur et inviter l'utilisateur à réessayer
      }
  }
}
?>

<div class="formwrapper">
  <div class="wrapper">
    <span class="icon-close">
      <ion-icon name="close"></ion-icon>
    </span>

    <div class="form-box login">
      <h2>Me connecter</h2>
      <form method="POST" action="#">
        <div class="input-box">
          <span class="icon"><ion-icon name="mail"></ion-icon></span>
          <input type="text" id="email" required>
          <label for="loginUser">Email</label>
        </div>
        <div class="input-box">
          <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
          <input type="password" id="password" required>
          <label for="loginPassword">Mot de passe</label>
        </div>
        <div class="remember-forgot">
          <label><input type="checkbox"> Se souvenir de moi</label>
             <a href="#">Mot de passe oublié ?</a>
        </div>
        <button type="submit" value="login" class="btn-register">Me connecter</button>
        <div class="login-register">
          <p>Créer un compte<a href="#" class="register-link">M'enregistrer</a></p>
        </div>
      </form>
    </div>

    <div class="form-box register">
      <h2>M'enregistrer</h2>
      <form method="POST" action="#">
        <div class="input-box">
          <span class="icon"><ion-icon name="person"></ion-icon></span>
          <input type="text" required >
          <label>Nom utilisateur</label>
        </div>
        <div class="input-box">
          <span class="icon"><ion-icon name="mail"></ion-icon></span>
          <input type="text" id="email" required>
          <label for="loginUser">Email</label>
        </div>
        <div class="input-box">
          <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
          <input type="password" id="password" required>
          <label for="loginPassword">Mot de passe</label>
        </div>
        <div class="remember-forgot">
          <label><input type="checkbox"> J'accepte les Conditions Générales d'Utilisation</label>
        </div>
        <button type="submit" value="login" class="btn-register">Créer mon compte</button>
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


