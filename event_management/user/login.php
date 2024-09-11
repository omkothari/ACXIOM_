<?php
include('../config/database.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Query to fetch the user details
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        // Verify the password
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header('Location: dashboard.php');  // Redirect to user's main page
            exit();
        } else {
            $error = "Invalid password.";
        }
    } else {
        $error = "No user found with that username.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Login</title>
    <link rel="stylesheet" href="new.css">
</head>
<body>
    <h2>User Login</h2>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
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
</body>
</html>
