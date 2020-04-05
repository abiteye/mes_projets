<?php
    #fonction pour valider une phrase qui est la F1.
    function valider_une_phrase($texte) {
        if(preg_match("/^(\s)*[A-Z].+[.?!](\s)*$/",$texte)) 
        {
             return true;
        }
        else {
             false; 
        }
    }
    #fonction pour decouper un texte qui est la f2.
    function tronquer($texte) {
            $ligne=preg_split("/(?<=[.?!])\s*(?=[a-z])/i", $texte);
             echo '<pre>';
             echo '</pre>';
             return $ligne;
    }
    #fonction pour supprimer des espaces qui est la f3. 
    function supprimer_espaces($texte){
        $texte=preg_replace('/\s\s+/', '',$texte);
        $texte=preg_replace('/^\s+/', '',$texte);        
        $texte=preg_replace('/\s+$/', '',$texte);
             return $texte;       
    }
?>