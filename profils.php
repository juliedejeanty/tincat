<div class="hello">
    <div>
        <img src="./dist/img/logo.png" alt="">
    </div>

    <?php 

    require "head.php"; 
    //Si session pseudo vide
    if(empty($_SESSION["pseudo"])){
        //redirige vers login
        header("Location: login.php");
    }

    echo"<span> Bonjour " . $_SESSION["pseudo"] . "</span>";


    ?>
    

    <!--********************-->
    <!--Afficher les utilisateurs stockés dans la BDD sauf moi-->
    <!--********************-->


    <?php 

    // on se connecte à notre base
    require ("functions/database.php");


    // lancement de la requête
    $req = $db->prepare("SELECT id, pseudo FROM users WHERE pseudo <> :pseudo");
    $req->bindParam(":pseudo" , $_SESSION["pseudo"]);

    // execute
    $req->execute();


    // boucle
    while ($result = $req->fetch(PDO::FETCH_ASSOC)){
        ?>
        <div class="users">
            <div class="pseudo">
                <strong> <?php echo $result["pseudo"]; ?> </strong>
                <button class="edit" a href="">EDITER</button>
                <button class="delete" a href="functions/deleteUser.php?user_id=<?php echo $result["id"]?>">SUPPRIMER</button>
                <!----redirige vers une page edit_form avec un formulaire, case pseudo à remplir GET ID vers le script. Attention il faut mettre une value qui doit être égale à la valeur déjà présente select value dans la database, submit qui renvoie vers un script updateUser.php (update from where)-->

            </div>
        </div>
        <?php
    }   
    ?>
    
    <a  class="disconnect" href ="functions/disconnect.php">Se déconnecter</a>

</div>






