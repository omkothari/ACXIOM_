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
    <title>View Products</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="navbar">
        <div class="navbar-left">
            <a href="index.php">Home</a>
        </div>
        <div class="navbar-right">
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <div class="content">
        <h1>Available Products</h1>
        <div class="product-grid">
            <div class="product">
                <img src="https://images.unsplash.com/photo-1523049673857-eb18f1d7b578?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9vZHxlbnwwfHwwfHx8MA%3D%3D" alt="Product 1">
                <h2>Product 1</h2>
                <p>10 RS</p>
            </div>
            <div class="product">
                <img src="https://images.unsplash.com/photo-1512149177596-f817c7ef5d4c?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Zm9vZHxlbnwwfHwwfHx8MA%3D%3D" alt="Product 2">
                <h2>Product 2</h2>
                <p>150 RS</p>
            </div>
            <div class="product">
                <img src="https://images.unsplash.com/photo-1444731961956-751ed90465a5?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fGZvb2R8ZW58MHx8MHx8fDA%3D" alt="Product 3">
                <h2>Product 3</h2>
                <p>120 RS</p>
            </div>
            <div class="product">
                <img src="https://images.unsplash.com/reserve/oMRKkMc4RSq7N91OZl0O_IMG_8309.jpg?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjZ8fGZvb2R8ZW58MHx8MHx8fDA%3D" alt="Product 4">
                <h2>Product 4</h2>
                <p>200 RS</p>
            </div>
        </div>
    </div>
</body>
</html>
