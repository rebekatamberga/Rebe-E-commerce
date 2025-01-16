<?php
session_start();

$page_title = "Login or register?";
$header_bg_image = "assets/images/login_header_bg.jpg";  
$header_text = "Login to your account";
$header_subtext = "Or register for a new one!";


include('templates/header.php');
?>

<form method="POST" action="dashboard.php">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Login</button>
</form>

<?php include('templates/footer.php'); ?>
