<?php
session_start();

$page_title = "Thank you for shopping with us!";
$header_bg_image = "assets/images/cart_header_bg.jpg";  
$header_text = "Thank you for shopping with REBE Shop!";
$header_subtext = "Your cart details are below.";

include('templates/header.php');
?>

<div class="container py-5">
    <h1>Your Cart</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="cart-items">
            <!-- Cart items will be dynamically injected here -->
        </tbody>
    </table>
    <h3>Total: £<span id="total-price">0.00</span></h3>
    <a href="checkout.php" class="btn btn-success">Proceed to Checkout</a>
</div>

<script>
    // Retrieve cart data from local storage or initialize as empty array
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let cartItemsContainer = document.querySelector('#cart-items');
    let totalPrice = 0;

    // If cart is empty, display a message
    if (cart.length === 0) {
        cartItemsContainer.innerHTML = '<tr><td colspan="5" class="text-center">Your cart is empty ):</td></tr>';
    } else {
        // Loop through each item and create a row in the table
        cart.forEach(item => {
            totalPrice += item.price * item.quantity;
            let row = `<tr>
                <td>${item.name}</td>
                <td>£${item.price}</td>
                <td>${item.quantity}</td>
                <td>£${(item.price * item.quantity).toFixed(2)}</td>
                <td><button class="btn btn-danger" onclick="removeFromCart(${item.id})">Remove</button></td>
            </tr>`;
            cartItemsContainer.innerHTML += row;
        });
    }

    // Update total price
    document.getElementById('total-price').innerText = totalPrice.toFixed(2);

    // Remove product from cart and update local storage
    function removeFromCart(productId) {
        cart = cart.filter(item => item.id !== productId);
        localStorage.setItem('cart', JSON.stringify(cart));
        location.reload();  // Refresh the page to update the cart display
    }
</script>

<?php include('footer.php'); ?>
