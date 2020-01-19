<?php require "head.php"; ?>


<body>
    <div>
        <img src="./dist/img/logo.png" alt="">
    </div>
    <div class="form">
        <strong> <?php echo $_GET["pseudo"];?> </strong>

        <form action="functions/userEdit.php" method="post">
            <p>Changer de pseudo</p>
            <input type="idden" name="newpseudo" value="<?php ["newpseudo"]; ?>">
            <input type="submit" value="Modifier">
        </form>
    </div>

</body>