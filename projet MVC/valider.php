
<?php require_once "model/Commande.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 align="center"> Votre Commande est bien passée</h2>
    <?php 
    Commande::create($_POST);
    ?>
    <a href="index.php?controller=Home&action=index"> retour vers la page d'acceuill</a>
</body>
</html>