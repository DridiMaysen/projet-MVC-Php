<?php include __DIR__.'/../header.php';?>
    <div class="container">
    <form action="index.php?controller=Produit&action=update" method="post">
        <input type="hidden" name="idProduit" value="<?=$produit->getIdProduit()?>">
        <div>
            <label for="nom">nom produit</label>
            <input class="form-control" type="text" name="nomProduit" value="<?=$produit->getNomProduit()?>"/>
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" class="form-control" name="descriptionProduit" value="<?=$produit->getDescriptionProduit()?>"/>
        </div>
        <div>
            <label for="id_marque">Marque</label>
            <select class="form-select" name="idMarque" >
                <?php foreach($marques as $m) { ?>
                    <option value="<?=$m->getIdMarque()?>" <?php if($produit->getIdMarque()==$m->getIdMarque()) echo 'selected' ;?>><?=$m->getNomMarque()?></option>
                <?php } ?>
            </select>
        </div>
        <div>
                <label for="categorie">Catégorie</label>
                <select class="form-select" name="idCategorie" >
                <?php foreach($categorie as $c) { ?>
                    <option value="<?=$c->getIdCategorie()?>" <?php if($produit->getIdCategorie()==$c->getIdCategorie()) echo 'selected' ;?>><?=$c->getNomCategorie()?></option>
                <?php } ?>
            </select>
            </div>
        <div>
            <label for="affiche">Affiche</label>
            <input type="text" class="form-control" name="fileAffiche" value="<?=$produit->getFileAffiche()?>"/>
        </div>
        <div>
            <label for="producteur">Prix</label>
            <input type="text" class="form-control" name="prixProduit" value="<?=$produit->getPrixProduit()?>"/>
        </div>
        <div>
            <label for="description">Quantité</label>
            <textarea class="form-control" name="quantite" rows="2"><?=$produit->getQuantite()?></textarea>
        </div>
        <button class="btn btn-success" type="submit">Envoyer</button>
    </form>
    </div>
</body>
</html>