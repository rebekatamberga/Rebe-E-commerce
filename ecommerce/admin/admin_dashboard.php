<?php
session_start();

if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
    header('Location: login.php');
    exit();
}

$header_bg_image = "../assets/images/admin_dashboard_header.jpg";
$header_text = "Admin Dashboard";
$header_subtext = "Manage your shop efficiently.";

include('../header.php');
?>

<div class="container py-5">
    <h2 class="text-center">Welcome to the Admin Panel</h2>
    <p class="text-center">Here you can manage users and products.</p>
    <div class="text-center mt-4">
        <a href="manage_users.php" class="btn btn-secondary">Manage Users</a>
        <a href="manage_products.php" class="btn btn-secondary">Manage Products</a>
    </div>
</div>

<?php include('../footer.php'); ?>
