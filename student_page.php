<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-Vkoo8x4CGsQ8eDk6ZNIT5PDIJoo3G9QpgUVNfLv+0lJK7/pQD8R4N/t9vq8uQ+d" crossorigin="anonymous">

</head>
<style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

        body,
        head {
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
        }

        body {
            background: #f5f6fa;
            
        }

        .container {
            margin-top: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .card-container {
            display: flex;
            justify-content: center;
            align-items: center;
            
        }

        .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
            width: 20rem;
            height: 30rem;
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
        h2{
           text-align: center;
        }
    </style>
<body>
<h2>Welcome Student!</h2>

<div class="container">
    <div class="card-container">
        <div class="card">
            <img class="card-img-top" src="images/multi_book.png" style="width: 100%; height: 50%;" alt="Card image cap">
            <div class="card-body text-center">
                <h5 class="card-title">View Books</h5>
                <p class="card-text">View the list of books in the library.</p>
                <a href="view_book.php" class="btn btn-outline-light">View Books</a>
            </div>
        </div>
     </div>
</div>

</body>
</html>