<?php // login.php
/* Sueda Tare */

// Start a session:
session_start();

// Function to check if a user is authenticated
function is_authenticated()
{
    return isset($_SESSION['username']);
}

// Function to check if a user is an administrator (replace this with your logic)
function is_administrator()
{
    // Replace this with your logic to check if the user is an administrator
    // For example, if you have an 'is_admin' column in the user table, you can check it here
    if (isset($_SESSION['username']) && $_SESSION['username'] === 'admin') {
        return true;
    }
    return false;
}

// Redirect the user to the index page if already logged in
if (is_authenticated()) {
    header('Location: index.php');
    exit;
}

// Check if the login form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sample login validation logic (replace this with your actual validation)
    $valid_username = 'user123';
    $valid_password = 'password123';

    // Check if submitted username and password match the valid credentials
    if ($_POST['username'] === $valid_username && $_POST['password'] === $valid_password) {
        // Set the session variable to mark the user as logged in
        $_SESSION['username'] = $valid_username;
        // Redirect to the index page or any other desired page
        header('Location: index.php');
        exit;
    } else {
        $error = 'Invalid username or password';
    }
}

// ... Rest of your login page code ...

// Set the page title and include the header file:
define('TITLE', 'Login');
include(dirname(__DIR__) . '/project1/templates/header.php');
?>

<?php
// Check if the user is authenticated, and display personalized message or logout link
if (is_authenticated()) {
    // Display personalized welcome message for logged-in users
    echo '<p>Welcome, you are logged in as: ' . $_SESSION['username'] . '</p>';
    // Display Logout link
    echo '<p><a href="logout.php">Logout</a></p>';
} else {
    // Display the login form if the user is not logged in
    echo '<h2>Login Form</h2>';
    if (isset($error)) {
        echo '<p style="color: red;">' . $error . '</p>';
    }
    echo '<form action="login.php" method="post">
        <p><label>Username<input type="text" name="username" value="' . htmlspecialchars($_POST['username'] ?? '') . '"></label></p>
        <p><label>Password <input type="password" name="password"></label></p>
        <p><input type="submit" name="submit" value="Log In!"></p>
        </form>';
}

include(dirname(__DIR__) . '/project1/templates/footer.php');
?>





