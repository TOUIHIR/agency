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
<?php include('include/DB.php')?>

<!--page title start-->

<section class="page-title">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-10">
        <h1>
          Service
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

<!--service start-->

<section>
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8 col-md-12">
        <div class="theme-title">
          <h6>Services</h6>
          <h2>Features Loved Our Digital Marketing Services!</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <?php   
      $sql = "SELECT service_name , img ,sub_description,status FROM service";
      $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
      if($row['status'] === "active"){?>
      <div class="col-lg-4 col-md-6">
        <div class="service-item style-2">
          <div class="service-icon">
            <img class="img-fluid" src="images/service/<?php echo $row["img"]; ?>" alt="">
          </div>
          <div class="service-desc">
            <div class="service-title">
              <h4></h4>
            </div>
            <p><?php echo $row["service_name"]; ?></p>
          </div>
          <a class="arrow-btn" href="services-single.php?content=<?php echo $row["service_name"];?>">
            <i class="bi bi-arrow-up-right"></i>
          </a>
        </div>
      </div>
      <?php }}} ?>
    </div>
  </div>
</section>

<!--service end-->


<!--marquee start-->

<section class="py-8">
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col">
        <div class="marquee-wrap style-2 grediant-bg3">
          <div class="marquee-text">
            <span>Analysis</span>
            <i class="bi bi-square-fill"></i>
            <span>SEO</span>
            <i class="bi bi-square-fill"></i>
            <span>Marketing</span>
            <i class="bi bi-square-fill"></i>
            <span>Digital</span>
            <i class="bi bi-square-fill"></i>
            <span>Agency</span>
            <i class="bi bi-square-fill"></i>            
            <span>Digital Marketing</span>
            <i class="bi bi-square-fill"></i>
            <span>Business Solutions</span>
            <i class="bi bi-square-fill"></i>
            <span>Marketing Strategy</span>
            <i class="bi bi-square-fill"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--marquee end-->


<!--about start-->

<section>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-12">
        <img class="img-fluid" src="images/about/07.png" alt="">
      </div>
      <div class="col-lg-6 col-md-12 mt-6 mt-lg-0 ps-lg-10">
        <div class="step-item style-2 left-side mb-5">
          <div class="step-icon">
            <i class="flaticon flaticon-search-analysis"></i>
            <div class="step-number">01</div>
            <div class="step-icon-bg" data-bg-img="images/step-icon-bg1.png"></div>
          </div>
          <div class="step-desc">
          <h4>Research</h4>
          <p class="mb-0">Conduct thorough research to identify the best alternative analytics platform that meets your business needs and ensures a smooth transition.</p>
        </div>
        </div>
        <div class="step-item style-2 left-side mb-5 step-bg">
          <div class="step-icon">
            <i class="flaticon flaticon-target"></i>
            <div class="step-number">02</div>
            <div class="step-icon-bg" data-bg-img="images/step-icon-bg1.png"></div>
          </div>
          <div class="step-desc">
          <h4>Targeting</h4>
          <p class="mb-0">Customize the new analytics platform by setting up goals, KPIs, and tracking to ensure it aligns with your business objectives.</p>
        </div>          
        </div>
        <div class="step-item style-2 left-side">
          <div class="step-icon">
            <i class="flaticon flaticon-results"></i>
            <div class="step-number">03</div>
            <div class="step-icon-bg" data-bg-img="images/step-icon-bg1.png"></div>
          </div>
          <div class="step-desc">
          <h4>Result</h4>
          <p class="mb-0">Evaluate the effectiveness of the new analytics solution by comparing it to your historical data, and make necessary adjustments to optimize performance.</p>
        </div>           
        </div>
      </div>
    </div>
  </div>
</section>

<!--about end-->


<!--team start-->
<!--
<section class="position-relative">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8 col-md-12">
        <div class="theme-title">
          <h6>Team Expert</h6>
          <h2>Meet Our Expert Member</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="swiper team-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="team-member">
                <div class="team-images">
                  <img class="img-fluid rounded" src="images/team/01.jpg" alt="">
                </div>
                <div class="team-desc">
                  <h4>
                    <a href="team-single.html">Whitney Marie</a>
                  </h4>
                  <span>SEO Specialist</span>
                  <div class="social-icons team-social-icon">
                    <ul class="list-inline">
                      <li>
                        <a href="#">
                          <i class="flaticon-facebook-app-symbol"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="flaticon-twitter-2"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="flaticon-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="flaticon-linkedin-1"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="team-member">
                <div class="team-images">
                  <img class="img-fluid rounded" src="images/team/02.jpg" alt="">
                </div>
                <div class="team-desc">
                  <h4>
                    <a href="team-single.html">Austin Dee</a>
                  </h4>
                  <span>Content Writer</span>
                  <div class="social-icons team-social-icon">
                    <ul class="list-inline">
                      <li>
                        <a href="#">
                          <i class="flaticon-facebook-app-symbol"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="flaticon-twitter-2"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="flaticon-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="flaticon-linkedin-1"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="team-member">
                <div class="team-images">
                  <img class="img-fluid rounded" src="images/team/03.jpg" alt="">
                </div>
                <div class="team-desc">
                  <h4>
                    <a href="team-single.html">Haley Ryan</a>
                  </h4>
                  <span>Digital Marketer</span>
                  <div class="social-icons team-social-icon">
                    <ul class="list-inline">
                      <li>
                        <a href="#">
                          <i class="flaticon-facebook-app-symbol"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="flaticon-twitter-2"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="flaticon-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="flaticon-linkedin-1"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="team-member">
                <div class="team-images">
                  <img class="img-fluid rounded" src="images/team/04.jpg" alt="">
                </div>
                <div class="team-desc">
                  <h4>
                    <a href="team-single.html">Colt Nova</a>
                  </h4>
                  <span>Marketer</span>
                  <div class="social-icons team-social-icon">
                    <ul class="list-inline">
                      <li>
                        <a href="#">
                          <i class="flaticon-facebook-app-symbol"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="flaticon-twitter-2"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="flaticon-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="flaticon-linkedin-1"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="team-member">
                <div class="team-images">
                  <img class="img-fluid rounded" src="images/team/05.jpg" alt="">
                </div>
                <div class="team-desc">
                  <h4>
                    <a href="team-single.html">Shalina Jade</a>
                  </h4>
                  <span>SEO Specialist</span>
                  <div class="social-icons team-social-icon">
                    <ul class="list-inline">
                      <li>
                        <a href="#">
                          <i class="flaticon-facebook-app-symbol"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="flaticon-twitter-2"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="flaticon-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="flaticon-linkedin-1"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="team-member">
                <div class="team-images">
                  <img class="img-fluid rounded" src="images/team/06.jpg" alt="">
                </div>
                <div class="team-desc">
                  <h4>
                    <a href="team-single.html">Dixie Zee</a>
                  </h4>
                  <span>Manager</span>
                  <div class="social-icons team-social-icon">
                    <ul class="list-inline">
                      <li>
                        <a href="#">
                          <i class="flaticon-facebook-app-symbol"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="flaticon-twitter-2"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="flaticon-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="flaticon-linkedin-1"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="team-member">
                <div class="team-images">
                  <img class="img-fluid rounded" src="images/team/07.jpg" alt="">
                </div>
                <div class="team-desc">
                  <h4>
                    <a href="team-single.html">Lana Skye</a>
                  </h4>
                  <span>Specialist</span>
                  <div class="social-icons team-social-icon">
                    <ul class="list-inline">
                      <li>
                        <a href="#">
                          <i class="flaticon-facebook-app-symbol"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="flaticon-twitter-2"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="flaticon-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="flaticon-linkedin-1"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="team-member">
                <div class="team-images">
                  <img class="img-fluid rounded" src="images/team/08.jpg" alt="">
                </div>
                <div class="team-desc">
                  <h4>
                    <a href="team-single.html">Parker Wolf</a>
                  </h4>
                  <span>Marketer</span>
                  <div class="social-icons team-social-icon">
                    <ul class="list-inline">
                      <li>
                        <a href="#">
                          <i class="flaticon-facebook-app-symbol"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="flaticon-twitter-2"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="flaticon-instagram"></i>
                        </a>
                      </li>
                      <li>
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
          <div>
            <div id="team-pagination" class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="light-bg ht-bg-move"></div>
</section>
-->
<!--team end-->


<!--pricing start-->

<section class="price-section">
  <div class="container-fluid px-lg-10">
    <div class="row align-items-center my-6">
      <div class="col-lg-4 col-md-12 ps-lg-8 order-lg-1">
        <div class="theme-title z-index-1">
          <h6>Pricing Plan</h6>
          <h2>Unbeatable Pricing Find Your Perfect Plan Now</h2>
        </div>
      </div>
      <div class="col-lg-8 col-md-12">
        <div class="row gx-lg-2 align-items-center">
          <div class="col-lg-4 col-md-6">
            <div class="price-table">
              <h3 class="price-title">Basic</h3>
              <div class="price-list">
                <ul class="list-unstyled">
                  <li>
                    <i class="flaticon flaticon-check"></i>Increase Traffic 130%
                  </li>
                  <li>
                    <i class="flaticon flaticon-check"></i>SEO Optimization
                  </li>
                  <li>
                    <i class="flaticon flaticon-check"></i>Social Media Management
                  </li>
                  <li>
                    <i class="flaticon flaticon-check"></i>Content Marketing
                  </li>
                  <li>
                    <i class="flaticon flaticon-check"></i>24/7 Hours Support
                  </li>
                </ul>
              </div>
              <div class="price-value">
                <h2>
                  <sup>$</sup>24
                </h2>
                <span>/Month</span>
              </div>
              <a class="themeht-btn primary-btn" href="#">
                <span>Choose Plan</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-6 mt-md-0">
            <div class="price-table price-active">
              <div class="price-label">Popular</div>
              <h3 class="price-title">Premium</h3>
              <div class="price-list">
                <ul class="list-unstyled">
                  <li>
                    <i class="flaticon flaticon-check"></i>Increase Traffic 130%
                  </li>
                  <li>
                    <i class="flaticon flaticon-check"></i>SEO Optimization
                  </li>
                  <li>
                    <i class="flaticon flaticon-check"></i>Social Media Management
                  </li>
                  <li>
                    <i class="flaticon flaticon-check"></i>Content Marketing
                  </li>
                  <li>
                    <i class="flaticon flaticon-check"></i>24/7 Hours Support
                  </li>
                </ul>
              </div>
              <div class="price-value">
                <h2>
                  <sup>$</sup>48
                </h2>
                <span>/Month</span>
              </div>
              <a class="themeht-btn dark-btn" href="#">
                <span>Choose Plan</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-6 mt-lg-0">
            <div class="price-table">
              <h3 class="price-title">Advanced</h3>
              <div class="price-list">
                <ul class="list-unstyled">
                  <li>
                    <i class="flaticon flaticon-check"></i>Increase Traffic 130%
                  </li>
                  <li>
                    <i class="flaticon flaticon-check"></i>SEO Optimization
                  </li>
                  <li>
                    <i class="flaticon flaticon-check"></i>Social Media Management
                  </li>
                  <li>
                    <i class="flaticon flaticon-check"></i>Content Marketing
                  </li>
                  <li>
                    <i class="flaticon flaticon-check"></i>24/7 Hours Support
                  </li>
                </ul>
              </div>
              <div class="price-value">
                <h2>
                  <sup>$</sup>72
                </h2>
                <span>/Month</span>
              </div>
              <a class="themeht-btn primary-btn" href="#">
                <span>Choose Plan</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section>
  <div class="container">
    <div class="row align-items-center">
     
      <div class="col-lg-12 col-md-12 mt-6 mt-lg-0 ps-lg-10">
        <div class="accordion" id="accordion">
        <div class="accordion-item">
  <h3 class="accordion-header" id="heading1">
    <button class="accordion-button shadow-none mb-0 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
      What services does a digital marketing agency offer?
    </button>
  </h3>
  <div id="collapse1" class="accordion-collapse border-0 collapse" aria-labelledby="heading1" data-bs-parent="#accordion">
    <div class="accordion-body">
      We offer a variety of services including Search Engine Optimization (SEO), Pay Per Click (PPC) campaign management, Social Media Marketing, Email Marketing, Website Design & Development, and Content Creation.
    </div>
  </div>
</div>

<div class="accordion-item">
  <h3 class="accordion-header" id="heading2">
    <button class="accordion-button shadow-none mb-0 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
      How do I know which service is right for my business?
    </button>
  </h3>
  <div id="collapse2" class="accordion-collapse border-0 collapse" aria-labelledby="heading2" data-bs-parent="#accordion">
    <div class="accordion-body">
      We offer a free consultation to analyze your business needs and develop a customized strategy that fits your marketing goals.
    </div>
  </div>
</div>

<div class="accordion-item">
  <h3 class="accordion-header" id="heading3">
    <button class="accordion-button shadow-none mb-0 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
      Can you improve my website’s search rankings?
    </button>
  </h3>
  <div id="collapse3" class="accordion-collapse border-0 collapse" aria-labelledby="heading3" data-bs-parent="#accordion">
    <div class="accordion-body">
      Yes, we will conduct a comprehensive analysis of your website and implement SEO strategies to increase your search engine visibility.
    </div>
  </div>
</div>

<div class="accordion-item">
  <h3 class="accordion-header" id="heading4">
    <button class="accordion-button shadow-none mb-0 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
      How long does it take to see results from digital marketing?
    </button>
  </h3>
  <div id="collapse4" class="accordion-collapse border-0 collapse" aria-labelledby="heading4" data-bs-parent="#accordion">
    <div class="accordion-body">
      The time to see results varies depending on the service and strategy used. Typically, improvements in search results can be seen within 3-6 months, while paid advertising campaigns may be faster.
    </div>
  </div>
</div>

<div class="accordion-item">
  <h3 class="accordion-header" id="heading5">
    <button class="accordion-button shadow-none mb-0 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
      Do you work with all types of businesses?
    </button>
  </h3>
  <div id="collapse5" class="accordion-collapse border-0 collapse" aria-labelledby="heading5" data-bs-parent="#accordion">
    <div class="accordion-body">
      Yes, we work with small, medium, and large businesses across a variety of industries.
    </div>
  </div>
</div>

<div class="accordion-item">
  <h3 class="accordion-header" id="heading6">
    <button class="accordion-button shadow-none mb-0 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
      How do you determine the cost of your services?
    </button>
  </h3>
  <div id="collapse6" class="accordion-collapse border-0 collapse" aria-labelledby="heading6" data-bs-parent="#accordion">
    <div class="accordion-body">
      The cost of your services depends on the type of service required and the size of the project. We provide customized quotes based on our analysis of your business goals.
    </div>
  </div>
</div>

<div class="accordion-item">
  <h3 class="accordion-header" id="heading7">
    <button class="accordion-button shadow-none mb-0 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
      Can I stop or change my marketing campaign after it has started?
    </button>
  </h3>
  <div id="collapse7" class="accordion-collapse border-0 collapse" aria-labelledby="heading7" data-bs-parent="#accordion">
    <div class="accordion-body">
      Yes, you can modify or stop campaigns at any time. We will work with you to ensure your needs and expectations are met.
    </div>
  </div>
</div>

<div class="accordion-item">
  <h3 class="accordion-header" id="heading8">
    <button class="accordion-button shadow-none mb-0 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
      What is social media marketing and how can it benefit my business?
    </button>
  </h3>
  <div id="collapse8" class="accordion-collapse border-0 collapse" aria-labelledby="heading8" data-bs-parent="#accordion">
    <div class="accordion-body">
      Social media marketing involves creating and managing advertising campaigns and content on platforms such as Facebook, Instagram, Twitter, and LinkedIn to increase brand awareness and engagement with your target audience.
    </div>
  </div>
</div>

<div class="accordion-item">
  <h3 class="accordion-header" id="heading9">
    <button class="accordion-button shadow-none mb-0 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
      Do you provide periodic performance reports?
    </button>
  </h3>
  <div id="collapse9" class="accordion-collapse border-0 collapse" aria-labelledby="heading9" data-bs-parent="#accordion">
    <div class="accordion-body">
      Yes, we provide comprehensive periodic reports to measure campaign performance and progress towards set goals.
    </div>
  </div>
</div>

<div class="accordion-item">
  <h3 class="accordion-header" id="heading10">
    <button class="accordion-button shadow-none mb-0 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
      How do I start working with you?
    </button>
  </h3>
  <div id="collapse10" class="accordion-collapse border-0 collapse" aria-labelledby="heading10" data-bs-parent="#accordion">
    <div class="accordion-body">
      You can start working with us by contacting us via the contact form on the website, or contact us directly to arrange a free consultation.
    </div>
  </div>
</div>

        </div>
      </div>
    </div>
  </div>
</section>
<!--pricing end-->

</div>

<!--body content end--> 


<!--footer start-->

<?php include('include/Footer.php') ?>


<!--footer end-->


</div>

<!-- page wrapper end -->


<!--color-customizer start-->

<div class="color-customizer closed">
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

 
</body>


</html>