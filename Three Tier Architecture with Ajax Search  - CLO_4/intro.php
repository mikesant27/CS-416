<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Website</title>
    <style>
        /* Basic CSS Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Full-page setup */
        body,
        html {
            height: 100%;
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #4A90E2, #9013FE);
            overflow: hidden;
        }

        /* Background Animation */
        .background {
            position: absolute;
            width: 100%;
            height: 100%;
            background: url('https://source.unsplash.com/featured/?technology') no-repeat center center;
            background-size: cover;
            filter: blur(8px);
            opacity: 0.7;
            animation: zoom 15s infinite;
            z-index: -1;
        }

        @keyframes zoom {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }
        }

        /* Content Container */
        .intro-container {
            text-align: center;
            color: #fff;
        }

        /* Main Heading */
        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        /* Subheading Text */
        p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        /* Get Started Button */
        .start-btn {
            font-size: 1.2rem;
            padding: 10px 20px;
            color: #4A90E2;
            background-color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .start-btn:hover {
            background-color: #9013FE;
            color: #fff;
        }
    </style>
</head>

<body>
    <!-- Background for animation -->
    <div class="background"></div>

    <!-- Intro Content -->
    <div class="intro-container">
        <h1>Welcome to Our Project</h1>
        <p>Explore innovative solutions and discover something new.</p>
        <button class="start-btn" onclick="getStarted()">Get Started</button>
    </div>

    <!-- JavaScript to handle button click -->
    <script>
        function getStarted() {
            // Redirect to the main page or next section
            window.location.href = "main.html"; // Replace with your main page link
        }
    </script>
</body>

</html>