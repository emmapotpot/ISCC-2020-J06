<?php
$str1="La maîtrise des fondamentaux du code et de la programmation dans les domaines du business, du marketing et de la communication est un avantage sérieux et utile";
echo "<p>La chaine str1 contient" . $str1en($str1) . "caratères. </p>";
print_r(str_word_count($str1));
echo "<p>La chance str1 contient" . $str1_word_count($str1) . "mots. </p>";
$str1= strtolower($strl);
echo "<p>" . $str1 . "</p>";
$str1 = strtoupper($str1);
echo "<p>" . $str1 . "</p>";
$shuffled = str_shuffle($str1);
echo "<p>" . $str1 . "</p>";
echo "<p>" . str_replace("la", "LA", $str1) . "</p>";
echo "<p>" . substr($str1 0, 127) . "</p>";
?>