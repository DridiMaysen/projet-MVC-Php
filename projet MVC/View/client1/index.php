<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paranet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="bg-blue">
  <header>
<nav class="navbar navbar-expand-lg" style="background-color: #C0FFD5;">
    <div class="container-fluid">
        <a class="navbar-brand " href="index.php"><img src="public/img/logo.jpg" ></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php foreach ($marques as $m){?>
        <li class="nav-item">
          <a class="nav-link" href="index.php?controller=Home&action=index&id_marque=<?=$m->getIdMarque()?>"><?=$m->getNomMarque()?></a><?php }?>
        </li>
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="connexion.php">Admin</a>
            </li>
        </ul>
        <div class='icones'>
          <a href="index.php?controller=Panier&action=index" class="fas fa-shopping-cart" style="color:#000000;"><img src="public/img/cart.png" style="width:50px;height:50px;" >panier</a>
          <a href="index.php?controller=Home&action=login" class="fas fa-user" style="color:#000000;"><img src="public/img/userr.png" style="width:50px;height:50px;" > se connecter</a>
          <a href="index.php?controller=Home&action=New" class="fas fa-user" style="color:#000000;"><img src="public/img/userr.png" style="width:50px;height:50px;" > s'inscrire</a>
        </div>
        </div>
    </div>
    </nav>
        </header>
    <nav class="navbar navbar-expand-lg" style="background-color: #FFC0CB;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Categorie</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php foreach ($categories as $c){?>
        <li class="nav-item">
          <a class="nav-link" href="index.php?controller=Home&action=index&id_cat=<?=$c->getIdCategorie()?>"><?=$c->getNomCategorie()?></a><?php }?>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="public/img/i1.png" class="d-block w-100" >
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="public/img/i2.png" class="d-block w-100" >
    </div>
    <div class="carousel-item">
      <img src="public/img/i3.png" class="d-block w-100" >
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


    <div class="container">
        <div class="row">
        <?php foreach($produits as $p){?>
        <div  class="col-4">
    <div class="card" >
  <img src="public/img/<?php echo $p->getFileAffiche() ?>" class="card-img-top" >
  <form action="index.php?controller=Home&action=ajouterAuPanier" method ="post">
  <div class="card-body">
    <h5 class="card-title"><?php echo $p->getNomProduit() ?></h5>
    <input type="hidden" name="nomProduit" value="<?php echo $p->getNomProduit() ?>">
    <p class="card-text"><?php echo $p->getDescriptionProduit() ?></p>
    <input type="hidden" name="prixProduit" value="<?php echo $p->getPrixProduit() ?>">
    <input type="hidden" name="image" value="<?php echo $p->getFileAffiche() ?>">
    <input type="submit" class ="btn btn-warning" value="Ajouter au panier">
    <a href="index.php?controller=Home&action=afficherDetail&id=<?php echo $p->getIdProduit() ?>" class="btn btn-success">Afficher détails</a>

  </div>
  </form>
  </div>
  </div>
  
  <?php } ?>
  </div>
</div>
</body>
</html>