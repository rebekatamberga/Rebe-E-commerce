<?php
session_start();
include('../config/db_connect.php');

$header_bg_image = "../assets/images/login_header_bg.jpg";
$header_text = "Admin Login";
$header_subtext = "Access the admin panel here.";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password']) && $user['is_admin'] == 1) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['is_admin'] = true;

            header('Location: admin_dashboard.php');
            exit();
        } else {
            $error_message = 'Invalid credentials or not an admin!';
        }
    } else {
        $error_message = 'No user found!';
    }
    $stmt->close();
}

include('../header.php');
?>

<div class="container py-5">
    <h2 class="text-center mb-4">Admin Login</h2>
    <?php if (isset($error_message)): ?>
        <div class="alert alert-danger">
            <?php echo $error_message; ?>
        </div>
    <?php endif; ?>
    <form method="POST" action="login.php" class="w-50 mx-auto">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
</div>

<?php include('../footer.php'); ?>
