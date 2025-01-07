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
