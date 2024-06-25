<?php
 require("../config/commandes.php");

?>
<!doctype html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        ><title></title>
    </head>
    <body>

    <div class="album py-5 bg-body-tertiary">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">titre l'image</label>
    <input type="name" class="form-control"  name="image" required>

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nom du produit</label>
    <input type="text" class="form-control" name="nom"  required>
  </div>
  <label for="exampleInputPassword1" class="form-label">prix</label>
    <input type="number" class="form-control" name="prix"required>
  </div>

  <label for="exampleInputPassword1" class="form-label">titre</label>
  <textarea  class="form-control" name="desc"required></textarea>

  <button type="submit" name="valider" class="btn btn-primary">Ajouter un Nouveau produit</button> 
  </div>
</form>
      </div>
    </div>
 </div>
    
    </body>
</html>
<?php 
 if(isset($_post['valider'])){

 if(isset($_post['image']) AND isset($_post['nom']) AND isset($_post['prix']) And isset($_post['desc']))
 {
    if(!empty($_post['image']) AND !empty($_post['nom']) AND !empty($_post['prix']) And !empty($_post['desc']))
   {
    $image = htmlspecialchars($_post['image']);
    $nom = htmlspecialchars($_post['nom']);
    $prix = htmlspecialchars($_post['prix']);
    $desc = htmlspecialchars($_post['desc']);

    try{
        ajouter($image, $nom, $prix, $desc);
    }catch(Exception $e){
    $e->getMessage();
    }

   }
 }
 }