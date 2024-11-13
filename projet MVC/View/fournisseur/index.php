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
    <a class="btn btn-primary" href="index.php?controller=Fournisseur&action=create">Ajouter</a>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>nom</th>
            <th>prenom</th>
            <th>email</th>
            <th>telephone</th>
        </tr>
        <?php foreach($fournisseur as $f){ ?>
            <tr>
                <td><?=$f->getIdFournisseur()?></td>
                <td><?=$f->getNomFournisseur()?></td>
                <td><?=$f->getPrenomFournisseur()?></td>
                <td><?=$f->getEmailFournisseur()?></td>
                <td><?=$f->getTeleFournisseur()?></td>
                <td><a class="btn btn-success" href="index.php?controller=Fournisseur&action=edit&id=<?=$f->getIdFournisseur()?>">Modifier</a> | <a class="btn btn-danger" href="index.php?controller=Fournisseur&action=destroy&id=<?=$f->getIdFournisseur()?>">Supprimer</a></td>
            </tr>
        <?php } ?>
    </table>
    </div>
</body>
</html>