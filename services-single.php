<!DOCTYPE html>
<html lang="en">

<head>
<?php include('include/link.php'); ?>
</head>

<body>

<!-- page wrapper start -->

<div class="page-wrapper">

<!-- preloader start -->

<!-- <div id="ht-preloader">
  <div class="loader clear-loader">
    <img class="img-fluid" src="images/loader.png" alt="">
  </div>
</div> -->

<!-- preloader end -->


<div id="particles-js"></div>

<?php include('include/header.php') ?>


<!--page title start-->

<section class="page-title">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-10">
        <h1>
          <?php if(isset($_GET['content'])) echo $_GET['content'] ;?>
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
<?php include('include/DB.php')?>
<section>
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-8 mb-10 mb-lg-0 order-lg-1">
        <?php if(isset($_GET['content'])) {
           $sql = "SELECT * FROM service WHERE service_name ='".$_GET['content']."'";
           $result = $conn->query($sql);
           if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              $id_service = $row['service_id'];?>
        <div class="service-image mb-5">
          <img class="img-fluid rounded" src="images/service/<?php echo $row["img"]; ?>" alt="...">
        </div>
        <h3><?php echo $row["service_name"]; ?>" is the Fastest growing trend</h3>
        <p class="ht-first-letter"><?php echo $row["description"]; ?></p>
        <p class="mb-5">With our SEO marketing service, you'll benefit from:</p>
        <div class="row my-7">
        <?php }}}
                         $query_featured = "SELECT * FROM service_featured WHERE service_id =".$id_service;
                         $result_featured = $conn->query($query_featured);
                         if ($result_featured->num_rows > 0) {
                         while($row_featured = $result_featured->fetch_assoc()) {
                         ?>
          <div class="col-md-6">
            <div class="featured-item style-2">
              <div class="featured-item-top d-sm-flex align-items-center">
                <div class="featured-icon flex-shrink-0">
                  <img class="img-fluid" src="images/feature/<?php echo $row_featured["featured_img"]; ?>" alt="">
                </div>
                <div class="featured-title flex-grow-1">
                  <h4><?php echo $row_featured["featured_name"]; ?></h4>
                </div>
              </div>
              <div class="featured-desc">
                <p><?php echo $row_featured["featured"]; ?></p>
              </div>
            </div>
          </div>
          <?php }}?>
        </div>
        <div class="accordion" id="accordion">
        <?php 
        $item = 1;
           $query_question = "SELECT * FROM service_questions WHERE service_id =".$id_service;
           $result_question = $conn->query($query_question);
           if ($result_question->num_rows > 0) {
           while($row_question = $result_question->fetch_assoc()) {
           ?>
          <div class="accordion-item">
            <h3 class="accordion-header" id="heading">
              <button class="accordion-button shadow-none mb-0 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $item ?>" aria-expanded="true" aria-controls="collapse<?php echo $item ?>"><?php echo $row_question['question']; ?></button>
            </h3>
            <div id="collapse<?php echo $item ?>" class="accordion-collapse border-0 collapse" aria-labelledby="heading<?php echo $item ?>" data-bs-parent="#accordion">
              <div class="accordion-body"><?php echo $row_question['answer']; ?></div>
            </div>
          </div>
          <?php $item += 1;}}?>
        </div>
      </div>
      <div class="col-12 col-lg-4 pe-lg-8">
        <div class="service-sidebar js-sticky">
          <div class="service-widget">
           <!--<h5 class="widget-title">All Services</h5>
            <ul class="service-menu list-unstyled mb-0">
              <li class="active">
                <a href="services-single.html">SEO Marketing</a>
              </li>
              <li>
                <a href="services-single.html">Content Marketing</a>
              </li>
              <li>
                <a href="services-single.html">Digital Marketing</a>
              </li>
              <li>
                <a href="services-single.html">Email Marketing</a>
              </li>
              <li>
                <a href="services-single.html">Marketing Strategy</a>
              </li>
              <li>
                <a href="services-single.html">Market Analysis</a>
              </li>
            </ul>-->
          </div>
          <div class="service-widget p-0">
            <div class="contact-widget grediant-bg3 rounded">
              <h3 class="mb-2 text-white">Contact us for help</h3>
              <p class="text-white">Get in touch and let us know how we can help touch as soon as possible.</p>
              <a class="themeht-btn primary-btn" href="contact.php">
                <span>Create order now!</span>
                <i class="bi bi-arrow-right"></i>
              </a>
              <img class="img-fluid mt-5" src="images/contact-bg.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</div>

<!--body content end--> 


<!--footer start-->

<?php include('include/footer.php') ?>


<!--footer end-->


</div>

<!-- page wrapper end -->



<!--back-to-top start-->

<div class="scroll-top">
  <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
  </svg>
</div>

<!--back-to-top end-->

 


</body>


<!-- Mirrored from themeht.com/template/seoland/ltr/services-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Mar 2024 00:56:46 GMT -->
</html>