<?php
if($_POST['prenom'] != NULL && $_POST['nom'] != NULL && $_POST['age'] != NULL && $_POST['sexe'] != NULL) {
    include("Exercice_3.php");
}
?>

<html>
<h1>TP_n°6_langage_PHP</h1>
<hr>
<h2>Exercice_3</h2>

<form action="Exercice_3.php" method="post">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="user_nom"><br><br>
    </div>
    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="user_prenom"><br><br>
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="mail" id="mail" name="user_mail"><br><br>
    </div>
    <div>
        <label for="age">Âge :</label>
        <select name="user_age">
            <option value="">--Age--</option>
            <option value="0-20">0-20</option>
            <option value="20-40">24-40</option>
            <option value="41-60">41-60</option>
            <option value="60+">60 et +</option>
        </select> <br> <br>
    </div>
    <div class="sexe">
        Male <input type="checkbox" name="sexe[]" value="Homme">&nbsp;
        Female <input type="checkbox" name="sexe[]" value="Femme"><br><br>
    </div>
    <div class="button">
        <button type="submit" >Valider</button>
    </div>
</form>