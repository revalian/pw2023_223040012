<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
    header('location:login.php');
}

if (isset($_POST['update_order'])) {

    $order_update_id = $_POST['order_id'];
    $update_payment = $_POST['update_payment'];
    mysqli_query($conn, "UPDATE `order` SET payment_status = '$update_payment' WHERE id = '$order_update_id'") or die('query failed');
    $message[] = 'Payment status has been updated!';
}

if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM `order` WHERE id = '$delete_id'") or die('query failed');
    header('location:admin_order.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- admin css -->
    <link rel="stylesheet" href="assets/css/admin_style.css">
</head>
<style>
    @media print {
        .no-print {
            display: none;
        }

        .prints {
            margin-top: 10vh;
        }
    }
</style>

<body>

    <?php include 'admin_header.php'; ?>

    <section class="orders prints">

        <h1 class="title">Placed Orders</h1>

        <button class="print no-print btn btn-success" onclick="window.print()">
            <i class="fa fa-file-pdf-o no-print"></i>
            <span class="no-print">

                PRINT
            </span>

        </button>

        <div class="box-container">
            <?php
            $select_orders = mysqli_query($conn, "SELECT * FROM `order`") or die('query failed');
            if (mysqli_num_rows($select_orders) > 0) {
                while ($fetch_orders = mysqli_fetch_assoc($select_orders)) {
            ?>
                    <div class="box">
                        <p> User Id : <span><?php echo $fetch_orders['user_id']; ?></span> </p>
                        <p> Placed On : <span><?php echo $fetch_orders['placed_on']; ?></span> </p>
                        <p> Name : <span><?php echo $fetch_orders['name']; ?></span> </p>
                        <p> Number : <span><?php echo $fetch_orders['number']; ?></span> </p>
                        <p> Email : <span><?php echo $fetch_orders['email']; ?></span> </p>
                        <p> Address : <span><?php echo $fetch_orders['address']; ?></span> </p>
                        <p> Total Products : <span><?php echo $fetch_orders['total_product']; ?></span> </p>
                        <p> Total Price : <span>Rp. <?php echo $fetch_orders['total_price']; ?></span> </p>
                        <p> Payment Method : <span><?php echo $fetch_orders['method']; ?></span> </p>
                        <form action="" method="post">
                            <input type="hidden" name="order_id" value="<?php echo $fetch_orders['id']; ?>">
                            <select name="update_payment">
                                <option value="" selected disabled><?php echo $fetch_orders['payment_status']; ?></option>
                                <option value="pending">Pending</option>
                                <option value="completed">Completed</option>
                            </select>
                            <input type="submit" value="update" name="update_order" class="option-btn">
                            <a href="admin_order.php?delete=<?php echo $fetch_orders['id']; ?>" onclick="return confirm('Delete this order?');" class="delete-btn">Delete</a>
                        </form>
                    </div>
            <?php
                }
            } else {
                echo '<p class="empty">No orders placed yet!</p>';
            }
            ?>
        </div>
    </section>






















    <!-- js file link -->
    <script src="assets/js/admin_script.js"></script>

</body>

</html>