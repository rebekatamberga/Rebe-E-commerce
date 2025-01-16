<?php
include('templates/header.php');
?>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-4 product-card">
            <div class="card">
                <img src="assets/images/dog_case_1.jpg" class="card-img-top" alt="Dog Case 1">
                <div class="card-body">
                    <h5 class="card-title product-name">Personalised dog phone case with name</h5>
                    <p class="card-text">Phone case with your dog and their name</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 product-card">
            <div class="card">
                <img src="assets/images/dog_case_2.jpg" class="card-img-top" alt="Dog Case 2">
                <div class="card-body">
                    <h5 class="card-title product-name">Personalised dog phone case</h5>
                    <p class="card-text">Phone case of your own doggo!!</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 product-card">
            <div class="card">
                <img src="assets/images/cat_case_1.jpg" class="card-img-top" alt="Cat Case 1">
                <div class="card-body">
                    <h5 class="card-title product-name">Personalised cat phone case</h5>
                    <p class="card-text">A phone case with your cute cat!</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="special-offers" style="background-image: url('assets/images/offer_header_bg.jpg')">
    <div class="offer-overlay"></div>
    <div class="text-content">
        <h2>Special Offers</h2>
        <p>Get 10% off on your first order!</p>
        <a href="search.php" class="btn btn-warning">Shop Now</a>
    </div>
</div>


<div class="cust py-5">
    <div class="container text-center">
        <h2>What customers say</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="customa">
                    <p>"I love my CUTEEE phone case of my doggo!"</p>
                    <p><strong>- Rebeka T.</strong></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="customa">
                    <p>"The phone case is perfect! Fast delivery and great service."</p>
                    <p><strong>- James L.</strong></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="customa">
                    <p>"I ordered a phone case as a gift, for my grandma, of her cat, she really loved it!!!!"</p>
                    <p><strong>- Josh T.</strong></p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="newsletter py-5 text-center" style="background-image: url('assets/images/news_header_bg.jpg')">
    <div class="offer-overlay"></div>
    <div class="text-content">
        <h2>Subscribe to the newsletter</h2>
        <p>Stay updated with the latest products and offers :D</p>
    </div>
    <form>
        <input type="email" class="form-control w-50 mx-auto" placeholder="Enter your email">
        <button type="submit" class="btn btn-primary mt-3">Subscribe</button>
    </form>
</div>

<div class="categories py-5 text-center" style="background-color: #e4f7ff;">
    <h2>Explore categories</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="#" class="btn btn-outline-secondary w-100">Dog Cases</a>
            </div>
            <div class="col-md-3">
                <a href="#" class="btn btn-outline-secondary w-100">Cat Cases</a>
            </div>
            <div class="col-md-3">
                <a href="#" class="btn btn-outline-secondary w-100">Custom Cases</a>
            </div>
            <div class="col-md-3">
                <a href="#" class="btn btn-outline-secondary w-100">Discounts</a>
            </div>
        </div>
    </div>
</div>

<?php
include('templates/footer.php');
?>