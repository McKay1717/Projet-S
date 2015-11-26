<?php
    include 'functions.php';
    include 'function-login.php';


    //Fonction pour créer un nouvel article :
    function newArticle($titre, $contenu, $categorie)
    {
        // Si un utilisateur est connecté
        if (isLoged())
        {
            // Requête pour inserer un article dans la table article
            // (contenu, nom, catégorie, auteur)
            $req = 'INSERT INTO Article
                    (
                        contenu_Article,
                        nom_Article,
                        Categorie_Article,
                        Auteur_Article
                    )
                    VALUES
                    (
                        "'.$contenu.'",
                        "'.$titre.'",
                        "'.$categorie.'",
                        "'.GetUsername().'"
                    )';

            queryDB($req);
        }
    }


    //Fonction pour éditer un article d'après son id:
    function editArticle($id_article, $newct)
    {
        // Si un utilisateur est connecté
        if (isLoged())
        {
            // Met à jour le contenu d'un article dans la
            // table article depuis son id
            $req = 'UPDATE Article
                    SET contenu_Article = "'.$newct.'"
                    WHERE id_Article = "'.$id_article.'"';

            queryDB($req);
        }
    }


    //Fonction pour retourner le contenu d'un article depuis son id.
    function getArticleCT($id_article)
    {
        // Requete pour récuperer le contenu d'un article par son id
        $req = 'SELECT contenu_Article
                FROM Article
                WHERE id_Article = "'.$id_article.'"';

        return queryDB($req);
    }


    //Fonction pour retourner le titre d'un article depuis son id.
    function getArticleTitle($id_article)
    {
        // Requete pour récuperer le titre d'un article par son id
        $req = 'SELECT nom_Article
                FROM Article
                WHERE id_Article = "'.$id_article.'"';

        return queryDB($req);
    }


    //Fonction pour retourner la date d'un article depuis son id.
    function getArticleDate($id_article)
    {
        // Requete pour récuperer la date d'un article par son id
        $req = 'SELECT date_parution_Article
                FROM Article
                WHERE id_Article = "'.$id_article.'"';

        return queryDB($req);
    }


    //Fonction pour retourner l'auteur d'un article depuis son id.
    function getArticleAuthor($id_article)
    {
        // Requete pour récuperer l'auteur d'un article par son id
        $req = 'SELECT Auteur_Article
                FROM Article
                WHERE id_Article = "'.$id_article.'"';

        return queryDB($req);
    }


    //Fonction pour supprimer un article :
    function deleteArticle($id_article)
    {
        // Si un utilisateur est connecté
        if (isLoged())
        {
            // Requete pour effacer un article par son id
            $req = 'DELETE FROM Article
                    WHERE id_Article = "'.$id_article.'"';

            queryDB($req);
        }
    }