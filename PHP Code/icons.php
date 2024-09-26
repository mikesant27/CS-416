<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <style>
    .menu ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .menu li {
        padding: 8px;
        margin-bottom: 7px;
        background-color: #33b5e5;
        color: #ffffff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    }

    .menu li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-weight: bolder;
    }

    .menu li:hover {
        background-color: #f72626;
    }
    </style>
    <title>Icons</title>
</head>

<body>
    <div class="col-3 col-s-3 menu">
        <ul>
            <li><a class="active" href="index.php">Home <i class="fas fa-home"></i> </a></li>
            <li><a href="flight.php">The Flight <i class="fas fa-plane"></i></a></li>
            <li><a href="city.php">The City <i class="fas fa-city"></i></a></li>
            <li><a href="island.php">The Island <i class="fas fa-umbrella-beach"></i></a></li>
            <li><a href="food.php">The Food <i class="fas fa-utensils"></i></a></li>
        </ul>
    </div>
</body>

</html>