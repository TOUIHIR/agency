<!DOCTYPE html>
<html lang="en">

<head>
<?php include('include/link.php'); ?>
</head>

<body>

<!-- page wrapper start -->

<div class="page-wrapper">

<!-- preloader start -->

<div id="ht-preloader">
  <div class="loader clear-loader">
    <img class="img-fluid" src="images/loader.png" alt="">
  </div>
</div>

<!-- preloader end -->


<div id="particles-js"></div>

<!--header start-->

<?php include('include/header.php') ?>



<!--header end-->


<!--page title start-->

<section class="page-title">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-10">
        <h1>
          Product Checkout
        </h1>
      </div>
    </div>
  </div>
  <div class="page-title-wave">
    <img src="images/page-bg.svg" alt="">
  </div>
</section>

<!--page title end-->


<!--body content start-->

<div class="page-content">

<!--checkout start-->

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12">
        <div class="checkout-form box-shadow white-bg rounded p-5">
          <h2 class="mb-4">Billing Details</h2>
          <form class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>First Name</label>
                <input type="text" id="fname" class="form-control" placeholder="Your firstname">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Last Name</label>
                <input type="text" id="lname" class="form-control" placeholder="Your lastname">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>E-mail Address</label>
                <input type="text" id="email" class="form-control" placeholder="State Province">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Phone Number</label>
                <input type="text" id="phone" class="form-control" placeholder="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Company Name</label>
                <input type="text" id="companyname" class="form-control" placeholder="Company Name">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Select Country</label>
                <details class="custom-select">
  <summary class="form-control">
    <input type="radio" name="item" id="default" title="Auswählen..." checked>
    <input type="radio" name="item" id="item1" title="Item 1">
    <input type="radio" name="item" id="item2" title="Item 2">
    <input type="radio" name="item" id="item3" title="Item 3">
    <input type="radio" name="item" id="item4" title="Item 4">
    <input type="radio" name="item" id="item5" title="Item 5">
  </summary>
  <ul class="list">
    <li>
      <label for="item1">
        Item 1
        <span></span>
      </label>
    </li>
    <li>
      <label for="item2">Item 2</label>
    </li>
    <li>
      <label for="item3">Item 3</label>
    </li>
    <li>
      <label for="item4">Item 4</label>
    </li>
    <li>
      <label for="item5">Item 5</label>
    </li>
  </ul>
</details>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Address</label>
                <input type="text" id="address" class="form-control" placeholder="Enter Your Address">
              </div>
              <div class="form-group">
                <input type="text" id="address2" class="form-control" placeholder="Second Address">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Town/City</label>
                <input type="text" id="towncity" class="form-control" placeholder="Town or City">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group mb-md-0">
                <label>State/Province</label>
                <input type="text" id="statename" class="form-control" placeholder="State Province">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group mb-md-0">
                <label>Zip/Postal Code</label>
                <input type="text" id="zippostalcode" class="form-control" placeholder="Zip / Postal">
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 mt-7 mt-lg-0 ps-lg-8">
        <div class="row mb-5">
          <div class="col-md-12">
            <h5 class="mb-3 text-theme">Coupon Code</h5>
            <div>
              <label class="mb-3">Enter your coupon code if you have one</label>
              <div class="input-group">
                <input class="form-control rounded" id="c-code" placeholder="Coupon Code" aria-label="Coupon Code" aria-describedby="button-addon2" type="text">
                <div class="input-group-append ms-2">
                  <button class="themeht-btn primary-btn" type="button" id="button-addon2"><span>Apply</span><i class="bi bi-arrow-right"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <h5 class="mb-3 text-theme">Your Order</h5>
          <ul class="list-unstyled">
            <li class="mb-3 border-bottom border-light pb-3"><span> 1 x Product Name </span> $ 2404.00</li>
            <li class="mb-3 border-bottom border-light pb-3"><span> 1 x Product Name </span> $ 498.00</li>
            <li class="mb-3 border-bottom border-light pb-3"><span> Shipping </span> $ 0.00</li>
            <li class="mb-3 border-bottom border-light pb-3"><span> Subtotal </span> $ 2830.00</li>
            <li class="text-black"><span><strong class="cart-total"> Total :</strong></span>  <strong class="cart-total">$ 2830.00 </strong>
            </li>
          </ul>
        </div>
        <div class="cart-detail my-5">
          <h5 class="mb-3 text-theme">Payment Method</h5>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
              <label class="form-check-label" for="customRadio1">Direct Bank Tranfer</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio2">
              <label class="form-check-label" for="customRadio2">Check Payment</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio3">
              <label class="form-check-label" for="customRadio3">Paypal Account</label>
            </div>
          </div>
          <div class="form-group mb-0">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">I have read and accept the terms and conditions</label>
            </div>
          </div>
        </div>
        <button class="themeht-btn primary-btn"><span>Proceed to Payment</span><i class="bi bi-arrow-right"></i></button>
      </div>
    </div>
  </div>
</section>

<!--checkout end-->


</div>

<!--body content end--> 


<!--footer start-->

<footer class="footer">
  <div class="primary-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-7 pe-lg-8">
          <a class="navbar-brand logo footer-logo" href="index.html">
            <img class="img-fluid" src="images/logo-white.svg" alt="">
          </a>
          <p class="mt-4 mb-5">Speed-X Digital Marketing Agency Template Is fully responsible, Build whatever you like with the Speed-X, Seoland is the creative, modern  suitable for Your Business Marketing.</p>
          <div class="subscribe-form">
            <form id="mc-form" class="mc-form">
              <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">
              <input class="subscribe-btn" type="submit" name="subscribe" value="Subscribe Now">
            </form>
          </div>
        </div>
        <div class="col-lg-4 col-md-5 mt-6 mt-md-0">
          <h5>Contact Speed-X</h5>
          <ul class="media-icon list-unstyled">
            <li>
              <i class="flaticon-gps-1"></i>
              <h6>Visit Our Location</h6>
              <p class="mb-0">5th Street, 21st Floor, New York, USA </p>
            </li>
            <li>
              <i class="flaticon-email"></i>
              <h6>Send Us Email</h6>
              <a href="mailto:aymentouihir@gmail.com">aymentouihir@gmail.com</a>
            </li>
            <li>
              <i class="flaticon-mobile"></i>
              <h6>Looking For Project</h6>
              <a href="tel:+212 607500401">+91-234-567-8900</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-8 mt-6 mt-lg-0">
          <div class="row">
            <div class="col-md-6 footer-menu">
              <h5>Company</h5>
              <ul class="list-unstyled w-100">
                <li>
                  <a href="about-us.html">About Us</a>
                </li>
                <li>
                  <a href="services.html">Our Service</a>
                </li>
                <li>
                  <a href="portfolio-masonry.html">Portfolio Masonry</a>
                </li>
                <li>
                  <a href="team.html">Team Member</a>
                </li>
                <li>
                  <a href="contact.html">Contact Us</a>
                </li>
              </ul>
            </div>
            <div class="col-md-6 mt-5 mt-md-0 footer-menu">
              <h5>Sales Info</h5>
              <ul class="list-unstyled">
                <li>
                  <a href="blog-right-sidebar.html">Blog</a>
                </li>
                <li>
                  <a href="error-404.html">Error 404</a>
                </li>
                <li>
                  <a href="faq.html">Faq</a>
                </li>
                <li>
                  <a href="privacy-policy.html">Privacy Policy</a>
                </li>
                <li>
                  <a href="terms-and-conditions.html">Terms</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="secondary-footer">
    <div class="container">
      <div class="copyright">
        <div class="row align-items-center">
          <div class="col-md-6">Copyright 2024 Speed-X Theme by <u>
              <a href="#">SX_GROUP</a>
            </u> | All Rights Reserved </div>
          <div class="col-md-6 text-md-end mt-3 mt-md-0">
            <ul class="list-inline ps-0 ms-0 footer-social">
              <li class="list-inline-item">
                <a href="#">
                  <i class="flaticon-facebook-app-symbol"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="flaticon-dribble"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="flaticon-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="flaticon-twitter-2"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="flaticon-linkedin-1"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="dark-bg ht-bg-move"></div>
</footer>

<!--footer end-->


</div>

<!-- page wrapper end -->


<!--color-customizer start-->



<!--color-customizer end-->


<!--back-to-top start-->

<div class="scroll-top">
  <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
  </svg>
</div>

<!--back-to-top end-->

 
<!-- inject js start -->

<!--== jquery -->
<script src="js/jquery.min.js"></script> 

<!--== bootstrap -->
<script src="js/bootstrap.bundle.min.js"></script>

<!--== jquery-appear -->
<script src="js/jquery-appear.js"></script> 

<!--== magnific-popup --> 
<script src="js/jquery.magnific-popup.min.js"></script>

<!--== isotope --> 
<script src="js/isotope.pkgd.min.js"></script>

<!--== counter -->
<script src="js/odometer.min.js"></script>

<!--== countdown -->
<script src="js/jquery.countdown.min.js"></script> 

<!--== gsap -->
<script src='js/gsap.min.js'></script>

<!--== scrolltrigger -->
<script src='js/scrolltrigger.min.js'></script>

<!--== gsap-animation -->
<script src='js/gsap-animation.js'></script>

<!--== particles -->
<script src='js/particles.js'></script>

<!--== swiper -->
<script src="js/swiper-bundle.min.js"></script> 

<!--== swiper-init -->
<script src="js/seoland-swiper-init.js"></script> 

<!--== sticksy -->
<script src="js/sticksy.min.js"></script>

<!--== color-customize -->
<script src="js/color-customize/color-customizer.js"></script> 

<!--== theme-script -->
<script src="js/theme-script.js"></script>

<!-- inject js end -->

</body>


<!-- Mirrored from themeht.com/template/seoland/ltr/product-checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Mar 2024 00:56:42 GMT -->
</html>
