<?php
// Etape 1 : config database
$DB_HOST = "localhost";
$DB_NAME = "tincat";
$DB_USER = "root";
$DB_PASSWORD = "root";
// Etape 2 : Connexion to database
try {
    $db = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
var_dump($_POST);

$email = $_POST["email"];
$pseudo = $_POST["pseudo"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];
$redirect = $false;

/******* echo " | email: " . $email . " | pseudo: " . $pseudo . " | mot de passe: " . $password ;
 ******/

/******* Si champs vides ******/
if( empty($password) || empty($pseudo) || empty($email) || empty($confirm_password) ){
    /******* Transmettre un message d'erreur ******/
    echo "Tous les champs ne sont remplis";
    header("Location: ../register.php?ErrorMessage=Tous les champs ne sont pas remplis");
    $redirect = true;

}

/******* Si password ne sont pas les mêmes ******/
else if (($password) !== ($confirm_password)) {
/******* Message d'erreur ******/
    echo "Les mots de passe ne correspondent pas";
    header("Location: ../register.php?ErrorMessage2=Les mots de passe ne correspondent pas");
    $redirect = true;

}



// Avant d'insérer en base de données faire les vérifications suivantes
    // Vérifier si le pseudo ou le mot de passe est vide
    // Ajouter un input confirm password et vérifier si les deux sont égaux

// Ajouter un champ email

// Etape 3 : prepare request
$req = $db->prepare("INSERT INTO users (pseudo, password) VALUES(:pseudo, :password)");
$req->bindParam(":pseudo", $_POST["pseudo"]);
$req->bindParam(":password", $_POST["password"]);
$req->execute();