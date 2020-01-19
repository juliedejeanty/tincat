<?php require "head.php"; ?>


<body>
    <div>
        <img src="./dist/img/logo.png" alt="">
    </div>

    <div class="form">
        <form action="functions/userEdit.php" method="post">
            <p>Changer de pseudo</p>
            <input type="idden" name="pseudo" value="<?php ["new_user_id"]; ?>">
            <input type="submit" value="Modifier">
        </form>
    </div>

</body>