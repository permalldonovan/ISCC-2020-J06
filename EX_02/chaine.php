<?php
$phrase='La maîtrise des fondamentaux du code et de la programmation dans les domaines du business, du marketing et de la communication est un avantage sérieux et utile.';
$str1 = strlen($phrase);{
    
    echo "<p>La chaîne {$phrase} contient {$str1} caractere</p>";

}
$str1 = str_word_count($phrase);{

    echo "<p>La chaîne {$phrase} contient {$str1} caractere</p>";
}
$str1 = strtolower($phrase);{
    echo "<p>{$str1}</p>";
}
$str1 = strtoupper($phrase);{
    echo "<p>{$str1}</p>";
}
$str1 = str_shuffle($phrase);{
    echo "<p>{$str1}</p>";
}
$str1 = str_replace('la', 'LA', $phrase);{
    echo "<p>{$str1}</p>";
}
$str1 = rtrim('La maîtrise des fondamentaux du code et de la programmation dans les domaines du business, du marketing et de la communication');{
    echo "<p>{$str1}</p>";
}

?>