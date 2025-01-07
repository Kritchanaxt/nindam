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
    <a href="#">Add Product</a>
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
                    <td>1001</td>
                    <td>น้ำตก</td>
                    <td>E3 1001</td>
                    <td>2024-06-15</td>
                    <td>2028-06-15</td>
                    <td>ธนกฤษ เทือกเถาว์</td>
                    <td>ไทย</td>
                    <td>4500</td>
                    <td>E3 1001</td>
                    <td>2</td>
                    <td>อาหาร</td>
                    <td>2017-06-01</td>
                    <td>2017-12-13</td>
                    <td><img src='น้ำตก.jpg' alt='Product Image'></td>
                </tr><tr>
                    <td>1002</td>
                    <td>ลาบ</td>
                    <td>E3 1002</td>
                    <td>2023-06-15</td>
                    <td>2027-06-15</td>
                    <td>ภวัชรกรณ์ สิงห์เอี่ยม</td>
                    <td>ไทย</td>
                    <td>2500</td>
                    <td>E3 1002</td>
                    <td>2</td>
                    <td>อาหาร</td>
                    <td>2017-06-01</td>
                    <td>2017-07-15</td>
                    <td><img src='ลาบ.jpeg' alt='Product Image'></td>
                </tr>    </tbody>
</table>

</body>
</html>
