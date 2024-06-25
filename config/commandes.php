<?php

function ajouter( $image, $nom, $prix, $desc )
{
 if(require("connexion.php"))
 {
  $req = $access-> prepare("INSERT INTO produits(image, nom, prix, description )  VALUES ($image, $nom, $prix, $desc)");
  $req->execute(array($image, $nom, $prix, $desc));
  $req->closeCusor();
 }
}
function afficher()
{
    if(require("connexion.php"))
    {
      $req= $access-> prepare("SELECT * FROM produits ORDER BY id DESC") ;
      
      $req->execute();
      
      $data = $req->fetchAll( PDO::FETCH_OBJ);
       
      return $data; 
      $req->closeCusor();
    }
}
  function supprimer($id)
  {
    if(require("connexion.php"))
    {
        $req= $access-> prepare("DELETE * FROM porduits WHERE id=?");
        $req->execute(array($id));
    }
  }
?>