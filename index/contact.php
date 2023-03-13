<?php
session_start();
$page = '../formulaire de contact/form';
include '../index/navbar.php';
$page = './navbar';
?>
<body>
    <form>
    <div class="separation">
      <h1>Des questions? Des suggestions?</h1>
      <div class="corps-formulaire">
        <div class="gauche">
          <div class="groupe">
            <label>Nom</label>
            <input type="text" autocomplete="off" />
            <i class="fas fa-user"></i>
          </div>
          <div class="groupe">
            <label>Adresse e-mail</label>
            <input type="text" autocomplete="off" />
            <i class="fas fa-envelope"></i>
          </div>
          <div class="groupe">
            <label>Téléphone</label>
            <input type="text" autocomplete="off" placeholder="(Facultatif)" />
           <i class="fas fa-phone"></i>
          </div>
        </div>

        <div class="droite">
          <div class="groupe">
            <label>Votre message</label>
            <textarea placeholder="Saisissez ici..."></textarea>
          </div>
        </div>
      </div>
      

      <div class="pied-formulaire" align="center">
        <button>Envoyer le message</button>
      </div>
      </div>
    </form>
  </body>

<?php
include '../index/footer.html';
?>
