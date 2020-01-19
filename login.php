<?php require "head.php"; ?>


<body>
    <div>
        <img src="./dist/img/logo.png" alt="">
    </div>

    <div>
        <img class="chats" src="./dist/img/chats.png" alt="">
    </div>

    <div class="form">
        <form action="functions/loginAction.php" method="post">
            <p>Pseudo</p>
            <input type="text"  name="pseudo">
            <p>Mot de passe</p>
            <input type="password" name="password">
            <input type="submit" value="Se connecter">
            <a class href="register.php">Pas de compte ?</a>
        </form>

        <div class="message">
            <?php 
                if (isset($_GET["message"])){
                    echo $_GET["message"];
                }
            ?>
        </div>
    </div>

  


</body>
</html>