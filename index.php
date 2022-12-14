<!doctype html>
<html lang="en">

<head>
  <title>Saico Foods</title>

  
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <meta name="title" content="Saico Foods">
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- <link rel="icon" href="assets/img/logo.png"> -->

  <!-- og content  -->
  <meta property="og:title" content="Saico Foods" />
  <meta property="og:site_name" content="www.saicofoods.com" />
  <meta property="og:url" content="http://saicofoods.com/" />
  <meta property="og:description" content="Saico Foods | Taste the Flavour of Tradition" />
  <meta property="og:image" content="http://saico-foods.com/assets/img/logo.png" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <!-- owl carousel cdn  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- slick css  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- custom css  -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- aos cdn  -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  
  <!-- fontawesome cdn  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

  <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_6hrplbhl.json"  background="transparent"  speed="0.4"  style="width: 60px; height: 60px;position: fixed; bottom: 25px;z-index: 11;left: 25px;"  loop autoplay></lottie-player>


  <?php include 'include/header.php' ?>

  
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <img class="offcanvas-logo" src="assets/img/logo.png" alt="">
      <button type="button" class="close-icon text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
        <img class="close-icon-img" src="assets/img/close.png" alt="">
      </button>
    </div>
    <div class="offcanvas-body">
      <ul class="links">
        <li><a href="index.html"  class="active">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="products.html">Products</a></li>
        <li><a href="blog.html" >Blog</a></li>
        <li><a href="contact.html">Contact Us</a></li>
        <button id="off-btn" type="button" class="mt-3 rounded enquiry button-full"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">Enquire Now</button>
      </ul>
      <div class="social-media-icons">
        <i class="facebook fa-brands fa-facebook"></i>
        <i class="instagram fa-brands fa-instagram"></i>
        <i class="twitter fa-brands fa-twitter"></i>
        <i class="whatsapp fa-brands fa-whatsapp"></i>
      </div>
    </div>
  </div>




<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <form class="modal-content">
        <div class="d-flex justify-content-between">
          <h3 class="head-txt">Enquire Now</h3>
          <button id="close" type="button" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
        </div>
      <div class="modal-body row">
        <div class="col-md-6 col-12">
          <input type="text" required placeholder="Enter Your Name" >
        </div>
        <div class="col-md-6 col-12">
          <input type="text" required placeholder="Enter Your Location">
        </div>
        <div class="col-md-6 col-12">
          <input type="number" required placeholder="Enter Your Phone">
        </div>
        <div class="col-md-6 col-12">
          <input type="email" required placeholder="Enter Your Email">
        </div>
        <div class="col-12">
          <textarea required name="" id="" cols="15" placeholder="Message"></textarea>
        </div>
      </div>
      <div class="d-flex justify-content-end">
        <button type="submit" class="button-full">Message</button>
      </div>
    </form>
  </div>
</div>



  <main>



    
    <!-- slider starts -->
    <div id="carouselExampleIndicators" class="desktop-view-carousel carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/carousel-1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/carousel-3.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/carousel-2.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
 
 
 
 
 
 
 
 <!-- mobile slider  -->
    <div id="carouselExampleIndicators" class="mobile-view-carousel carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/carousel-1-mobile.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/carousel-2-mobile.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/carousel-3-mobile.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
 
 
 
 


    <!-- box slider start -->
    <div class="no-gutter row category-carousel owl-carousel owl-theme">
      <div data-aos="fade-up" data-aos-duration="500" class="col-md-4 col-12 item first-card">
          <h4>Saico Spices Powder</h4>
          <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo eaque porro Lorem ipsum dolor sit amet.</p> -->
          <button class="button">View More</button>
          <img class="packet-img" src="assets/img/image-1.png" alt="">
      </div>
      <div data-aos="fade-up" data-aos-duration="600" class="col-md-4 col-12 item second-card">
          <h4>Saico Spices Powder</h4>
          <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo eaque porro Lorem ipsum dolor sit amet.</p> -->
          <button class="button-white">View More</button>
          <img class="packet-img" src="assets/img/image-1.png" alt="">
      </div>
      <div data-aos="fade-up" data-aos-duration="700" class="col-md-4 col-12 item first-card">
          <h4>Saico Spices Powder</h4>
          <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo eaque porro Lorem ipsum dolor sit amet.</p> -->
          <button class="button">View More</button>
          <img class="packet-img" src="assets/img/image-1.png" alt="">
      </div>
      <div data-aos="fade-up" data-aos-duration="600" class="col-md-4 col-12 item second-card">
          <h4>Saico Spices Powder</h4>
          <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo eaque porro Lorem ipsum dolor sit amet.</p> -->
          <button class="button-white">View More</button>
          <img class="packet-img" src="assets/img/image-1.png" alt="">
      </div>
      <div data-aos="fade-up" data-aos-duration="600" class="col-md-4 col-12 item first-card">
          <h4>Saico Spices Powder</h4>
          <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo eaque porro Lorem ipsum dolor sit amet.</p> -->
          <button class="button">View More</button>
          <img class="packet-img" src="assets/img/image-1.png" alt="">
      </div>
      <div data-aos="fade-up" data-aos-duration="600" class="col-md-4 col-12 item second-card">
          <h4>Saico Spices Powder</h4>
          <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo eaque porro Lorem ipsum dolor sit amet.</p> -->
          <button class="button-white">View More</button>
          <img class="packet-img" src="assets/img/image-1.png" alt="">
      </div>
    </div>
  <!-- box slider end -->



    



    <!-- about section start  -->
    <div class="about-us">
        <img data-aos="fade-down" data-aos-duration="800" src="assets/img/dots-1.png" alt="" class="dots">
        <img data-aos="fade-down" data-aos-duration="800" src="assets/img/big-shape.png" alt="" class="big-shape">
        <img data-aos="fade-down" data-aos-duration="800" src="assets/img/small-shape.png" alt="" class="small-shape">
        <div class="container">
          <div class="row">
            <div class="d-flex justify-content-center align-items-center col-md-6 col-12">
              <div class="left-section">
                <!-- <div class="text-center about-img-div">
                  <img src="assets/img/about-img.jpg" alt="" class="about-img img-fluid">
                </div> -->
                <img data-aos="fade-down" data-aos-duration="600" src="assets/img/image-6.png" alt="" class="img-fluid">
              </div>
            </div>
            <div class="d-flex justify-content-center flex-column col-md-6 col-12">
              <div class="right-section">
                <h3 data-aos="fade-down" data-aos-duration="800">Saico <span>Foods</span></h3>
                <p data-aos="fade-up" data-aos-duration="700">The enviable brand equity and leadership position in the market as its sheet strength Saico spices had made quality and purity the hall-marks of its product without compromising on the original quality of the raw materials. Saico provides highest quality at lower price.</p>
                <p data-aos="fade-up" data-aos-duration="700"> It has enabled our customers to repose their confidence in us making Saico always their first confidence catering the real taste of our customers we pursue our cherished objective-consistency in quality and purity-relentlessly.</p>

                <!-- <p data-aos="fade-up" data-aos-duration="600">Spicy, tangy and taste giving saico has already become a household name in India and abroad. Saico spices, based in Calicut, Kerala is the leading manufacturer of the increasingly popular Saico brand of curry powders, coffee, pickles, pickle powders, Atta, Vinegar, coconut oil etc.</p> -->
                <div>
                  <div data-aos="fade-down" data-aos-duration="800" class="mb-2 d-flex align-items-center box-fresh">
                    <img class="me-3" src="assets/img/cook-book.png" alt="">
                    <p class="m-0">Fresh Incredients</p>
                  </div>
                  <div data-aos="fade-down" data-aos-duration="800" class="mb-2 d-flex align-items-center box-fresh">
                    <img  class="me-3" src="assets/img/shield.png" alt="">
                    <p class="m-0">Quality Products</p>
                  </div>
                </div>
                <button data-aos="fade-down" data-aos-duration="500" class="mt-5 button">Read More</button>
              </div>
            </div>
        </div>
        </div>
    </div>
    <!-- about section end -->






    <!-- cateogry section start  -->
    <div class="category-section">
      <img src="assets/img/gray-dots.png" alt="" class="dots">
      <img src="assets/img/right-dot.png" alt="" class="right-dots">
      <div class="container">
        <div class="row">
          <div class="column col-md-4 col-12">
            <div data-aos="fade-down" data-aos-duration="400" class="box">
              <div class="img-section">
                <img class="item" src="assets/img/chilli.png" alt="">
                <img src="assets/img/grey-smoke.png" class="smoke" alt="">
              </div>
              <div class="txt-section">
                <h5>CHILLY POWDER</h5>
                <p>sit amet consectetur adipisicing elit. sint sapiente iste.</p>
              </div>
            </div>
          </div>
          <div class="column col-md-4 col-12">
            <div data-aos="fade-down" data-aos-duration="600" class="box active">
              <div class="img-section">
                <img class="item" src="assets/img/herbs.png" alt="">
                <img src="assets/img/smoke.png" class="smoke" alt="">
              </div>
              <div class="txt-section">
                <h5>SPICES & HERBS</h5>
                <p>sit amet consectetur adipisicing elit. sint sapiente iste.</p>
              </div>
            </div>
          </div>
          <div class="column col-md-4 col-12">
            <div data-aos="fade-down" data-aos-duration="800" class="box">
              <div class="img-section">
                <img class="item" src="assets/img/rice.png" alt="">
                <img src="assets/img/grey-smoke.png" class="smoke" alt="">
              </div>
              <div class="txt-section">
                <h5>RICE & WHEAT</h5>
                <p>sit amet consectetur adipisicing elit. sint sapiente iste.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- cateogry section end -->










    <!-- spices banner section start -->
    <div class="spice-section">
      <img src="assets/img/gray-dots.png" alt="" class="dots">
      <div class="container">
        <div class="row">
          <div class="mobile-view col-md-6 col-12">
            <div class=" d-flex align-items-center right-section">
              <img src="assets/img/spices-mobile.png" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="left-section">
                <img src="assets/img/scribble.png" class="shape" alt="">
                <span data-aos="fade-down" data-aos-duration="400">The only place to go for Spices</span>
                <h2 data-aos="fade-down" data-aos-duration="600">Find ways to make your food taste better</h2>
                <p data-aos="fade-down" data-aos-duration="800">Spicy, tangy and taste giving saico has already become a household name in India and abroad. Saico spices, based in Calicut, Kerala is the leading manufacturer of the increasingly popular Saico brand of curry powders, Coffee and Pickles</p>
                <a data-aos="fade-down" data-aos-duration="1000" href="contact.php"><button class="contact-btn">Contact Us</button></a>
            </div>
          </div>
          <div class="desktop-view col-md-6 col-12">
            <div class=" d-flex align-items-center right-section">
              <img src="assets/img/spices-mobile.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- spices banner section end -->





    <!-- counter section starts  -->
    <div class="counter-section m-0 mt-md-0 mt-5">
      <div class="container">
        <div class="row">
          <div class="left-section d-flex justify-content-center flex-column col-lg-7 col-12">
            <h3 data-aos="fade-down" data-aos-duration="700">WE have great achievements to show</h3>
            <button data-aos="fade-up" data-aos-duration="800" class="button-full mt-3">Read More</button>
          </div>
          <div class="col-lg-5 col-12">
            <div class="mt-md-3 row">
              <div class="col-6 p-0">
                <div data-aos="fade-down" data-aos-duration="500" class="box">
                  <p class="m-0"><span class="counter number">12</span> <span class="plus">+</span></p>
                  <p class="description">Categories</p>
                </div>
              </div>
              <div class="col-6 p-0">
                <div data-aos="fade-down" data-aos-duration="600" class="box">
                  <p class="m-0"><span class="counter number">100 </span><span class="plus">+</span></p>
                  <p class="description">Products</p>
                </div>
              </div>
              <div class="col-6 p-0">
                <div data-aos="fade-down" data-aos-duration="700" class="box">
                  <p class="m-0"><span class="counter number">50</span> <span class="plus">+</span></p>
                  <p class="description">Years</p>
                </div>
              </div>
              <div class="col-6 p-0">
                <div data-aos="fade-down" data-aos-duration="800" class="box">
                  <p class="m-0"><span class="counter number">3.5</span> <span class="plus">K+</span></p>
                  <p class="description">Customers</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- counter section end  -->






    <!-- best selling products starts  -->
    <div class="best-products">
      <img class="top-right-img" src="assets/img/top-right.png" alt="">
      <img class="bottom-left-img" src="assets/img/bottom-left.png" alt="">
      <div class="container">
        <h2 data-aos="fade-down" data-aos-duration="500" class="text-center">Our Best Selling Products</h2>
        <p data-aos="fade-down" data-aos-duration="600" class="head-txt text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam voluptas nihil magni facilis nemo possimus modi aut ex necessitatibus odit earum aliquid, ipsam deserunt. Repellendus?</p>
        <div class="row">
          <div class="mb-5 d-flex-full col-lg-3 col-md-4 col-6">
            <div data-aos="slide-up" data-aos-duration="400" class="product-box">
              <img src="assets/img/chilly-powder.png" alt="" class="img-fluid">
              <p>Chilly Powder</p>
            </div>
          </div>
          <div class="mb-5 d-flex-full col-lg-3 col-md-4 col-6">
            <div data-aos="slide-up" data-aos-duration="500" class="product-box">
              <img src="assets/img/coriander-powder.png" alt="" class="img-fluid">
              <p>Corainder Powder</p>
            </div>
          </div>
          <div class="mb-5 d-flex-full col-lg-3 col-md-4 col-6">
            <div data-aos="slide-up" data-aos-duration="500" class="product-box">
              <img src="assets/img/turmeric-powder.png" alt="" class="img-fluid">
              <p>Turmeric Powder</p>
            </div>
          </div>
          <div class="mb-5 d-flex-full col-lg-3 col-md-4 col-6">
            <div data-aos="slide-up" data-aos-duration="500" class="product-box">
              <img src="assets/img/sampar-powder.png" alt="" class="img-fluid">
              <p>Sambar Powder</p>
            </div>
          </div>
          <div class="mb-5 d-flex-full col-lg-3 col-md-4 col-6">
            <div data-aos="slide-up" data-aos-duration="500" class="product-box">
              <img src="assets/img/banzi-rava.png" alt="" class="img-fluid">
              <p>Banza Rava</p>
            </div>
          </div>
          <div class="mb-5 d-flex-full col-lg-3 col-md-4 col-6">
            <div data-aos="slide-up" data-aos-duration="500" class="product-box">
              <img src="assets/img/garam-masala-powder.png" alt="" class="img-fluid">
              <p>Garam Masala</p>
            </div>
          </div>
          <div class="mb-5 d-flex-full col-lg-3 col-md-4 col-6">
            <div data-aos="slide-up" data-aos-duration="500" class="product-box">
              <img src="assets/img/green-coffee-powder.png" alt="" class="img-fluid">
              <p>Green Coffee</p>
            </div>
          </div>
          <div class="mb-5 d-flex-full col-lg-3 col-md-4 col-6">
            <div data-aos="slide-up" data-aos-duration="500" class="product-box">
              <img src="assets/img/fish-masala-powder.png" alt="" class="img-fluid">
              <p>Fish Masala</p>
            </div>
          </div>
          <div class="mb-5 d-flex-full col-lg-3 col-md-4 col-6">
            <div data-aos="slide-up" data-aos-duration="500" class="product-box">
              <img src="assets/img/chilly-chicken-masala.png" alt="" class="img-fluid">
              <p>Chilly Chicken </p>
            </div>
          </div>
          <div class="mb-5 d-flex-full col-lg-3 col-md-4 col-6">
            <div data-aos="slide-up" data-aos-duration="500" class="product-box">
              <img src="assets/img/kashmiri-chilly-powder.png" alt="" class="img-fluid">
              <p>Kashmiri Chilly </p>
            </div>
          </div>
          <div class="mb-5 d-flex-full col-lg-3 col-md-4 col-6">
            <div data-aos="slide-up" data-aos-duration="500"class="product-box">
              <img src="assets/img/rasam-powder.png" alt="" class="img-fluid">
              <p>Rasam Powder</p>
            </div>
          </div>
          <div class="mb-5 d-flex-full col-lg-3 col-md-4 col-6">
            <div data-aos="slide-up" data-aos-duration="500" class="product-box">
              <img src="assets/img/vegetable-masala.png" alt="" class="img-fluid">
              <p>Vegetable Masala</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- best selling products end -->






    <!-- banner section starts  -->
    <div class="banner-section">
      <div class="container">
        <h2 data-aos="fade-down" data-aos-duration="400">Taste the Flavour of <br> Tradition</h2>
        <p data-aos="fade-down" data-aos-duration="600">Feed your family the best</p>
        <button data-aos="fade-down" data-aos-duration="800" class="button">Read More</button>
      </div>
    </div>
    <!-- banner section end -->






    <!-- testimonial section -->
    <?php include 'include/testimonial.php' ?>
    <!-- testimonial section ends -->









    <!-- signup for newsletter start  -->
    <?php include 'include/signup.php' ?>
    <!-- signup for newsletter end  -->











</main>


  <?php include 'include/footer.php' ?>





  <?php include 'include/loader.php' ?>


  <!-- jquery cdn  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- owl carousel cdn  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- slick cdn  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


  <!-- aos cdn  -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    AOS.init();
  </script>


  <script>
    document.getElementById('home-link-active').classList.add('active')
    document.getElementById('offcanvas-home').classList.add('active')

  </script>


  <!-- custom js  -->
  <script src="assets/js/script.js"></script>
  <script src="assets/js/jquery.countup.js"></script>
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/SmoothScrollMouseWheel.js"></script>




  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"> </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>