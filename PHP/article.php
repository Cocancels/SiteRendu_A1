<?php include '../inc/header.php'; 

//si l'utilisateur appuie sur envoyer, alors on récupère le nom de l'image et le chemin où elle ira.
if(isset($_POST["envoyer"])) {
        $photo = "";
        $photo = $_FILES['file']['name'];
        $chemin = "../images/".$photo;


        move_uploaded_file($_FILES['file']['tmp_name'],$chemin);

}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleArticle.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300&display=swap" rel="stylesheet"/>
    <link rel="shortcut icon" type="image/png" href="favicon-32x32"/>  
    <title>Article</title>
    <script src="../ckeditor/ckeditor.js"></script>
</head>
<body>
    <h1>Ecrivez un article !</h1>
    <form method="POST" action="article.php" id="form">
            <div id="labels">

                <div id="label2">
                    <p class="title">Titre : </p>
                    <input type="text" name="titre" id="titre" />
                </div>


                <div id="label3">
                    <p class="message">Message : </p>
                    <textarea name="message" class="ckeditor" title="write message" autofocus></textarea> <br>       
                </div>

                <div id="label4">
                    <p class="message">Ajoutez une image pour votre article : </p>
                    <input type="file" name="image" id="images">
    
            </div>
            <button type="submit" id="envoyer">Envoyer</button>
    </form>


    <?php

        
        // Isset permet de vérifier l'existence de quelque chose
        if (isset($_POST['message']) && $_POST['message'] != ''
        && isset($_POST['titre']) && $_POST['titre'] != '') {

        //On stocke les données dans une liste remplie de variables,
        //qui contiennent les entrées de l'utilisateur dans les différents
        //input.
            $donnees = [
                'pseudo' => $_SESSION['enregistrement']['pseudo'],
                'msg' => $_POST['message'],
                'titre' => $_POST['titre'],
                'image' => $_POST['image'],
            ];
        
        //On prépare la base de donnée en insérant les variables précemment
        //stockées. 
            $requete = $database->prepare(
                "INSERT INTO blog (pseudo, msg, titre, image) VALUES (:pseudo, :msg, :titre, :image)"
            );
            $ajout = $requete->execute($donnees);
            header('Location: http://localhost/Ancel_Corentin_GR_02_PHP/PHP/blog.php');


        } 
    ?>

<?php 

    //On choisit d'organiser les différentes variables par leur date.
    $requete2 = $database->prepare(
        "SELECT * FROM blog ORDER by date DESC"
    );

    $requete2->execute();

    //fetchAll retourne un tableau contenant toutes les lignes de notre base de donnée.
    $blog = $requete2->fetchAll(PDO::FETCH_ASSOC);


?>

</body>
</html>