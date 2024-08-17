<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Library Transactions</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
     
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

        body,
        head {
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        body {
            background-color: #f8f9fa;
            margin: 50px;
        }

        .container {
            
            margin-left: 160px;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            color: #007bff;
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
        }
        h1{
            margin-bottom: 20px;
        }
        /* .btn2{
            background-color: #007bff;
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            cursor: pointer;
            color: white;
        }
        .btn2 :hover{
            background-color: #0056b3; */
        /* } */
    
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-center">Library Transactions</h1>

    <div class="row">
        <!-- Borrow Book Form - Left Side -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Borrow Book</h5>
                    <form action="borrowed_book.php" method="post" >
                        <div class="form-group">
                            <label for="student_name">Student Name:</label>
                            <input type="text" class="form-control" id="student_name" name="student_name" required>
                        </div>
                        <div class="form-group">
                            <label for="book_id">Book ID:</label>
                            <input type="text" class="form-control" id="book_id" name="book_id" required>
                        </div>
                        <div class="form-group">
                            <label for="prn">PRN no:</label>
                            <input type="text" class="form-control" id="prn" name="prn" required>
                        </div>
                        <div class="form-group">
                            <label for="date">Date:</label>
                            <input type="date" class="form-control" id="date" name="date" required>
                        </div>
                        <button type="submit" class="btn btn-outline-dark">Borrow</button>
                        
                       <a href="view_student.php"><button type="button" class="btn btn-outline-dark">View Students</button></a>
                       <a href="view_book.php"><button type="button" class="btn btn-outline-dark">View Books</button></a>
                       <a href="admin_page.php"><button type="button" class="btn btn-outline-info">Home Page</button></a>
                    
                    </form>
                </div>
            </div>
        </div>

        <!-- Return Book Form - Right Side -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Return Book</h5>
                    <form action="return_book.php" method="post">
                        <div class="form-group">
                            <label for="student_id">Student Name:</label>
                            <input type="text" class="form-control" id="student_name" name="student_name" required>
                        </div>
                        <div class="form-group">
                            <label for="book_id">Book ID:</label>
                            <input type="text" class="form-control" id="book_id" name="book_id" required>
                        </div>
                        <div class="form-group">
                            <label for="prn">PRN no:</label>
                            <input type="text" class="form-control" id="prn" name="prn" required>
                        </div>
                        <div class="form-group">
                            <label for="date">Date:</label>
                            <input type="date" class="form-control" id="date" name="date" required>
                        </div>
                        <button type="submit" class="btn btn-outline-dark">Return Book</button>
                        <a href="student_details.php"><button type="button" class="btn btn-outline-dark">Student Details</button></a>
                       <a href="admin_page.php"><button type="button" class="btn btn-outline-info">Home Page</button></a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>