<?php
session_start();
include('templates/header.php');

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); 
    exit();
}

echo "<h2>Welcome, " . $_SESSION['user_name'] . "!</h2>";

?>

<p>Your account details can be found here.</p>

<?php include('templates/footer.php'); ?>
