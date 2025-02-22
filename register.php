<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            margin: 0;
        }
        header {
            background-color: black;
            color: #f4b400;
            text-align: center;
            padding: 20px 0;
            width: 100%;
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
            width: 100%;
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
            background:black;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 1000px;
            color: #f4b400;
            margin-top: 20px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background:black;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background:#f4b400;
        }
        h2 {
            text-align: center;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: black;
            color: yellow;
            width: 100%;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Fitness Club</h1>
    </header>
    <nav>
        <a href="Home.php">Home</a>
        <a href="about.php">About</a>
        <a href="time.php">Exercise Time</a>
        <a href="Diet.php">Diet-Plan</a>
        <a href="">Register Form</a>
        

    </nav>
    <div class="container">
        <h2 style="color:#f4b400;">Register Form</h2>
        <form action="" method="POST">
            <label for="full_name">Full Name:</label>
            <input type="text" id="full_name" name="full_name" required>

            <label for="father_name">Father Name:</label>
            <input type="text" id="father_name" name="father_name" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>
            
            <label for="cnic">CNIC Number:</label>
            <input type="text" id="cnic" name="cnic" required>
            
            <button  id="danyal"  style="font-style: bold; font-size: medium;" type="submit" name="submit">submit_form</button>
        </form>
    </div>
    <footer>
        <p>&copy; 2025 Fitness Club. All rights reserved.</p>
    </footer>


    
</body>
</html>
<?php include ("connection.php");?>

<?php
if(isset($_POST['submit'])){
    $fname=$_POST['full_name'];
    $fathername=$_POST['father_name'];
    $email=$_POST['email'];
    $tel=$_POST['phone'];
    $cnic=$_POST['cnic'];

    $insert= "INSERT INTO registration VALUES('$fname','$fathername','$email','$tel','$cnic')";
      
    if(mysqli_query($conn,$insert)){
        echo "success";
    } 
    else{
        echo "not";
    }
}

?>