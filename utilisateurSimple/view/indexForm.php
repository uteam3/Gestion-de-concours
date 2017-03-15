<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   
   <?php 
        if (isset($errors) && count($errors) != 0) {
          // echo '<div class="alert alert-danger">
          // <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
            foreach ($errors as $value) {
              echo $value."<br>";
            }
            echo "</div>";
        } 

        if (isset($_GET['ok'])) {
                
                echo '<font color="blue">Vous êtes enregistré avec succès...</font>';
                echo '<br><br>';
              }
      ?>

  <form method="post" action="../controlleur/formulaire_inscription.php">
	
      <div class="form-group">     
        <label>Nom:</label>
        <input type="text" name="nom" />
      </div>

      <div class="form-group">     
        <label>prenom:</label>
        <input type="text" name="prenom" />
      </div>

      <div class="form-group">     
        <label>Adresse:</label>
        <input type="text" name="adresse" />
      </div>

      <div class="form-group">     
        <label>E-mail:</label>
        <input type="text" name="email" />
      </div>

      <div class="form-group">     
        <label>Mot de passe:</label>
        <input type="password" name="motpasse" />
      </div>
      <div class="form-group">     
        <label>Confirme mot de passe:</label>
        <input type="password" name="confirmemotpasse" />
      </div>
      <div class="form-group">     
        <label>Statut:</label>
        <select name="statut">
        	<option>Membre Simple</option>
        	<option>Membre privillégié</option>
        </select>
      </div>

      <div class="form-group">     
        <label>Fonction:</label>
        <select name="fonction">
        	<option> Etudiant</option>
        	<option>Professionnel</option>
        </select>
      </div>

      <button type="submit" name="valider">Valider</button>
</form>
</body>
</html>