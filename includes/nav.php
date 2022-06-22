<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php


?>
<header>
    <nav>
        <ul>
            <li><a href="index.php?page=accueil">Accueil</a></li>
            <li><a href="index.php?page=contact">Contact</a></li>
            <?php
            if (isset($_SESSION['loginUser'])) {
            ?>
                <span class="login">
                <li><a href="index.php?page=users"><i class="fa-solid fa-user fa-xl"></i></a></li>
                    <li><strong><?= $_SESSION['loginUser'] ?></strong></li>
                    <li><a href="index.php?page=logout">Logout</a></li>
                    
            </span>
            <?php } else { ?>
                <li><a href="index.php?page=inscription">Inscription</a></li>
                <li><a href="index.php?page=login">Login</a></li>
            <?php } ?>
        </ul>

    </nav>
</header>