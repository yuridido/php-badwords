<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relativa lunghezza
e sostituire la badword passata in GET con tre *. -->

<?php
// creo una variabile per il paragrafo e ne salvo anche la lunghezza in una variabile
$paragrafo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.';
$lunghezza = strlen($paragrafo);
// le stampo
var_dump($paragrafo . "<br>lunghezza: " . $lunghezza . "<br>" );

// salvo la variabile di confronto col get ed effettuo il confronto con str replace
$badword = $_GET['parola'];
$nuovoParagrafo = str_replace($badword, '***', $paragrafo);

// infine stampo il paragrafo modificato
var_dump($nuovoParagrafo);


?>
