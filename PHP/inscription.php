<html>

<head>
    <title>Formulaire</title>
    <link rel="stylesheet" href="../css/styleinscription.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="favicon-32x32"/>  

</head>

<body>
<?php include '../inc/header.php' ?>
<div id="container">
    <form method="post" action="inscription.php">
    <div id="contactme">

            <div id="label1">
                <p class="message1">Votre pseudo : </p>
                <input type="text" name="pseudo" id="pseudo"/>
            </div>

            <div id="label2">
                <p class="message2">Votre e-mail : </p>
                <input type="text" name="email" id="mail" />

            </div>

            <div id="label3">
                <p class="message3">Votre mot de passe : </p>
                <input type="password" name="password" id="password"/>
            </div>
            <button type="submit" id="envoyer">Envoyer</button>
        </div>
    </form>
</div>
    
    
    <?php
        // Isset permet de vérifier l'existence de quelque chose
        if(isset($_POST['pseudo']) && $_POST['pseudo'] != '' 
        && isset($_POST['email']) && $_POST['email'] != '' 
        && isset($_POST['password']) && $_POST['password'] != ''){
        
        
            //On stocke les données dans une liste remplie de variables,
        //qui contiennent les entrées de l'utilisateur dans les différents
        //input.
            $pseudo = $_POST['pseudo'];
            $email= $_POST['email'];

            $donnees = [
                'pseudo' => $_POST['pseudo'],
                'email' => $_POST['email'],
                'mdp' => $_POST['password'],
                'image' => "profil.jpg",
                'statut' => "1",
            ];

            //on vérifie si un pseudo ou une email existe deja dans la base de donnée.
            $recup_infos = $database->query("SELECT * FROM enregistrement WHERE pseudo = '$pseudo'");
            $recup_infos2 = $database->query("SELECT * FROM enregistrement WHERE email = '$email'");
            if($recup_infos->rowCount() > 0){
                echo "<script>alert(\"Ce pseudo existe déjà !\")</script>";    
            }
            elseif($recup_infos2->rowCount() > 0){
                echo "<script>alert(\"Cette adresse e-mail est déjà utilisée !\")</script>";       
            }

            else{
            $requete = $database->prepare(
                "INSERT INTO enregistrement (pseudo, mdp, email, image, statut) VALUES (:pseudo, :mdp, :email, :image, :statut)"
            );
            $ajout = $requete->execute($donnees);
            header('Location: http://localhost/Ancel_Corentin_GR_02_PHP/PHP/connexion.php');

        }
        } 
    ?>

    <?php 
            
            //On choisit d'organiser les différentes variables par leur date.
            $requete2 = $database->prepare(
                "SELECT 'pseudo','mdp','email' FROM enregistrement"
            );

            $requete2->execute();
            
            //fetchAll retourne un tableau contenant toutes les lignes de notre base de donnée.
            $formulaire_list = $requete2->fetchAll(PDO::FETCH_ASSOC);

            ?>

   
    
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/TweenMax.min.js"></script>
    <script src="../js/formscript.js"></script>  


</body></html>
