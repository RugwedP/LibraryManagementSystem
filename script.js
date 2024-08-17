      
function validateSignUpForm() {
    var fullname = document.getElementById("fullname").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirm_password = document.getElementById("confirm_password").value;

    if (fullname.trim() === "") {
        alert("Enter your full name.");
        return false;
    }

    if (email.trim() === "") {
        alert("Enter your email.");
        return false;
    }
    if (password.length < 6) {
        alert("Password must be at least 5 characters long.");
        return false;
    }

    if (password !== confirm_password) {
        alert("Passwords do not match.");
        return false;
    }

    return true;
}


function validateStudentLoginForm(){

    var email = document.getElementById("email").value;
    var pass = document.getElementById("password").value;

    if(email === "")
    {
        alert("Enter your Email.");
        return false;
    }
    if(pass === "")
    {
        alert("Enter your Password.");
        return false;
    }
    if(pass.length < 4)
    {
        alert("Enter atleast 4 digit password.")
        return false;
    }
}

    

function validateAdminLoginForm()
{
    var adminEmail = document.getElementById('admin_username').value;
    var adminPassword = document.getElementById('admin_password').value;

    if (adminEmail === 'library@gmail.com' && adminPassword === '123') {
        alert('Admin login successful!');
        return true;
        
    }
    else if (adminEmail === 'library2@gmail.com' && adminPassword === '456') {
        alert('Admin login successful!');
        return true;
        
    }
     else {
        alert('Invalid admin credentials!');
        return false;
    }
}