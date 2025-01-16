document.addEventListener('DOMContentLoaded', function() {

    const addToCartButton = document.getElementById('add-to-cart');
    
    if (addToCartButton) {
        addToCartButton.removeEventListener('click', handleAddToCart); 
        addToCartButton.addEventListener('click', handleAddToCart);  
    }

    updateCartDisplay();
});

function handleAddToCart() {
    const product = {
        id: parseInt(this.getAttribute('data-id')),
        name: this.getAttribute('data-name'),
        price: parseFloat(this.getAttribute('data-price')),
        image: this.getAttribute('data-image')
    };
    addToCart(product);  
}

function updateCartDisplay() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    document.getElementById('cart-count').innerText = cart.length;
}

function addToCart(product) {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
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
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const updatedCart = cart.filter(item => item.id !== productId);  
    localStorage.setItem('cart', JSON.stringify(updatedCart)); 
    updateCartDisplay();  
}

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
}