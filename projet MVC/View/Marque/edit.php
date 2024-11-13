<?php include __DIR__.'/../header.php';?>
    <div class="container">
    <form action="index.php?controller=Marque&action=update" method="post">
        <input type="hidden" name="idMarque" value="<?=$marque->getIdMarque()?>">
        <div>
            <label for="nom">Nom Marque</label>
            <input class="form-control" type="text" name="nomMarque" value="<?=$marque->getNomMarque()?>"/>
        </div>
       
            <button class="btn btn-success" type="submit">Envoyer</button>
    </form>
    </div>
</body>
</html>