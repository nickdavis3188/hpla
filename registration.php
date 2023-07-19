<?php
require("./url/url.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HPLA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.jpg" rel="icon">
  <link href="assets/img/logo.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Lumia
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <!-- <h1><a href="/index.html">HIS PRESENCE LIFE ACADEMY</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.php"><img src="assets/img/logo.jpg" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="<?php echo $home ?>">Home</a></li>
          <li><a class="nav-link scrollto" href="#">Form</a></li>
          <!-- <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <!-- <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Inner Page</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Inner Page</li>
          </ol>
        </div>

      </div>
    </section>End Breadcrumbs -->

    <!-- <section class="inner-page">
      <div class="container">
        <p>
          Example inner page template
        </p>
      </div>
    </section> -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">
        <br>
        <br>
        <!--  -->
        <?php
        if (isset($_REQUEST['msg'])) {
        ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Registration successful!</strong>.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php
        } else if (isset($_REQUEST['fail'])) {
        ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><?php echo ($_REQUEST["fail"]) ?></strong>.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php
        }
        ?>
        <!--  -->

        <div class="row mt-5 justify-content-center">
          <div class="col-lg-10">
            <form action="./controller/registrationController.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 col-sm-12 form-group">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">FIRST NAME</label>
                    <input type="text" name="firstName" class="form-control" placeholder="" required>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 form-group">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">SURNAME</label>
                    <input type="text" name="surName" class="form-control" id="name" placeholder="" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-sm-12 form-group mt-3 mt-md-0">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">EMAIL ADDRESS</label>
                    <input type="email" class="form-control" name="email" placeholder="" required>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 form-group mt-3 mt-md-0">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">PHONE NO</label>
                    <input type="number" class="form-control" name="phone" placeholder="" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-sm-12 form-group mt-3 mt-md-0">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">COURSE OF INTEREST</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="selectedCourse" required>
                      <option selected>Pleas Select ...</option>
                      <option value="Pediatrics">Pediatrics</option>
                      <option value="Data Science">Data Science</option>
                      <option value="Business Analysis">Business Analysis</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 form-group mt-3 mt-md-0">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">QUALIFICATION</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="qualification" required>
                      <option selected>Pleas Select...</option>
                      <option>GCE/SSCE</option>
                      <option>BSC</option>
                      <option>PHD</option>
                      <option>OTHERS</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-sm-12 form-group mt-3 mt-md-0">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">STATE OF RESIDENCE</label>
                    <select class="form-control" id="state" name="state" required>
                      <option selected>Pleas Select ...</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 form-group mt-3 mt-md-0">
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">HOW DO YOU INTEND TO JOIN THE TRAINING</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="joinMode" required>
                      <option selected>Pleas Select ...</option>
                      <option>Virtual</option>
                      <option>Physical</option>
                      <option>Hybrid</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="text-center"><button name="submit" type="submit">Submit</button></div>
            </form>

          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>HIS PRESENCE LIFE ACADEMY</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/lumia-bootstrap-business-template/ -->
          Designed by Nick Davis</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    //   const countryEl = document.getElementById("country");

    //   fetch("https://countriesnow.space/api/v0.1/countries/positions")
    //   .then((res) => res.json())
    //   .then((data) => {
    //   for (let i = 0; i <= data.data.length; i++) {
    //     let opt = document.createElement("option");
    //     opt.value = data.data[i]?.name;
    //     opt.innerHTML = data.data[i]?.name;
    //     countryEl.appendChild(opt);
    //   }
    // })
    // .catch((e) => {
    //   console.log(e);
    // });

    window.onload = () => {
      const stateEl = document.getElementById("state");
      while (stateEl.hasChildNodes()) {
        stateEl.removeChild(stateEl.firstChild);
      }
      fetch("https://countriesnow.space/api/v0.1/countries/states", {
          method: "POST",
          body: JSON.stringify({
            country: "Nigeria",
          }),
          headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'Access-Control-Allow-Origin': '*'
          },
        })
        .then((res) => res.json())
        .then((data) => {
          if (data?.data?.states?.length) {
            // if (stateEl.hasChildNodes()) {

            // } else {
            for (let i = 0; i <= data.data.states.length; i++) {
              let opt = document.createElement("option");
              opt.value = data.data.states[i]?.name;
              opt.innerHTML = data.data.states[i]?.name;
              stateEl.appendChild(opt);
            }
            // }
          }
        })
        .catch((e) => {
          console.log(e);
        });
    };
  </script>

</body>

</html>