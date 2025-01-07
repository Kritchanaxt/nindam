
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
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
            background: url('nindam_head_banner.jpg') no-repeat center center;
            background-size: cover;
        }
        .title {
            padding: 20px;
        }
        .menu {
            padding: 10px;
        }
        form {
            width: 70%; /* Set form width to 70% */
            margin: 0 auto;
            text-align: left;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        form input, form textarea {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        form button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
        }
        form button:hover {
            background-color: #45a049;
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
    <a href="add_product.php">Add Product</a>
    <a href="show_product.php">Show Products</a>
    <a href="#">Edit Product</a>
    <a href="#">Delete</a>
    <a href="#">Search</a>
</div>
    </div>

    <h2>Add Product</h2>
    <form action="add_product.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="Nin_ProductName" placeholder="Product Name" required>
        <input type="text" name="Nin_Version" placeholder="Version">
        <input type="date" name="Nin_WarrantyStartDate">
        <input type="date" name="Nin_WarrantyExpiryDate">
        <input type="text" name="Nin_Manufacturer" placeholder="Manufacturer">
        <input type="text" name="Nin_CountryOfManufacture" placeholder="Country of Manufacture">
        <input type="number" name="Nin_Price" placeholder="Price">
        <textarea name="Nin_Description" placeholder="Description"></textarea>
        <input type="number" name="Nin_StockQuantity" placeholder="Stock Quantity">
        <input type="text" name="Nin_Category" placeholder="Category">
        <input type="datetime-local" id="Nin_StockInDate" name="Nin_StockInDate">
        <input type="file" name="Nin_ProductImage" accept="image/*">
        <button type="submit" name="submit">Add Product</button>
    </form>

    <button onclick="setToday()">Set Today</button>

    <!-- Include Footer -->
    <!-- footer.php -->
<footer>
    <div class="footer-content">
        <p>2025 Nindam Technologies.</p>
    </div>
</footer>

</div>

<script>
    // Function to set the current date and time
    function setToday() {
        var now = new Date();
        var year = now.getFullYear();
        var month = (now.getMonth() + 1).toString().padStart(2, '0');
        var day = now.getDate().toString().padStart(2, '0');
        var hours = now.getHours().toString().padStart(2, '0');
        var minutes = now.getMinutes().toString().padStart(2, '0');
        var seconds = now.getSeconds().toString().padStart(2, '0');

        var datetime = year + '-' + month + '-' + day + 'T' + hours + ':' + minutes + ':' + seconds;
        document.getElementById("Nin_StockInDate").value = datetime;

        // Focus back on the input field to close the picker immediately after setting the value
        document.getElementById("Nin_StockInDate").focus();
    }
</script>

</body>
</html>
