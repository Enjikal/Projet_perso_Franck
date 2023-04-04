<?php
session_start();
use App\models\users;
use App\repository\UserRepository;


if(isset($_POST)){
    if(isset($_POST['action']) && !empty($_POST['action'])){
        if($_POST['action'] === 'signIn'){
            if (!empty($_POST['email']) && !empty($_POST['password'])) {
                $login = $_POST['email'];
                $password = $_POST['password'];
                $userRepo = new UserRepository();
                $usersObject = $userRepo->findAll($userRepo->getDataCount(), 0);

                foreach($usersObject as $user){

                    if($user->getEmail() === $login && password_verify($password,$user->getPassword())){
                        $_SESSION['login'] = $login;
                        $_SESSION['password'] = $user->getPassword();
                        $_SESSION['role'] = $user->getrole();
                        header('location: #');

                    } else {
                        $ErrorSignIn = 'utilisateur ou password inconnu';
                    }
                }
            }
            else {
                $ErrorSignIn = 'post est vide ou pas totalement renseigné';
            }
        }
        elseif ($_POST['action'] === 'signUp'){
            if($_POST['pass'] === $_POST['pass-confirm']){
                $userRepo = new UserRepository();
                if(!$userRepo->findIfExist($_POST['email'])){
                    $newUser = new users();
                    $newUser->setEmail($_POST['email']);
                    $newUser->setPassword($_POST['pass']);
                    $_POST =[];

                    $userRepo->addUser($newUser);
                    header('location: #');
                }
                else{
                    $ErrorSignUp = 'Cet utilisateur existe déjà !';
                }
            }
        }
    }
}


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
        <button type="submit" class="btn-register">Me connecter</button>
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
        <button type="submit" class="btn-register">Créer mon compte</button>
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


