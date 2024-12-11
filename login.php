<?php
// Start the session
session_start();

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

// Initialize variables
$error = "";

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Dummy credentials for demonstration (replace with database query in production)
    $valid_users = [
        'student' => ['password' => 'student123', 'role' => 'Student'],
        'teacher' => ['password' => 'teacher123', 'role' => 'Teacher'],
        'admin' => ['password' => 'admin123', 'role' => 'Admin']
    ];

    // Authenticate user
    if (isset($valid_users[$username]) && $valid_users[$username]['password'] === $password && $valid_users[$username]['role'] === $role) {
        // Set session variables
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $role;

        // Redirect to index page
        header("Location: index.php");
        exit();
    } else {
        $error = "Invalid username, password, or role.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Cloud Based Attendance Management System</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
    <div class="login-container">
        <h1>Smart Attendance System</h1>
        <h2>Login</h2>
        <?php if ($error): ?>
            <p class="error"><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="your username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="your password" required>
            </div>
            <div class="form-group role-selection">
                <label>Role</label>
                <input type="radio" id="student" name="role" value="Student" checked>
                <label for="student">Student</label>
                <input type="radio" id="teacher" name="role" value="Teacher">
                <label for="teacher">Teacher</label>
                <input type="radio" id="admin" name="role" value="Admin">
                <label for="admin">Admin</label>
            </div>
            <button type="submit" class="login-button">Login</button>
            <div class="links">
                <a href="#">Reset here</a> if you forgot your password.<br>
                <a href="#">Signup here</a> if you don't have an account.
            </div>
        </form>
    </div>
</body>
</html>
