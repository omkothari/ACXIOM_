<?php
session_start();
include('../config/database.php');

$error = ''; // Initialize error message

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    // Debugging: Print the query to ensure it's correct
    $sql = "SELECT * FROM admins WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    $admin = mysqli_fetch_assoc($result);

    // Debugging: Print the fetched admin data
    if ($admin) {
        if (password_verify($password, $admin['password'])) {
            $_SESSION['admin_id'] = $admin['id'];
            header('Location: dashboard.php');
            exit();
        } else {
            $error = 'Invalid password';
        }
    } else {
        $error = 'Username not found';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="new.css">
</head>
<body>
    <h2>Admin Login</h2>
    <form method="post" action="login.php">
        <div id="container">
        <div id="inputs"><label for="username">Username:</label>
        <input type="text" name="username" required></div>
        </div>   
        
        <div id="container">
        <div id="inputs"><label for="password">Password:</label>
        <input type="password" name="password" required></div>
        </div> 
        
        <div id="button">
        <button type="submit">Login</button>
        <a href="signup.php">Signup</a>
        </div>   
    </form>
    

    <?php if ($error): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
</body>
</html>
