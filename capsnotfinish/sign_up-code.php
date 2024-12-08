<?php
// Start the session (optional, to show success/error messages later)
session_start();

// Include database connection
include('dbcon.php');

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data and sanitize it
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $phone_number = trim($_POST['phone_number']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);
    $terms_conditions = isset($_POST['terms_conditions']) ? true : false;

    // Basic validation
    $errors = [];

    if (empty($first_name) || empty($last_name) || empty($email) || empty($phone_number) || empty($password) || empty($confirm_password)) {
        $errors[] = "All fields are required.";
    }

    // Check if passwords match
    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match.";
    }

    // Check if terms and conditions are accepted
    if (!$terms_conditions) {
        $errors[] = "You must accept the Terms and Conditions.";
    }

    // If no errors, proceed to insert data into the database
    if (empty($errors)) {
        // Sanitize the inputs to prevent SQL Injection
        $first_name = $conn->real_escape_string($first_name);
        $last_name = $conn->real_escape_string($last_name);
        $email = $conn->real_escape_string($email);
        $phone_number = $conn->real_escape_string($phone_number);
        $password_hashed = password_hash($password, PASSWORD_BCRYPT); // Encrypt the password

        // SQL query to insert data into the users table
        $sql = "INSERT INTO users (first_name, last_name, email, phone_number, password)
                VALUES ('$first_name', '$last_name', '$email', '$phone_number', '$password_hashed')";

        // Execute the query
        if ($conn->query($sql) === TRUE) {
            // Redirect or show a success message
            $_SESSION['success'] = "Registration successful!";
            header('Location: login.php'); // Redirect to a success page (you can change this)
            exit();
        } else {
            // Handle database insertion errors
            $errors[] = "Error: " . $conn->error;
        }
    }

    // If errors, store them in session and redirect back to the form
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header('Location: sign_up.php'); // Redirect back to the sign-up form
        exit();
    }
}

// Close the database connection
$conn->close();
?>
