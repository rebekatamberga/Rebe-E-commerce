<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$header_bg_image = "../assets/images/user_dashboard_header.jpg";
$header_text = "User Dashboard";
$header_subtext = "Manage your account and orders.";

include('../header.php');
?>

<div class="container py-5">
    <h2 class="text-center">Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</h2>
    <p class="text-center">This is your personalized dashboard.</p>
    <div class="text-center mt-4">
        <a href="profile.php" class="btn btn-secondary">View Profile</a>
        <a href="../cart.php" class="btn btn-secondary">View Cart</a>
    </div>
</div>

<?php include('../footer.php'); ?>
