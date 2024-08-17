<?php
$servername = "localhost";
$username = "root";
$password = "1234567";
$dbnameBooks = "Books";
$dbnameStudentData = "studentData";

// Connect to the Books database
$connBooks = new mysqli($servername, $username, $password, $dbnameBooks);
if ($connBooks->connect_error) {
    die("Connection error to Books database: " . $connBooks->connect_error);
}

// Connect to the studentData database
$connStudentData = new mysqli($servername, $username, $password, $dbnameStudentData);
if ($connStudentData->connect_error) {
    die("Connection error to studentData database: " . $connStudentData->connect_error);
}

// Function to validate date format (YYYY-MM-DD)


// Function to display an alert and redirect
function showAlertAndRedirect($message, $location) {
    echo "<script>alert('$message'); window.location.href = '$location';</script>";
}

// Validate input fields
$studentName = $_POST["student_name"];
$bookID = $_POST["book_id"];
$prn = $_POST["prn"];
$date = $_POST["date"];

if (empty($studentName) || empty($bookID) || empty($prn) || empty($date)) {
    showAlertAndRedirect("Error: All fields are required.", "book_transaction.php");
    exit;
}



// Check if the entered PRN exists in the studentData database
$checkPRNSql = "SELECT * FROM student WHERE LOWER(prn) = LOWER('$prn')";
$result = $connStudentData->query($checkPRNSql);

if ($result->num_rows > 0) {
    // PRN exists, check if the provided student name matches
    $row = $result->fetch_assoc();
    $existingStudentName = $row['fullName'];

    if (strcasecmp($existingStudentName, $studentName) === 0) {
        // Student name matches, proceed with the transaction in the Books database
        $sql = "INSERT INTO borrowed_books (student_name, book_id, prn, borrow_date)
                VALUES ('$studentName', '$bookID', '$prn', '$date')";

        if ($connBooks->query($sql) === TRUE) {
            showAlertAndRedirect("Book borrowed successfully.", "book_transaction.php");
        } else {
            showAlertAndRedirect("Error: " . $sql . "<br>" . $connBooks->error, "book_transaction.php");
        }
    } else {
        // Student name does not match
        showAlertAndRedirect("Error: Student with PRN $prn exists, but the provided name does not match.", "book_transaction.php");
    }
} else {
    // PRN doesn't exist
    showAlertAndRedirect("Error: Student with PRN $prn not found.", "book_transaction.php");
}

// Close both database connections
$connBooks->close();
$connStudentData->close();
?>
