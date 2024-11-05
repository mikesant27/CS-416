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
            position: relative;
        }

        /* Particle Background */
        .particle-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }

        .particle {
            position: absolute;
            width: 8px;
            height: 8px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 50%;
            animation: float 15s infinite ease-in-out;
        }

        @keyframes float {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-100vh);
                opacity: 0.5;
            }

            100% {
                transform: translateY(0);
            }
        }

        /* Content Container */
        .intro-container {
            text-align: center;
            color: #fff;
            animation: fadeIn 2s ease forwards;
            opacity: 0;
            z-index: 1;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Rotating Heading */
        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            animation: rotateIn 3s ease-in-out forwards, colorChange 8s infinite;
            opacity: 0;
        }

        @keyframes rotateIn {
            from {
                opacity: 0;
                transform: rotate(-180deg) scale(0.5);
            }

            to {
                opacity: 1;
                transform: rotate(0deg) scale(1);
            }
        }

        @keyframes colorChange {

            0%,
            100% {
                color: #fff;
            }

            50% {
                color: #FFD700;
            }
        }

        /* Subheading Text */
        p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0;
            animation: slideUp 1.5s ease forwards;
            animation-delay: 1.5s;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
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
            opacity: 0;
            animation: bounceIn 1.5s ease forwards, bounce 2s infinite 3s;
            animation-delay: 2s;
        }

        @keyframes bounceIn {
            from {
                opacity: 0;
                transform: scale(0.5);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .start-btn:hover {
            background-color: #9013FE;
            color: #fff;
        }
    </style>
</head>

<body>
    <!-- Particle Background Animation -->
    <div class="particle-container">
        <!-- Generate particles dynamically with JavaScript -->
    </div>

    <!-- Intro Content -->
    <div class="intro-container">
        <h1>Welcome to Our Project</h1>
        <p>Explore innovative solutions and discover something new.</p>
        <button class="start-btn" onclick="getStarted()">Get Started</button>
    </div>

    <!-- JavaScript for Particle Animation and Redirection -->
    <script>
        // Particle Animation: Generate particles
        const particleContainer = document.querySelector('.particle-container');

        for (let i = 0; i < 100; i++) {
            const particle = document.createElement('div');
            particle.classList.add('particle');
            particle.style.left = `${Math.random() * 100}vw`;
            particle.style.top = `${Math.random() * 100}vh`;
            particle.style.animationDuration = `${Math.random() * 5 + 10}s`;
            particle.style.animationDelay = `${Math.random() * 5}s`;
            particleContainer.appendChild(particle);
        }

        // Redirect to main page
        function getStarted() {
            window.location.href = "main.html"; // Replace with your main page link
        }
    </script>
</body>

</html>