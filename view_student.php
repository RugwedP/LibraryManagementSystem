<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students In Library</title>
</head>
<style>
     @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    body {
        font-family: 'Poppins', sans-serif;
            /* background-color: #f5f5f5; */
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
<body>

<h2>Students In Library</h2>
<form method="post"class="search_bar" action="">
    <label for="search">Search by Name or PRN:</label>
    <input type="text" id="search" name="search" placeholder="Enter Name or PRN">
    <input type="submit" value="Search">
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "1234567";
$dbname = "studentData";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchTerm = $_POST["search"];

    // Use a prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM student WHERE fullName LIKE ? OR prn LIKE ?");
    $searchParam = "%$searchTerm%"; // Add wildcards for partial matching
    $stmt->bind_param("ss", $searchParam, $searchParam);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    // If the form is not submitted, retrieve all students
    $sql = "SELECT * FROM student";
    $result = $conn->query($sql);
}

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Id</th><th>FullName</th><th>Branch</th><th>Phone Number</th><th>PRN Number</th></tr>";

    while ($row = $result->fetch_assoc()) {
        // Output HTML table row for each student
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['fullName'] . "</td>";
        echo "<td>" . $row['branch'] . "</td>";
        echo "<td>" . $row['phoneNumber'] . "</td>";
        echo "<td>" . $row['prn'] . "</td>";
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
