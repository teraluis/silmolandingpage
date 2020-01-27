<form id="formulaire" action="validation.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <input type="text" class="form-control string" id="nom" name="nom"  placeholder="Nom" value="<?php if(isset($_SESSION['nom'])){echo $_SESSION['nom'];} ?>" required>
    </div>
    <div class="form-group col-md-6">
      <input type="text" class="form-control string" id="prenom" name="prenom" placeholder="Prénom" value="<?php if(isset($_SESSION['prenom'])){echo $_SESSION['prenom'];} ?>" required>
    </div>
  </div>
  <div class="form-group">
    <input type="email" class="form-control" id="mail" name="mail" placeholder="Mail"  value="<?php if(isset($_SESSION['mail'])){echo $_SESSION['mail'];} ?>" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-7">
      <input type="number" class="form-control" id="tel" name="tel" placeholder="Tél. Magasin" value="<?php if(isset($_SESSION['tel'])){echo $_SESSION['tel'];} ?>" required>
    </div>
    <div class="form-group col-md-5">
      <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Mobile" value="<?php if(isset($_SESSION['mobile'])){echo $_SESSION['mobile'];} ?>" required>
    </div>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="magasin" name="magasin" placeholder="Nom du magasin" value="<?php if(isset($_SESSION['magasin'])){echo $_SESSION['magasin'];} ?>" required>
  </div>
  <div class="form-group">
    <input type="text" class="form-control " id="adresse" name="adresse" placeholder="Adresse" value="<?php if(isset($_SESSION['adresse'])){echo $_SESSION['adresse'];} ?>" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="postal" name="postal" placeholder="Code postal" value="<?php if(isset($_SESSION['postal'])){echo $_SESSION['postal'];} ?>" required>
    </div>
    <div class="form-group col-md-6">
      <select id="pays" class="form-control" name="pays" required>
        <?php 
        if(isset($_SESSION['pays'])){echo "<option selected>".$_SESSION['pays']."</option>";
        }else {
          echo "<option selected>Pays</option>";
        }
        ?>
        <option>France</option>
        <option>Italie</option>
        <option>Allemagne</option>
        <option>Espagne</option>
        <option>Portugal</option>
        <option>Belgique</option>
        <option>Luxembourg</option>
        <option>Royaume-Uni</option>
        <option>Irlande</option>
        <option>Danemak</option>
        <option>Autriche</option>
        <option>Grece</option>
        <option>Croatie</option>
        <option>Rep-Tcheque</option>
        <option>Slovaquie</option>
        <option>Slovenie</option>
        <option>Malte</option>
        <option>Chypre</option>
        <option>Roumanie</option>
        <option>Bulgarie</option>
        <option>Suéde</option>
        <option>Finlande</option>
        <option>Lettonie</option>
        <option>Lituanie</option>
        <option>Estonie</option>
      </select>
    </div>
  </div>

<button type="submit" style="border: 0; background: transparent">
<img  src="sinscrire2.png" width="100%">
</button>

  
 
</form>