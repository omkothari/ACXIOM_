<?php
include('../config/database.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $category = $_POST['category']; // New field

    $sql = "INSERT INTO admins (username, email, password, category) VALUES ('$username', '$email', '$password', '$category')";
    
    if (mysqli_query($conn, $sql)) {
        header('Location: login.php');
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Signup</title>
    <link rel="stylesheet" href="new.css">
</head>
<body>
    <h2>Admin Signup</h2>
    <form method="post" action="signup.php">
        
        <div id="container">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        </div>

        <div id="container">
        <label for="email">Email:</label>
        <input type="email" name="email" required>
     </div>

        <div id="container">
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        </div>

        <div id="container">
        <label for="category">Category:</label>
        <select name="category" required>
          </div>


       
        
          <option value="">Select a category</option>
            <option value="Catering">Catering</option>
            <option value="Florist">Florist</option>
            <option value="Decoration">Decoration</option>
            <option value="Lighting">Lighting</option>
        </select>

        <div id="button">
        <button type="submit">Signup</button>
        </div>
        
    </form>
</body>
</html>
