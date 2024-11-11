<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('include/link.php'); ?>
  <style>
    /* Wrapper for custom select */
    .select-wrapper {
      position: relative;
      display: inline-block;
      width: 100%;
    }

    /* Trigger button styling */
    .select-trigger {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: white;
      border: 1px solid #fe9429;
      border-radius: 10px;
      /* Rounded corners */
      padding: 10px;
      font-size: 16px;
      cursor: pointer;
      position: relative;
    }

    .select-trigger .arrow {
      transition: transform 0.3s ease;
      color: #000;
      font-size: 25px;
    }

    .select-trigger.active .arrow {
      transform: rotate(45deg);
    }

    .options {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      width: 100%;
      background-color: #f9f9f9;
      border-radius: 10px;
      /* Rounded corners */
      border: 1px solid #ccc;
      max-height: 200px;
      /* Set a max height for overflow */
      overflow-y: auto;
      z-index: 1;
      font: inherit;
    }

    .custom-option {
      padding: 10px;
      font-size: 16px;
      color: #333;
      background-color: #eee;
      /* Background color for options */
      cursor: pointer;
      transition: background-color 0.3s ease;
      border-bottom: 1px solid #ccc;
    }

    .custom-option:hover {
      background-color: #ddd;
    }

    .custom-option:last-child {
      border-bottom: none;
    }

    .custom-option.selected {
      background-color: #007BFF;
      /* Highlight selected option */
      color: white;
    }

    .custom-option.selected:hover {
      background-color: #0056b3;
      /* Darker on hover */
    }

    /* Show options when the trigger is clicked */
    .select-trigger.active+.options {
      display: block;
    }

    #contact-form::-webkit-scrollbar {
      width: 10px;
      height: 10px;

    }

    #contact-form::-webkit-scrollbar-thumb {
      background-color: #f6701f63;
      /* Color of the scrollbar */
      border-radius: 10px;
    }



    /* Scrollbar styling */
    .options::-webkit-scrollbar {
      width: 10px;
    }

    .options::-webkit-scrollbar-thumb {
      background-color: #888;
      /* Color of the scrollbar */
      border-radius: 10px;
      /* Rounded corners on the scrollbar thumb */
    }

    .options::-webkit-scrollbar-thumb:hover {
      background-color: #555;
      /* Darker on hover */
    }

    .options::-webkit-scrollbar-track {
      background-color: #f9f9f9;
      /* Scrollbar track color */
      border-radius: 10px;
    }

    /* Firefox scroll styling */
    .options {
      scrollbar-width: thin;
      /* Set width of the scrollbar */
      scrollbar-color: #ff6004;
      /* Scrollbar thumb and track colors */
    }



    .radio-group,
    .check-group {
      display: grid;
      gap: 5px;
      margin-top: 20px;

    }

    input[type="radio"],
    input[type="checkbox"] {
      margin-right: 5px;
    }

    label {
      font-weight: bold;
      margin-bottom: 10px;
      display: block;
    }


    /* Form scrollable on large screens */
    #contact-form {
      max-height: 500px;
      /* Adjust height as needed */
      overflow-y: auto;
      /* Enable vertical scrolling */
      padding-right: 10px;
      /* Optional: Adds space for scrollbar */
    }

    /* Remove scrolling on smaller screens */
    @media (max-width: 768px) {
      #contact-form {
        max-height: none;
        overflow: visible;
        /* Disable scrolling */
      }
    }

    .container-fluid.maps {
      margin-top: 140px;
    }

    input[type="file"]::file-selector-button {
      border: 2px solid #fe9429;
      padding: 0.2em 0.4em;
      border-radius: 10px;
      background-color: #f9f9f9;
      transition: 0.8s;
    }

    input[type="file"]::file-selector-button:hover {
      cursor: pointer;
      background-color: #fe9429;
    }

    .themeht-btn.primary-btn {
      margin: 0 0 10px !important;
    }

    @media (max-width: 768px) {
      .overflow-hidden.pt-0.mt-lg-n10 {
        display: none;
      }

      .themeht-btn.primary-btn {
        width: -webkit-fill-available;
      }
    }

    #faq {
      padding-top: 0 !important;
    }

    /* Basic styling for the form */
    #success-message {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      border-radius: 5px;
    }

    #success-message {
      text-align: center;
      color: green;
      font-size: 18px;
    }
  </style>
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
            Your Solution Awaits            </h1>
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

      <!--contact start-->

      <section class="pb-lg-0 z-index-1">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-md-12 ps-lg-10 order-lg-1">
              <div class="theme-title">
                <h6>Get In Touch</h6>
                <h2>Drop A Line!</h2>
              </div>
              <?php if (isset($_GET['status']) && $_GET['status'] == 'success') { ?>
                <!-- Success Message -->

                <div id="success-message">
                  <!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256" height="256" viewBox="0 0 256 256" xml:space="preserve">

                    <defs>
                    </defs>
                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                      <path d="M 43.077 63.077 c -0.046 0 -0.093 -0.001 -0.14 -0.002 c -1.375 -0.039 -2.672 -0.642 -3.588 -1.666 L 23.195 43.332 c -1.84 -2.059 -1.663 -5.22 0.396 -7.06 c 2.059 -1.841 5.22 -1.664 7.06 0.396 l 12.63 14.133 l 38.184 -38.184 c 1.951 -1.952 5.119 -1.952 7.07 0 c 1.953 1.953 1.953 5.119 0 7.071 L 46.612 61.612 C 45.674 62.552 44.401 63.077 43.077 63.077 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,165,16); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                      <path d="M 45 90 C 20.187 90 0 69.813 0 45 C 0 20.187 20.187 0 45 0 c 2.762 0 5 2.239 5 5 s -2.238 5 -5 5 c -19.299 0 -35 15.701 -35 35 s 15.701 35 35 35 s 35 -15.701 35 -35 c 0 -2.761 2.238 -5 5 -5 s 5 2.239 5 5 C 90 69.813 69.813 90 45 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,165,16); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                    </g>
                  </svg> -->
                  <img src="images/gift/succes.gif" alt="this slowpoke moves"  width="250" alt="404 image"/>

                  <p>Your message has been sent successfully!</br> We will contact you soon.</p>
                </div>
              <?php } else { ?>
                <form id="contact-form" method="POST" action="send_service_order.php" enctype="multipart/form-data">
                  <div class="messages"></div>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Name" required="required" data-error="Firstname is required.">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address" required="required" data-error="Valid email is required.">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Phone" required="required" data-error="Phone is required">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="form_service">Select Service</label>
                      <select id="form_service" name="service" class="form-control" required>
                        <option value="SEO Marketing">SEO Marketing</option>
                        <option value="Email Marketing">Email Marketing</option>
                        <option value="Social Media Management">Social Media Management</option>
                        <option value="Graphic Design">Graphic Design</option>
                        <option value="Web Development">Web Development</option>
                        <option value="Influencer Marketing">Influencer Marketing</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <textarea id="form_message" name="message" class="form-control" placeholder="Write Message" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                      <label>Do you have an existing website?</label>
                      <div class="radio-group">
                        <label>
                          <input type="radio" name="website" value="yes"> Yes
                        </label>
                        <label>
                          <input type="radio" name="website" value="no"> No
                        </label>
                      </div>
                    </div>
                    <div class="form-group" id="website-url-group" style="display: none;">
                      <label for="website-url">If yes, please provide your website URL</label>
                      <input type="text" id="website-url" class="form-control" name="website-url" placeholder="https://example.com">
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                      <label>Project Budget (Optional)?</label>
                      <div class="radio-group">
                        <label>
                          <input type="radio" name="budget" value="under-500"> under-500
                        </label>
                        <label>
                          <input type="radio" name="budget" value="$500-$1,000"> $500-$1,000
                        </label>
                        <label>
                          <input type="radio" name="budget" value="$1,000-$5,000"> $1,000-$5,000
                        </label>
                        <label>
                          <input type="radio" name="budget" value="$5,000+"> $5,000+
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="file-upload">Upload any relevant files or documents (Optional)</label>
                      <input type="file" id="file-upload" name="file-upload" accept=".pdf, image/*">
                    </div>
                  </div>

                  <button class="themeht-btn primary-btn mt-4" type="submit">
                    <span>Send Message</span>
                    <i class="bi bi-arrow-right"></i>
                  </button>
                </form>
              <?php } ?>


            </div>
            <div class="col-lg-5 col-md-12 mt-6 mt-lg-0">
              <div class="contact-box">
                <div class="theme-title">
                  <h6>Contact Details</h6>
                  <h2>Main Office</h2>
                  <p>Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days. We will be happy to answer your questions.</p>
                </div>
                <ul class="contact-info list-unstyled">
  <li>
    <i class="flaticon flaticon-gps-1"></i>
    <span>Visit Our Location</span>
    <p>Hadaddas Street, Oued Zem, Morocco</p>
  </li>
  <li>
    <i class="flaticon flaticon-email"></i>
    <span>Send Us Email</span>
    <a href="mailto:speedx.agency@gmail.com" target="_blank">speedx.agency@gmail.com</a>
  </li>
  <li>
    <i class="flaticon flaticon-mobile"></i>
    <span>Looking For Project</span>
    <a href="tel:+212693133466" target="_blank">+212 6-93-13-34-66</a>
  </li>
</ul>
<div class="social-icons mt-5">
  <ul class="list-inline">
    <li>
      <a href="#" target="_blank">
        <i class="flaticon-facebook-app-symbol"></i>
      </a>
    </li>
    <li>
      <a href="https://x.com/Speed_x_agency" target="_blank">
        <i class="flaticon-twitter-2"></i>
      </a>
    </li>
    <li>
      <a href="#" target="_blank">
        <i class="flaticon-instagram"></i>
      </a>
    </li>
    <li>
      <a href="https://www.linkedin.com/in/speed-x-120349326/" target="_blank">
        <i class="flaticon-linkedin-1"></i>
      </a>
    </li>
  </ul>
</div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="overflow-hidden pt-0 mt-lg-n10">
        <div class="container-fluid maps px-lg-10">
          <div class="row align-items-center">
            <div class="col-md-12">
              <div class="map iframe-h">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.840108181602!2d144.95373631539215!3d-37.8172139797516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1497005461921" allowfullscreen=""></iframe>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="faq">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
              <div class="theme-title p-5 mb-0">
                <h6>F.a.q.</h6>
                <h2>Most Trending &amp; Popular Question</h2>
              </div>
              <img class="img-fluid rounded" src="images/about/04.png" alt="">
            </div>
            <div class="col-lg-6 col-md-12 mt-6 mt-lg-0 ps-lg-10">
              <div class="accordion" id="accordion">
                <div class="accordion-item">
                  <h3 class="accordion-header" id="heading1">
                    <button class="accordion-button shadow-none mb-0 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                      What services does a digital marketing agency offer?
                    </button>
                  </h3>
                  <div id="collapse1" class="accordion-collapse border-0 collapse show" aria-labelledby="heading1" data-bs-parent="#accordion">
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
      <!--contact end-->

    </div>

    <!--body content end-->


    <!--footer start-->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Get the message from the form
      $message = htmlspecialchars($_POST['message']);

      // Email details
      $to = "speedx.agency@gmail.com"; // Your email address
      $subject = "New Message from Contact Form";
      $headers = "From: no-reply@yourdomain.com\r\n"; // Adjust the 'From' field if necessary
      $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

      // Send the email
      if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
      } else {
        echo "Message sending failed.";
      }
    }
    ?>


    <?php include('include/footer.php') ?>

    <!--footer end-->



  </div>

  <!-- page wrapper end -->


  <!--color-customizer start-->

  <!-- <div class="color-customizer closed">
  <div class="clearfix color-chooser text-center">
    <h4 class="mb-4">Speed-X With Awesome Colors</h4>
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
</div> -->

  <!--color-customizer end-->


  <!--back-to-top start-->

  <div class="scroll-top">
    <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>

  <!--back-to-top end-->


  <script>
    const selectTrigger = document.querySelector('.select-trigger');
    const options = document.querySelectorAll('.custom-option');

    selectTrigger.addEventListener('click', function() {
      this.classList.toggle('active');
      document.querySelector('.options').classList.toggle('show');
    });

    options.forEach(option => {
      option.addEventListener('click', function() {
        const value = this.getAttribute('data-value');
        const text = this.innerText;

        document.querySelector('.select-trigger span').innerText = text;
        options.forEach(opt => opt.classList.remove('selected'));
        this.classList.add('selected');

        document.querySelector('.options').classList.remove('show');
        selectTrigger.classList.remove('active');
      });
    });
  </script>
  <script>
    // Show or hide website URL field based on radio button selection
    const websiteRadioButtons = document.querySelectorAll('input[name="website"]');
    const websiteUrlGroup = document.getElementById('website-url-group');

    websiteRadioButtons.forEach(radio => {
      radio.addEventListener('change', function() {
        if (this.value === 'yes') {
          websiteUrlGroup.style.display = 'block';
        } else {
          websiteUrlGroup.style.display = 'none';
        }
      });
    });
  </script>
  <script>
    document.getElementById('contact-form').addEventListener('submit', function(event) {
      // Prevent the form from submitting initially
      event.preventDefault();

      // Get form inputs
      const name = document.getElementById('form_name').value.trim();
      const email = document.getElementById('form_email').value.trim();
      const phone = document.getElementById('form_phone').value.trim();
      const service = document.getElementById('form_service').value;
      const message = document.getElementById('form_message').value.trim();

      // Error messages or element for user feedback
      const messages = document.querySelector('.messages');
      messages.innerHTML = ''; // Clear previous messages

      // Simple form validation
      if (!name) {
        messages.innerHTML += '<p>Name is required.</p>';
        return;
      }

      if (!email || !validateEmail(email)) {
        messages.innerHTML += '<p>Valid email is required.</p>';
        return;
      }

      if (!phone) {
        messages.innerHTML += '<p>Phone number is required.</p>';
        return;
      }

      if (!service) {
        messages.innerHTML += '<p>Please select a service.</p>';
        return;
      }

      if (!message) {
        messages.innerHTML += '<p>Message is required.</p>';
        return;
      }

      // If everything is fine, submit the form
      this.submit(); // Allow the form to be submitted
    });

    // Helper function to validate email format
    function validateEmail(email) {
      const re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
      return re.test(String(email).toLowerCase());
    }
  </script>


  <!-- <script>
document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Validate form fields (this is basic validation, you can expand it as needed)
    var name = document.getElementById('form_name').value;
    var email = document.getElementById('form_email').value;
    var phone = document.getElementById('form_phone').value;
    var message = document.getElementById('form_message').value;

    if (name === '' || email === '' || phone === '' || message === '') {
        alert("Please fill all required fields.");
        return; // Exit if validation fails
    }

    // If the form is valid, submit it and redirect to send_order.php
    this.submit(); // Submit the form

    // Redirect the user after the form submission (optional)
    window.location.href = 'include/send_order.php';
});
</script> -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var success = <?php echo json_encode($success); ?>;
      if (success) {
        document.getElementById("contact-form").style.display = "none";
        document.getElementById("success-message").style.display = "block";
      }
    });
  </script>
</body>


</html>