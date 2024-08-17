<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrowed Books In Library</title>
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

        th,
        td {
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

        /* Style for checkboxes */
        .checkbox-container {
            text-align: left;
            vertical-align: middle;
        }

        .checkbox-container input[type="checkbox"] {
            cursor: pointer;
        }
       
    </style>
</head>

<body>

    <h2>Borrowed Books In Library</h2>
    <form method="post" class="search_bar" action="">
        <label for="search">Search by Name or PRN:</label>
        <input type="text" id="search" name="search" placeholder="Enter Name or PRN">
        <input type="submit" value="Search">
    </form>

    <form id="deleteForm" method="post" action="">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "1234567";
        $dbname = "Books";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["delete"])) {
                // Loop through selected checkboxes and delete corresponding rows
                foreach ($_POST["delete"] as $prn) {
                    // Perform deletion logic here
                    $deleteSql = "DELETE FROM borrowed_books WHERE prn = ?";
                    $stmt = $conn->prepare($deleteSql);
                    $stmt->bind_param("s", $prn);
                    $stmt->execute();
                }
                echo "<script>alert('Delete records successfully'); window.location.href = 'try2.php';</script>";
            }
            $searchTerm = $_POST["search"];
            $searchSql = "SELECT * FROM borrowed_books WHERE student_name LIKE '%$searchTerm%' OR prn LIKE '%$searchTerm%' OR book_id LIKE '%$searchTerm%' OR borrow_date LIKE '%$searchTerm%' OR return_date LIKE '%$searchTerm%'";
            $result = $conn->query($searchSql);
        }else {
            // Retrieve all borrowed books
            $sql = "SELECT * FROM borrowed_books";
            $result = $conn->query($sql);
        }

        // Retrieve all borrowed books
        $sql = "SELECT * FROM borrowed_books";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr><th>#</th><th>Student Name</th><th>PRN</th><th>Book ID</th><th>Borrow Date</th><th>Return Date</th></tr>";

            while ($row = $result->fetch_assoc()) {
                // Output HTML table row for each borrowed book
                echo "<tr>";
                echo "<td class='checkbox-container'><input type='checkbox' name='delete[]' value='"  . $row['prn'] . "'></td>";
                
                echo "<td>" . $row['student_name'] . "</td>";
                echo "<td>" . $row['prn'] . "</td>";
                echo "<td>" . $row['book_id'] . "</td>";
                echo "<td>" . $row['borrow_date'] . "</td>";
                echo "<td>" . $row['return_date'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
            echo "<button type='submit'>Delete Selected Rows</button>";
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>
    </form>

</body>

</html>