<?php 
echo "delete user script";


    // on se connecte à notre base
    require ("database.php");


    // lancement de la requête
    $req = $db->prepare("DELETE FROM users WHERE id=:id");
    $req->bindParam(":id" , $_GET["user_id"]);


    // execute
    $req->execute();

    header("location:../profils.php");

