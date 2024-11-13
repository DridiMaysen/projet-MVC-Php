<?php include __DIR__.'/../header.php';?>
    <div class="container">

    
    <?php if(isset($_SESSION['error'])) { ?>
        <div class="alert alert-danger" role="alert">
  <?=$_SESSION['error']?>
</div>
    <?php 
    unset($_SESSION['error']);
    } ?>
    <?php if(isset($_SESSION['success'])) { ?>
        <div class="alert alert-success" role="alert">
  <?=$_SESSION['success']?>
</div>
    <?php 
    unset($_SESSION['success']);
    } ?>
    <a class="btn btn-primary" href="index.php?controller=Produit&action=create">Ajouter</a>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Nom Produit</th>
            <th>Description Produit</th>
            <th>idMarque</th>
            <th>idCatégorie</th>
            <th>Affiche</th>
            <th>Prix Produit</th>
            <th>Quantité</th>
        </tr>
        <?php foreach($produits as $p){ ?>
            <tr>
                <td><?=$p->getIdProduit()?></td>
                <td><?=$p->getNomProduit()?></td>
                <td><?=$p->getDescriptionProduit()?></td>
                <td><?=$p->getIdMarque()?></td>
                <td><?=$p->getIdCategorie()?></td>
                <td><img src="public/img/<?=$p->getFileAffiche()?>" width="200"/></td>
                <td><?=$p->getPrixProduit()?></td>
                <td><?=$p->getQuantite()?></td>
                <td><a class="btn btn-success" href="index.php?controller=Produit&action=edit&id=<?=$p->getIdProduit()?>">Modifier</a> | <a class="btn btn-danger" href="index.php?controller=Produit&action=destroy&id=<?=$p->getIdProduit()?>">Supprimer</a></td>
            </tr>
        <?php } ?>
    </table>
    </div>
</body>
</html>