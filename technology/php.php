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
      .services-we-offer-section .card.several-reasons {
        min-height: 295px;
      }

      .services-we-offer-section .card {
        min-height: 317px;
      }

      @media (max-width: 1440px) {
        .services-we-offer-section .card.several-reasons {
          min-height: 318px;
        }

        .services-we-offer-section .card {
          min-height: 340px;
        }
      }

      @media (max-width: 1200px) {
        .services-we-offer-section .card.several-reasons {
          min-height: 340px;
        }

        .services-we-offer-section .card {
          min-height: 365px;
        }
      }

      @media (max-width: 991px) {
        .services-we-offer-section .card.several-reasons {
          min-height: 415px;
        }
      }

      @media (max-width: 768px) {
        .services-we-offer-section .card.several-reasons,
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
      <div class="php-banner title-section container-fuild mt-3">
        <div class="px-4 py-5 text-center">
          <!-- <h4 class="mb-3">Paradigm Shifting Technology</h4> -->
          <h1 class="display-5 fw-bold mb-3">PHP</h1>
        </div>
      </div>
      <!-- title section end -->
      
      <div class="container my-5">
        <h2 class="text-center">Why is PHP needed?</h2>
        <div class="border-black mx-auto mb-3"></div>
        <p style="text-align: justify">
        PHP is a popular server-side scripting language used by many companies to develop web applications and dynamic websites. It is easy to learn and use, making it a preferred choice for developers. PHP also has a large and active community of developers who create and maintain open-source libraries and frameworks, making it easier to build complex applications quickly. Additionally, PHP is cross-platform and works on various operating systems, including Linux, Windows, and macOS
        </p>
        <p style="text-align: justify">
        Many popular content management systems like WordPress, Drupal, and Joomla are built using PHP, making it an essential skill for web developers in many companies. Overall, PHP is a versatile and reliable language that is widely used in the industry, making it an important tool for companies to have in their technology stack.
        </p>
      </div>

      <!-- why us section start -->
      <div class="development-section container my-5">
        <div class="row">
          <div class="col-12 col-md-6 mb-3 mb-md-0">
            <div class="img-block mx-auto">
              <img
                src="../images/services/single-services/php/php.png"
                alt="PHP"
              />
            </div>
          </div>
          <div class="col-12 col-md-6">
            <h2>Why Us?</h2>
            <div class="border-black mb-3"></div>
            <ul>
              <li>
              Expertise and experience: We have a proven track record of delivering high-quality PHP projects. Check our client testimonials to get an idea of our developer's expertise and experience.
              </li>
              <li>
              Technology stack: We have a team of technocrats! All the technology stack is well-learned and practiced by our experts.
              </li>
              <li>
              Communication and responsiveness: We believe to communicate effectively and respond promptly to your queries and concerns.
              </li>
              <li>
              Support and maintenance: We offer support and maintenance services for your project, including bug fixing, security updates, and performance optimization.
              </li>
              <li>
              Project management: We have a project management system to ensure efficient collaboration and timely delivery of your project.
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- why us section end -->

      <!-- services we offer section start -->
      <div class="services-we-offer-section container-fluid my-5">
        <div class="container">
          <h2 class="text-center">Services We Offer</h2>
          <div class="border-yellow mx-auto mb-5"></div>
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/php/services-we-offer-1.png"
                  class="card-img-top"
                  alt="Custom PHP Development"
                />
                <div class="card-body">
                  <h5 class="card-title">Custom PHP Development</h5>
                  <p class="card-text">
                  We develop custom web applications, websites, e-commerce solutions, and content management systems (CMS) using PHP and related technologies.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/php/services-we-offer-2.png"
                  class="card-img-top"
                  alt="PHP Framework Development"
                />
                <div class="card-body">
                  <h5 class="card-title">PHP Framework Development</h5>
                  <p class="card-text">
                  Our experts can create PHP web applications using popular PHP frameworks like Laravel, CodeIgniter, Symfony, and CakePHP.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/php/services-we-offer-3.png"
                  class="card-img-top"
                  alt="PHP Application Maintenance"
                />
                <div class="card-body">
                  <h5 class="card-title">PHP Application Maintenance</h5>
                  <p class="card-text">
                  We provide maintenance and support services for existing PHP applications, including bug fixing, security updates, and performance optimization.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/php/services-we-offer-4.png"
                  class="card-img-top"
                  alt="PHP Consulting Services"
                />
                <div class="card-body">
                  <h5 class="card-title">PHP Consulting Services</h5>
                  <p class="card-text">
                  Besides, we also provide expert advice and consulting on PHP-related issues, including architecture design, scalability, performance, and security.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/php/services-we-offer-5.png"
                  class="card-img-top"
                  alt="PHP Migration Services"
                />
                <div class="card-body">
                  <h5 class="card-title">PHP Migration Services</h5>
                  <p class="card-text">
                  Our developers can migrate existing PHP applications to newer versions of PHP, or to other platforms and technologies.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/php/services-we-offer-6.png"
                  class="card-img-top"
                  alt="PHP Integration Services"
                />
                <div class="card-body">
                  <h5 class="card-title">PHP Integration Services</h5>
                  <p class="card-text">
                  We integrate PHP applications with other third-party services and platforms, including payment gateways, social media platforms, and cloud services.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/php/services-we-offer-7.png"
                  class="card-img-top"
                  alt="PHP Testing Services"
                />
                <div class="card-body">
                  <h5 class="card-title">PHP Testing Services</h5>
                  <p class="card-text">
                  Buildnetic also provide testing services for PHP applications, including unit testing, functional testing, and performance testing.
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
