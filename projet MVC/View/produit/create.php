<?php include __DIR__.'/../header.php';?>
    <div class="container">
        <form action="index.php?controller=Produit&action=store" method="post" enctype="multipart/form-data"> 
            <div>
                <label for="nom">nom produit</label>
                <input class="form-control" type="text" name="nomProduit"/>
            </div>
            <div>
                <label for="description">Description</label>
                <input type="text" class="form-control" name="descriptionProduit"/>
            </div>
            <div>
                <label for="idMarque">id Marque</label>
                <select class="form-select" name="idMarque" >
                    <?php foreach($marques as $m) { ?>
                        <option value="<?=$m->getIdMarque()?>"><?=$m->getNomMarque()?></option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <label for="categorie">id Catégorie</label>
                <select class="form-select" name="idCategorie" >
                    <?php foreach($categories as $c) { ?>
                        <option value="<?=$c->getIdCategorie()?>"><?=$c->getNomCategorie()?></option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <label for="affiche">Affiche</label>
                <input type="file" name="fileAffiche"/>
            </div>
            
            <div>
                <label for="prix">Prix</label>
                <input type="text" class="form-control" name="prixProduit"/>
            </div>
            <div>
                <label for="quantite">Quantite</label>
                <input type="text" class="form-control" name="quantite"/>
            </div>
            
            <button class="btn btn-success" type="submit">Envoyer</button>
        </form>
    </div>
</body>
</html>