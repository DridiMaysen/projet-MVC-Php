<?php include __DIR__.'/../header.php';?>
    <div class="container">
        <form action="index.php?controller=Marque&action=store" method="post" enctype="multipart/form-data"> 
            <div>
                <label for="nom">nom Marque</label>
                <input class="form-control" type="text" name="nomMarque"/>
            </div>
            <button class="btn btn-success" type="submit">Envoyer</button>
        </form>
    </div>
</body>
</html>