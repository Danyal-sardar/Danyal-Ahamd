<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title style="color:yellow;">About Us - FitLife Gym</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgb();
        }

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

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }

        h2 {
            color: black;
        }

        .section {
            margin-bottom: 40px;
            padding: 20px;
            background: black;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            border: solid;
            border-color: #f4b400;
            border-style: dotted;

        }

        .section img {
            max-width: 100%;
            border-radius: 5px;
            margin-bottom: 15px;
        }




        footer {
            text-align: center;
            padding: 20px;
            background-color: black;
            color: yellow;
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
        <a href="">About</a>

        <a href="time.php">Exercise Time</a>
        <a href="Diet.php">Diet-Plan</a>
        <a href="register.php">Register Form</a>



    </nav>



    <div class="container">
        <div class="section">
            <h2 style="color:#f4b400;">Introduction</h2>
            <p style="color:white;">In our fitness club , our mission is to empower individuals to achieve their fitness
                goals through expert guidance,and live happy and healthy.</p>
        </div>
        <div class="section">
            <h2 style="color:#f4b400;">History & Vision</h2>
            <ul>
                <li style="color:#f4b400">
                    <a style="color:white;">Established in 2015, Fitness Club: started as a small fitness studio and has
                        grown into a state-of-the-art facility serving thousands of members.</a>
                </li>
                <li style="color:#f4b400;">
                    <a style="color:white;">Our vision is to inspire and attract the community to start the exercise and
                        maintain your health and also enjoy the life.</a>
                </li>
            </ul>
        </div>

        <div class="section">
            <h2 style="color:#f4b400;">What Sets Us Apart</h2>
            <p style="color:white;">We offer:</p>
            <ul style="color:white;">
                <li style="color:#f4b400;"><a style="color:white;">Personalized training plans</a></li>
                <li style="color:#f4b400;"><a style="color:white;">World-class equipment</a></li>
                <li style="color:#f4b400;"><a style="color:white;">variety of group classes</a> </li>
                <li style="color:#f4b400;"><a style="color:white;">A welcoming community</a></li>
            </ul>
        </div>
        <div class="section">
            <h2 style="color:#f4b400;">Facilities</h2>
            <p style="color:white;">Our facilities include:</p>
            <ul style="color:white;">
                <li style="color:#f4b400;"><a style="color:white;">Cardio zone</a></li>
                <li style="color:#f4b400;"><a style="color:white;">Swimming pool</a></li>
                <li style="color:#f4b400;"> <a style="color:white;">Group classes like yoga</a> </li>
            </ul>
        </div>

        

        <div class="section">
            <h2 style="color:#f4b400;">Fee:</h2>
            <p style="color:#f4b400;">Personal Workout:</p>
            <ul style="color:white;">
                <li style="color:#f4b400;"><a style="color:white;">Fee:(Rs) 5000</a></li>
                <li style="color:#f4b400;"><a style="color:white;">One-on-one sessions with a trainer.</a></li>
                <li style="color:#f4b400;"> <a style="color:white;">Customized workout plan.</a> </li>
            </ul>
            <p style="color:#f4b400;">Group-Workout:</p>

            <ul style="color:white;">
                <li style="color:#f4b400;"><a style="color:white;">Fee:(Rs) 2000</a></li>
                <li style="color:#f4b400;"><a style="color:white;">Includes team-based exercises.</a></li>
                <li style="color:#f4b400;"> <a style="color:white;">Great for motivation and community.</a> </li>
            </ul>

        </div>
        <div class="section">
            <h2 style="color:#f4b400;">Expert Trainers</h2>
            <p style="color:white;">Our team of certified personal trainers brings decades of combined experience to
                help you stay motivated and achieve your fitness goals safely and efficiently.</p>
        </div>


        <div class="section">
            <h2 style="color:#f4b400"> Gallery</h2>
            <li style="color:#f4b400;"><a style="color:white;">WE have alot of facilities in our fitness club and the
                    link of facilities are below so check it</a></li>
            <br>
            <li style="color:#f4b400;"><a style="color:white;"
                    href="https://www.freepik.com/free-photos-vectors/gym-facilities ">Gym facilities</a>
        </div>

    </div>
    <footer>
        <p>&copy; 2025 Fitness Club. All rights reserved.</p>
    </footer>
</body>

</html>