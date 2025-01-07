<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Management System</title>
    <style>
        body {
            background-color: #ccc;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 1024px;
            margin: 0 auto;
            background-color: #fff;
            border: 1px solid #000;
            text-align: center;
        }
        .header {
            height: 120px;
            background: url('E3.png') no-repeat center center;
            background-size: cover;
        }
        .title {
            padding: 20px;
        }
        .menu {
            padding: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header"></div>
    <div class="title">
        <h1>Inventory Management System</h1>
    </div>
    <div class="menu">
        <style>
    .menu {
        background-color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
        gap: 20px;
        border: 1px solid #000;
    }
    .menu a {
        text-decoration: none;
        color: #000;
        font-weight: bold;
        padding: 10px 20px;
        border: 1px solid transparent;
        transition: background-color 0.3s, border-color 0.3s;
    }
    .menu a:hover {
        background-color: #ccc;
        border-color: #000;
    }
</style>

<div class="menu">
    <a href="home.php">Home</a>
    <a href="#">Add Product</a>
    <a href="show_product.php">Show Products</a>
    <a href="#">Edit Product</a>
    <a href="#">Delete</a>
    <a href="#">Search</a>
</div>
    </div>
</div>

</body>
</html>
