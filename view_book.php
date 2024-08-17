<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Books</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        .search_bar {
            margin-bottom: 20px;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>


<body>
<h2>Books In Library</h2>
<form method="post"class="search_bar" action="">
    <label for="search">Search by Id or Title:</label>
    <input type="text" id="search" name="search" placeholder="Enter Id or Title">
    <input type="submit" value="Search">
</form>
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchTerm = $_POST["search"];

    // Use a prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM Books WHERE bookId LIKE ? OR title LIKE ?");
    $searchParam = "%$searchTerm%"; // Add wildcards for partial matching
    $stmt->bind_param("ss", $searchParam, $searchParam);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    // If the form is not submitted, fetch all book details
    $sql = "SELECT * FROM Books";
    $result = $conn->query($sql);
}

// Fetch all book details
// $sql = "SELECT * FROM Books";
// $result = $conn->query($sql);//The result is stored in the $result variable

// Check if there are results (rows) returned from the query
if ($result->num_rows > 0) {
   
    echo "<table border='1'>";
    echo "<tr><th>Book ID</th><th>Title</th><th>Author</th><th>Publisher</th><th>Published Year</th><th>Quantity</th><th>Price</th></tr>";

    // Loop through each row of the result set
    while ($row = $result->fetch_assoc()) {
        // Output HTML table row for each book
        echo "<tr>";
        echo "<td>" . $row['bookId'] . "</td>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['author'] . "</td>";
        echo "<td>" . $row['publisher'] . "</td>";
        echo "<td>" . $row['publishedYear'] . "</td>";
        echo "<td>" . $row['quantity'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
</body>
</html>
