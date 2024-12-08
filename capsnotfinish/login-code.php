<?php
// Start the session
session_start();

// Include database connection
include('dbcon.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $email = $_POST['email'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']) ? true : false;

    // Sanitize the inputs to avoid SQL injection
    $email = $conn->real_escape_string($email);

    // Query the database for the user
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Correct password, set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['first_name'] = $user['first_name'];
            $_SESSION['last_name'] = $user['last_name'];
            $_SESSION['email'] = $user['email'];

            // Handle remember me functionality (set cookies if selected)
            if ($remember) {
                // Set cookies for 30 days
                setcookie('email', $email, time() + (30 * 24 * 60 * 60), "/"); // 30 days
                setcookie('password', $password, time() + (30 * 24 * 60 * 60), "/");
            }

            // Redirect to dashboard or homepage
            header('Location: admin/dashboard.php'); // Change this to your desired page
            exit();
        } else {
            // Incorrect password
            $_SESSION['error'] = "Incorrect password. Please try again.";
            header('Location: login.php'); // Redirect back to login page
            exit();
        }
    } else {
        // User not found
        $_SESSION['error'] = "No account found with that email address.";
        header('Location: login.php'); // Redirect back to login page
        exit();
    }
}

// Close the database connection
$conn->close();
?>
