<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire la badword passata in GET con tre *. -->

<?php 
$badword = $_GET['expl-word'];
$explicit_lyric = "And you know we don't give a fuck it's not your birthday";
$lyric_length = strlen($explicit_lyric);
$censored_lyric = str_replace($badword, "***", $explicit_lyric);

echo "VERSIONE ESPLICITA:";
echo '<br>';
echo $explicit_lyric;
echo '<br>';
echo "La frase è lunga: $lyric_length caratteri";
echo '<br>';
echo "VERSIONE CENSURATA:";
echo '<br>';
echo $censored_lyric;
echo '<br>';
echo "La frase è lunga: " .strlen($censored_lyric) ." caratteri";


// var_dump($censored_lyric);
?>