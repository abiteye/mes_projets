<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice4</title>
</head>
<style>
    #case{
        width:30%;
        height:100px;
        margin-top:5px;
        border-radius: 5px;
        border:2px solid black;

    }
    #case1{
        width:30%;
        height:100px;
        margin-top:5px;
        border-radius: 5px;
        background-color:grey;
        border:2px solid green;

    }
    #valide{
        width:5%;
        height:35px;
        margin-top:10px;
        background-color:blue;
        color:white;
        border-radius: 5px;
    }
   
        
</style>
<body>
<h1>Exercice4</h1>

    <form action="" method="post">
        <label form="text">Saisir un texte :</label><br> 
        <textarea type="text" name="phrase" placeholder="Entrer un texte" id="case" >
        </textarea><br>
        <input type="submit" value="Valider" name="valider" id="valide">

    </form>
</body>
</html>
<?php
include ("exo4_fonction.php"); 
?>
<?php
$erreurs=[];
    if(isset($_POST['valider'])) 
    {
        $texte=$_POST['phrase'];
        #fonction pour valider une phrase qui est la F1.
        if(valider_une_phrase($texte))
        {
            #fonction pour decouper un texte qui est la f2.
            $ligne=tronquer($texte);
            for($i=0; $i<count($ligne); $i++){
                $ligne2[]=supprimer_espaces($ligne[$i]);
            }
            var_dump($ligne2); 
            #fonction pour supprimer des espaces qui est la f3. 
            $texte=supprimer_espaces($texte);
            echo "<label>Le texte corrigé est le suivant:</label><br/>";
            echo '<textarea readonly id="case1">'.$texte.'</textarea><br/>'; 
        }
        else{
            echo "Veuillez remplir ce champ please!";
            exit;
        }
    }   
?>
