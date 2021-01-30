<?php include '../inc/header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="favicon-32x32"/>  
    <link rel="stylesheet" href="../css/styleblog.css">
</head>
<body>

<div class="container1">
    <div id="titleDiv">
        <h1 class="titre">Blog</h1>
    </div>

    <div id="explications">
        <p class="explication">Bienvenue sur notre blog !<br>
        Ici, vous retrouverez différents articles sur le thème de One Piece.<br>
        Cliquez sur un sujet pour accéder à l'article.<br>
        <img class="luffygif" src="../images/luffyBlog.gif">
    </p>
    </div>

    <?php if (empty($_SESSION['enregistrement'])){ ?>
        <div id="notconnected">
            <p class="pnotconnected">Vous n'êtes pas connectés, 
                vous ne pouvez pas écrire ni lire d'articles.</p>
            <a href="connexion.php">
                <p class="connect">Se connecter</p>
            </a>
        </div>
    <?php }
    ?>

    <div class="container">
    <?php if(isset($_SESSION['enregistrement'])){ ?>
        <div id="article">
            <a href="article.php">
            <p class="article">Créer un article</p></a>
        </div>
    <?php } ?>
    </div>


    <?php 
            //On choisit d'organiser les différentes variables par leur date.
            $requete2 = $database->prepare(
                "SELECT * FROM blog ORDER by date DESC"
            );

            $requete2->execute();

            //fetchAll retourne un tableau contenant toutes les lignes de notre base de donnée.
            $blog = $requete2->fetchAll(PDO::FETCH_ASSOC);

            
    ?>

    <div id = "posts">
    <?php 

    //On crée une nouvelle div "single" à chaque nouvel article crée par l'utiliateur.
    //Chaque div contient différents paragraphes formant l'article.

    if(isset($_SESSION['enregistrement'])){ 
        foreach($blog as $valeur) { ?>
            <div class="single" onclick = "disappear(this)">
                <div class="infos1">
                <img class="myimage" src="../images/<?php 
                if (empty($valeur['image'])){
                    echo "croix.png";
                }
                else{
                    echo $valeur['image'];
                } ?>">
                    <div class="infos2">
                        <p class="auteurMessage"><span class="nomAuteur">Auteur</span> : <?php echo $valeur['pseudo']; ?></p>
                        <p class="date">Date : <?php echo $valeur['date']; ?></p>
                        <p class="titrePost">Sujet : "<?php echo $valeur['titre']; ?>"</p>   
                    </div>
                </div>
                <div class="posts">
                    <p class="post"><?php echo $valeur['msg']; ?></p>
                </div>  
                <img class="imagedisappear" src="../images/<?php 
                
                //si il n'y a pas d'image de choisie par l'utilisateur lors de la création de l'article
                //le site en mettra une automatiquement.
                if (empty($valeur['image'])){
                    echo "croix.png";
                }
                else{
                    echo $valeur['image'];
                } ?>">

            </div>
        <?php }} ?>   
    </div>
    
    <div id="button" onclick = "appear(this)">
        <button class="retour">Retour</button>  
    </div>
</div>

<script src="../js/blog.js"></script>


</body>
</html>