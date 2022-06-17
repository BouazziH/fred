<?php
/*  session_start();  */
?>
<h1>Login</h1>
<?php
    if (isset($_POST['frmLogin'])) {
        $mail = htmlentities(trim($_POST['mail']));
        $mdp = htmlentities(trim($_POST['mdp']));

        $erreurs = array();

        if (mb_strlen($mail) === 0)
            array_push($erreurs, "Il manque votre e-mail");

        if (mb_strlen($mdp) === 0)
            array_push($erreurs, "Il manque votre mot de passe");

        if (count($erreurs)) {
            $messageErreur = "<ul>";

            for($i = 0 ; $i < count($erreurs) ; $i++) {
                $messageErreur .= "<li>";
                $messageErreur .= $erreurs[$i];
                $messageErreur .= "</li>";
            }
    
            $messageErreur .= "</ul>";
    
            echo $messageErreur;

            include './includes/frmLogin.php';
        }

        else {
            //tout ce passe bien 
             $_SESSION['loginUser'] = $mail;
             echo $_SESSION['loginUser'];
         /*    print_r($_SESSION) ;   */
          
           /* include './includes/frmLogin.php'; */
/* $toEmail = $mail;
$fromEmail = 'contact@ceppic-php-file-rouge.fr';
$sujetEmail = 'Login Success';
$messageEmail = 'vous etes bien connecté!';
 mail($toEmail, $sujetEmail,$messageEmail);  */
 $messageEmail = $mail . 'vous etes connectéé!';
 sendEmail($mail,$_SESSION['loginUser'],'Login Success',$messageEmail);
 



         /*    echo 'tout va bien'; */
            header ('location:index.php?page=contact');
        }
    }
    
    else {
       
        $mail = "";
        include './includes/frmLogin.php';
    }
