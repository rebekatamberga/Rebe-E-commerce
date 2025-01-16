<?php
$page_title = "Searching for something specific";
$header_bg_image = "assets/images/search_header_bg.jpg";  
$header_text = "Looking for the best phone cases?";
$header_subtext = "You've come to the right place!";
include('config/db_connect.php');


// fetches all products from db
$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);

// checkin if produc even exists
if (mysqli_num_rows($result) > 0) {
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    $products = [];
}
include('templates/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REBE Shop cute phone cases</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<div class="container mt-4">
    <input type="text" id="search-input" class="form-control" placeholder="Search products..." oninput="searchProducts()">
    <div class="row mt-3" id="product-list">
        <?php foreach ($products as $product): ?>
        <div class="col-md-4 mb-4 product-card">
            <div class="card">
                <img src="assets/images/<?php echo $product['image']; ?>" class="card-img-top" alt="<?php echo $product['name']; ?>">
                <div class="card-body">
                    <h5 class="card-title product-name"><?php echo $product['name']; ?></h5>
                    <p class="card-text product-description"><?php echo substr($product['description'], 0, 100); ?>...</p>
                    <p class="product-price">£<?php echo number_format($product['price'], 2); ?></p>
                    <a href="product.php?id=<?php echo $product['id']; ?>" class="btn btn-success">View Product</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php
include('templates/footer.php');
?>
