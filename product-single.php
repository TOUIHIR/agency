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
<?php include('include/DB.php');?>
<section class="page-title">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-10">
        <h1>
          Product Single
        </h1>
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">
                <i class="bi bi-house-door me-1"></i>Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="#">Shop</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Details</li>
          </ol>
        </nav>
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

<!--product start-->

<section>
  <div class="container">
  <?php 
        
        
        if(isset($_GET['ID'])) {
      
          $ID = $_GET['ID'];
          $sql = "SELECT * FROM Products where product_id=".$ID;
      }
        $result = $conn->query($sql);
// Output products
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {?>
    <div class="row align-items-center">
      <div class="col-lg-5 col-md-6">
        <img class="img-fluid w-100 rounded" src="images/product/<?php echo $row["image"]; ?>" alt="" />
      </div>
      <div class="col-lg-7 col-md-6 mt-5 mt-md-0 ps-lg-5">
        <div class="product-details">
          <h3><?php echo $row["product_name"]; ?></h3>
          <div class="product-price my-4">
            <span class="product-price text-black">
            <del><?php echo (is_double($row["price"]) + 10) ; ?></del> <?php echo $row["price"]; ?>$</span>
            <span class="text-theme">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </span>
          </div>
          <ul class="list-unstyled mb-4">
            <li class="mb-2">
              <span class="text-black"> Availibility: </span> In Stock
            </li>
            <li>
              <span class="text-black"> Categories :</span> Equipment
            </li>
          </ul>
          <p><?php echo $row["description"]; ?></p>
          <div class="product-link d-flex align-items-center mt-5">
            <button class="themeht-btn primary-btn me-3" type="button"><span>Add To Cart</span><i class="bi bi-cart"></i></button>
          </div>
        </div>
      </div>
    </div>
    <?php
    }
}

// Close statement and connection
$conn->close();
?>        
  </div>
</section>

<!--product end-->


<!--tab start-->

<section class="pt-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="tab">
          <!-- Nav tabs -->
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active ms-0" id="nav-tab1" data-bs-toggle="tab" href="#tab3-1" role="tab" aria-selected="true">Description</a>
              <a class="nav-item nav-link" id="nav-tab2" data-bs-toggle="tab" href="#tab3-2" role="tab" aria-selected="false">Additional information</a>
              <a class="nav-item nav-link" id="nav-tab3" data-bs-toggle="tab" href="#tab3-3" role="tab" aria-selected="false">Reviews (3)</a>
            </div>
          </nav>
          <!-- Tab panes -->
          <div class="tab-content p-0 pt-5">
            <div role="tabpanel" class="tab-pane fade show active" id="tab3-1">
              <h5 class="mb-3">Product Description</h5>
              <p class="mb-0">Automate Task Creation: Lorem Ipsum is simply of the printing typesetting has been the industry’s standard dummy text. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat Praesent pharetra, justo ut scelerisque mattis, leo quam aliquet diam, congue laoreet elit metus eget diam. Proin ac metus diam. In quis scelerisque velit. Proin pellentesque neque ut scelerisque dapibus. Praesent elementum feugiat dignissim. Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque mattis, leo quam aliquet diam, nisi interdum mollis. Praesent pharetra, justo ut scelerisque mattis.</p>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="tab3-2">
              <h5 class="mb-3">Additional information</h5>
              <table class="table table-bordered mb-0">
                <tbody>
                  <tr>
                    <td>Size</td>
                    <td>Small, Medium, Large & Extra Large</td>
                  </tr>
                  <tr>
                    <td>Color</td>
                    <td>Black, Green, Blue</td>
                  </tr>
                  <tr>
                    <td>Chest</td>
                    <td>38 inches</td>
                  </tr>
                  <tr>
                    <td>Waist</td>
                    <td>20 cm</td>
                  </tr>
                  <tr>
                    <td>Length</td>
                    <td>35 cm</td>
                  </tr>
                  <tr>
                    <td>Fabric</td>
                    <td>Cotton, Silk & Synthetic</td>
                  </tr>
                  <tr>
                    <td>Warranty</td>
                    <td>6 Months</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="tab3-3">
              <div class="row total-rating align-items-center">
                <div class="col-md-6">
                  <div class="dark-bg rounded text-center p-5">
                    <h5 class="text-white">Overall</h5>
                    <h4 class="text-white">4.0</h4>
                    <h6 class="text-white">(03 Reviews)</h6>
                  </div>
                </div>
                <div class="col-md-6 mt-3 mt-lg-0">
                  <div class="rating-list">
                    <div class="d-flex align-items-center mb-2">
                      <div class="text-nowrap me-3">5 Star</div>
                      <div class="w-100">
                        <div class="progress" style="height: 5px;">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <span class="text-grey ms-3">90%</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <div class="text-nowrap me-3">4 Star</div>
                      <div class="w-100">
                        <div class="progress" style="height: 5px;">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <span class="text-grey ms-3">60%</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <div class="text-nowrap me-3">3 Star</div>
                      <div class="w-100">
                        <div class="progress" style="height: 5px;">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <span class="text-grey ms-3">40%</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <div class="text-nowrap me-3">2 Star</div>
                      <div class="w-100">
                        <div class="progress" style="height: 5px;">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <span class="text-grey ms-3">20%</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <div class="text-nowrap me-3">1 Star</div>
                      <div class="w-100">
                        <div class="progress" style="height: 5px;">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <span class="text-grey ms-3">10%</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-5">
                <div class="col-md-7">
                  <div class="review-list border border-light p-5 rounded">
                    <div class="row border-bottom border-light pb-5 mb-5">
                      <div class="mb-4 mb-md-0 col-md-auto">
                        <img class="img-fluid rounded" alt="image" src="images/thumbnail/01.jpg">
                      </div>
                      <div class="col-md">
                        <h6 class="mb-2">Saina Paul</h6>
                        <p>Donec viverra sodales arcu gravida nibh at. Neque lobortis quis porta integer et placerat lectus scelerisque. Velit eget malesuada morbi faucibus at sed euismod. Tortor, eu ut id tincidunt leo placerat luctus</p>
                        <span class="text-theme">
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                        </span>
                      </div>
                    </div>
                    <div class="row border-bottom border-light pb-5 mb-5">
                      <div class="mb-4 mb-md-0 col-md-auto">
                        <img class="img-fluid rounded" alt="image" src="images/thumbnail/02.jpg">
                      </div>
                      <div class="col-md">
                        <h6 class="mb-2">Nicole Lana</h6>
                        <p>Donec viverra sodales arcu gravida nibh at. Neque lobortis quis porta integer et placerat lectus scelerisque. Velit eget malesuada morbi faucibus at sed euismod. Tortor, eu ut id tincidunt leo placerat luctus</p>
                        <span class="text-theme">
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                        </span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="mb-4 mb-md-0 col-md-auto">
                        <img class="img-fluid rounded" alt="image" src="images/thumbnail/03.jpg">
                      </div>
                      <div class="col-md">
                        <h6 class="mb-2">Abela Lust</h6>
                        <p>Donec viverra sodales arcu gravida nibh at. Neque lobortis quis porta integer et placerat lectus scelerisque. Velit eget malesuada morbi faucibus at sed euismod. Tortor, eu ut id tincidunt leo placerat luctus</p>
                        <span class="text-theme">
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="post-comments white-bg box-shadow rounded p-4">
                    <h4 class="mb-4">Add Review</h4>
                    <form id="contact-form" method="post" action="">
                      <div class="messages"></div>
                      <div class="form-group">
                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Name" required="required" data-error="Name is required.">
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group">
                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address" required="required" data-error="Valid email is required.">
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group clearfix">
                        <select class="form-control form-select">
                          <option value="">Rating -- Select</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <input id="form_number" type="text" name="name" class="form-control" placeholder="Phone Number" required="required">
                      </div>
                      <div class="form-group">
                        <textarea id="form_message" name="message" class="form-control" placeholder="Type Comment" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                      <button class="themeht-btn primary-btn mt-3"><span>Post Review</span><i class="bi bi-arrow-right"></i></button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--tab end-->

</div>

<!--body content end--> 


<!--footer start-->
<?php include('include/footer.php') ?>

<!--footer end-->


</div>

<!-- page wrapper end -->


<!--color-customizer start-->

<div class="color-customizer closed">
  <a class="opener" href="#"> <i class="bi bi-palette"></i></a>
  <div class="clearfix color-chooser text-center">
    <h4 class="mb-4">Speed-XWith Awesome Colors</h4>
    <ul class="colorChange clearfix">
      <li class="theme-default selected" title="theme-default" data-style="color-1"></li>
      <li class="theme-2" title="theme-2" data-style="color-2"></li>
      <li class="theme-3" title="theme-3" data-style="color-3"></li>
      <li class="theme-4" title="theme-4" data-style="color-4"></li>
      <li class="theme-5" title="theme-5" data-style="color-5"></li>
      <li class="theme-6" title="theme-6" data-style="color-6"></li>
      <li class="theme-7" title="theme-7" data-style="color-7"></li>
      <li class="theme-8" title="theme-8" data-style="color-8"></li>
      <li class="theme-9" title="theme-9" data-style="color-9"></li>
    </ul>
  </div>
</div>

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


<!-- Mirrored from themeht.com/template/seoland/ltr/product-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Mar 2024 00:56:40 GMT -->
</html>
