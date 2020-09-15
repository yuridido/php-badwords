<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relativa lunghezza
e sostituire la badword passata in GET con tre *. -->

<?php
$paragrafo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.';
$lunghezza = strlen($paragrafo);
var_dump($paragrafo . "<br>lunghezza: " . $lunghezza . "<br>" );

$badword = $_GET['parola'];

$nuovoParagrafo = str_replace($badword, '***', $paragrafo);

var_dump($nuovoParagrafo);


?>
