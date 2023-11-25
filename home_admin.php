<?php
include 'DBConnect.php';
include 'contact.php';
// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
//     header('location: Login.php');    
//     exit;
// }

// if(isset($_SESSION['username'])==null){
  
// }
// else{
//   include 'session_timeout.php';
// }
include 'session_timeout.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>THE KNOT.-Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="home.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Knot<span>.</span></h1>
      </a>
      <?php
      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
              $loggedin = true;
          }
          else{
              $loggedin = false;
          }

        echo  '<nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#Events">Events</a></li>
          <li><a href="#Gallery">Gallery</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#team">About </a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="admin_dashboard.php">Dashboard</a></li>
          <li class="dropdown"><a href="#"><span>Booking</span> <i
                class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="events.php#Engagement">Engagement</a></li>
              <li><a href="events.php#Garba">Garba Nights</a></li>
              <li><a href="events.php#Wedding">Wedding</a></li>
              <li><a href="events.php#Reception">Reception</a></li>
            </ul>
          </li>';
          if($loggedin){
            echo '<li class="dropdown"><a href="#"><span>'.
                $_SESSION['username'] .
              '</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>              
              <li><a href="logout.php">Logout</a></li>
            </ul>
            </li>';
          }
          if(!$loggedin){
            echo '<li class="dropdown"><a href="#"><span>User
              </span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="login.php">Login</a></li>
              <li><a href="Register.php">Register</a></li>
              
            </ul>
            </li>';
          }
          
        echo '</ul>
      </nav>';
      ?>



      <!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Plan Your <span>Marriage</span></h2>
          <p><b>Marraige</b> is sharing life with your <b>Partner</b> Enjoying the Journey along the way and arriving at
            every Destination... <b>Together</b> </p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started">Let's Explore</a>
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
              class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch
                Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="https://freesvg.org/img/1535109751.png" style="height: 510px;" class="img-fluid " alt=""
            data-aos="zoom-out" data-aos-delay="100">
          <!-- <img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100"> -->
        </div>
      </div>
    </div>
    <div id="Events">

    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi"><img src="assets\img\wedding-ring2.png" alt="" style="height:80px ;"></i>
              </div>
              <h4 class="title"><a href="events.php#Engagement" onclick="selectOption('Engagement')" class="stretched-link">Engagement</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi"><img src="assets\img\garba2.png" alt="" style="height:80px ;"></i></div>
              <h4 class="title"><a href="events.php#Garba" onclick="selectOption('Garba')" class="stretched-link">Garba Nights</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi"><img src="assets\img\wedding.png" alt="" style="height:80px ;"></i></div>
              <h4 class="title"><a href="events.php#Wedding" onclick="selectOption('Wedding')" class="stretched-link">Wedding</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi"><img src="assets\img\cake-removebg-preview.png" alt=""
                    style="height:80px ;"></i></div>
              <h4 class="title"><a href="events.php#Reception" onclick="selectOption('Reception')" class="stretched-link">Reception</a></h4>
            </div>
          </div><!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Events</h2>
          <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis
            omnis tiledo stran delop</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6 ">
            <h3>Engagement</h3>
            <img src="assets\img\eg1.jpg" class="img-fluid rounded-4 mb-4 ms-5" style="height: 500px; width: 520px;"
              alt="">
            <div class="content ps-0 ps-lg-1">
              <p class="fst-italic">
                <strong> " Wishing you a warm engagement! It is wonderful to see your happy faces. May you have a
                  blessed and joyful life."</strong>
              </p>
              <ul>
                <li><i class="bi bi-circle-fill" style="font-size:small ; padding-top:6px;"></i> Engagements are pretty
                  momentous occasions. It’s the start of a new chapter in your life, and it’s full of promise and
                  possibilities.</li>
                <li><i class="bi bi-circle-fill" style="font-size:small ; padding-top:6px;"></i> Turning Moments into
                  Memories: Wedding Planning Made Magical.</li>
                <li><i class="bi bi-circle-fill" style="font-size:small ; padding-top:6px;"></i> Designing Love Stories:
                  Crafting Engagements and Dream Weddings.</li>
              </ul>

            </div>
          </div>
          <div class="col-lg-6">
            <h3>Garba Nights</h3>
            <img src="assets\img\gn2.webp" class="img-fluid rounded-4 mb-4 ms-5" style="height: 500px; width: 520px;"
              alt="">
            <!-- <div class="position-relative mt-4">
              
              
            </div> -->
            <div class="content ps-0 ps-lg-1">
              <p class="fst-italic ">
                <strong> " Come and get ready with your partner for Garba Night."</strong>
              </p>
              <ul>
                <li><i class="bi bi-circle-fill" style="font-size:small ; padding-top:6px;"></i> Crafting Magical
                  Moments: From Garba Nights to Wedding Bliss, We've Got You Covered.</li>
                <li><i class="bi bi-circle-fill" style="font-size:small ; padding-top:6px;"></i> We have best singers
                  and sound for make your garba night special.</li>
                <li><i class="bi bi-circle-fill" style="font-size:small ; padding-top:6px;"></i>Garba Nights are always
                  full of magic and beauty.</li>
              </ul>


            </div>
          </div>
        </div>
        <div class="row gy-4">
          <div class="col-lg-6">
            <h3>Wedding</h3>
            <img src="assets\img\wedding.jpg" class="img-fluid rounded-4 mb-4 ms-5" style="height: 500px; width: 520px;"
              alt="">
            <div class="content ps-0 ps-lg-1">
              <p class="fst-italic">
                <strong> “The highest happiness on earth is the happiness of marriage.”</strong>
              </p>
              <ul>
                <li><i class="bi bi-circle-fill" style="font-size:small ; padding-top:6px;"></i>We help you to recognize
                  an ideal venue which is essential to make your day everything you want it to be, whether you desire a
                  simple ceremony or a spectacular fairytale affair.</li>
                <li><i class="bi bi-circle-fill" style="font-size:small ; padding-top:6px;"></i>Unlocking the Beauty of
                  Your Love Story, Through Extraordinary Weddings</li>
                <li><i class="bi bi-circle-fill" style="font-size:small ; padding-top:6px;"></i> Your Vision, Our
                  Expertise – Perfect Weddings Made Easy.</li>
              </ul>

            </div>
          </div>
          <div class="col-lg-6">
            <h3>Reception</h3>
            <img src="assets\img\RECEPTION.jpg" class="img-fluid rounded-4 mb-4 ms-5"
              style="height: 500px; width: 520px;" alt="">

            <div class="content ps-0 ps-lg-1">
              <p class="fst-italic ">
                <strong> “If you are with the right person, It brings out the best version of you.”</strong>
              </p>
              <ul>
                <li><i class="bi bi-circle-fill" style="font-size:small ; padding-top:6px;"></i> Elevating Your Special
                  Day: Unparalleled Wedding Planning & Reception Experiences.</li>
                <li><i class="bi bi-circle-fill" style="font-size:small ; padding-top:6px;"></i> Every Detail Perfected:
                  Unforgettable Weddings and Exceptional Reception Events.</li>
                <li><i class="bi bi-circle-fill" style="font-size:small ; padding-top:6px;"></i> The Art of Celebration:
                  Where Your Reception Becomes Magical.</li>
              </ul>


            </div>
          </div>
        </div>



      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Clients Section ======= -->
    <!-- <section id="clients" class="clients">
      <div class="container" data-aos="zoom-out">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>
    </section>End Clients Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 align-items-center">

          <div class="col-lg-6">
            <img src="assets/img/stats-img.svg" alt="" class="img-fluid">
          </div>

          <div class="col-lg-6">

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                class="purecounter"></span>
              <p><strong>Happy Clients</strong> consequuntur quae diredo para mesta</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                class="purecounter"></span>
              <p><strong>Projects</strong> adipisci atque cum quia aut</p>
            </div><!-- End Stats Item -->

            <div class="stats-item d-flex align-items-center">
              <span data-purecounter-start="0" data-purecounter-end="453" data-purecounter-duration="1"
                class="purecounter"></span>
              <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
            </div><!-- End Stats Item -->

          </div>

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Call To Action Section ======= -->
    <!-- <section id="call-to-action" class="call-to-action">
      <div class="container text-center" data-aos="zoom-out">
        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
        <h3>Call To Action</h3>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a class="cta-btn" href="#">Call To Action</a>
      </div>
    </section>End Call To Action Section -->

    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <br>
          <h2>Our Services</h2>
          <!-- <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p> -->
        </div>

        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

          <!-- <div class="col-lg-4 col-md-6">
            <div class="service-item  position-relative">
              <div class="">
                <i class="bi "><img src="https://cdn-icons-png.flaticon.com/128/2849/2849686.png" alt="" style="height:80px ;"></i>
              </div>
              <h3>Decoration</h3>
              <p>Prepare to be mesmerized by the exquisite details that transform this space into a visual masterpiece, reflecting the love and celebration in the air.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>End Service Item -->


          <div class="col-lg-4 col-md-6 my-custom-gutter-y  ">
            <div class="service-item position-relative ">
              <div class="card-inner">
                <div class="card-front">
                  <div class="icon">
                    <i class="bi"><img src="https://cdn-icons-png.flaticon.com/128/2849/2849686.png" alt=""
                        style="height:80px;"></i>
                  </div>
                  <h3>Decoration</h3>
                  <p>Prepare to be mesmerized by the exquisite details that transform this space into a visual
                    masterpiece, reflecting the love and celebration in the air.</p>
                </div>
                <div class="card-back text">
                  <!-- Back content goes here -->
                  <h3>Decoration</h3>
                  <p>It's not just enough to create a reel of soft-focus memories in your mind while your once-in-a-life
                    moments unfold amidst myriad hues. We help you capture some visual treasures through the most
                    focused lens.</p>
                  <a href="Decoration.php" class="readmore stretched-link">Read more <i
                      class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 my-custom-gutter-y ">
            <div class="service-item position-relative ">
              <div class="card-inner">
                <div class="card-front">
                  <div class="icon">
                    <i class="bi"><img src="assets\img\camera-removebg-preview.png" alt="" style="height:80px;"></i>
                  </div>
                  <h3>Photography</h3>
                  <p>Through the lens, we freeze precious moments that will be cherished for generations to come. Let us
                    capture the magic of your special day.</p>
                </div>
                <div class="card-back text">
                  <!-- Back content goes here -->
                  <h3>Photography</h3>
                  <p>To capture the best memories, with perfect sunlight , beautiful decor and that perfect angle the
                    best photographers are needed. We help you to choose the best in the town</p>
                  <a href="Photography.php" class="readmore stretched-link">Read more <i
                      class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 my-custom-gutter-y ">
            <div class="service-item position-relative ">
              <div class="card-inner">
                <div class="card-front">
                  <div class="icon">
                    <i class="bi"><img src="assets\img\food-removebg-preview.png" alt="" style="height:80px;"></i>
                  </div>
                  <h3>Food & Beverages</h3>
                  <p>From farm to fork, experience the freshness and creativity of our food service, Catering to your
                    culinary desires with unmatched quality and taste.</p>
                </div>
                <div class="card-back text">
                  <!-- Back content goes here -->
                  <h3>Food & Baverages</h3>
                  <p>It is no secret that a gourmandizing platter and glasses of oozing palate form the highlight of any
                    Indian wedding. We believe in serving the finest as a happy wedding is always synonymous to well fed
                    guests.</p>
                  <a href="Food.php" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>



          <!-- <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="">
                <i class="bi " ><img src="assets\img\camera-removebg-preview.png" alt="" style="height:80px ;"></i>
              </div>
              <h3>Photography</h3>
              <p>Through the lens, we freeze precious moments that will be cherished for generations to come. Let us capture the magic of your special day.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>  End Service Item -->




          <!-- <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="">
                <i class="bi "> <img src="assets\img\food-removebg-preview.png" alt="" style="height:80px ;"></i>
              </div>
              <h3>Food & Beverages</h3>
              <p>From farm to fork, experience the freshness and creativity of our food service, Catering to your culinary desires with unmatched quality and taste.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
           </div>        -->
          <!-- End Service Item -->


          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative ">
              <div class="card-inner">
                <div class="card-front">
                  <div class="icon">
                    <i class="bi"><img src="https://cdn.onlinewebfonts.com/svg/img_546683.png" alt=""
                        style="height:80px;"></i>
                  </div>
                  <h3>Entertainment</h3>
                  <p>From Music to Performances, We've Got Your Entertainment Covered, Leave the Stress to Us, Just
                    Enjoy the our Entertainment.</p>
                </div>
                <div class="card-back text">
                  <!-- Back content goes here -->
                  <h3>Entertainment</h3>
                  <p>Be it a comic’s hilarious antics, a stomach-hurting stand-up act or an enchanting sufi night, don’t
                    let your dose of entertainment take a backseat amidst all the hoopla and shenanigans.</p>
                  <a href="Entertainment.php" class="readmore stretched-link">Read more <i
                      class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="">
                <i class="bi "><img src="https://cdn.onlinewebfonts.com/svg/img_546683.png" alt="" style="height:80px ;"></i>
              </div>
              <h3>Entertainment</h3>
              <p>From Music to Performances, We've Got Your Entertainment Covered, Leave the Stress to Us, Just Enjoy the our Entertainment.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>  End Service Item -->

          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative ">
              <div class="card-inner">
                <div class="card-front">
                  <div class="icon">
                    <i class="bi"><img src="assets\img\weddingcomunication-removebg-preview.png" alt=""
                        style="height:80px;"></i>
                  </div>
                  <h3>Wedding Communication</h3>
                  <p>Clear and open lines of communication are the key to a seamless wedding experience. We are here to
                    listen, understand, and bring your vision to life.</p>

                </div>
                <div class="card-back text">
                  <!-- Back content goes here -->
                  <h3>Wedding Communication</h3>
                  <p>How about being completely transparent with every guest about your grandiose wedding celebrations
                    without rushing to make any last-minute mistakes?</p>
                  <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>


          <!-- <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class="">
                <i class="bi "><img src="assets\img\weddingcomunication-removebg-preview.png" alt="" style="height:80px ;"></i>
              </div>
              <h3>Wedding Communication</h3>
              <p>Clear and open lines of communication are the key to a seamless wedding experience. We are here to listen, understand, and bring your vision to life.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>  End Service Item -->


          <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative ">
              <div class="card-inner">
                <div class="card-front tx">
                  <div class="icon">
                    <i class="bi"><img src="assets\img\hos-removebg-preview.png" alt="" style="height:80px;"></i>
                  </div>
                  <h3>Hospitality </h3>
                  <p>Creating Memorable Experiences Through Genuine Hospitality, A Warm Welcome Awaits You at Our
                    Hospitality Haven. </p>
                </div>
                <div class="card-back text">
                  <!-- Back content goes here -->
                  <h3>Hospitality </h3>
                  <p>Hospitality and logistics planning and management, which is an integral part of wedding planning,
                    is also carefully looked after by our excellent team of experts We take care of our guest just as
                    you would take at home.</p>
                  <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>


          <!-- <div class="col-lg-4 col-md-6">
            <div class="service-item position-relative">
              <div class=" ">
                <i class="bi  "> <img src="assets\img\hos-removebg-preview.png" alt="" style="height:80px ;"></i>
              </div>
              <h3>Hospitality </h3>
              <p>Creating Memorable Experiences Through Genuine Hospitality, A Warm Welcome Awaits You at Our Hospitality Haven.</p>
              <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
           </div> End Service Item -->

        </div>

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti fignissimos eos
            quam</p>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Saul Goodman</h3>
                      <h4>Ceo &amp; Founder</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                    Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Sara Wilsson</h3>
                      <h4>Designer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                    quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Jena Karlis</h3>
                      <h4>Store Owner</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim
                    tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Matt Brandon</h3>
                      <h4>Freelancer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit
                    minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center">
                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>John Larson</h3>
                      <h4>Entrepreneur</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim
                    culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore.
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="Gallery" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <br>
          <h2>Gallery</h2>

          <p>Step into our enchanting gallery, where moments of love and joy are beautifully displayed, inviting you to
            relive the magic of this special day.</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
          data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div>
            <ul class="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Engagement</li>
              <li data-filter=".filter-product">Garba Nights</li>
              <li data-filter=".filter-branding">Wedding</li>
              <li data-filter=".filter-books">Reception</li>
            </ul><!-- End Portfolio Filters -->
          </div>

          <div class="row gy-4 portfolio-container">

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="https://images.prismic.io/eventsgyani/a5f3e135-4b2c-4a2b-951f-cfde2e117fad_13.+floral+canopy.jpg?auto=compress,format&rect=0,0,1024,637&w=740&h=460" data-gallery="portfolio-gallery-app" class="glightbox">
                  <img src="https://images.prismic.io/eventsgyani/a5f3e135-4b2c-4a2b-951f-cfde2e117fad_13.+floral+canopy.jpg?auto=compress,format&rect=0,0,1024,637&w=740&h=460" class="img-fluid" alt="" style="height:277px ;">
                </a>
                <!-- <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">App 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div> -->
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="https://images.shaadisaga.com/shaadisaga_production/photos/pictures/004/475/442/original/blob?1658905959" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="https://images.shaadisaga.com/shaadisaga_production/photos/pictures/004/475/442/original/blob?1658905959"
                    class="img-fluid" alt="" style="height:277px ;"></a>
                <!-- <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Product 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div> -->
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="https://images.shaadisaga.com/shaadisaga_production/photos/pictures/001/704/252/original/89392251_2497068247064069_7095273921600937248_n.jpg?1587373853" data-gallery="portfolio-gallery-app"
                  class="glightbox"><img
                    src="https://images.shaadisaga.com/shaadisaga_production/photos/pictures/001/704/252/original/89392251_2497068247064069_7095273921600937248_n.jpg?1587373853"
                    class="img-fluid" alt=""></a>
                <!-- <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Branding 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div> -->
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="https://i.pinimg.com/originals/a8/1d/db/a81ddb26187151326aa25fa51014d4b8.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="https://i.pinimg.com/originals/a8/1d/db/a81ddb26187151326aa25fa51014d4b8.jpg" class="img-fluid"
                    alt=""></a>
                <!-- <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Books 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div> -->
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="https://i.pinimg.com/originals/3b/16/77/3b1677733d37180cd6cdfa3a49995a3b.jpg " data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="https://i.pinimg.com/originals/3b/16/77/3b1677733d37180cd6cdfa3a49995a3b.jpg "
                    class="img-fluid" alt="" style="height:277px ;"></a>
                <!-- <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">App 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div> -->
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="assets\img\g1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="assets\img\g1.jpg" class="img-fluid" alt=""></a>
                <!-- <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Product 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div> -->
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="https://images.shaadisaga.com/shaadisaga_production/photos/pictures/003/161/034/original/202662599_1074946442911169_4078052951135507385_n.jpg?1641568533" data-gallery="portfolio-gallery-app"
                  class="glightbox"><img
                    src="https://images.shaadisaga.com/shaadisaga_production/photos/pictures/003/161/034/original/202662599_1074946442911169_4078052951135507385_n.jpg?1641568533"
                    class="img-fluid" alt=""></a>
                <!-- <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Branding 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div> -->
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="assets\img\a1.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="assets\img\a1.jpg" class="img-fluid" alt=""></a>
                <!-- <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Books 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div> -->
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="https://cdn0.weddingwire.in/article/9780/3_2/1280/jpg/100879-wedding-stage-lead.webp" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="https://cdn0.weddingwire.in/article/9780/3_2/1280/jpg/100879-wedding-stage-lead.webp"
                    class="img-fluid" alt="" style="height:277px ;"></a>
                <!-- <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">App 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div> -->
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-product">
              <div class="portfolio-wrap">
                <a href="https://www.shaadidukaan.com/vogue/wp-content/uploads/2019/09/sangeet-in-a-garba-style.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="https://www.shaadidukaan.com/vogue/wp-content/uploads/2019/09/sangeet-in-a-garba-style.jpg"
                    class="img-fluid" alt="" style="height:277px ;"></a>
                <!-- <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Product 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div> -->
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
              <div class="portfolio-wrap">
                <a href="https://images.shaadisaga.com/shaadisaga_production/photos/pictures/000/505/373/original/Infinite_memories.jpg?1536041773" data-gallery="portfolio-gallery-app"
                  class="glightbox"><img
                    src="https://images.shaadisaga.com/shaadisaga_production/photos/pictures/000/505/373/original/Infinite_memories.jpg?1536041773"
                    class="img-fluid" alt=""></a>
                <!-- <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Branding 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div> -->
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-xl-4 col-md-6 portfolio-item filter-books">
              <div class="portfolio-wrap">
                <a href="https://images.squarespace-cdn.com/content/v1/5911db703a0411f8aed72029/1559496011020-0TY653O31RU6YLKLOASR/PALERMOPHOTO-details-71.jpg" data-gallery="portfolio-gallery-app" class="glightbox"><img
                    src="https://images.squarespace-cdn.com/content/v1/5911db703a0411f8aed72029/1559496011020-0TY653O31RU6YLKLOASR/PALERMOPHOTO-details-71.jpg"
                    class="img-fluid" alt=""></a>
                <!-- <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details">Books 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div> -->
              </div>
            </div><!-- End Portfolio Item -->
          </div><!-- End Portfolio Container -->
        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <br>
          <h2>Our Team</h2>
          <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem
            dolore earum</p>
        </div>

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex ms-5 me-5" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              <h4>Jeet Rtanpara</h4>
              <span>Web Development</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex ms-5 me-5" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              <h4>Richa Kamani</h4>
              <span>Web Development</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-3 col-md-6 d-flex ms-5 " data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              <h4>Ansh Dalsania</h4>
              <span>Web Development</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->

          <!-- <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>End Team Member -->

        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Pricing</h2>
          <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis
            omnis tiledo stran delop</p>
        </div>

        <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">

          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>Free Plan</h3>
              <div class="icon">
                <i class="bi bi-box"></i>
              </div>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4">
            <div class="pricing-item featured">
              <h3>Business Plan</h3>
              <div class="icon">
                <i class="bi bi-airplane"></i>
              </div>

              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>Developer Plan</h3>
              <div class="icon">
                <i class="bi bi-send"></i>
              </div>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>
    </section><!-- End Pricing Section -->





    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <br>
          <h2>Contact</h2>
          <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem
            dolore earum</p>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 55</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-clock flex-shrink-0"></i>
                <div>
                  <h4>Open Hours:</h4>
                  <p>Mon-Sat: 11AM - 23PM</p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="col-lg-8">
            <form method="post" action="home.php" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="cname" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="cemail" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="csubject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="cmessage" rows="7" placeholder="Message" required></textarea>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->

            </form>
          </div><!-- End Contact Form -->
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="home.html" class="logo d-flex align-items-center">
            <h1>Knot<span>.</span></h1>
          </a>
          <p>THE Knot is here for Organize Events for you so You can Enjoy and Live your Moments. We are organize events
            like Marriage, Birthday Party, Theme parties, Etc. So let's plan your event and make your day special with
            <strong>The Knot.</strong>
          </p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Marraige</a></li>
            <li><a href="#">Theme Party</a></li>
            <li><a href="#">Social Party</a></li>
            <li><a href="#">Business</a></li>
            <li><a href="#">Birthday Party</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            A108 Adam Street <br>
            New York, NY 535022<br>
            United States <br><br>
            <strong>Phone:</strong> +1 5589 55488 55<br>
            <strong>Email:</strong> info@example.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>The Knot</span></strong>. All Rights Reserved.
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>