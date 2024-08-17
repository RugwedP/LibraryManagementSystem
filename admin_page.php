<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System - Admin Page</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-Vkoo8x4CGsQ8eDk6ZNIT5PDIJoo3G9QpgUVNfLv+0lJK7/pQD8R4N/t9vq8uQ+d" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body,
        head {
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
        }

        body {
            background: #f5f6fa;

        }

        .container {
            /* margin-top: 50px; */
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding-bottom: 200px;

        }

        .card-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            /* Space between cards */
        }

        .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            width: 14rem;
            height: 25rem;
            /* margin: 20px; */
        }

        .card:hover {
            transform: scale(1.02);
        }

        .card-body {
            background: linear-gradient(45deg, #3498db, #8e44ad);
            color: white;
            padding: 20px;
        }

        .card-title {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .text-center {
            text-align: center;
        }

        h2 {
            
            text-align: center;
           margin-top: 80px;
            
        }
    </style>
</head>

<body>

    <h2 id="head">Welcome Admin!</h2>
    <div class="container">
        <div class="card-container">
            <div class="card">
                <img class="card-img-top" src="images/muti_student2.png" style="width: 100%; height: 50%;" alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title">View Students</h5>
                    <p class="card-text">View the list of students in the library.</p>
                    <a href="view_student.php" class="btn btn-outline-light">View Students</a>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="images/multi_book.png" style="width: 100%; height: 50%;" alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title">View Books</h5>
                    <p class="card-text">View the list of books in the library.</p>
                    <a href="view_book.php" class="btn btn-outline-light">View Books</a>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="images/student.png" style="width: 100%; height: 50%;" alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title">Add student</h5>
                    <p class="card-text">Add a new student to the library system.</p>
                    <a href="add_student.php" class="btn btn-outline-light">Add Student</a>
                </div>
            </div>


            <div class="card">
                <img class="card-img-top" src="images/book.png" style="width: 100%; height: 50%;" alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title">Add Book</h5>
                    <p class="card-text">Add a new book to the library system.</p>
                    <a href="add_book.php" class="btn btn-outline-light">Add Book</a>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="images/student_details.png" style="width: 100%; height: 50%;" alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title">Student Details</h5>
                    <p class="card-text">View details of students.</p>
                    <a href="student_details.php" class="btn btn-outline-light">Student Details</a>
                </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="images/tra2.jpeg" style="width: 100%; height: 50%;" alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title">Library Transactions</h5>
                    <p class="card-text"> Manage library transactions.</p>
                    <a href="book_transaction.php" class="btn btn-outline-light">Manage Transaction</a>
                </div>
            </div>
            <!-- Repeat the above card code for the remaining cards -->

        </div>
    </div>
    <script>
        // Disable caching to prevent going back to signup_process.php
        window.onload = function() {
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        }
    </script>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>