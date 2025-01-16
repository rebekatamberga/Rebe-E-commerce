<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

include('../config/db_connect.php');

$page_title = "Profile";
$header_bg_image = "../assets/images/profile_bg.jpg";  
$header_text = "Profile";
$header_subtext = "View and manage your account details.";

include('../templates/header.php');

$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT name, email FROM users WHERE id = ?");
$stmt->bind_param('i', $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
$stmt->close();
?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REBE Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> 
</head>


<div class="container py-5">
    <h2 class="text-center mb-4">Your Profile</h2>
    <div class="card mx-auto" style="max-width: 500px;">
        <div class="card-body">
            <h5 class="card-title">Name: <?php echo $user['name']; ?></h5>
            <p class="card-text">Email: <?php echo $user['email']; ?></p>
            <a href="edit_profile.php" class="btn btn-primary">Edit Profile</a>
        </div>
    </div>
</div>

<?php include('../templates/footer.php'); ?>
