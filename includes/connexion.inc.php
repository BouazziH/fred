<h1>Login</h1>
<?php
if (isset($_POST['frmConnexion'])) {
    $message = "je viens du formulaire";
    $login = htmlentities(trim($_POST['login']));
    $password = htmlentities(trim($_POST['password']));

    $erreur = array();

    if (mb_strlen($login) === 0)
        array_push($erreur, "il manque votre login");

        if (mb_strlen($password) === 0)
        array_push($erreur, "il manque votre mot de passe");
    
        if (count($erreur)) {
            $messageErreur = "<ul>";
            for ($i = 0; $i < count($erreur); $i++) {
                $messageErreur .= "<li>";
                $messageErreur .= $erreur[$i];
                $messageErreur .= "</li>";
            }
    
            $messageErreur .= "<ul>";
            echo $messageErreur;
            include './includes/frmConnexion.php';
        }
    else
    include './includes/frmConnexion.php';
    
    
} 
else
 {
    //le cas pour tester si on vient pas du formulaire 
    
    $login = "";
   
    include './includes/frmConnexion.php';
}

    ?>