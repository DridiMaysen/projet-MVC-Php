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
    <a class="btn btn-primary" href="index.php?controller=Marque&action=create">Ajouter</a>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>nom Marque</th>
        </tr>
        <?php foreach($marques as $m){ ?>
            <tr>
                <td><?=$m->getIdMarque()?></td>
                <td><?=$m->getNomMarque()?></td>
                <td><a class="btn btn-success" href="index.php?controller=Marque&action=edit&id=<?=$m->getIdMarque()?>">Modifier</a> | <a class="btn btn-danger" href="index.php?controller=Marque&action=destroy&id=<?=$m->getIdMarque()?>">Supprimer</a></td>
            </tr>
        <?php } ?>
    </table>
    </div>
</body>
</html>