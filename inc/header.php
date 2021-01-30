<?php include '../inc/connect.php'; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/styleheader.css" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="favicon-32x32"/>  
    <meta property="og:title" content="Découvrez l'univers de One Piece et tout ses secrets.">
    <meta name="description" content="Lors de l'exécution de Gold Roger, ancien seigneur des pirates, ce dernier annonça avoir laissé son trésor à quiconque aurait l'audace de le chercher. Nous traçons alors le parcours de Monkey D Luffy qui devient pirate.">
    <meta name="author" content="Corentin Ancel">

</head>

<style>
    @media only screen and (max-width:1000px) {
    <?php if(isset($_SESSION['enregistrement'])) {?>
    .liste1, .liste2,  .liste3, .liste4, .liste6, .liste8 {
        display: block !important;
        padding: 25px 0;
        text-align: center;
    }

    #image{
        margin-left: 0px;
    }

    <?php if($_SESSION['enregistrement']['statut'] == "2") {?>
        .liste9 {
            display: block !important;
            padding: 25px 0;
            text-align: center;
        }
    
    <?php }?>


    <?php } else {?>
    .liste1, .liste2,  .liste3, .liste4, .liste5, .liste7 {

        display: block !important;
        padding-top: 50px;
        text-align: center;
    }
    <?php }?>
}
    
</style>

<body>

<nav>
        <a href="index.php" class="liste1">
            <p>Accueil</p>
        </a>
        <a href="galerie.php">
            <p class="liste2">Galerie</p>
        </a>
        <a href="blog.php">
            <p class="liste3">Blog</p>
        </a>
        <a href="formulaire.php">
            <p class="liste4">Contact</p>
        </a>
        
        <a href="connexion.php">
            <p class="liste5">Connexion</p>
        </a>

        <a href="deconnexion.php">
            <p class="liste6">Deconnexion</p>
        </a>

        <a href="inscription.php">
            <p class="liste7">Inscription</p>
        </a>

        <?php if(isset($_SESSION['enregistrement']) && ($_SESSION['enregistrement']['statut'] == "2")){?>
        <a href="admin.php">
            <p class="liste9">Admin</p>
        </a>
        <?php } ?>

        <?php if(isset($_SESSION['enregistrement'])){?>
        <a href="profil.php" class="liste8">
            <img id="image" src="../images/<?php echo $_SESSION['enregistrement']['image']?>">
        </a>
        <?php } ?>

    </nav>


    <div class="boutonOuvrir"></div>
    <div class="boutonFermer"></div>

    <?php 
    if(isset($_SESSION['enregistrement'])) {
    echo '<style>.liste5{
        display: none;
    }
    .liste6{
        display: inline-block;
    }

    .liste7{
        display: none;
    }

    .liste8{
        display: inline-block;
    }
     
    </style>';
}?>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/TweenMax.min.js"></script>
    <script src="../js/scriptheader.js"></script>

</body>
</html>