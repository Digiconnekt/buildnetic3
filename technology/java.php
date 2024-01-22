<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Buildnetic</title>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LF922RPFG3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-LF922RPFG3');
    </script>

    <!-- google site verification -->
    <meta name="google-site-verification" content="pBPdcif54dfoSLuoJiEtQWxmlq5G58xcAQ0zHUnzV7c" />

    <!-- favicon link -->
    <link
      rel="shortcut icon"
      href="../images/buildnetic-fav.ico"
      type="image/x-icon"
    />

    <!-- bootstrap 5 CSS cdn link -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <!-- custom CSS link -->
    <link rel="stylesheet" href="../css/index.css" />

    <!-- custom CSS link for SERVICES MAIN page-->
    <link rel="stylesheet" href="../css/single-service.css" />

    <!-- fontawesome link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- internal css -->
    <style>
      .services-we-offer-section .card {
        min-height: 320px;
      }

      @media (max-width: 1440px) {
        .services-we-offer-section .card {
          min-height: 340px;
        }
      }

      @media (max-width: 1200px) {
        .services-we-offer-section .card {
          min-height: 420px;
        }
      }

      @media (max-width: 991px) {
        .services-we-offer-section .card {
          min-height: auto;
        }
      }

      @media (max-width: 767px) {
        .services-we-offer-section .card {
          min-height: auto;
        }
      }
    </style>
  </head>
  <body>
    <!-- header section start -->
    <?php include '../partials/menu.php' ?>
    <!-- header section end -->

    <div class="single-service-page">
      <!-- title section start -->
      <div class="java-banner title-section container-fuild mt-3">
        <div class="px-4 py-5 text-center">
          <h4 class="mb-3">The versatile language</h4>
          <h1 class="display-5 fw-bold mb-3">Java</h1>
        </div>
      </div>
      <!-- title section end -->

      <!-- development section start -->
      <div class="development-section container my-5">
        <div class="row">
          <div class="col-12 col-md-6 mb-3 mb-md-0">
            <div class="img-block mx-auto">
              <img
                src="../images/services/single-services/java/java.jpg"
                alt="Java"
              />
            </div>
          </div>
          <div class="col-12 col-md-6">
            <h2>Java</h2>
            <div class="border-black mb-3"></div>
            <p>
              The core tenet of the platform-free programming language Java is
              "Write once, Run everywhere." Java is appropriate for creating
              both online and mobile applications. We at Buildnetic are skilled
              in developing mission-critical Java apps.
            </p>
            <ul>
              <li>Platform Independent</li>
              <li>Secure</li>
              <li>Multithreaded</li>
              <li>High Performance</li>
              <li>Distributed</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- development section end -->

      <!-- services we offer section start -->
      <div class="services-we-offer-section container-fluid my-5">
        <div class="container">
          <h2 class="text-center">Services We Offer</h2>
          <div class="border-yellow mx-auto mb-5"></div>
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/java/services-we-offer-1.png"
                  class="card-img-top"
                  alt="Core Java Development"
                />
                <div class="card-body">
                  <h5 class="card-title">Core Java Development</h5>
                  <p class="card-text">
                    We offer Java developers who are skilled in web and mobile
                    development. We will execute it for you, whether it's a Java
                    module or an end-to-end solution.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/java/services-we-offer-2.png"
                  class="card-img-top"
                  alt="Java Mobile Development"
                />
                <div class="card-body">
                  <h5 class="card-title">Java Mobile Development</h5>
                  <p class="card-text">
                    OneAD, our previous mobile gaming experience, scaled to 30
                    million users. You may be confident that we will provide you
                    with high-quality solutions for your mobile needs.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/java/services-we-offer-3.png"
                  class="card-img-top"
                  alt="Migrate to Java"
                />
                <div class="card-body">
                  <h5 class="card-title">Migrate to Java</h5>
                  <p class="card-text">
                    You can redesign any solution with the aid of our Java
                    developers. Regardless of the old technology, our Java
                    developers are skilled to move the legacy solution.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/java/services-we-offer-4.png"
                  class="card-img-top"
                  alt="Java Support & Maintenance"
                />
                <div class="card-body">
                  <h5 class="card-title">Java Support & Maintenance</h5>
                  <p class="card-text">
                    We never want your systems or solutions to fail. The Java
                    support team offers frequent and useful insights into how
                    your system is functioning.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/java/services-we-offer-5.png"
                  class="card-img-top"
                  alt="Java Web Development"
                />
                <div class="card-body">
                  <h5 class="card-title">Java Web Development</h5>
                  <p class="card-text">
                    Web development and the integration of Java applications are
                    greatly simplified by our Java outsourcing team. Java
                    developers will create and perform deployment in phases.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/java/services-we-offer-6.png"
                  class="card-img-top"
                  alt="Upgrade Java Version"
                />
                <div class="card-body">
                  <h5 class="card-title">Upgrade Java Version</h5>
                  <p class="card-text">
                    Every project requires improvement. By updating it to the
                    most recent Java version, our Java developers will make sure
                    that your project stays on the cutting edge.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- services we offer section end -->

      <!-- technical expertise section start -->
      <?php include '../partials/technical-expertise-section.php' ?>
      <!-- technical expertise section end -->

      <!-- success stories section start -->
      <?php include '../partials/success-stories-section.php' ?>
      <!-- success stories section end -->

      <!-- part of solution section start -->
      <div class="part-of-solutions-section container-fuild mt-5">
        <div class="px-4 py-5 text-center">
          <h1 class="display-5 mb-3">Be a part of the solution!</h1>
          <a
            class="btn get-in-touch-btn mx-auto"
            href="../get-in-touch.php"
            role="button"
            >Get In Touch <i class="fa-solid fa-arrow-right-long ms-2"></i
          ></a>
        </div>
      </div>
      <!-- part of solution section end -->
    </div>

    <!-- footer section start -->
    <?php include '../partials/footer.php' ?>
