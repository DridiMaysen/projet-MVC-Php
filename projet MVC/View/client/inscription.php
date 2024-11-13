<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<div class="container_f"> 
        <form action="index.php?controller=Home&action=save" method="post"   >
            <h3>Inscription</h3><hr><br>

            <div class="form-group">
                <label for="nomClient"><b>Nom</b></label>
                <input type="text"  name="nomClient" class="form-control" id="nomClient" aria-describedby="emailHelp" placeholder="votre nom" required>
                 <input type="hidden" name="idClient">
            </div><br/>

            <div class="form-group">
                <label for="prenomClient"><b>Prénom</b></label>
                <input type="text"  name="prenomClient" class="form-control" id="prenomClient" aria-describedby="emailHelp" placeholder="votre prenom" required>
            </div><br/>

            <div class="form-group">
                <label for="emailClient"><b>Email</b></label>
                <input type="email"  name="emailClient" class="form-control" id="emailClient" aria-describedby="emailHelp" placeholder="votre adresse mail" required>
            </div><br/>
            
            <div class="form-group">
                <label for="adresseClient"><b>Adresse</b></label>
                <textarea class="form-control" name="adresseClient" id="adresseClient" rows="3" placeholder="votre adresse" required></textarea>
            </div><br>

            <div class="form-group">
                <label for="mdpClient"><b>Mot de passe</b></label>
                <input type="password"  name="mdpClient" class="form-control" id="mdpClient" aria-describedby="emailHelp" placeholder="votre mot de passe" required>
            </div><br/>

            <div class="form-group">
                <label for="ConfirMdpClient"><b>Confirmer mot de passe</b></label>
                <input type="password"  name="ConfirmMdpClient" class="form-control" id="ConfirmMdpClient" aria-describedby="emailHelp" placeholder="votre mot de passe" required>
            </div><br/>

            <button type="submit" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                S'inscrire
            </button> 
        </form>
        <br><a href="index.php?controller=Home&action=login"><b>Déjà incris</b></a>
    </div>
</body>
</html>