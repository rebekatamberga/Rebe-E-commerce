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

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">REBE Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="search.php">Products</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="login.php"><i class="fas fa-user"> Login </i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> Cart <span id="cart-count" class="badge custom-badge">0</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            document.getElementById('cart-count').innerText = cart.length;
        });
    </script>

    <div class="header-bg" style="background-image: url('<?php echo isset($header_bg_image) ? $header_bg_image : 'assets/images/header_bg.jpg'; ?>'); background-size: cover; height: 300px; position: relative;">
        <div class="header-overlay"></div>
        <div class="text-center text-white" style="padding-top: 100px; position: relative; z-index: 2;">
            <h1><?php echo isset($header_text) ? $header_text : 'Welcome to REBE Shop!'; ?></h1>
            <p><?php echo isset($header_subtext) ? $header_subtext : 'Shop the best phone cases for your phone :D'; ?></p>
        </div>
    </div>
</body>
</html>