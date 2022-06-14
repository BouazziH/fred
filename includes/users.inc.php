<h1>Users</h1>
 <?php
 /* $requete = "SELECT id_user, nom, prenom, email FROM `utilisateur`;";

  $queryselect = new Sql();
  $queryselect->afficher($requete);


  
  echo '<pre>';
print_r($requete);
echo '</pre>'; */ 


 $servname = "localhost"; $dbname = "filrouge"; $user = "root"; $pass = "";

try{
    $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
   /* Sélectionne les valeurs dans les colonnes prenom et mail de la table
     users pour chaque entrée de la table*/
    $sth = $dbco->prepare("SELECT id_user, nom, prenom, email FROM `utilisateur`");
    $sth->execute();
    
  
   $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
    
   
    echo '<pre>';
    print_r($resultat);
    echo '</pre>';
}
      
catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
}

?>
