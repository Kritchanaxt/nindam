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
            background: url('nindam_head_banner.jpg') no-repeat center center;
            background-size: cover;
        }
        .title {
            padding: 20px;
        }
        .menu {
            padding: 10px;
        }
        .content {
            padding: 20px;
            text-align: left;
        }
        .content h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .content p {
            font-size: 16px;
            line-height: 1.6;
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

    <!-- History Background of Guitar -->
    <div class="content">
        <h2>History of the Guitar</h2>
        <p>
            The guitar is a stringed musical instrument that has evolved over centuries from early predecessors such as the lute, the oud, and the vihuela. The modern guitar, as we know it, began to take shape in the 16th century. The term "guitar" comes from the Latin word "cithara," which referred to a stringed instrument used by ancient Romans. Early guitars had fewer strings and were played with a plectrum or the fingers.
        </p>
        <p>
            By the 19th century, the guitar had undergone significant changes, such as the addition of more strings and the introduction of a larger, more resonant body. The Spanish guitar, in particular, became very influential during this time. In the early 20th century, the invention of the steel-string guitar marked a turning point, making the instrument louder and more durable, which led to the rise of popular music genres like blues, folk, and country.
        </p>
        <p>
            The electric guitar, introduced in the 1930s, revolutionized the music world and paved the way for rock and roll, jazz, and other modern genres. The electric guitar's ability to amplify sound and produce a variety of effects made it the centerpiece of popular music. Today, the guitar continues to evolve with advancements in technology, playing a central role in virtually every genre of music, from classical to modern rock.
        </p>
    </div>

    <!-- Include Footer -->
    <!-- footer.php -->
<footer>
    <div class="footer-content">
        <p>2025 Nindam Technologies.</p>
    </div>
</footer>

</div>

</body>
</html>
