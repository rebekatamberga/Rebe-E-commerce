<?php
include('config/db_connect.php');

$product_id = isset($_GET['id']) ? $_GET['id'] : 0;

if ($product_id <= 0) {
    echo "Invalid product ID.";
    exit;
}

$stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
$stmt->bind_param('i', $product_id);
$stmt->execute();
$product_result = $stmt->get_result();

if ($product_result->num_rows > 0) {
    $product = $product_result->fetch_assoc();
} else {
    $product = null;
}

include('templates/header.php');
?>

<div class="container py-5">
    <?php if ($product): ?>
        <div class="row">
            <div class="col-md-6">
                <img src="assets/images/<?php echo htmlspecialchars($product['image']); ?>" class="img-fluid" alt="<?php echo htmlspecialchars($product['name']); ?>">
            </div>
            <div class="col-md-6">
                <h2><?php echo htmlspecialchars($product['name']); ?></h2>
                <p><?php echo htmlspecialchars($product['description']); ?></p>
                <p><strong>Price: £<?php echo number_format($product['price'], 2); ?></strong></p>
                <button id="add-to-cart" class="btn btn-success" data-id="<?php echo $product['id']; ?>" data-name="<?php echo $product['name']; ?>" data-price="<?php echo $product['price']; ?>" data-image="<?php echo $product['image']; ?>">Add to Cart</button>
            </div>
        </div>
    <?php else: ?>
        <p>Product not found.</p>
    <?php endif; ?>
</div>

<?php include('templates/footer.php'); ?>

<script src="assets/js/main.js"></script> 
