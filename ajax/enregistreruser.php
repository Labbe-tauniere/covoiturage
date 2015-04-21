<?php
$nom = $_REQUEST['nom'];
$prenom = $_REQUEST['prenom'];
$mail = $_REQUEST['mail'];
$type = $_REQUEST['type'];
$tel = $_REQUEST['tel'];
// enregistrerEnBase(...); pas dans cette itération
// générer le nom de user : à faire
// générer le mdp travail à faire

$charset = array();
$i = 0;


//On creer un tableau avec toutes les lettres minuscule

for ($ch = 'a'; ord($ch) + $i <= ord('z'); ++$i)
{
	$charset[$i] = chr(ord($ch) + $i);
}


// Puis les lettres majuscules

for ($ch = 'A', $cnt = 0; ord($ch) + $cnt <= ord('Z'); ++$i, ++$cnt)
{
	$charset[$i] = chr(ord($ch) + $i);
}


// Et un autre avec les chiffres

for ($cnt = $i; $i - $cnt < 10; ++$i)
{
	$charset[$i] = $i - $cnt;
}
--$i;


// On creer un mot de passe aléatoire grace aux tableau précédent

$mdp = "".$charset[rand(0, $i)].$charset[rand(0, $i)].$charset[rand(0, $i)].$charset[rand(0, $i)];



echo " login : ".$login."<br>Mot de passe : ".$mdp."<br>Merci de votre visite et à bientôt";
?>
