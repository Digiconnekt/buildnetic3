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
  </head>
  <body>
    <!-- header section start -->
    <?php include '../partials/menu.php' ?>
    <!-- header section end -->

    <div class="single-service-page">
      <!-- title section start -->
      <div class="data-analytics-banner title-section container-fuild mt-3">
        <div class="px-4 py-5 text-center">
          <h4 class="mb-3">Order Your Raws Into Analytics</h4>
          <h1 class="display-5 fw-bold mb-3">Data Analytics</h1>
        </div>
      </div>
      <!-- title section end -->

      <!-- development section start -->
      <div class="development-section container my-5">
        <div class="row">
          <div class="col-12 col-md-6 mb-3 mb-md-0">
            <div class="img-block mx-auto">
              <img
                src="../images/services/single-services/data-analytics/data-analytics.jpg"
                alt="Data Analytics"
              />
            </div>
          </div>
          <div class="col-12 col-md-6">
            <h2>Data Analytics</h2>
            <div class="border-black mb-3"></div>
            <p>
              The science of evaluating, analyzing, and converting raw data with
              the intention of providing knowledge that may be used to make
              decisions is known as data analytics.
            </p>
            <ul>
              <li>We recognize and anticipate the demands of your customers</li>
              <li>
                We stop systemic fraud and develop predictive data analytics.
              </li>
              <li>
                Our marketing channels become more efficient with appropriate
                user segmentation.
              </li>
              <li>
                Our channel improves your operational efficiency and returns on
                investment.
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
                  src="../images/services/single-services/data-analytics/services-we-offer-1.png"
                  class="card-img-top"
                  alt="Data Warehousing"
                />
                <div class="card-body">
                  <h5 class="card-title">Data Warehousing</h5>
                  <p class="card-text">
                    Gathering unprocessed data from various heterogeneous
                    sources and storing it in a way consistent with analytical
                    reporting and decision-making.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/data-analytics/services-we-offer-2.png"
                  class="card-img-top"
                  alt="Data Analytics"
                />
                <div class="card-body">
                  <h5 class="card-title">Data Analytics</h5>
                  <p class="card-text">
                    Find and forecast trends around them by analyzing the data
                    the company produces. Discover your company's performance in
                    real-time.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/data-analytics/services-we-offer-3.png"
                  class="card-img-top"
                  alt="Data Visualization"
                />
                <div class="card-body">
                  <h5 class="card-title">Data Visualization</h5>
                  <p class="card-text">
                    It is how data and information are represented graphically.
                    Data visualization helps people comprehend trends and
                    patterns more clearly by using graphs, charts, and maps.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/data-analytics/services-we-offer-4.png"
                  class="card-img-top"
                  alt="Business Intelligence"
                />
                <div class="card-body">
                  <h5 class="card-title">Business Intelligence</h5>
                  <p class="card-text">
                    By transforming unprocessed company data into useful
                    insights, business intelligence offers a comprehensive and
                    strategic view of corporate operations.
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
