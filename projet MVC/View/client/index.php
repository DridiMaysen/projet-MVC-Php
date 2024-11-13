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
    <a class="btn btn-primary" href="index.php?controller=Client&action=create">Ajouter</a>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>nom</th>
            <th>prenom</th>
            <th>email</th>
            <th>telephone</th>
            <th>adresse</th>
        </tr>
        <?php foreach($clients as $c){ ?>
            <tr>
                <td><?=$c->getIdClient()?></td>
                <td><?=$c->getNomClient()?></td>
                <td><?=$c->getPrenomClient()?></td>
                <td><?=$c->getEmailClient()?></td>
                <td><?=$c->getTeleClient()?></td>
                <td><?=$c->getAddClient()?></td>
                <td><a class="btn btn-success" href="index.php?controller=Client&action=edit&id=<?=$c->getIdClient()?>">Modifier</a> | <a class="btn btn-danger" href="index.php?controller=Client&action=destroy&id=<?=$c->getIdClient()?>">Supprimer</a></td>
            </tr>
        <?php } ?>
    </table>
    </div>
</body>
</html>