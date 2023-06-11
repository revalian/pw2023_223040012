<?php
include '../../config.php';

$keyword = $_GET['keyword'];

$query = mysqli_query($conn, "SELECT * FROM product WHERE name LIKE '%$keyword%'");
?>

<div class="box-container">
    <?php
    if (mysqli_num_rows($query) > 0) {
        while ($p = mysqli_fetch_assoc($query)) {
    ?>
            <div class="box">
                <img src="assets/upload_img/<?php echo $p['image']; ?>" alt="">
                <div class="name"><?php echo $p['name']; ?></div>
                <div class="price">Rp. <?php echo $p['price']; ?>/-</div>
                <a href="admin_product.php?update=<?php echo $p['id']; ?>" class="option-btn">Update</a>
                <a href="admin_product.php?delete=<?php echo $p['id']; ?>" class="delete-btn" onclick="return confirm('Delete this product?');">Delete</a>
            </div>
    <?php
        }
    } else {
        echo '<div class="row">
              <div class="col-md-6">
                  <div class="alert alert-danger" role="alert">
                      <h1 style="text-align:center; color:red; font-size:20px;">Product not found!</h1>
                  </div>
              </div>
          </div>';
    }
    ?>
</div>