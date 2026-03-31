<?php include 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Products - SAKARA</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav>
    <h2>SAKARA</h2>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</nav>

<div class="container">
    <h1>Products</h1>

    <div class="products">
        <?php
        $result = $conn->query("SELECT * FROM products");

        while($row = $result->fetch_assoc()) {
            echo "
            <div class='card'>
                <img src='{$row['image']}' alt=''>
                <h3>{$row['name']}</h3>
                <p>\${$row['price']}</p>
            </div>
            ";
        }
        ?>
    </div>
</div>

</body>
</html>