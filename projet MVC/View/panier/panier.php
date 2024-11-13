<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
    <div class="container">
        <h1 align="center">Mon panier</h1>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Nom Produit</th>
            <th>Prix Produit</th>
            <th>image</th>
            <th>quantité</th>
        </tr>
        <?php $total=0;?>
        <?php foreach($panier as $p){ ?>
            
        <tr>
                <input type="hidden" name="nomProduit" value="<?=$p->getNomProduit()?> ">
                <input type="hidden" name="prixProduit" value="<?=$p->getPrixProduit()?> ">
                <input type="hidden" name="image" value="<?=$p->getImage()?> ">
                <td><?=$p->getId()?></td>
                <td><?=$p->getNomProduit()?></td>
                <td><?=$p->getPrixProduit()?></td>
                <td><img src="public/img/<?=$p->getImage()?>" width="200"/></td>
                <td><input type="number" min="1" max="20" name="quantite" value="1"></td>
                <td><a class="btn btn-danger" href="index.php?controller=Panier&action=destroy&id=<?=$p->getId()?>">Supprimer</a></td>
                <?php 
                $total=$total+$p->getPrixProduit();?>
        </tr>
           
            
        <?php } ?>
         
    </table>
    <h3 align="right"><b>Total :<?=$total ?> Dinars</b></h3>
   <form action="commander.php" method="post">
    <input type="hidden" value="<?=$total ?>" name="total">
    <p align="center"><input type="submit" value="Commander" class="btn btn-success" ></p>
   </form>
    </div>
</body>
</html>