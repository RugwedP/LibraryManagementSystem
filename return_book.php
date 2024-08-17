<?php
$servername = "localhost";
$username = "root";
$password = "1234567";
$dbname = "Books";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}

$studentName = $_POST["student_name"];
$bookID = $_POST["book_id"];
$prn = $_POST["prn"];
$returnDate = $_POST["date"]; // Assuming the return date is entered in the form

// Check if the entered details match in the database
$checkBorrowedSql = "SELECT * FROM borrowed_books WHERE prn = '$prn' AND book_id = '$bookID' AND student_name = '$studentName'";
$result = $conn->query($checkBorrowedSql);

if ($result === false) {
    echo "Error in query: " . $conn->error;
} elseif ($result->num_rows > 0) {
    // Update the return date in the borrowed_books table
    $updateReturnDateSql = "UPDATE borrowed_books SET return_date = '$returnDate' WHERE prn = '$prn' AND book_id = '$bookID' AND student_name = '$studentName'";

    if ($conn->query($updateReturnDateSql) === TRUE) {
        // Check if alert is already shown
        echo "<script>if(!window.alertShown) { alert('Book returned successfully.'); window.location.href = 'book_transaction.php'; window.alertShown = true; }</script>";
    } else {
        echo "Error updating return date: " . $conn->error;
    }
} else {
    // No matching record found, show an error message
    echo "<script>alert('Error: No record found for PRN $prn, Book ID $bookID, and Student Name $studentName.'); window.location.href = 'book_transaction.php'</script>";
}

$conn->close();
?>

