<!DOCTYPE html>

<?php
include('./products.php');

?>

<html>

<head>
    <title>List Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit-icons.min.js"></script>
</head>

<body>


    <div class="uk-alert-success uk-margin-medium-left uk-margin-medium-right" uk-alert>
        <a class="uk-alert-close" uk-close></a>

        <p>All products.</p>
        <table >

            <tr>
                <td>Product ID</td>
                <td>Product Title</td>
                <td>Variant Title</td>
                <td>Price</td>
            </tr>
            <?php
            require('./products.php');
            foreach ((array) $products as $product) {
                echo "<tr>
            <td>" . $product['variants'][0]['product_id'] . "</td>
            <td>" . $product['title'] . "</td>
            <td>" . $product['variants'][0]['title'] . "</td>
            <td>" . $product['variants'][0]['price'] . "</td>
            </tr>";
            }
            ?>
        </table>


</body>

</html>