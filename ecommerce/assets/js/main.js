let cart = JSON.parse(localStorage.getItem('cart')) || [];

function updateCartDisplay() {
    document.getElementById('cart-count').innerText = cart.length;
}

function addToCart(product) {
    const existingProduct = cart.find(item => item.id === product.id);
    if (existingProduct) {
        existingProduct.quantity += 1;
    } else {
        cart.push({...product, quantity: 1});
    }
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCartDisplay();
}

function removeFromCart(productId) {
    cart = cart.filter(item => item.id !== productId);
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCartDisplay();
}

document.addEventListener('DOMContentLoaded', function() {
    updateCartDisplay();

    const addToCartButton = document.getElementById('add-to-cart');
    if (addToCartButton) {
        addToCartButton.addEventListener('click', function() {
            const product = {
                id: addToCartButton.dataset.id,
                name: addToCartButton.dataset.name,
                price: parseFloat(addToCartButton.dataset.price),
                image: addToCartButton.dataset.image
            };
            addToCart(product);
        });
    }
});

function searchProducts() {
    const input = document.getElementById('search-input').value.toLowerCase();
    const productCards = document.querySelectorAll('.product-card');

    productCards.forEach(card => {
        const productName = card.querySelector('.product-name').textContent.toLowerCase();
        if (productName.includes(input)) {
            card.style.display = '';
        } else {
            card.style.display = 'none';
        }
    });
};