<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Search</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script>
        function search() {
            var data = new FormData();
            data.append("search_term", document.getElementById("search_term").value);

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "backend-search.php");
            xhr.onload = function() {
                document.getElementById("result").innerHTML = this.responseText;
            };
            xhr.send(data);
            return false;
        }
    </script>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Search Products</h2>
        <form class="mb-3">
            <div class="input-group">
                <input type="text" class="form-control" autocomplete="off" placeholder="Name to search..."
                    id="search_term" name="search_term" onkeyup="search()">
                <button type="button" class="btn btn-primary" onclick="search()">
                    <i class="fas fa-search"></i> Search
                </button>
            </div>
        </form>

        <div class="container table-container mt-4">
            <div class="result" id="result"></div>
        </div>
    </div>

    <style>
        .navbar.fixed-top {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 9999;
        }

        body {
            padding-top: 60px;
        }

        .table-container {
            margin-top: 60px;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>