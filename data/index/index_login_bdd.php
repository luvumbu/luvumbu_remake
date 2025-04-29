 <?php
    require_once $index_login_bdd_css_1;
    require_once $index_login_bdd_script_1;
    ?>
 <div class="form-container">
     <h2>Vérification de Connexion</h2>
     <form action="your_php_file.php" method="POST">
         <label for="dbname">Nom de la Base de Données :</label>
         <input type="text" id="dbname" name="dbname" required>
         <label for="username">Nom d'Utilisateur :</label>
         <input type="text" id="username" name="username" required>
         <div class="submit-btn" onclick="login_bdd_(this)">Vérifier la Connexion</div>
     </form>
 </div>