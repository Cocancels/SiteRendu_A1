<?php include '../inc/header.php'; 

if(isset($_POST["envoyer"])) {
        $photo = "";
        $photo = $_FILES['file']['name'];
        $chemin = "../images/".$photo;

        move_uploaded_file($_FILES['file']['tmp_name'],$chemin);

        $sql = "UPDATE enregistrement SET image = ? WHERE pseudo = ?" ;
        $requete = $database->prepare($sql);
        
        $requete->execute([
            $photo,
            $_SESSION['enregistrement']['pseudo']
        ]);
        $_SESSION['enregistrement']['image'] = $photo;
        header('Location: http://localhost/Ancel_Corentin_GR_02_PHP/PHP/profil.php');

}

$sql2 = "SELECT image from enregistrement WHERE pseudo = ?";
$requete2 = $database->prepare($sql2);

$requete2->execute([
    $_SESSION['enregistrement']['pseudo']
]);

$resultat = $requete2->fetchAll();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre profil</title>
    <link rel="stylesheet" href="../css/styleprofil.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="favicon-32x32"/>  
</head>
<body>

<div class="container">
    <h1 class="title">Votre profil : </h1>

    <div class="infos">

     <div>
         <img id="img" src="../images/<?php echo $resultat[0]['image'] ?>" >
         <p class="invisible">Vous n'avez pas d'image de profil.</p>
    </div>  
    
    <?php if($resultat[0]['image'] == ''){
        echo '<style> #img{
            display : none
        }
        .invisible {
            display : block
        }
        </style>';   
    }
    ?>
        <form method="post" action="profil.php" enctype="multipart/form-data">
            <input type="file" id="file" name="file">
            <input type="submit" id="envoyer" name="envoyer">
        </form>




        <p class="pseudo">Votre pseudo : <?php echo $_SESSION['enregistrement']['pseudo'] ?></p>
        

        <p class="mail">Votre e-mail : <?php echo $_SESSION['enregistrement']['email'] ?></p>
        

    </div>


</div>






</body>
</html>