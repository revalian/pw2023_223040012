<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
    header('location:login.php');
}

if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM `users` WHERE id = '$delete_id'") or die('query failed');
    header('location:admin_user.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- admin css -->
    <link rel="stylesheet" href="assets/css/admin_style.css">
</head>

<body>

    <?php include 'admin_header.php'; ?>

    <section class="users">

        <h1 class="title"> User Accounts</h1>

        <div class="box-container">
            <?php
            $select_users = mysqli_query($conn, "SELECT * FROM `users`") or die('query failed');
            while ($fetch_users = mysqli_fetch_assoc($select_users)) {
            ?>
                <div class="box">
                    <p> User Id : <span><?php echo $fetch_users['id']; ?></span> </p>
                    <p> Username : <span><?php echo $fetch_users['name']; ?></span> </p>
                    <p> Email : <span><?php echo $fetch_users['email']; ?></span> </p>
                    <p> User Type : <span style="color:<?php if ($fetch_users['user_type'] == 'admin') {
                                                            echo 'var(--orange)';
                                                        } ?>"><?php echo $fetch_users['user_type']; ?></span> </p>
                    <a href="admin_user.php?delete=<?php echo $fetch_users['id']; ?>" onclick="return confirm('Delete this user?');" class="delete-btn">Delete User</a>
                </div>
            <?php
            };
            ?>
        </div>

    </section>






















    <!-- js file link -->
    <script src="assets/js/admin_script.js"></script>

</body>

</html>