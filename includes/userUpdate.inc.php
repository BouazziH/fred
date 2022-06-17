<h2>Update your user here :</h2>
<?php
$requete = "SELECT id_user,nom,prenom,email FROM `utilisateur` WHERE id_user =" . $_GET['id_user'].";";

$queryselect = new Sql();
$requete = $queryselect->afficher($requete);
//pour afficher le resultat du select
/* echo '<pre>'; 
print_r($requete);
echo '</pre>'; */


echo '<hr>';


echo '<table border="1">';
echo '<tr>';
echo '<td>id_user</td>';
echo '<td>nom</td>';

echo '<td>prenom</td>';
echo '<td>email</td>';
echo '<td>Update</td>';
echo '<td>Delete</td>';
echo '</tr>';

foreach ($requete as $key => $value) {


    echo '<tr>';
    echo '<td>' . $value['id_user'] . '</td>';
    echo '<td>' . $value['nom'] . '</td>';
    echo '<td>' . $value['prenom'] . '</td>';
    echo '<td>' . $value['email'] . '</td>';
    echo '<td> <button><a href="index.php?page=frmUpdate&id=' . $value['id_user'] . '">Modifier</a></button></td>';
    echo '<td> <input type="submit" name="submit" value="DELETE" /></td>';
    echo '</tr>';
}

echo '</table>';


?>