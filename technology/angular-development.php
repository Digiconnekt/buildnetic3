<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Buildnetic</title>

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
      @media (max-width: 1440px) {
        .services-we-offer-section .card {
          min-height: 320px;
        }
      }

      @media (max-width: 991px) {
        .services-we-offer-section .card {
          min-height: 365px;
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
      <div class="angular-banner title-section container-fuild mt-3">
        <div class="px-4 py-5 text-center">
          <h4 class="mb-3">Modern Web Development Platform</h4>
          <h1 class="display-5 fw-bold mb-3">
            Angular Application Development
          </h1>
        </div>
      </div>
      <!-- title section end -->

      <!-- development section start -->
      <div class="development-section container my-5">
        <div class="row">
          <div class="col-12 col-md-6 mb-3 mb-md-0">
            <div class="img-block mx-auto">
              <img
                src="../images/services/single-services/angular/angular.jpg"
                alt="Angular"
              />
            </div>
          </div>
          <div class="col-12 col-md-6">
            <h2>Angular Application Development</h2>
            <div class="border-black mb-3"></div>
            <p>
              A cutting-edge web development platform and application design
              framework for building effective single-page apps is called
              Angular. Built with a variety of capabilities on TypeScript, it
              facilitates the creation of complicated single-page enterprise
              apps as well as scalable online applications. Faster performance,
              scalable development, and a contemporary approach to web
              application worldwide deployment are all guaranteed by Angular.
            </p>
            <ul>
              <li>A technique for creating cross-platform applications.</li>
              <li>Scalable on web platforms at the fastest possible rate.</li>
              <li>Prebuilt templates make it simple to develop features.</li>
              <li>Support for global deployment development.</li>
              <li>Zero-step installation and high performance.</li>
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
                  src="../images/services/single-services/angular/services-we-offer-1.png"
                  class="card-img-top"
                  alt="UI/UX Development for Angular"
                />
                <div class="card-body">
                  <h5 class="card-title">UI/UX Development for Angular</h5>
                  <p class="card-text">
                    While reusing the codes, create, design, and convert complex
                    design components. We support the creation of UX/UI design
                    for faster installation and higher performance.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/angular/services-we-offer-2.png"
                  class="card-img-top"
                  alt="Custom Angular Development"
                />
                <div class="card-body">
                  <h5 class="card-title">Custom Angular Development</h5>
                  <p class="card-text">
                    With the assistance of our team of professionals, customise
                    your web development to meet your business objectives. We
                    assist in offering quicker, more effective, and
                    uncompromising solutions.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/angular/services-we-offer-3.png"
                  class="card-img-top"
                  alt="Angular Support and Maintenance"
                />
                <div class="card-body">
                  <h5 class="card-title">Angular Support and Maintenance</h5>
                  <p class="card-text">
                    For efficient operations, we offer maintenance and support
                    services. In addition to speed optimization, we also offer
                    security updates, plugin updates, version upgrades, etc.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/angular/services-we-offer-4.png"
                  class="card-img-top"
                  alt="Testing for Angular Quality"
                />
                <div class="card-body">
                  <h5 class="card-title">Testing for Angular Quality</h5>
                  <p class="card-text">
                    We've selected tests to evaluate the effectiveness and
                    quality of your angular components. Our customer service
                    team wants your web experience to be seamless and
                    uncomplicated.
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
      <div class="success-stories-section container-fluid my-5">
        <div class="container">
          <h2>Success Stories?</h2>
          <div class="border-yellow mb-5"></div>
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col-12 col-lg-4 col-md-6">
              <div class="card">
                <img
                  src="../images/success-stories/ddf.png"
                  class="card-img-top"
                  alt="Delhi Duty Free"
                />
                <div class="card-body">
                  <h5 class="card-title">Delhi Duty Free</h5>
                  <p class="card-text mb-0">
                    <span>Technology: </span>PHP, Magento, MqSQL, AWS
                  </p>
                  <p class="card-text">
                    <span>Scope of Work : </span>Design, Development &
                    Maintenance
                  </p>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-4 col-md-6">
              <div class="card">
                <img
                  src="../images/success-stories/m-and-s.png"
                  class="card-img-top"
                  alt="Marks & Spencer"
                />
                <div class="card-body">
                  <h5 class="card-title">Marks & Spencer</h5>
                  <p class="card-text mb-0">
                    <span>Technology: </span>NodeJs, React, MongoDb, Azure
                  </p>
                  <p class="card-text">
                    <span>Scope of Work : </span>Consulting
                  </p>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-4 col-md-6">
              <div class="card">
                <img
                  src="../images/success-stories/epam.png"
                  class="card-img-top"
                  alt="EPAM"
                />
                <div class="card-body">
                  <h5 class="card-title">EPAM</h5>
                  <p class="card-text mb-0">
                    <span>Technology: </span>Microsoft Power BI, React
                  </p>
                  <p class="card-text">
                    <span>Scope of Work : </span>Development & Maintenance
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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
