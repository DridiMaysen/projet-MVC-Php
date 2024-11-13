<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<h2 align="center" style="color:#0000FF;">Veuillez remplir cette formulaire</h2>
<form class="row g-3" action="valider.php" method="post">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label" style="color:#800000;">Nom</label>
    <input type="text" class="form-control" name="nomClient">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label" style="color:#800000;">Prénom</label>
    <input type="text" class="form-control" name="prenomClient">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label" style="color:#800000;">Adresse email</label>
    <input type="email" class="form-control"name="addEmail" >
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label" style="color:#800000;">Adresse </label>
    <input type="text" class="form-control" name="addresse" >
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label"style="color:#800000;">Ville</label>
    <input type="text" class="form-control" name="ville">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label" style="color:#800000;" >Mode de paiement</label>
    <select id="inputState" class="form-select" name="mode">
      <option selected>Cash à la livraison</option>
      <option>Par chéque</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label" style="color:#800000;" >Numéro de téléphone</label>
    <input type="text" class="form-control" name="numero">
    <label for="">Assurez-vous que votre télèphone est joigniable</label>
  </div>
  <div class="col-12">
    <label for="total" style="color:#800000;">Total à Payer</label>
    <input type="text"class="form-control" name="total" value="<?= $_POST['total']?> Dinars" >
  </div>
  <div class="col-12">
    <p align="center"><button type="submit" class="btn btn-success" >Valider la Commande</button></p>
  </div>
</form>