<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Timings</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color:white;
            color: #2c3e50;
        }

        /* Header Section */
       
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
        /* Gym Timings Section */
        #gym-timings {
            padding: 30px 20px;
            text-align: center;
        }

        #gym-timings h2 {
            font-size: 2.2rem;
            color: #34495e;
            margin-bottom: 10px;
        }

        #gym-timings p {
            font-size: 1rem;
            color: #7f8c8d;
            margin: 10px 0;
        }

        table {
            margin: 30px auto;
            border-collapse: collapse;
            width: 90%;
            max-width: 700px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background: #fff;
        }

        th, td {
            padding: 15px;
            text-align: center;
            border: 1px solid #ddd;
            font-size: 1rem;
        }

        th {
            background-color: #3498db;
            color: #fff;
            font-size: 1.2rem;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
            transition: background-color 0.3s ease;
        }

        /* Highlighted Note */
        .note {
            font-size: 0.9rem;
            color: #e74c3c;
            margin-top: 15px;
        }

        /* Footer Section */
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
    </style>
</head>
<body>

    <header style="background-color: black;">
        <h1>Welcome to Fitness Club</h1>
    </header>



    <nav>
        <a href="Home.php">Home</a>
        <a href="about.php">About</a>
        <a href="">Execise Time </a>
        <a href="Diet.php">Diet-Plan</a>
        <a href="register.php">Register Form</a>
    
    
        
    </nav>
    
    
    
    
    
    
    <!-- Gym Timings Section -->
    <div id="gym-timings">
        <h2 style="color:#f4b400;">Our Operating Hours</h2>
        <p style="color:black;">Plan your fitness routine with our convenient schedule.</p>
        
        <table>
            <thead>
                <tr>
                    <th style="background-color:black;color:#f4b400;">Day</th>
                    <th style="background-color:black; color:#f4b400;">Opening Time</th>
                    <th style="background-color: black;color:#f4b400;">Closing Time</th>
                    <th style="background-color: black; color:#f4b400;">Break Time</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background-color: black;">
                    <td style="color:white;">Monday to Friday</td>
                    <td style="color:white;">6:00 AM</td>
                    <td style="color:white;">10:00 PM</td>
                    <td style="color:white;">10:30 AM - 11:00 AM<br>3:00 PM - 3:30 PM</td>
                </tr>
                <tr style="background-color: black;">
                    <td style="color:white;">Saturday</td>
                    <td style="color:white;">7:00 AM</td>
                    <td style="color:white;">8:00 PM</td>
                    <td style="color:white;">10:30 AM - 11:00 AM</td>
                </tr>
                <tr style="background-color: black;">
                    <td style="color:white;">Sunday</td>
                    <td style="color:white;">8:00 AM</td>
                    <td style="color:white;">6:00 PM</td>
                    <td style="color:white;">No Break</td>
                </tr>
            </tbody>
        </table>
        <p style="color: white ;" class="note">
            <strong>Note: Timings may vary on public holidays. Please contact us for updates.</strong>
        </p>
        <!-- <p  style="color:white;"class="note">
            <strong>Note:</strong> Timings may vary on public holidays. Please contact us for updates.
        </p> -->
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy;<a>2025 Fitness Club. Designed with ❤️ by Our Fitness  Team</a></p>
    </footer>

</body>
</html>