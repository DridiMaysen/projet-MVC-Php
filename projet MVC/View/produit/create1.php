<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php?controller=Produit&action=store" method="post"> 
        <div>
            <label for="nom">Nom Produit</label>
            <input type="text" name="nomProduit"/>
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="descriptionProduit"/>
        </div>
        <div>
            <label for="id_marque">Marque</label>
            <select name="idMarque" >
                <?php foreach($marques as $m) { ?>
                    <option value="<?=$m->getIdMarque()?>"><?=$m->getNomMarque()?></option>
                <?php } ?>
            </select>
        </div>
        <div>
                <label for="categorie"> Catégorie</label>
                <select name="idCategorie" >
                <?php foreach($categories as $c) { ?>
                    <option value="<?=$c->getIdCategorie()?>"><?=$c->getNomCategorie()?></option>
                <?php } ?>
            </select>
            </div>
        <div>
            <label for="affiche">Affiche</label>
            <input type="text" name="fileAffiche"/>
        </div>
        
        <div>
            <label for="prix">prix</label>
            <input type="text" name="prixProduit"/>
        </div>
        <div>
            <label for="quantite">quantite</label>
            <input type="text" name="quantite"/>
        </div>
        
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>