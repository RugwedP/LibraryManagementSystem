<?php
$servername = "localhost";
$username = "root";
$password = "1234567";
$dbname = "studentData";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}

$fullname = $_POST["fullName"];
$branch = $_POST["branch"];
$phoneNumber = $_POST["phoneNumber"];
$prn = $_POST["prn"];

// Check if the name already exists
$checkNameSql = "SELECT * FROM student WHERE fullName = '$fullname'";
$resultName = $conn->query($checkNameSql);

// Check if the PRN already exists
$checkPRNSql = "SELECT * FROM student WHERE prn = '$prn'";
$resultPRN = $conn->query($checkPRNSql);

if ($resultName->num_rows > 0 && $resultPRN->num_rows > 0) {
    // Both name and PRN already exist, show an appropriate alert
    echo "<script>alert('Error: Both $fullname and $prn already exist.'); window.location.href = 'add_student.php';</script>";
} elseif ($resultName->num_rows > 0) {
    // Name already exists, show an alert
    echo "<script>alert('Error: Student with the $fullname already exists.'); window.location.href = 'add_student.php';</script>";
} elseif ($resultPRN->num_rows > 0) {
    // PRN already exists, show an alert
    echo "<script>alert('Error: Student with the $prn already exists.'); window.location.href = 'add_student.php';</script>";
} else {
    // Both name and PRN are new, proceed with the insertion
    $sql = "INSERT INTO student (fullName, branch, phoneNumber, prn)
            VALUES ('$fullname', '$branch', '$phoneNumber', '$prn')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Student added successfully.'); window.location.href = 'add_student.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
