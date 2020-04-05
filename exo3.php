<!DOCTYPE html>
<html lang="en">
<head>
<?php
include ("exo3_fonction.php");
?>
<?php
 $formvalide=false;
 $nombre="";
 $msg="";
 $mot[]="";
     if(isset($_POST['envoie']))
     {
         if(!is_number($_POST['nombre']))
         {
             $msg= "veuillez saisir un nombre";
         }
         else
         {   
             $nombre=$_POST['nombre'];
             for($i=1; $i<=$nombre; $i++) 
             {
                 if(!empty($_POST['nombre'.$i])) 
                 {
                     $mot[]=$_POST['nombre'.$i]; 
                     var_dump($mot);
                 }                                                           
             }
             $cpt=0;
             for($i=0; $i<my_strlen($mot); $i++)
            {
                if(is_car_in_string('m',$mot[$i])) 
                {
                        $cpt++;
                }
            }                             
            echo "on a $cpt mots qui ont la lettre m.";
            $formvalide=true;
        }
        
    }
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice3</title>
</head>
<style>
    .cases {
        width: 20%;
        height: 30px;
        border-radius: 5px;
    }
    .mots {
        margin-right: 200px;

    }
    #valide {
        width: 5%;
        height: 35px;
        margin-top:15px;
        background-color:blue;
        color:white;
        border-radius: 5px;

        
    }
    #annule {
        width: 5%;
        height: 35px;
        margin-left:5px;
        background-color:red;
        color:white;
        border-radius: 5px;

    }
    #envoi{
        width: 10%;
        height: 35px;
        margin-top:15px;
        background-color:green;
        color:white;
        border-radius: 5px;

    }
</style>
<body>
<center>
<h1>Exercice3</h1> 
    <form action="" method ="POST">
        <label form="num1">Saisir un nombre :</label><br>
        <input class="cases" name="nombre" type="text" value="<?=$nombre?>" placeholder="Entrer un nombre"/><br>

        <?php
                if($formvalide)
                {
                    for ($i=1; $i<=$nombre; $i++) 
                    { 
        ?>
                    <?php echo "<label class='mots'> Mot n°".$i."</label><br/>";?>
                    <input class="cases" type="text" name="nombre<?=$i;?>" 
                        value="<?php
                        if(!empty($_POST['nombre'.$i])){echo $_POST['nombre'.$i];}
                             ?>" placeholder="Ecrire un mot">
                             <br>
            <?php  
                    }
                }
            ?>
        <input type="submit" name="envoie" value="Valider" id="valide">
        <input type="submit" name="annuler" value="Annuler" id="annule"><br/> 
    </form>
</center>    
</body>
</html>