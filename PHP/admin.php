<?php include '../inc/header.php' ;

//on fait une requete pour sélectionner tous les messages de la base de donnée.

  $requete2 = $database->prepare(
    "SELECT * FROM messages ORDER by DATE"
);

//on crée un tableau à l'aide de fetchAll.
$requete2->execute();
$blog = $requete2->fetchAll(PDO::FETCH_ASSOC);
?>
<html>

<head>
    <title>Connexion</title>
    <link rel="stylesheet" href="../css/styleadmin.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="../images/favicon-32x32"/>  

</head>
<body>

<h1 class="title">Demandes de contact</h1>
<div class="container">

    
    <?php 
    //pour chaque demande de contact, on crée une nouvelle div single qui donnera les informations de cette demande et de son auteur.
    foreach($blog as $valeur){ ?>   
        <div class="single">
            <p class="id">ID : <?php echo $valeur['id']?></p>
            <p class="auteur">Auteur : <?php echo $valeur['pseudo']?></p>
            <p class="email">E-mail : <?php echo $valeur['email']?></p>
            <p class="msg">Message : <?php echo $valeur['msg']?></p>
            <p class="date">Date : <?php echo $valeur['date']?></p>
    </div>

    <?php } ?>
</div>


</body>
</html>