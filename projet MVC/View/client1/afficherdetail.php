<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
<nav class="navbar navbar-expand-lg" style="background-color: #E1FA79;">
    <div class="container-fluid">
        <a class="navbar-brand " href="index.php">Paranet</a>
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
        </div>
    </div>
    </nav>
    <nav class="navbar navbar-expand-lg" style="background-color: #BDE713;">
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
<h1 align="center">Détails produit</h1>
<div class="container" >
  <div class="row">
    <div class="card mb-3">
    <div class="row g-0">
    <div class="col-md-4">
      <img src="public/img/<?=$produit->getFileAffiche()?>" class="img-fluid rounded-start" >
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h2> <?=$produit->getNomProduit()?></h2>
        <p class='card-text'><?=$produit->getDescriptionProduit()?>  </p>
        <p class='card-text'>Prix :<?=$produit->getPrixProduit()?> Dinars </p>
       <a href="" class ="btn btn-success">Ajouter au panier </a>
      </div>
    </div>
  </div>
</div>
 </div>
</form>
</html>