<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}

if (isset($_POST['order_btn'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $number = $_POST['number'];
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $method = mysqli_real_escape_string($conn, $_POST['method']);
    $address = mysqli_real_escape_string($conn, 'Address Line. ' . $_POST['street'] . ', ' . $_POST['house'] . ', ' . $_POST['district'] . ', ' . $_POST['province'] . ', ' . $_POST['country'] . ', - ' . $_POST['zip_code']);
    $placed_on = date('d-M-Y');

    $cart_total = 0;
    $cart_products[] = '';

    $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
    if (mysqli_num_rows($cart_query) > 0) {
        while ($cart_item = mysqli_fetch_assoc($cart_query)) {
            $cart_products[] = $cart_item['name'] . ' (' . $cart_item['qty'] . ') ';
            $sub_total = ($cart_item['price'] * $cart_item['qty']);
            $cart_total += $sub_total;
        }
    }

    $total_product = implode(', ', $cart_products);

    $order_query = mysqli_query($conn, "SELECT * FROM `order` WHERE name = '$name' AND number = '$number' AND email = '$email' AND method = '$method' AND address = '$address' AND total_product = '$total_product' AND total_price = '$cart_total'") or die('query failed');

    if ($cart_total == 0) {
        $message[] = 'Your cart is empty';
    } else {
        if (mysqli_num_rows($order_query) > 0) {
            $message[] = 'Order already placed!';
        } else {
            mysqli_query($conn, "INSERT INTO `order`(user_id, name, number, email, method, address, total_product, total_price, placed_on) VALUES('$user_id', '$name', '$number', '$email', '$method', '$address', '$total_product', '$cart_total', '$placed_on')") or die('query failed');
            $message[] = 'Order placed successfully!';
            mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- css link -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <?php include 'header.php'; ?>

    <div class="heading">
        <h3>Checkout</h3>
        <p> <a href="home.php">Home</a> / Checkout </p>
    </div>

    <section class="display-order">
        <?php
        $grand_total = 0;
        $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
        if (mysqli_num_rows($select_cart) > 0) {
            while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
                $total_price = ($fetch_cart['price'] * $fetch_cart['qty']);
                $grand_total += $total_price;
        ?>
                <p><?php echo $fetch_cart['name']; ?> <span>(<?php echo 'Rp. ' . $fetch_cart['price'] . '/-' . ' x ' . $fetch_cart['qty']; ?>)</span></p>
        <?php
            }
        } else {
            echo '<p class="empty">Your cart is empty</p>';
        }
        ?>
        <div class="grand-total"> Grand Total : <span>Rp. <?php echo $grand_total; ?></span> </div>
    </section>

    <section class="checkout">
        <form action="" method="post">
            <h3>Place Your Order</h3>
            <div class="flex">
                <div class="inputBox">
                    <span>Name :</span>
                    <input type="text" name="name" required placeholder="Enter your name">
                </div>
                <div class="inputBox">
                    <span>Phone :</span>
                    <input type="number" name="number" required placeholder="Enter your phone number">
                </div>
                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" name="email" required placeholder="Enter your email">
                </div>
                <div class="inputBox">
                    <span>Payment Method :</span>
                    <select name="method">
                        <option value="cash on delivery">Cash On Delivery</option>
                        <option value="credit card">Credit Card</option>
                        <option value="gopay">Gopay</option>
                        <option value="ovo">Ovo</option>
                        <option value="dana">Dana</option>

                    </select>
                </div>
                <div class="inputBox">
                    <span>Street Name and Place Name :</span>
                    <input type="text" name="street" required placeholder="ex. Jl. Sersan Bajuri">
                </div>
                <div class="inputBox">
                    <span>House Number :</span>
                    <input type="number" min="0" name="house" required placeholder="ex. House Number. ">
                </div>
                <div class="inputBox">
                    <span>District :</span>
                    <input type="text" name="district" required placeholder="ex. Sukasari">
                </div>
                <div class="inputBox">
                    <span>City :</span>
                    <input type="text" name="city" required placeholder="ex. Bandung">
                </div>
                <div class="inputBox">
                    <span>Province :</span>
                    <input type="text" name="province" required placeholder="ex. Jawa Barat">
                </div>
                <div class="inputBox">
                    <span>Country :</span>
                    <input type="text" name="country" required placeholder="ex. Indonesia">
                </div>
                <div class="inputBox">
                    <span>ZIP Code :</span>
                    <input type="number" min="0" name="zip_code" required placeholder="ex. 53223">
                </div>
            </div>
            <input type="submit" value="Order Now" class="btn" name="order_btn">
        </form>

    </section>









    <?php include 'footer.php' ?>

    <!-- link js -->
    <script src="assets/js/user_script.js"></script>

</body>

</html>