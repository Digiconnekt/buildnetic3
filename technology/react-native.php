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
        /* min-height: 320px; */
      }

      @media (max-width: 1440px) {
        .services-we-offer-section .card {
          min-height: 300px;
        }
      }

      @media (max-width: 1200px) {
        .services-we-offer-section .card {
          min-height: 340px;
        }
      }

      @media (max-width: 991px) {
        .services-we-offer-section .card {
          min-height: 370px;
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
      <div class="react-native-banner title-section container-fuild mt-3">
        <div class="px-4 py-5 text-center">
          <h4 class="mb-3">An Open-Source Framework</h4>
          <h1 class="display-5 fw-bold mb-3">React Native Development</h1>
        </div>
      </div>
      <!-- title section end -->

      <!-- development section start -->
      <div class="development-section container my-5">
        <div class="row">
          <div class="col-12 col-md-6 mb-3 mb-md-0">
            <div class="img-block mx-auto">
              <img
                src="../images/services/single-services/react-native/react-native.jpg"
                alt="React Native"
              />
            </div>
          </div>
          <div class="col-12 col-md-6">
            <h2>React Native Development</h2>
            <div class="border-black mb-3"></div>
            <p>
              JavaScript may be used to create native apps for iOS and Android
              using the open-source framework React Native. JavaScript codes may
              be exchanged between iOS and Android using react native, doing
              away with the requirement for two separate teams of developers to
              maintain two different sets of codes. Both current projects and
              brand-new applications can be built with React Native.
            </p>
            <ul>
              <li>Platform independence for quick time to market</li>
              <li>
                Implementation at a low cost using a standard JavaScript
                codebase.
              </li>
              <li>
                A framework for dependable mobile development that is
                community-driven.
              </li>
              <li>
                Multi-native UI component framework with a strong UI focus.
              </li>
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
            <div class="col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/react-native/services-we-offer-1.png"
                  class="card-img-top"
                  alt="Development of React Native applications"
                />
                <div class="card-body">
                  <h5 class="card-title">
                    Development of React Native applications
                  </h5>
                  <p class="card-text">
                    Take advantage of native development's advantages. We work
                    with you to create the app with the best price-to-quality
                    ratio while delivering it quickly and with a wealth of
                    features.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/react-native/services-we-offer-2.png"
                  class="card-img-top"
                  alt="Custom React Native Development"
                />
                <div class="card-body">
                  <h5 class="card-title">Custom React Native Development</h5>
                  <p class="card-text">
                    Adapt the design to the needs of the business. The roadmap
                    will be created by our consulting team to make the app
                    user-friendly and captivating.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/react-native/services-we-offer-3.png"
                  class="card-img-top"
                  alt="Transform to React Native"
                />
                <div class="card-body">
                  <h5 class="card-title">Transform to React Native</h5>
                  <p class="card-text">
                    If you want to convert your old software to React Native, we
                    can help. Use React Native to address concerns with quality,
                    security, or user experience.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/react-native/services-we-offer-4.png"
                  class="card-img-top"
                  alt="Maintenance and support for React Native"
                />
                <div class="card-body">
                  <h5 class="card-title">
                    Maintenance and support for React Native
                  </h5>
                  <p class="card-text">
                    To keep the app reliable, safe, and up-to-date, Steady
                    Rabbit offers 24/7 assistance. We provide comprehensive
                    support and maintenance services.
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
            href="../get-in-touch.html"
            role="button"
            >Get In Touch <i class="fa-solid fa-arrow-right-long ms-2"></i
          ></a>
        </div>
      </div>
      <!-- part of solution section end -->
    </div>

    <!-- footer section start -->
    <?php include '../partials/footer.php' ?>
