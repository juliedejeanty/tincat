<?php require "head.php"; ?>


<body>
    <div>
        <img src="./dist/img/logo.png" alt="">
    </div>
    <div class="form">
        <strong> <?php echo $_GET["pseudo"];?> </strong>

        <form action="functions/userEdit.php" method="post">
            <p>Changer de pseudo</p>
            <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
            <input type="text" name="pseudo" value="<?php echo $_GET["pseudo"]; ?>">
            <input type="submit" value="Modifier">
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