<?php
$servername = "localhost";
$username = "root";
$password = "1234567";
$dbname = "Books";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$bookId = $_POST['bookId'];
$title = $_POST['title'];
$author = $_POST['author'];
$publisher = $_POST['publisher'];
$publishedYear = $_POST['publishedYear'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

// Insert data into the database
$sql = "INSERT INTO Books (bookId, title, author, publisher, publishedYear, quantity, price)
        VALUES ('$bookId', '$title', '$author', '$publisher', '$publishedYear', '$quantity', '$price')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Book added successfully go back'); window.location.href = 'add_book.php';</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>