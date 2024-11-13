<?php include __DIR__.'/../header.php';?>
    <div class="container">
        <form action="index.php?controller=Client&action=store" method="post" enctype="multipart/form-data"> 
            <div>
                <label for="nom">nom client</label>
                <input class="form-control" type="text" name="nomClient"/>
            </div>
            
            <div>
                <label for="prenom">prenom client</label>
                <input type="text" class="form-control" name="prenomClient"/>
</div>
            
            <div>
                <label for="email">Email</label>
                <input type="text" class="form-control" name="emailClient"/>
            </div>
            <div>
                <label for="adresse">Adresse</label>
                <input type="text" class="form-control" name="addClient"/>
            </div>
            <div>
                <label for="telephone">Telephone client</label>
                <input type="text" class="form-control" name="teleClient"/>
            </div>
            <button class="btn btn-success" type="submit">Envoyer</button>
        </form>
    </div>
</body>
</html>