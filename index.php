<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // If not logged in, redirect to login page
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloud Based Attendance Management System</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
    <header>
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <nav>
            <ul>
                <li><a href="/index.php">Home</a></li>
                <li><a href="/students.html">Students</a></li>
                <li><a href="/faculties.html">Faculties</a></li>
                <li><a href="/attendence.html">Attendance</a></li>
                <li><a href="/report.html">Report</a></li>
                <li><a href="/logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Dashboard</h2>
            <p>Use the navigation bar to manage students, faculties, attendance, and reports.</p>
            <img src="/dashboard-image.png" alt="Dashboard" width="300" height="200">
        </section>
    </main>
</body>
</html>
