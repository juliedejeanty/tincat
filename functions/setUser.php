<?php

require("database.php");

$message = "";
if( empty($_POST["pseudo"]) && empty($_POST["password"]) ){
    $message = "Vous devez remplir les deux champs";
    header("Location: ../register.php?message=$message");
} else if( empty($_POST["pseudo"]) && !empty($_POST["password"])  ){
    $message = "Vous devez remplir un pseudo";
    header("Location: ../register.php?message=$message");
} else if( !empty($_POST["pseudo"]) && empty($_POST["password"]) ){
    $message = "Vous devez remplir un password";
    header("Location: ../register.php?message=$message");
} 

if( !empty($_POST["password"]) && !empty($_POST["confirmPassword"]) && !empty($_POST["pseudo"])){
    if($_POST["password"] === $_POST["confirmPassword"] ){
        var_dump($_POST);
        $req = $db->prepare("INSERT INTO users (pseudo, password) VALUES(:pseudo, :password)");
        $req->bindParam(":pseudo", $_POST["pseudo"]);
        $req->bindParam(":password", $_POST["password"]);
        $req->execute();
        $message = "Compte créé avec succès";
        header("Location: ../register.php?message=$message");
        header("location:../profils.php");

    }else{
        $message = "Les mots de passe doivent être les mêmes";
        header("Location: ../register.php?message=$message");
        header("location:../profils.php");
    }
}