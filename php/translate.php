<?php 

$dico=['Cat'=>'Chat','Soccer'=>'Foot','Duck'=>'Canard','Surf'=>'Surf'];

$mot = $_GET['mot'];

// foreach ($dico as $words => $mots) {
// 	echo $mots;
// }

echo $dico[$mot]; // traduction