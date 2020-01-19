<?php

    var_dump($_POST["newpseudo"]);

    // on se connecte à notre base
    require ("database.php");


    // lancement de la requête
    $req = $db->prepare("SELECT * FROM .users WHERE id=:id");
    $req->bindParam(":id" , $_POST["newpseudo"]);


    if(isset($_POST['newpseudo']) AND empty($_POST['newpseudo']) AND ($_POST['newpseudo'] != ['pseudo'])){
        $req = $bd->prepare("UPDATE users SET pseudo =  ? WHERE id =?");
    }

    // execute
    $req->execute();
    header("location:../profils.php");

    





