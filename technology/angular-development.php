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

      <div class="container my-5">
        <h2 class="text-center">Why is Angular Needed?</h2>
        <div class="border-black mx-auto mb-3"></div>
        <ul>
          <li>
          Software development firms frequently use the well-liked front-end web application development framework Angular.
          </li>
          <li>
          With features like two-way data binding, dependency injection, and modular architecture, it first offers a reliable and effective method of developing complex web applications.
          </li>
          <li>
          Second, Angular has a sizable and vibrant developer community, so there is a tonne of tools and resources available to aid developers in creating applications more quickly and effectively.
          </li>
          <li>
          Thirdly, the dynamic, single-page applications that are becoming more and more common in today's web development environment can be built using Angular.
          </li>
          <li>
          Last but not least, Angular is supported by Google, which means it is constantly developing and improving and will probably continue to be useful for a while.
          </li>
        </ul>
      </div>

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
            <ul>
              <li>
              Expertise & experience: Our developers have experience in Angular development. Check their portfolio to see the projects they have completed and the types of Angular solutions they have developed.
              </li>
              <li>Communication skills: We believe good communication is always the major element of a good software developer. Our developers respond to queries and communicate the progress transparently.</li>
              <li>Development process: Our developers follow a well-defined development process. This includes Agile development methodology, continuous integration and delivery, and quality assurance processes.</li>
              <li>Our customer reviews: Look for customer reviews. This will give you an idea of our reliability, quality of service, and customer satisfaction.</li>
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
                  alt="Angular development"
                />
                <div class="card-body">
                  <h5 class="card-title">Angular development</h5>
                  <p class="card-text">
                  Our experts develop custom web applications using the Angular framework, with a focus on delivering efficient and scalable solutions.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/angular/services-we-offer-2.png"
                  class="card-img-top"
                  alt="Angular consulting"
                />
                <div class="card-body">
                  <h5 class="card-title">Angular consulting</h5>
                  <p class="card-text">
                  We provide consulting services to clients, helping them determine the best Angular solutions for their specific needs and requirements.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/angular/services-we-offer-3.png"
                  class="card-img-top"
                  alt="Angular maintenance and support"
                />
                <div class="card-body">
                  <h5 class="card-title">Angular maintenance and support</h5>
                  <p class="card-text">
                  Our team offers ongoing maintenance and support services to ensure that Angular applications are always up-to-date, secure, and running smoothly.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/angular/services-we-offer-4.png"
                  class="card-img-top"
                  alt="Angular migration"
                />
                <div class="card-body">
                  <h5 class="card-title">Angular migration</h5>
                  <p class="card-text">
                  For clients looking to migrate from other frameworks or technologies to Angular, we offer them migration services to help ensure a smooth transition.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/angular/services-we-offer-4.png"
                  class="card-img-top"
                  alt="Angular testing and quality assurance"
                />
                <div class="card-body">
                  <h5 class="card-title">Angular testing and quality assurance</h5>
                  <p class="card-text">
                  We offer testing and quality assurance services to ensure that Angular applications are bug-free, reliable, and meet the highest standards of quality.
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
