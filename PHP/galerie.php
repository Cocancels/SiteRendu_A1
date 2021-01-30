<?php include '../inc/header.php' ?>   
<html>

<head>
    <title>Galerie</title>
    <link rel="stylesheet" href="../css/stylegalerie.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="favicon-32x32"/>  
</head>

<body>
<div class="container">
    <div class="left">
    </div> 
    
    <div class="middle">
        <h1>GALERIE</h1>
        <p class="add">Vous pouvez ajouter une image en collant son URL dans la zone 
        prévue.</p>

        <div class="none">
            <p class="notconnected">Vous n'êtes pas connectés.<br>Vous ne pouvez pas ajouter d'images.</p>
            <a href="connexion.php">
                <p class="connexion">Connexion</p>
            </a>    
        </div>    


        <form method="post" action="galerie.php" enctype="multipart/form-data">
            <input type="file" id="file" name="file">
            <div class="input">
                <button type="submit" name="envoyer" id="envoyer"><img id="fleche" src="../images/valide.png" alt="#"></button>
            </div>
        </form>

        <?php 

        //si la session est ouverte alors on change le style de quelques balises.

        if(!isset($_SESSION['enregistrement'])) {
            echo '<style>.none{
                display: block;
            }   
            form{
                display:none;
            }         
        </style>';
        }?>

<?php        
        // Isset permet de vérifier l'existence de quelque chose
        if(isset($_POST['envoyer']) && $_FILES['file']['name'] !=''){
            $photo = "";
            $photo = $_FILES['file']['name'];
            $chemin = "../images/".$photo;
            move_uploaded_file($_FILES['file']['tmp_name'],$chemin);
        
            $donnees = [
                'pseudo' => $_SESSION['enregistrement']['pseudo'],
                'newurl' => $photo,
            ];
            $requete = $database->prepare(
                "INSERT INTO galerie (newurl, auteur) VALUES (:newurl, :pseudo)"
            );
            $ajout =  $requete->execute($donnees);

        }
            //On choisit d'organiser les différentes variables par leur date.
            $requete2 = $database->prepare(
            "SELECT * FROM galerie order by ID desc"
        );
    
         $requete2->execute();
        
        //fetchAll retourne un tableau contenant toutes les lignes de notre base de donnée.
        $galerie = $requete2->fetchAll(PDO::FETCH_ASSOC);
        
?>
<div class="images">

<?php    
    //pour chaque image dans la base de donnée on l'affiche sur le site.
    foreach($galerie as $valeur){?>
        <div class="image">
            <img src="../images/<?php echo $valeur['newurl'] ?>" class="img">
            <p class="author">Ajoutée par : <?php echo $valeur['auteur'] ?></p>
        </div>
   <?php }
?>

</div>

        

    </div>

    <div class="right">        
    </div>    
</div>

</body>
</html>