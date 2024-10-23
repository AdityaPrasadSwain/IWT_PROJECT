<?php include("connection.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .signup-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color:  #0056b3;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color:  #0056b3;
        }
        .error {
            color: red;
            font-size: 14px;
        }
        .form-footer {
            text-align: center;
            margin-top: 20px;
        }
        .form-footer a {
            text-decoration: none;
            color: #007bff;
        }
        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="signup-container">
        <h2>Create Your Account</h2>
        <form id="signupForm" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required>
                <div class="error" id="nameError"></div>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                <div class="error" id="emailError"></div>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
                <div class="error" id="passwordError"></div>
            </div>

            <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password" required>
                <div class="error" id="confirmPasswordError"></div>
            </div>

            <input type="submit" value="Sign Up">
        </form>

        <div class="form-footer">
            <p>Already have an account? <a href="login.html">Log in here</a></p>
        </div>
    </div>

    <script>
        function validateForm() {
            let isValid = true;

            const name = document.getElementById('fullname').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;

            // Name validation
            if (name.trim() === '') {
                document.getElementById('nameError').textContent = 'Full name is required';
                isValid = false;
            } else {
                document.getElementById('nameError').textContent = '';
            }

            // Email validation
            const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
            if (email.trim() === '') {
                document.getElementById('emailError').textContent = 'Email is required';
                isValid = false;
            } else if (!email.match(emailPattern)) {
                document.getElementById('emailError').textContent = 'Invalid email format';
                isValid = false;
            } else {
                document.getElementById('emailError').textContent = '';
            }

            // Password validation
            if (password.trim() === '') {
                document.getElementById('passwordError').textContent = 'Password is required';
                isValid = false;
            } else if (password.length < 6) {
                document.getElementById('passwordError').textContent = 'Password must be at least 6 characters';
                isValid = false;
            } else {
                document.getElementById('passwordError').textContent = '';
            }

            // Confirm password validation
            if (confirmPassword !== password) {
                document.getElementById('confirmPasswordError').textContent = 'Passwords do not match';
                isValid = false;
            } else {
                document.getElementById('confirmPasswordError').textContent = '';
            }

            return isValid;
        }
    </script>

</body>
</html>
