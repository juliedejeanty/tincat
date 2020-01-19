<?php require "head.php"; ?>

<body>
    <div>
        <img src="./dist/img/logo.png" alt="">
    </div>

    <div>
        <img class="chats" src="./dist/img/welcome.png" alt="">
    </div>

    <div class="form">
        <form action="functions/setUser.php" method="post">
            <p>Pseudo</p>
            <input type="text" name="pseudo">
            <p>Mot de passe</p>
            <input type="password" name="password">
            <p>Confirmez votre mot de passe</p>
            <input type="password" name="confirmPassword">
            <input type="submit" value="S'inscrire">
            <a href="login.php">Déjà un compte ?</a>
        </form>
    </div>

    <div class="message">
        <?php 
            if (isset($_GET["message"])){
                echo $_GET["message"];
            }
        ?>
    </div>

  


</body>
</html>
