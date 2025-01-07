
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Inventory</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        img {
            max-width: 300px;
            height: auto;
        }
        .container {
            text-align: center;
            margin-top: 20px;
        }
        .pagination {
            text-align: center;
            margin-top: 20px;
        }
        .pagination a {
            padding: 8px 16px;
            margin: 0 5px;
            text-decoration: none;
            border: 1px solid #ddd;
            color: #333;
        }
        .pagination a.active {
            background-color: #4CAF50;
            color: white;
        }
        .footer {
            background-color: #f4f4f4;
            padding: 20px;
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
        }
    </style>
</head>
<body>

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

<div class="container">
    <h2>Product Inventory</h2>
</div>

<table>
    <thead>
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Version</th>
            <th>Warranty Start Date</th>
            <th>Warranty Expiry Date</th>
            <th>Manufacturer</th>
            <th>Country of Manufacture</th>
            <th>Price</th>
            <th>Description</th>
            <th>Stock Quantity</th>
            <th>Category</th>
            <th>Stock In Date</th>
            <th>Stock Out Date</th>
            <th>Product Image</th>
        </tr>
    </thead>
    <tbody>
        <tr>
                    <td>125</td>
                    <td>Fender Stratocaster</td>
                    <td>2023</td>
                    <td>2023-01-01</td>
                    <td>2028-01-01</td>
                    <td>Fender</td>
                    <td>USA</td>
                    <td>9999.99</td>
                    <td>Classic electric guitar with a rich sound.</td>
                    <td>48</td>
                    <td>Electric Guitar</td>
                    <td>2023-01-01 12:00:00</td>
                    <td></td>
                    <td><img src='/image/1002.jpg' alt='Product Image'></td>
                </tr><tr>
                    <td>126</td>
                    <td>Gibson Les Paul</td>
                    <td>2023</td>
                    <td>2023-02-01</td>
                    <td>2028-02-01</td>
                    <td>Gibson</td>
                    <td>USA</td>
                    <td>1499.99</td>
                    <td>Iconic rock guitar with a thick tone.</td>
                    <td>40</td>
                    <td>Electric Guitar</td>
                    <td>2023-02-01 14:00:00</td>
                    <td></td>
                    <td><img src='/image/1001.jpg' alt='Product Image'></td>
                </tr>    </tbody>
</table>

<div class="pagination">
    <!-- Previous Page Link -->
            <span>Previous</span>
    
    <!-- Page Numbers -->
            <a href="show_product.php?page=1" class="active">1</a>
            <a href="show_product.php?page=2" class="">2</a>
            <a href="show_product.php?page=3" class="">3</a>
            <a href="show_product.php?page=4" class="">4</a>
            <a href="show_product.php?page=5" class="">5</a>
            <a href="show_product.php?page=6" class="">6</a>
    
    <!-- Next Page Link -->
            <a href="show_product.php?page=2">Next</a>
    </div>

<!-- Footer -->
<div class="footer">
    <p>&copy; 2025 Inventory Management System. All rights reserved.</p>
</div>

</body>
</html>

