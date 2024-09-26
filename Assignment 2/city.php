<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
</head>

<body>
    <?php
        require "top.php";
    ?>

    <div class="row">
        <?php
            require "nav.php";
        ?>

        <div class="col-6 col-s-9">
            <?php
                require "main_city.php";
            ?>
        </div>

        <div class="col-3 col-s-12">
            <?php
                require "aside.php";
            ?>
        </div>
    </div>

    <?php
        require "foot.php";
    ?>

</body>

</html>