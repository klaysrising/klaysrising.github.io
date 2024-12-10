<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Accueil Le Labyrinthe">
    <meta name="author" content="Agathe Marconnet">
    <title>Newsletter</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />
</head>
<body>
    <!--Header-->  
    <header>
        <a href="../index.html"><img src="../images/logo.png" alt="logo" href="./index.html"></a>
        <h1 id="hautdepage">Newsletter</h1>
        <a href="newsletter.php"><img src="../images/newsletter.png" alt="newsletter"></a>
    </header>
    <!--Navigation-->
    <nav>
        <a href="../histoire.html">Histoire</a>
        <a href="../personnages.html">Personnages</a>
        <a href="../lieux.html">Lieux</a>
    </nav>
    <!--Main-->
    <main>
        <!--Formulaire-->  
        <h2>Newsletter</h2>
        <p>Inscrivez vous pour recevoir des nouvelles chaques mois.</p>
        <fieldset>
            <form method="post" action ="newsletter.php">
                <label>Nom </label>
                <input type="text" name="nom" placeholder = "Votre nom" required>
                <br>
                <label> Prénom </label>
                <input type="text" name="prenom" placeholder = "Votre prénom" required>
                <br>
                <label> Date de naissance </label>
                <input type="date" name="datenaissance" placeholder= "Votre date de naissance" required>
                <br>
                <label>Email</label>
                <input type="email" name="email" placeholder = "Votre email" required>
                <br>
                <input type="checkbox" name="accepter"/>Je consens à l'utilisation des informations fournies dans ce formulaire conformément aux finalités indiquées.
                <br>
                <br>
                <input type="submit" value="S'inscrire" name="Inscrire"/>
            </form> 
        </fieldset>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST'){ /*Pour enlever les messages d'erreur car les champs du formulaire n'étaient pas remplis, trouvé grâce à un ami*/
                echo "<h4>Résultats</h4><p> Nom : ".$_POST["nom"]."<br> 
                Prénom : ".$_POST["prenom"]."<br> 
                Date de Naissance : ".$_POST["datenaissance"]."<br> 
                Email : ".$_POST["email"]."</p><br>";
            }
        ?>
    </main>
    <!--Footer-->  
    <footer>
        <a href="../index.html"><img src="../images/logo.png" alt="logo"></a>
        <p>Logo : Vecteezy.com ©<br>
            © 2009 James Dashner. Tous droits réservés.<br>
            © 2014 Twentieth Century Fox Film Corporation. Tous droits réservés.
        </p>
        <!--Bouton qui renvboit au haut de page-->
        <a href="#hautdepage"><img src="../images/fleche.png" alt="fleche"></a>
    </footer>
</body>
</html>
