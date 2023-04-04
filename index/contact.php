<?php
session_start();
$page = 'contact';
include '../index/navbar.php';

?>

<form>

  <div class="contact-form">
  <div class="container-form">
        <h1>Formulaire de contact</h1>
        <h2>Des questions? Des suggestions?</h2>
        
          <label for="fname">Nom & prénom</label>
          <input type="text" id="fname" name="firstname" placeholder="Votre nom et prénom">
      
          <label for="sujet">Sujet</label>
          <input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message">
      
         <div class="corps-formulaire"><label for="emailAddress">Email</label>
          <input id="emailAddress" type="email" name="email" placeholder="Votre email">
          </div>
      
          <label>Message</label>
          <textarea id="subject" name="subject" placeholder="Votre message ..."></textarea>
      <div class="formsend">
          <button type="button">Envoyer</button>
          </div>
        
      </div>
  </div>
    </form>
  

<?php
include '../index/footer.html';
?>
