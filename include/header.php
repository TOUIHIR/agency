<!--header start-->
<header id="site-header" class="header">
  <div id="header-wrap">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand logo" href="index.php">
              <img class="img-fluid" src="images/Logo-SX.png" alt="">
            </a>
            <button class="navbar-toggler ht-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <svg width="100" height="100" viewBox="0 0 100 100">
                <path class="line line1"
                  d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058">
                </path>
                <path class="line line2" d="M 20,50 H 80"></path>
                <path class="line line3"
                  d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942">
                </path>
              </svg>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <!-- Left nav -->
              <ul class="nav navbar-nav mx-auto">
                <!-- Home -->
                <li class="nav-item dropdown">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="digital-product.php">Products</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="services.php">Services</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="portfolio.php">Portfolio</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="blog.php">News</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="about-us.php">About Us</a>
                </li>
              </ul>
            </div>
            <div class="header-right d-flex align-items-center">
            <a class="header-btn" href="contact.php">
            Take Your Solution <i class="bi bi-lamp vibrating-lamp"></i>
                                              </a>
              <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

              <a href="#" class="ht-nav-toggle">
                <i class="bi bi-grid-fill"></i>
              </a>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>

<nav id="ht-main-nav">
  <a href="#" class="ht-nav-toggle">
    <i class="bi bi-x-lg"></i>
  </a>
  <a class="navbar-brand logo" href="index.php">
    <img class="img-fluid" src="images/Logo-SX.png" alt="">
  </a>
  <p class="mt-3">Speed-X Digital Marketing Agency Template is fully responsive. Build whatever you like with the
    Speed-X; Speed-X is the creative, modern HTML5 template suitable for Your Business Marketing.</p>
  <div class="form-info">
    <h4 class="mb-4">Contact Info</h4>
    <div class="contact-link">
      <ul class="contact-info list-unstyled">
        <li>
          <i class="flaticon flaticon-gps-1"></i>
          <span>Address:</span>
          <p>Hadaddas Street, Oued Zem, Morocco</p>
        </li>
        <li>
          <i class="flaticon flaticon-email"></i>
          <span>Email:</span>
          <a href="mailto:Hindhind@gmail.com">Hindhind@gmail.com</a>
        </li>
        <li>
          <i class="flaticon flaticon-mobile"></i>
          <span>Phone:</span>
          <a href="tel:+91-234-567-8900">+91-234-567-8900</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="social-icons mt-5">
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
</nav>

<!--header end-->

<style>
/* Animation CSS */

@keyframes lamp-glow {  
  0%, 100% {
    color: orange; /* Couleur de la lampe allumée (jaune) */
    text-shadow: 0 0 10px #f39c12, 0 0 20px #f39c12, 0 0 30px #f39c12;
  }
  50% {
    color: #bdc3c7; /* Couleur de la lampe éteinte (gris clair) */
    text-shadow: none;
  }
}

/* Appliquer l'animation à la lampe */
.vibrating-lamp {
  animation: lamp-glow 1s ease-in-out infinite;
} 
</style>
