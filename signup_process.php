<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

body,
head {
  font-family: 'Poppins', sans-serif;
  box-sizing: border-box;
}

body {
  background-color: #f8f9fa;
  /* background-color: blue; */
  
}

.container {
  margin-top: 50px;
  margin-bottom: 50px;
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
  margin-top: 10px;
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
.logo{
  margin-top: 20px;
  text-align: center;
 
  
}
.logo img{
  width: 350px;
  height:150px;
  
}
  </style>
  <title>Library Management System</title>
</head>
<body>
  <div class="logo">
    <img src="images/DYP-ATU logo.png" alt="">
  </div>
<div class="container">
  <div class="row">
    <!-- Student Sign-up Form -->
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Student Sign-up</h5>
          <form action="student_signup_data.php" method="post" onsubmit="return validateSignUpForm()">
            <!-- Full Name -->
            <div class="form-group">
              <label for="fullName">Full Name</label>
              <input type="text" class="form-control" id = "fullname" name="fullname" placeholder="Enter your full name" >
            </div>
            
            <!-- Email Address -->
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" class="form-control"  id="email" name="email" placeholder="Enter your email" required>
            </div>
            
            <!-- Password -->
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" maxlength="8" required >
            </div>
            
            <!-- Confirm Password -->
            <div class="form-group">
              <label for="confirmPassword">Confirm Password</label>
              <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
            </div>

            <!-- Password Matching Error Message -->
            <p id="passwordError" style="color: red;"></p>

            <!-- Already Registered Link -->
            <p>Already registered? <a href="student_login.php" onclick="showLoginForm()">Login here</a></p>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Sign Up</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Admin Login Form -->
    <div class="col-md-6" id="loginForm" style="display: block;">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Admin Login</h5>
          <form action="admin_page.php" method="post" onsubmit="return validateAdminLoginForm()">
            <!-- Add your admin login form fields here -->
            <div class="form-group">
              <label for="adminUsername">Username</label>
              <input type="text" class="form-control" id="admin_username" name="admin_username" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
              <label for="adminPassword">Password</label>
              <input type="password" class="form-control" id="admin_password" name="admin_password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src ="script.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</body>
</html>
