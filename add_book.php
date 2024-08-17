<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Book</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
  margin-top: 50px;
}

h1 {
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

button.btn-primary,
a.back-button {
  border-radius: 8px;
  padding: 10px 20px;
}

button.btn-primary {
  background-color: #007bff;
  border: none;
  cursor: pointer;

}

button.btn-primary:hover {
  background-color: #0056b3;
}

a.back-button {
  background-color: #6c757d;
  border: none;
  margin-left: 10px;
  color: #fff;
  text-decoration: none;
}

a.back-button:hover {
  background-color: #495057;
}
#button1{
    margin-bottom: 20px;
}
#button2{
  margin-bottom: 20px;
}
  </style>
</head>
<body>
<div class="container">
    <h1 class="mt-4">Add Book</h1>
    <form id="addBookForm" action = "save_book.php" method = "post" onsubmit="return validateBook()">
      <div class="form-group">
        <label for="bookId">Book ID:</label>
        <input type="text" class="form-control" id="bookId" name="bookId" placeholder="Enter Book Id">
      </div>

      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Book Title">
      </div>

      <div class="form-group">
        <label for="author">Author:</label>
        <input type="text" class="form-control" id="author" name="author" placeholder="Enter Book Author Name">
      </div>

      <div class="form-group">
        <label for="publisher">Publisher:</label>
        <input type="text" class="form-control" id="publisher" name="publisher" placeholder="Enter Book Publisher">
      </div>

      <div class="form-group">
        <label for="publishedYear">Published Year:</label>
        <input type="number" class="form-control" id="publishedYear" name="publishedYear" placeholder="Enter Book Published Year">
      </div>

      <div class="form-group">
        <label for="quantity">Quantity:</label>
        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter Book Quantity">
      </div>

      <div class="form-group">
        <label for="price">Price:</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Enter Book Price">
      </div>

      <button type="submit" class="btn btn-primary" id = "button1">Add Book</button>
      <a href="admin_page.php" class="btn btn-secondary back-button" id="button2">Home Page</a>
    </form>
  </div>

  <script>
    function validateBook(event) {
        
        var book_id = document.getElementById("bookId");
        var book_title = document.getElementById("title");
        var book_author = document.getElementById("author");
        var book_publisher = document.getElementById("publisher");
        var book_Published_Year = document.getElementById("publishedYear"); // Corrected here
        var book_Quantity = document.getElementById("quantity");
        var book_price = document.getElementById("price");

        if(book_id.value == "")
        {
            alert("Enter Book Id.")
            return false;
        }
        if(book_title.value == "")
        {
            alert("Enter Book Title.")
            return false;
        }
        if(book_author.value == "")
        {
            alert("Enter Book Author.")
            return false;
        }
        if(book_publisher.value == "")
        {
            alert("Enter Book Publisher.")
            return false;
        }
        if(book_Published_Year.value == "")
        {
            alert("Enter Book Published Year.")
            return false;
        }
        if(book_Quantity.value == "")
        {
            alert("Enter Book Quantity.")
            return false;
        }
        if(book_price.value == "")
        {
            alert("Enter Book Price.")
            return false;
        }

         return true;
    }
    window.onload = function () {
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    }
  </script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>