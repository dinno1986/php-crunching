<?php

$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);

//exercice1
$resultat=count($dico);
echo "le dictionnaire contient :"." ".$resultat." "."mots".'<br/>';

//exercice2
$compteur=array();
foreach ($dico as $result) {
	if (strlen($result) ==15){
		array_push($compteur, $result);
	}
}
echo count ($compteur)." "."mots de 15 lettres".'<br/>';

//exercice3
$word_w=array();
foreach ($dico as $result2) {
	if (strpos($result2,"w")!==false) {
		array_push($word_w,$result2);
	}
}
echo count($word_w);








?>