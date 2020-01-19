<?php

    var_dump($_POST["pseudo"]);
    var_dump($_POST["id"]);


    // on se connecte à notre base
    require("database.php");

    $pseudo = $_POST['pseudo'];
    $id = $_POST['id'];

    // lancement de la requête
    if(empty($_POST['pseudo'])){
        $messagepseudo = "Veuillez renseigner un nouveau pseudo";
        header("Location: ../userEditForm.php?message=$messagepseudo");   
    }
    
    else{
        $req = $db->prepare("UPDATE users SET pseudo=? WHERE id=?");
        // execute
        $req->execute([$pseudo, $id]);
        $messageconfirmpseudo = "Votre pseudo a bien été changé";
        header("location:../profils.php?message=$messageconfirmpseudo");
    }

    





