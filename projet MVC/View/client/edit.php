<?php include __DIR__.'/../header.php';?>
    <div class="container">
    <form action="index.php?controller=Client&action=update" method="post">
        <input type="hidden" name="idClient" value="<?=$client->getIdClient()?>">
        <div>
            <label for="nom">Nom cLient</label>
            <input class="form-control" type="text" name="nomClient" value="<?=$client->getNomClient()?>"/>
        </div>
       
        <div>
            <label for="prenom">prenom client</label>
            <input type="text" class="form-control" name="prenomClient" value="<?=$client->getPrenomClient()?>"/>
        </div>
        
        <div>
            <label for="email">Email</label>
            <input type="text" class="form-control" name="emailClient" value="<?=$client->getEmailClient()?>"/>
        </div>
        <div>
            <label for="adresse">Adresse</label>
            <input type="text" class="form-control" name="addClient" value="<?=$client->getAddClient()?>"/>

        </div>
        <label for="tele">Telephone</label>
            <input type="text" class="form-control" name="teleClient" value="<?=$client->getTeleClient()?>"/>
            </div>
            <button class="btn btn-success" type="submit">Envoyer</button>
    </form>
    </div>
</body>
</html>