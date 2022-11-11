<header>
<!-- top navbar start -->
<div class="top-navbar">
    <div class="left-section">
        <a href=""><i class="fa-solid fa-phone"></i></a>
        <p>9876543210</p>

        <a href=""><i class="fa-solid fa-envelope"></i></a>
        <p>saicofoods@gmail.com</p>
    </div>

    <div class="right-section">
        <a href=""><i class="fa-brands fa-instagram"></i></a>
        <a href=""><i class="fa-brands fa-twitter"></i></a>
        <a href=""><i class="fa-brands fa-facebook"></i></a>
        <a href=""><i class="fa-brands fa-youtube"></i></a>
    </div>
</div>
<!-- top navbar end -->


    <!-- navbar start -->
    <nav class="sm-box-shadow navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
          <img class="menu-icon img-fluid" src="assets/img/menu-bar.png" alt="">
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="ms-auto navbar-nav">
            <li class="nav-item">
              <a id="home-link-active" class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a id="about-link-active" class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a id="product-link-active" class="nav-link" href="products.php">Products</a>
            </li>
            <li class="nav-item">
              <a id="blog-link-active" class="nav-link" href="blog.php">Blog</a>
            </li>
            <li class="nav-item">
              <a id="contact-link-active" class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>
          <button type="button" class="ms-5 enquiry navbar-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><span>Enquire Now</span></button>
        </div>
      </div>
  </nav>




</header>


<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
<div class="offcanvas-header">
  <img class="offcanvas-logo" src="assets/img/logo.png" alt="">
  <button type="button" class="close-icon text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
    <img class="close-icon-img" src="assets/img/close.png" alt="">
  </button>
</div>
<div class="offcanvas-body">
  <ul class="links">
    <li><a href="index.php" id="offcanvas-home">Home</a></li>
    <li><a href="about.php" id="offcanvas-about">About</a></li>
    <li><a href="products.php" id="offcanvas-product">Products</a></li>
    <li><a href="blog.php"id="offcanvas-blog" >Blog</a></li>
    <li><a href="contact.php" id="offcanvas-contact">Contact Us</a></li>
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


