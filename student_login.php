<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System - Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

    /* Custom styling for login page */

body {
    background-color: #f8f9fa;
    font-family: 'Poppins', sans-serif;
}

.center-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-container {
    background-color: #ffffff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    color: #007bff;
    text-align: center;
}

.form-group {
    margin-bottom: 20px;
}

label {
    font-weight: 600;
}

input.form-control {
    border-radius: 8px;
    padding: 10px;
}

button.btn-primary {
    background-color: #007bff;
    border: none;
    border-radius: 8px;
    padding: 10px 20px;
    cursor: pointer;
}

button.btn-primary:hover {
    background-color: #0056b3;
}

p {
    margin-bottom: 0;
}

a {
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

    
  </style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "1234567";
$dbname = "student";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // Check if the form is submitted
    if (isset($_POST['login_email']) && isset($_POST['login_password'])) {
        // Assuming your HTML form has fields named 'login_email' and 'login_password'
        $login_email = $_POST['login_email'];
        $login_password = $_POST['login_password'];

        // Retrieve user data based on the entered email
        $check_user_query = "SELECT * FROM student WHERE email=?";
        $stmt = $conn->prepare($check_user_query);
        $stmt->bind_param("s", $login_email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // User with the entered email exists
            $user_data = $result->fetch_assoc();

            // Verify the entered password with the hashed password stored in the database
            if (password_verify($login_password, $user_data['password'])) {
                // Login successful, redirect to student_page.php
                echo "<script> alert('Login successful'); window.location.href = 'student_page.php'; </script>)";
                // header('Location: student_page.php');
                exit(); // Ensure that no further code is executed after the header
            } else {
                echo "<script>alert('Incorrect password!');</script>";
            }
        } else {
            echo "<script>alert('User not found!');</script>";
        }

        // Close the database connection
        $stmt->close();
    }
    $conn->close();
}
?>


<div class="center-container">
    <div class="container mt-5 login-container">
        <h2>Student Login</h2>
        <form action="" method="post" onsubmit="return validateStudentLoginForm()">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="login_email" placeholder = "Enter your email address"required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="login_password" placeholder="Enter your password">
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <p class="mt-3">Don't have an account? <a href="signup_process.php">Sign Up here</a></p>
    </div>
</div>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



