<?php
  include 'functions.php';
  include 'function-login.php'
  
//Fonction pour créer un nouvel article :
  function newArticle($titre, $contenu, $categorie)
  {
    queryDB('INSERT INTO Article(contenu_Article, date_parution_Article, nom_Article)
    		 VALUES (\"'.$contenu.'\", 1, \"'.$titre.'\", \".'$categorie'.\", \"'.GetUsername().'\")');
  }
  
//Fonction pour éditer un article :
  function editArticle($titre, $newct)
  {
    queryDB('UPDATE Article SET contenu_Article =\"'.$newct.'\" WHERE nom_Article = \"'.$titre.'\"');
  }
  
//Fonction pour retourner le contenu d'un article.
  function getArticleCT($id)
  {
    return queryDB('SELECT contenu_Article FROM Article WHERE id_Article = \"'.$id.'\"');
  }
  
//Fonction pour supprimer un article :
  function deleteArticle($id)
  {
    queryDB('DELETE FROM Article WHERE id_Article = \"'.$id.'\"');
  }
?>
