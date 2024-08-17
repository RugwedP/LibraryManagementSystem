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
    // The connection is successful, so you can proceed with signup data insertion

    // Assuming your HTML form has fields named 'fullname', 'email', 'password', and 'confirm_password'
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform any necessary data validation and sanitization here

    // Hash the password before storing it in the database for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if the email already exists in the database
    $check_email_query = "SELECT * FROM student WHERE email='$email'";
    $result_email = $conn->query($check_email_query);

    // Check if the name already exists in the database
    $check_name_query = "SELECT * FROM student WHERE fullname='$fullname'";
    $result_name = $conn->query($check_name_query);

    if ($result_email->num_rows > 0) {
        echo "Error: Email address already exists!";
    } 
    elseif ($result_name->num_rows > 0) {
        echo "Error: Name already exists!";
    } 
    else {
        // Insert the data into the 'student' table
        $sql = "INSERT INTO student (fullname, email, password) VALUES ('$fullname', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "Signup successful!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close the database connection
    $conn->close();
}

?>
