<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Items</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="navbar">
        <div class="navbar-left">
            <a href="index.php">Home</a>
        </div>
        <div class="navbar-center">
            <h1>Request Items</h1>
        </div>
        <div class="navbar-right">
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <div class="content">
        <form action="process_request.php" method="post">
            <div class="form-group">
                <label for="item_name">Item Name:</label>
                <input type="text" id="item_name" name="item_name" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="4" required></textarea>
            </div>
            <button type="submit">Submit Request</button>
        </form>
    </div>
</body>
</html>
