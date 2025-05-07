<div class="form-container">
     <h2>Vérification de Connexion</h2>      
         <label for="dbname">Nom d'utilisateur ou adresse mail</label>
         <input type="text" id="dbname" name="dbname" required>
         <label for="username">Mot de passe</label>
         <input type="password" id="username" name="username" required>
         <!-- Div acting as a button -->
         <div class="password_forgot">
             <a href="view/password_forgot.php">Mot de passe oublié</a>
         </div>
         <div class="inscrption">
             <a href="view/inscrption.php">Inscription</a>
         </div>
         <div class="submit-btn" onclick="verifyConnection_(this)">Vérifier la Connexion</div>
  </div>
 <?php 
require_once "data/index/css/index_verifyConnection_all_projet_css.php" ; 
require_once "data/index/js/index_verifyConnection_all_projet_js.php" ; 
?> 
