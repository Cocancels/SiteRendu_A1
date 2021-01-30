<?php include '../inc/header.php' ?>
<html>

<head>
    <title>Formulaire</title>
    <link rel="stylesheet" href="../css/styleformulaire.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="favicon-32x32"/>  
</head>

<body>
<div id="container">
<?php if(isset($_SESSION['enregistrement'])){ ?>
    <form method="post" action="formulaire.php">
    <div id="contactme">


            <div id="label3">
                <p class="message3">Votre message : </p>
                <textarea name="message" id="msg" title="write message" autofocus></textarea> <br>
                <button type="submit" id="envoyer">Envoyer</button>
            </div>
        </div>
    </form>
<?php } else { ?> 
    <div class="notconnected">
        <p class="connect">Vous n'êtes pas connectés.</p>
        <a href="connexion.php">
            <p class="seconnecter">Se connecter</p>
        </a>
    </div>
<?php } ?>
</div>
    
    
    <?php
        // Isset permet de vérifier l'existence de quelque chose
        if(isset($_POST['message']) && $_POST['message'] != '' ){


        //On stocke les données dans une liste remplie de variables,
        //qui contiennent les entrées de l'utilisateur dans les différents
        //input.
            $donnees = [
                'pseudo' => $_SESSION['enregistrement']['pseudo'],
                'email' => $_SESSION['enregistrement']['email'],
                'msg' => $_POST['message']
            ];

        //On prépare la base de donnée en insérant les variables précemment
        //stockées. 
            $requete = $database->prepare(
                "INSERT INTO messages (pseudo, email, msg) VALUES (:pseudo, :email, :msg)"
            );
            $ajout = $requete->execute($donnees);

        } 
    ?>

    <?php 
            
            //On choisit d'organiser les différentes variables par leur date.
            $requete2 = $database->prepare(
                "SELECT * FROM messages"
            );

            $requete2->execute();
            
            //fetchAll retourne un tableau contenant toutes les lignes de notre base de donnée.
            $formulaire_list = $requete2->fetchAll(PDO::FETCH_ASSOC);

            ?>

   
    
    <script src="../js/formscript.js"></script>  


</body></html>
