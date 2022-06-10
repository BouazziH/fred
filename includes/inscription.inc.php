<h1>Inscription</h1>
<?php
if (isset($_POST['frmInscription'])) {
    $message = "je viens du formulaire";
    $nom = htmlentities(trim($_POST['nom']));
    $prenom = htmlentities(trim($_POST['prenom']));
    $email = htmlentities(trim($_POST['email']));
    $password = htmlentities(trim($_POST['password']));
    $passwordVer = htmlentities(trim($_POST['passwordVer']));

    $erreur = array();

    if (mb_strlen($nom) === 0)
        array_push($erreur, "il manque votre nom");

    if (mb_strlen($prenom) === 0)
        array_push($erreur, "il manque votre prenom");


    if (mb_strlen($email) === 0)
        array_push($erreur, "il manque votre email");

    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
        array_push($erreur, " is not valide");

        if (mb_strlen($password) === 0)
        array_push($erreur, "il manque votre pass");

        if (mb_strlen($passwordVer) === 0)
        array_push($erreur, "il manque votre verif pass");

         elseif($password === $passwordVer)
         array_push($erreur, "pass  valide");
         else
         array_push($erreur, "pass non valide");
         
         




    if (count($erreur)) {
        $messageErreur = "<ul>";
        for ($i = 0; $i < count($erreur); $i++) {
            $messageErreur .= "<li>";
            $messageErreur .= $erreur[$i];
            $messageErreur .= "</li>";
        }

        $messageErreur .= "</ul>";
        echo $messageErreur;
        include './includes/frmInscription.php';
    }
    else {
        $password = password_hash($password1, PASSWORD_DEFAULT);

        $requete = "INSERT INTO utilisateurs (id_utilisateur, nom, prenom, mail, password)
        VALUES (NULL, '$nom', '$prenom', '$mail', '$password');";

        $queryInsert = new Sql();
        $queryInsert->inserer($requete);


        displayMessage("Requête OK");
        }

        catch(PDOException $e)
         {
            die("Erreur : " . $e->getMessage());
        }
    }


       /*  $serverName = "localhost";
        $userNAme = "root";
        $userPassword = "";
        $database = "filrouge";
 */
       /*  try {
            $connexion = new PDO("mysql:host=$serverName;dbname=$database", $userNAme, $userPassword);
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $requete =  "INSERT INTO utilisateur (id_user, nom, prenom, email)
 VALUES (NULL, '$nom', '$prenom','$email');";


            $connexion->exec($requete);
            echo "ok";
            //displayMmessage("Requete ok");

        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        } */
    
 else {
    //le cas pour tester si on vient pas du formulaire 

    $nom = $prenom = $email = "";

    include './includes/frmInscription.php';
}
/* echo $message; */
?>