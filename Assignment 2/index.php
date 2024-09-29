<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="images/icon.png">
</head>

<body>
    <?php
        require "top.php";
    ?>

    <div class="row">
        <?php
            require "nav.php";
        ?>

        <?php
            require "main.php";
        ?>

        <?php
            require "aside.php";
        ?>
    </div>

    <?php
        require "foot.php";
    ?>

</body>

</html>