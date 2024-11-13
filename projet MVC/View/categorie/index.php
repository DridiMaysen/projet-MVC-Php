<?php include __DIR__.'/../header.php';
?>
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
    <a class="btn btn-primary" href="index.php?controller=Categorie&action=create">Ajouter</a>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>nom Categorie</th>
        </tr>
        <?php foreach($categories as $c){ ?>
            <tr>
                <td><?=$c->getIdCategorie()?></td>
                <td><?=$c->getNomCategorie()?></td>
                <td><a class="btn btn-success" href="index.php?controller=Categorie&action=edit&id=<?=$c->getIdCategorie()?>">Modifier</a> | <a class="btn btn-danger" href="index.php?controller=Categorie&action=destroy&id=<?=$c->getIdCategorie()?>">Supprimer</a></td>
            </tr>
        <?php } ?>
    </table>
    </div>
</body>
</html>