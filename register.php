<?php require "head.php"; ?>

<body>
    <div class="form-container">
        <h1>TINCAT</h1>
        <form action="functions/setUser.php" method="post">
            <input type="text" placeholder="pseudo" name="pseudo">
            <input type="email" placeholder="Email" name="email">
            <input type="password" placeholder="Mot de passe" name="password">
            <input type="password" placeholder="Confirmez votre mot de passe" name="confirm-password">
            <input type="submit" value="register">
        </form>
    </div>

    <div class="alert-box">
        <?php
            if(isset($_GET["ErrorMessage"])){
                echo $_GET["ErrorMessage"];
                echo "</div>";
            }

             else if(isset($_GET["ErrorMessage2"])){
                echo $_GET["ErrorMessage2"];
                echo "</div>";
            }

            else if(isset($_GET["ErrorMessage3"])){
                echo $_GET["ErrorMessage3"];
                echo "</div>";
            }
        ?> 
    </div>
</body>
</html>
