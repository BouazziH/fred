<?php
session_start();
 if (isset($_SESSION['loginUser'])) 
{
    echo $_SESSION['loginUser'] ;  
echo '<header>';
echo     '<nav>';
echo  '<ul>';
echo      ' <li><a href="index.php?page=accueil">Accueil</a></li>';
 echo    '<li><a href="index.php?page=contact">Contact</a></li>';  
 echo '<li><a href="index.php?page=logout">'.$_SESSION['loginUser'] .' logout</a></li>';
       
            
 echo    '</ul>';
 echo '</nav>';
echo '</header>';
}
else
{
echo '<header>';
echo     '<nav>';
echo        '<ul>';
echo            ' <li><a href="index.php?page=accueil">Accueil</a></li>';
 echo            '<li><a href="index.php?page=contact">Contact</a></li>';
echo             '<li><a href="index.php?page=inscription">Inscription</a></li>';
 echo            '<li><a href="index.php?page=login">Login</a></li>';

       
            
 echo '</ul>';
 echo '</nav>';
echo '</header>';
}
?>