<?php

var_dump($GET["user_id"]);
$new_user_id = ["new_user_id"];

    // on se connecte à notre base
    require ("database.php");


    // lancement de la requête
    $req = $db->prepare('SELECT * FROM users WHERE pseudo = :pseudo');
    $req->bindParam(":id" , $_GET["user_id"]);
    $req->bindParam(":id" , $_GET["user_id"]);

   

    // execute
    $req->execute(array('user_id'=>$new_user_id));
    $id=$req->fetchColumn();    
    echo'<p>Votre profil a été modifié avec succès !</p>';
    echo'<p>Cliquez <a href="../profils.php">ici</a> pour revenir à la page d accueil</p>';
    var_dump ($GET["new_user_id"]);
    





