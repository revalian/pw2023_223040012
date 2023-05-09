<header class="header">

    <div class="flex">

        <a href="admin_page.php">Admin <span>Panel</span> </a>

        <nav class="navbar">
            <a href="admin_page.php">Home</a>
            <a href="admin_product.php">Product</a>
            <a href="admin_order.php">Order</a>
            <a href="admin_user.php">User</a>
            <a href="admin_contact.php">Message</a>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="user-btn" class="fas fa-user"></div>
        </div>

        <div class="account-box">
            <p>Username : <span><?php echo $_SESSION['admin_name']; ?></span></p>
            <p>Email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">Logout</a>
        </div>
    </div>


</header>