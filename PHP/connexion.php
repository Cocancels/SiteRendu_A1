<html>

<head>
    <title>Connexion</title>
    <link rel="stylesheet" href="../css/styleconnexion.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="favicon-32x32"/>  

</head>

<body>
<?php include '../inc/header.php' ?>

<div class="container">
    

    <div class="middle">
        <h1 class="title">Prouvez que vous faites partis de l'équipage !</h1>

        <img class="image" src="../images/farewell.gif">

        <form method="post" action="connexion.php">
            <div id="contactme">

                <div id="label1">
                    <p class="message1">Votre pseudo : </p>
                    <input type="text" name="pseudo" id="pseudo"/>
                </div>

                <div id="label2">
                    <p class="message2">Votre mot de passe : </p>
                    <input type="password" name="password" id="password" />              
                </div>
        
            </div>
        <button type="submit" id="envoyer">Connexion</button>
        
        <p class="noinscrit">Pas encore inscrit ?</p>
        <a href="inscription.php">
            <p class="inscription">Inscrivez-vous</p>
        </a>
    </div>

    
    </form>

</div>

<?php
$msg = "";
// récupération des saisies utilisateur lors de la validation du formulaire
if(isset($_POST['pseudo']) && isset($_POST['password'])) {

    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['password'];

    // on interroge la BDD pour récupérer les informations de l'utilisateur sur la base de son pseudo
    $recup_infos = $database->query("SELECT * FROM enregistrement WHERE pseudo = '$pseudo'");

    // on vérifie si on a récupéré une ligne.
    if($recup_infos->rowCount() > 0) {
        // le pseudo est bon
     
        // on vérifie le mdp, pour cela il faut traiter la réponse avec un fetch
        $infos_membre = $recup_infos->fetch(PDO::FETCH_ASSOC);
        if($mdp == $infos_membre['mdp']) {
            // le mdp est bon
            // Pour la connexion, on place les informations de l'utilisateur sauf son mdp dans la session pour pouvoir intéroger la session par la suite.
            $_SESSION['enregistrement']['id'] = $infos_membre['id'];
            $_SESSION['enregistrement']['pseudo'] = $infos_membre['pseudo'];
            $_SESSION['enregistrement']['mdp'] = $infos_membre['mdp'];
            $_SESSION['enregistrement']['email'] = $infos_membre['email'];
            $_SESSION['enregistrement']['image'] = $infos_membre['image'];
            $_SESSION['enregistrement']['statut'] = $infos_membre['statut'];
            header('Location: http://localhost/Ancel_Corentin_GR_02_PHP/PHP/blog.php');


        } else {
            $msg = "<div style='padding: 20px; background-color: red; color: white;'>Mdp incorrect,<br>Veuillez recommencer</div>";
            echo $msg;
        }

    } else {
        // pseudo incorrect
        $msg = "<div style='padding: 20px; background-color: red; color: white;'>Pseudo incorrect,<br>Veuillez recommencer</div>";
        echo $msg;

    }



}

?>

</body>




</html>

