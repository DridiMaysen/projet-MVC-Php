<?php include __DIR__.'/../header.php';?>
    <div class="container">
        <form action="index.php?controller=Fournisseur&action=store" method="post" enctype="multipart/form-data"> 
            <div>
                <label for="nom">nom </label>
                <input class="form-control" type="text" name="nomFournisseur"/>
            </div>
            
            <div>
                <label for="prenom">prenom </label>
                <input type="text" class="form-control" name="prenomFournisseur"/>
            </div>
            
            <div>
                <label for="email">Email</label>
                <input type="text" class="form-control" name="emailFournisseur"/>
            </div>
            <div>
                <label for="telephone">Telephone </label>
                <input type="text" class="form-control" name="teleFournisseur"/>
            </div>
            <button class="btn btn-success" type="submit">Envoyer</button>
        </form>
    </div>
</body>
</html>