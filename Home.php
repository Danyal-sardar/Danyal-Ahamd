<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Website</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('humphrey-muleba-LOA2mTj1vhc-unsplash.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            color: #fff;
        }

        /* Header Styles */
        header {
            background-color: rgba(0, 0, 0, 0.8);
            color: #f4b400;
            text-align: center;
            padding: 20px 0;
        
        }

        header h1 {
            font-size: 3rem;
            font-weight: bold;
            margin: 0;
        }

        /* Navigation Bar */
        nav {
            display: flex;
            justify-content: center;
            background-color: rgba(68, 68, 68, 0.9);
            padding: 10px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1.2rem;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #f4b400;
        }

        /* Hero Section */
        .hero {
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: rgba(0, 0, 0, 0.6);
            padding: 0 20px;
        }

        .hero h2 {
            font-size: 2.5rem;
            margin: 0;
            color: #f4b400;
        }

        /* Services Section */
        .section {
            padding: 40px 20px;
            text-align: center;
            background: rgba(255, 255, 255, 0.9);
            color: #444;
        }

        .section h2 {
            margin-bottom: 30px;
            font-size: 2.5rem;
            
        }

        .services {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .service {
            background:black;
            padding: 20px;
            margin: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            width: calc(33% - 20px);
            min-width: 280px;
            text-align: left;
            border:solid;
            border-style: dotted;
            border-color: yellow;
        

        }

        .service h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #333;
        }

        .service p {
            color: #555;
        }

        /* Footer Styles */
        footer {
            text-align: center;
            padding: 20px;
            background-color:black;
            color:yellow;
            position: relative;
        }

        footer p {
            font-size: 1rem;
            margin: 0;
        }

        /* Button for Hero Section */
        .hero .btn {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1rem;
            color: #fff;
            background-color: #f4b400;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .hero .btn:hover {
            background-color: #d29300;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            nav a {
                font-size: 1rem;
            }

            .hero h2 {
                font-size: 2rem;
            }

            .section h2 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header style="background-color: black;">
        <h1>Welcome to Fitness Club</h1>
    </header>

    <!-- Navigation -->
    <nav>
        <a href="">Home</a>
    
        <a href="about.php">About</a>
    
        <a href="time.php">Exercise Time</a>

        <a href="Diet.php">Diet-Plan</a>

        <a href="register.php">Register Form</a>
        
        

        
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <div>
            <h2>Your Fitness Journey Starts Here</h2>
            <button class="btn">Join Now</button>
        </div>
    </div>

    <!-- Services Section -->
    <div class="section">
        <h2 style="color;black;">Our Services</h2>
        <div class="services">
            <div class="service">
                <h3 style="color:#f4b400;">Personal Training</h3>
                <p style="color:white;">Customized training programs to fit your goals.</p>
            </div>
            <div class="service">
                <h3 style="color:#f4b400">Group Classes</h3>
                <p style="color:white;">Engaging group activities to stay motivated.</p>
            </div>
            <div class="service">
                <h3 style="color:#f4b400;">Nutrition Plans</h3>
                <p style="color:white;">Tailored meal plans to complement your training.</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Fitness Club. All rights reserved.</p>
    </footer>

    
</body>
</html>