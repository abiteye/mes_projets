<?php
#1-Fonction qui teste si un caractere est minuscule.

function is_lower($char) {
    return ($char>='a' && $char<='z');
}
#2-Fonction qui teste si un caractere est majuscule.

function is_uper($char) {
    return ($char>='A' && $char<='Z');
}
#3-Fonction qui teste si un caractere est un entier positif.
function is_entier($char) {
    return ($char>='0' && $char <='9');
    
}
#4-fonction qui teste la taille d'un tableau ou chaine de caractere.
function my_strlen($chaine) {
    $i=0;
    while(!empty($chaine[$i])) {
        $i++;
    }
    return $i;
}
#5-fonction qui teste si un mot est valide. 
function is_valide($chaine) {
    for($i=0; $i < my_strlen($chaine); $i++) {
        if(!(is_lower($chaine[$i])) && !(is_uper($chaine[$i]))){ 
            return false;
        }   
    }
    return true;
}
#6-fonction qui teste si un nombre  est positif ou pas
function is_number($nombre){
    for ($i=0; $i < my_strlen($nombre); $i++) { 
        if (!(is_entier($nombre[$i]))) {
            return false;
        }
    }
    return ($nombre>0); 
} 

#7-fonction qui teste si un caractere est dans une chaine
function is_car_in_string($char, $mot) {
    for($i=0; $i < my_strlen($mot); $i++) {
        if($mot[$i]==$char) {
            return true;
        }
    }
    return false;
}
#8-fonction qui compte le nombre de fois qu'un caractere est present dans un mot
function count_char_in_string($char,$mot){
    $cpt=0;
    for ($i=0; $i < my_strlen($mot); $i++) { 
        if ($mot[$i]==$char) {
            $cpt++; 
        }
    }
    return $cpt;
} 

?>

