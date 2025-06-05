<?php
// Définir le type de contenu comme image GIF
header('Content-Type: image/gif');

// Lire et afficher le fichier GIF
readfile('bienvenue.gif');
exit;
?>
