<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="Store.css"></link>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f84e312a46.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <div class="d-flex flex-row">
                <img src="fl1.jpg" class="food-munch-logo" />
                
            </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link active" id="Navitem1" href="#wcuSection"> <span class="sr-only">(current)</span></a>
                    <a class="nav-link active" id="Navitem1" href="https://www.google.co.in/maps">
                        <i class="fas fa-location"></i>Locate me<span class="sr-only">(current)</span>
                      </a>
                      
                      <a class="nav-link" id="Navitem2" href="#exploreSection">
                        <i class="fas fa-compass"></i> Explore
                      </a>
                      
                      <a class="nav-link" id="Navitem3" href="#deliverypaymentSection">
                        <i class="fas fa-truck"></i> Delivery & Payment
                      </a>
                      
                      <a class="nav-link" id="Navitem4" href="cart.html">
                        <i class="fas fa-shopping-cart"></i> My Cart
                      </a>
                      
                      <a class="nav-link" id="Navitem5" href="#followSection">
                        <i class="fab fa-twitter"></i> Follow Us
                      </a>
                      
                    
                </div>
            </div>
        </div>
    </nav>
    <div class="banner-section-bg-container d-flex flex-column justify-content-center">
        <div class="text-center">
            <h1 class="banner-section-heading mb-3">Discover the delight of local treasures! </h1>
            <p class="banner-section-para mb-4"> Eat Smart & Healthy </p>
            <a href="check.php"><button class="custom-button"> Sign Up</button></a>
            <a href="login.php"><button class="custom-outline-button">Log in</button></a>
        </div>
    </div>
           


    <div class="wcu-section pt-5 pb-5" id="wcuSection">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="wcu-section-heading">Best Offers!</h1>
                    <p class="wcu-section-description">Discover a treasure trove of unbeatable deals and unmatched savings! Act now and seize the best offers on a wide range of products and services. Don't wait, shop smart and save big while you can!<br> Limited time offer, so don't miss out!</p>
                </div>
                </div>
            </div>
        </div>



        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <a href="C:\Users\sahit\OneDrive\Desktop\New folder\Pharma.html"><img src="https://www.bigbasket.com/media/uploads/banner_images/hp_m_health_suppliment_250723_400.jpg" class="d-block" alt="..."></a>
                
              </div>
              <div class="carousel-item">
                <a href="C:\Users\sahit\OneDrive\Desktop\New folder\BabyCare.html"><img src="https://www.bigbasket.com/media/uploads/banner_images/hp_m_babycare_250723_400.jpg" class="d-block" alt="..."></a>
              </div>
              <div class="carousel-item">
                <a href="C:\Users\sahit\OneDrive\Desktop\New folder\PetCare.html"><img src="https://www.bigbasket.com/media/uploads/banner_images/hp_m_petstore_250723_400.jpg" class="d-block" alt="..."></a>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          
         
          

       



    <div class="explore-menu-section pb-5 pt-5" id="exploreSection">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="menu-section-heading">Explore</h1>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="menu-item-card mb-3 p-3 shadow">
                        <img src="https://img.freepik.com/free-photo/organic-hygenic-products-with-olive-oil_23-2148337459.jpg?w=900&t=st=1690480074~exp=1690480674~hmac=bc61086c7ecd71b6b737b65d411de84888c1fc848c31fcb3def39675ff567338" class="menu-item-image" \>
                        <h1 class="menu-item-heading">Edible Oils & Ghee</h1>
                        <a href="products.html" class="menu-item-link">
                            View All
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="menu-item-card mb-3 p-3 shadow">
                        <img src="https://img.freepik.com/free-photo/dairy-products-composition-flat-lay_23-2148601737.jpg?size=626&ext=jpg&ga=GA1.1.817500034.1690366122&semt=ais" class="menu-item-image" \>
                        <h1 class="menu-item-heading">Dairy Products</h1>
                        <a href="Dairyproducts.html" class="menu-item-link">
                            View All
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="menu-item-card mb-3 p-3 shadow">
                        <img src="https://img.freepik.com/free-photo/christmas-sweets-platter_114579-31135.jpg?size=626&ext=jpg&ga=GA1.1.817500034.1690366122&semt=ais" class="menu-item-image" \>
                        <h1 class="menu-item-heading">Breads & Bakery</h1>
                        <a href="Breads.html" class="menu-item-link">
                            View All
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="menu-item-card mb-3 p-3 shadow">
                        <img src="https://img.freepik.com/premium-photo/fresh-fish-seafood-white-wooden-background-flounder-lobster-squid-tuna-fish-top-view-free-copy-space_187166-43173.jpg?size=626&ext=jpg&ga=GA1.1.817500034.1690366122&semt=ais" class="menu-item-image" \>
                        <h1 class="menu-item-heading">Meat, Mutton & Sea food </h1>
                        <a href="NonVegproducts.html" class="menu-item-link">
                            View All
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="menu-item-card mb-3 p-3 shadow">
                        <img src="https://img.freepik.com/free-photo/view-allergens-commonly-found-grains_23-2150170288.jpg?w=900&t=st=1690479556~exp=1690480156~hmac=d426bd223069f806a031f673dbd65ae964574956b825d72c78d92ea76a715833" class="menu-item-image" \>
                        <h1 class="menu-item-heading">Rice, Atta & Dals</h1>
                        <a href="RiceAttaDal.html" class="menu-item-link">
                            View All
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="menu-item-card mb-3 p-3 shadow">
                        <img src="https://img.freepik.com/free-photo/set-pecan-pistachios-almond-peanut-cashew-pine-nuts-lined-up-assorted-nuts-dried-fruits-mini-different-bowls_176474-2051.jpg?size=626&ext=jpg&ga=GA1.2.817500034.1690366122&semt=ais" class="menu-item-image" \>
                        <h1 class="menu-item-heading">Dry Fruits & Masalas </h1>
                        <a href="nuts.html" class="menu-item-link">
                            View All
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                    </div>
                </div>


                <div class="col-12 col-md-6 col-lg-3">
                    <div class="menu-item-card mb-3 p-3 shadow">
                        <img src="https://img.freepik.com/free-photo/chocolate-brownie-served-with-vanilla-icecream-ball-strawberries_114579-2595.jpg?w=900&t=st=1690480386~exp=1690480986~hmac=df639b88b42d449fce001f31fec8456f01bde0169f325e3b2fa17dc3deb8673a" class="menu-item-image" \>
                        <h1 class="menu-item-heading">Chocolates & Desserts </h1>
                        <a href="chocolates.html" class="menu-item-link">
                            View All
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                    </div>
                </div>


                

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="menu-item-card mb-3 p-3 shadow">
                        <img src="https://img.freepik.com/free-photo/delicious-raw-macaroni-vermicelli-wooden-bowls_114579-33434.jpg?size=626&ext=jpg&ga=GA1.1.817500034.1690366122&semt=ais" class="menu-item-image" \>
                        <h1 class="menu-item-heading">Instant & Frozen Foods </h1>
                        <a href="InstantFood.html" class="menu-item-link">
                            View All
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                    </div>
                </div>


                <div class="col-12 col-md-6 col-lg-3">
                    <div class="menu-item-card mb-3 p-3 shadow">
                        <img src="https://img.freepik.com/free-photo/pet-accessories-still-life-concept-with-colorful-objects_23-2148949578.jpg?size=626&ext=jpg&ga=GA1.1.817500034.1690366122&semt=ais" class="menu-item-image" \>
                        <h1 class="menu-item-heading">Pet Care</h1>
                        <a href="PetCare.html" class="menu-item-link">
                            View All
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                    </div>
                </div>

    

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="menu-item-card mb-3 p-3 shadow">
                        <img src="https://img.freepik.com/free-photo/beauty-product-still-life_23-2147817672.jpg?size=626&ext=jpg&ga=GA1.1.817500034.1690366122&semt=ais" class="menu-item-image" \>
                        <h1 class="menu-item-heading">Baby Care</h1>
                        <a href="BabyCare.html" class="menu-item-link">
                            View All
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="menu-item-card mb-3 p-3 shadow">
                        <img src="https://img.freepik.com/free-photo/close-up-collection-make-up-beauty-products_23-2148620012.jpg?size=626&ext=jpg&ga=GA1.1.817500034.1690366122&semt=ais" class="menu-item-image"\>
                        <h1 class="menu-item-heading">Make Up & Grooming</h1>
                        <a href="Makeup.html" class="menu-item-link">
                            View All
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="menu-item-card mb-3 p-3 shadow">
                        <img src="https://img.freepik.com/free-photo/high-angle-pill-foils-plastic-containers_23-2148533456.jpg?size=626&ext=jpg&ga=GA1.1.817500034.1690366122&semt=ais" class="menu-item-image" \>
                        <h1 class="menu-item-heading">Supplements & Pharma</h1>
                        <a href="pharma.html" class="menu-item-link">
                            View All
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="health-section pt-5 pb-5" id="healthSection">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5">
                    <div class="text-center">
                        <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/healthy-food-plate-img.png" class="health-section-image" />
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <h1 class="health-section-heading">
                        Fresh, Healthy, Organic Delicious Fruits
                    </h1>
                    <p class="health-section-description">
                        Say no to harmful chemicals and go fully organic with our range of
                        fresh fruits and veggies. Pamper your body and your senses with
                        the true and unadulterated gifts from mother nature. with the true
                        and unadulterated gifts from mother nature.
                    </p>
                    <a href="https://youtu.be/yTQ0tBmLbns"><button class="custom-button"> Watch video </button></a>
                </div>
            </div>
        </div>
    </div>

    <div class="payment-section pt-5 pb-5" id="deliverypaymentSection">
        <div class="container">
            <div class="row ">
                <div class="col-12 col-md-5 order-md-2">
                    <div class="text-center">
                        <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/delivery-payment-section-img.png" class="payment-section-image" \>
                    </div>
                </div>
                <div class="col-12 col-md-7 order-md-1">
                    <h1 class="payment-section-heading">
                        Delivery and Payment
                    </h1>
                    <p class="payment-section-description">
                     Choose from a variety of convenient methods, including credit/debit cards, net banking, UPI, and digital wallets. 

Track your order live with our real-time tracking feature, and witness your food's journey right to your doorstep. Pay online to avail a special 5% discount on every order.

<br>At Pantry Paradise, we make payment and delivery a breeze, so you can savor every moment of your dining experience. Thank you for choosing us!
                    </p>
                    <a href="#exploreSection"><button class="custom-button"> Order Now </button></a>
                    <div class="mt-3">
                        <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/visa-card-img.png" class="payment-sm-image" \>
                        <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/master-card-img.png" class="payment-sm-image" \>
                        <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/paypal-card-img.png" class="payment-sm-image" \>
                        <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/american-express-img.png" class="payment-sm-image" \>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="thankyou-section pt-5 pb-5" id="thankyouSection">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 d-flex flex-column justify-content-center">
                    <h1 class="thankyou-section-heading">
                        Thank You!
                    </h1>
                    <p class="thankyou-section-description">
                        Thank you! Your continued support means the world to us. We are grateful to have you as our valued customer. If you ever need assistance or have any questions, feel free to reach out. We're here for you.
                    </p>
                    <div class=" d-md-none">
                        <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/thanking-customers-section-img.png" class="thankyou-gift-image" \>
                    </div>
                    <div>

                        <!-- Button trigger modal -->
                        <button type="button" class="custom-outline-button1" data-toggle="modal" data-target="#exampleModal">
                            Redeem Gift
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"> Gift Voucher </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/gift-voucher-img.png" class="w-100" />
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="custom-button" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 d-none d-md-block">
                    <img src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-responsive-website/thanking-customers-section-img.png" class="thankyou-gift-image" \>
                </div>
            </div>
        </div>
    </div>

    <div class="follow-us-section pt-5 pb-5" id="followSection">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="follow-us-section-heading">
                        Follow Us
                    </h1>
                    <div class="d-flex flex-row justify-content-center">
                        <div class="follow-us-icon-container">
                            <a href="https://twitter.com/?lang=en-in"><i class="fa-brands fa-twitter icon"></i></a>
                        </div>
                        <div class="follow-us-icon-container">
                            <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram icon"></i></a>
                        </div>
                        <div class="follow-us-icon-container">
                            <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-section pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <img src="fl1.jpg" class="food-munch-logo" />
                        <p class="footer-section-email">
                            PantryParadise57575@gmail.com
                        </p>
                        <p class="footer-section-address">
                            42 Rosewood, Park Lane, Green Valley Colony, New Delhi - 110070, Delhi, India
                        </p>
                        <p>Call Us</p>
                        <a href="">+91 98765 43210</a><br>
                        <a href="">+91 87654 32109</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
