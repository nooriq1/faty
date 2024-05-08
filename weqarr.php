<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Market</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color:khaki;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .product {
            background-color: #f9f9f9;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .product img {
            width: 100px;
            height: auto;
            margin-right: 20px;
        }

        .product h2 {
            color: palevioletred;
        }

        .product p {
            margin: 5px 0;
        }

        .total {
            text-align: right;
            margin-top: 20px;
        }

        .total p {
            font-weight: bold;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>رسمات اونلاين</h1>
        <?php
        // Define an array of products with images
        $products = [
            [
                'name' => 'Product 1',
                'price' => 100,
                'description' => 'Gray girl drawing',
                'image' => '1.jpeg',
            ],
            [
                'name' => 'Product 2',
                'price' => 150,
                'description' => 'Gray wman drawing',
                'image' => '6.jpeg',
            ],
            [
                'name' => 'Product 3',
                'price' => 200,
                'description' => 'Gray horse drawing',
                'image' => '3.jpeg',
            ],
        ];

        // Display products with images
        foreach ($products as $product) {
            echo "<div class='product'>";
            echo "<img src='" . $product['image'] . "' alt='" . $product['name'] . "'>";
            echo "<div>";
            echo "<h2>" . $product['name'] . "</h2>";
            echo "<p>Price: $" . $product['price'] . "</p>";
            echo "<p>" . $product['description'] . "</p>";
            echo "</div>";
            echo "</div>";
        }

        // Function to calculate total price
        function calculateTotalPrice($products) {
            $total = 0;
            foreach ($products as $product) {
                $total += $product['price'];
            }
            return $total;
        }

        // Display total price
        echo "<div class='total'>";
        echo "<p>Total Price: $" . calculateTotalPrice($products) . "</p>";
        echo "</div>";
        ?>
    </div>
</body>
</html>