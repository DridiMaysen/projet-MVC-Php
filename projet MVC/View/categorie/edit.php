<?php include __DIR__.'/../header.php';?>
    <div class="container">
    <form action="index.php?controller=Categorie&action=update" method="post">
        <input type="hidden" name="idCategorie" value="<?=$categorie->getIdCategorie()?>">
        <div>
            <label for="nom">Nom Categorie</label>
            <input class="form-control" type="text" name="nomCategorie" value="<?=$categorie->getNomCategorie()?>"/>
        </div>
       
            <button class="btn btn-success" type="submit">Envoyer</button>
    </form>
    </div>
</body>
</html>