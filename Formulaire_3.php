<form action="Formulaire" method="post">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="user_nom">
    </div>
    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="user_prenom">
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="mail" id="mail" name="user_mail">
    </div>
    <div>
        <label for="age">Âge :</label>
        <input type="number" id="age" name="user_age">
    </div>
    <div class="sexe">
        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <label for="vehicle1"> I have a bike</label><br>
        <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
        <label for="vehicle2"> I have a car</label><br>
    </div>
    <div class="button">
        <button type="submit">Envoyer le message</button>
    </div>

</form>

<?php
