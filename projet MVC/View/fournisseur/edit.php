<?php include __DIR__.'/../header.php';?>
    <div class="container">
    <form action="index.php?controller=Fournisseur&action=update" method="post">
        <input type="hidden" name="idFournisseur" value="<?=$fournisseur->getIdFournisseur()?>">
        <div>
            <label for="nom">Nom </label>
            <input class="form-control" type="text" name="nomFournisseur" value="<?=$fournisseur->getNomFournisseur()?>"/>
        </div>
       
        <div>
            <label for="prenom">prenom </label>
            <input type="text" class="form-control" name="prenomFournisseur" value="<?=$fournisseur->getPrenomFournisseur()?>"/>
        </div>
        
        <div>
            <label for="email">Email</label>
            <input type="text" class="form-control" name="emailFournisseur" value="<?=$fournisseur->getEmailFournisseur()?>"/>
        </div>
        <label for="tele">Telephone</label>
            <input type="text" class="form-control" name="teleFournisseur" value="<?=$fournisseur->getTeleFournisseur()?>"/>
            </div>
            <button class="btn btn-success" type="submit">Envoyer</button>
    </form>
    </div>
</body>
</html>