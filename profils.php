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
                <!----redirige vers une page UserEditForm avec un formulaire--->
                <button class="edit"> <a href="userEditForm.php?pseudo=<?php echo $result["pseudo"]?>">EDITER</button>
                <button class="delete"> <a href="functions/deleteUser.php?user_id=<?php echo $result["id"]?>">SUPPRIMER</button>
            </div>
        </div>
        <?php
    }   
    ?>

    
    <a  class="disconnect" href ="functions/disconnect.php">Se déconnecter</a>

</div>






