<form action="index.php?page=inscription" method="post">
<div>
<label for="nom">Nom</label>
<input type="text" id="nom" name="nom" value="<?php echo $nom; ?>">

</div>

<div>
<label for="prenom">Prénom</label>
<input type="text" id="prenom" name="prenom" value="<?=$prenom?>">

</div>

<div>
<label for="email">Email</label>
<input type="text" id="email" name="email" value="<?=$email?>">

</div>
<div>
<label for="password">Password</label>
<input type="password" id="password" name="password" >

</div>
<div>
<label for="passwordVer">Password verify</label>
<input type="password" id="passwordVer" name="passwordVer">

</div>
<div>

<input type="submit" value="Envoyer">
<input type="reset" value="Effacer">

</div>
<input type="hidden" name="frmInscription">







</form>