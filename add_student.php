<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Add Student</title>
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
      margin-top: 60px;
      margin-left: 450px;
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
    
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <!-- Add Student Form -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Add Student</h5>
            <form action="save_student.php" method="post" onsubmit="return validateStudentForm()">
              <!-- Full Name -->
              <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter student full name">
              </div>

              <!-- Branch -->
              <div class="form-group">
                <label for="branch">Branch</label>
                <input type="text" class="form-control" id="branch" name="branch" placeholder="Enter student branch">
              </div>

              <!-- Phone Number -->
              <div class="form-group">
                <label for="phoneNumber">Phone Number</label>
                <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Enter student phone number" maxlength="10">
              </div>

              <!-- Email Address -->
              <div class="form-group">
                <label for="email">Prn No</label>
                <input type="text" class="form-control" id="prn" name="prn" placeholder="Enter student prn number">
              </div>

              <!-- Submit Button -->
              <button type="submit" class="btn btn-primary">Add Student</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    function validateStudentForm() {
        var name = document.getElementById("fullName");
        var branch = document.getElementById("branch");
        var phone_no = document.getElementById("phoneNumber");
        var prn = document.getElementById("prn");

        if(name.value == "")
        {
            alert("Enter Student Full Name.")
            return false;
        }
        if(branch.value == "")
        {
            alert("Enter Student Branch.")
            return false;
        }
        if(phone_no.value == "")
        {
            alert("Enter Student Phone Number.")
            return false;
        }
        if(prn.value == "")
        {
            alert("Enter student Email Address.")
            return false;
        }
        
      return true;
    }
  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
