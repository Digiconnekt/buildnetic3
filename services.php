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
      href="./images/buildnetic-fav.ico"
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
    <link rel="stylesheet" href="./css/index.css" />

    <!-- custom CSS link for SERVICES MAIN page-->
    <link rel="stylesheet" href="./css/services.css" />

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
    <?php include 'partials/menu.php' ?>
    <!-- header section end -->

    <div class="services-page">
      <!-- title section start -->
      <div class="title-section container-fuild mt-3">
        <div class="container py-5">
          <h1 class="display-5 fw-bold pt-5">Our Services</h1>
          <div class="border-white mb-5"></div>
        </div>
      </div>
      <!-- title section end -->

      <!-- service offering section start -->
      <div class="service-offerings-section container my-5">
        <h2 class="text-center">Our Service Offering</h2>
        <div class="border-black mx-auto mb-5"></div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col-lg-4 col-md-6">
            <a
              href="./services/web-development.html"
              class="card text-decoration-none"
            >
              <img
                src="./images/services/web-dev.png"
                class="card-img-top mx-auto"
                alt="Web Development"
              />
              <div class="card-body">
                <h5 class="card-title text-center">Web Development</h5>
                <p class="card-text">
                  A team of highly skilled professionals to build your website
                  bit by bit, and grow your business just the way you like. Be
                  it supporting traffic or managing the backend
                  <span>read more...</span>
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
            <a
              href="./services/mobile-development.html"
              class="card text-decoration-none"
            >
              <img
                src="./images/services/mob-dev.png"
                class="card-img-top mx-auto"
                alt="Mobile Development"
              />
              <div class="card-body">
                <h5 class="card-title text-center">Mobility Solutions</h5>
                <p class="card-text">
                  It is the process of creating mobile applications with a
                  user-centered design and development approach. Using
                  complicated engineering and mobile-first philosophy, we
                  <span>read more...</span>
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
            <a
              href="./services/cloud-computing.html"
              class="card text-decoration-none"
            >
              <img
                src="./images/services/cloud-computing.png"
                class="card-img-top mx-auto"
                alt="Cloud Computing"
              />
              <div class="card-body">
                <h5 class="card-title text-center">Cloud Computing</h5>
                <p class="card-text">
                  Companies spend tons on IT infrastructure to assemble a stack
                  suitable enough to help them stay ahead in the race and those
                  which meet market needs. More than 80% of the time
                  <span>read more...</span>
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
            <a
              href="./services/e-learning-solutions.html"
              class="card text-decoration-none"
            >
              <img
                src="./images/services/e-learning.png"
                class="card-img-top mx-auto"
                alt="E-Learning Solutions"
              />
              <div class="card-body">
                <h5 class="card-title text-center">E-Learning Solutions</h5>
                <p class="card-text">
                  Buildnetic is here for you to research and design interactive,
                  communal and easily scalable e-learning solutions that would
                  mutate the knowledge sharing for clients such as educational
                  <span>read more...</span>
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
            <a
              href="./services/cyber-security.html"
              class="card text-decoration-none"
            >
              <img
                src="./images/services/cyber-security.png"
                class="card-img-top mx-auto"
                alt="Cyber Security"
              />
              <div class="card-body">
                <h5 class="card-title text-center">Cyber Security</h5>
                <p class="card-text">
                  Cyber crimes can easily prey upon small midsize enterprises or
                  large businesses and yet business owners don’t take this
                  seriously. If you are here then you are onto the right path.
                  <span>read more...</span>
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
            <a
              href="./services/business-intelligence-consulting.html"
              class="card text-decoration-none"
            >
              <img
                src="./images/services/business-inteligence.png"
                class="card-img-top mx-auto"
                alt="
                Business Intelligence Consulting"
              />
              <div class="card-body">
                <h5 class="card-title text-center">
                  Business Intelligence Consulting
                </h5>
                <p class="card-text">
                  A BI consultant helps you organize business data in a way that
                  helps you make more profitable business decisions. You
                  shouldn’t need to be a statistician or a data scientist to
                  understand <span>read more...</span>
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
            <a
              href="./services/e-commerce-solutions.html"
              class="card text-decoration-none"
            >
              <img
                src="./images/services/e-commerce.png"
                class="card-img-top mx-auto"
                alt="E-Commerce Solutions"
              />
              <div class="card-body">
                <h5 class="card-title text-center">E-Commerce Solutions</h5>
                <p class="card-text">
                  E-commerce enables you to easily, creatively, and attractively
                  move your physical store online. You build a strong online
                  presence for your brand when you provide high-quality products
                  <span>read more...</span>
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
            <a
              href="./services/ui-ux-solutions.html"
              class="card text-decoration-none"
            >
              <img
                src="./images/services/ui-ux.png"
                class="card-img-top mx-auto"
                alt="
                UI-UX-Solutions"
              />
              <div class="card-body">
                <h5 class="card-title text-center">UI-UX-Solutions</h5>
                <p class="card-text">
                  Our highly qualified team has dealt with customised user
                  interfaces for a range of platforms including desktops,
                  phones, tablets, and smart displays. Our main principles of
                  UX/UI design
                  <span>read more...</span>
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
            <a
              href="./services/custom-application-development.html"
              class="card text-decoration-none"
            >
              <img
                src="./images/services/custom-application.png"
                class="card-img-top mx-auto"
                alt="
                Custom Application Development"
              />
              <div class="card-body">
                <h5 class="card-title text-center">
                  Custom Application Development
                </h5>
                <p class="card-text">
                  We provide custom applications developed in Java, JavaScript,
                  Python, C#, C++, and other programming languages for
                  consumer-facing and corporate contexts dispersed over mobile
                  <span>read more...</span>
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
            <a
              href="./services/software-test-management.html"
              class="card text-decoration-none"
            >
              <img
                src="./images/services/software-test.png"
                class="card-img-top mx-auto"
                alt="
                Software Test Management"
              />
              <div class="card-body">
                <h5 class="card-title text-center">Software Test Management</h5>
                <p class="card-text">
                  The whole test process is the procedure to plan and control
                  the testing throughout the project cycle. With Buildnetic you
                  can now track and monitor the testing throughout the project.
                  <span>read more...</span>
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
            <a
              href="./services/devops-solutions.html"
              class="card text-decoration-none"
            >
              <img
                src="./images/services/devops.png"
                class="card-img-top mx-auto"
                alt="DevOps Solutions & Services"
              />
              <div class="card-body">
                <h5 class="card-title text-center">
                  DevOps Solutions & Services
                </h5>
                <p class="card-text">
                  Your IT operations are made easier by DevOps by removing
                  technical obstacles. Scalability, dependability, and
                  availability of your business solution are made possible via
                  the cloud.
                  <span>read more...</span>
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
            <a
              href="./services/product-re-engineering.html"
              class="card text-decoration-none"
            >
              <img
                src="./images/services/product-re-engg.png"
                class="card-img-top mx-auto"
                alt="Product Re-Engineering"
              />
              <div class="card-body">
                <h5 class="card-title text-center">Product Re-Engineering</h5>
                <p class="card-text">
                  Update your current technology platform to reflect the newest
                  developments. New features can be added in addition to
                  utilizing the most recent technological stack.
                  <span>read more...</span>
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
            <a
              href="./services/dedicated-developers.html"
              class="card text-decoration-none"
            >
              <img
                src="./images/services/dedicated-developer.png"
                class="card-img-top mx-auto"
                alt="Dedicated Developers"
              />
              <div class="card-body">
                <h5 class="card-title text-center">Dedicated Developers</h5>
                <p class="card-text">
                  Services with low cost and high productivity No extra charges
                  or hidden fees Free management and QA Reduce development costs
                  by 50% to 75%!
                  <span>read more...</span>
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
            <a
              href="./services/data-analytics.html"
              class="card text-decoration-none"
            >
              <img
                src="./images/services/data-analytics.png"
                class="card-img-top mx-auto"
                alt="Data Analytics"
              />
              <div class="card-body">
                <h5 class="card-title text-center">Data Analytics</h5>
                <p class="card-text">
                  The science of evaluating, analyzing, and converting raw data
                  with the intention of providing knowledge that may be used to
                  make decisions is known as data analytics.
                  <span>read more...</span>
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
            <a href="./services/testing.html" class="card text-decoration-none">
              <img
                src="./images/services/testing.png"
                class="card-img-top mx-auto"
                alt="Testing"
              />
              <div class="card-body">
                <h5 class="card-title text-center">Testing</h5>
                <p class="card-text">
                  It is a process of examining and evaluating software with the
                  goal of identifying errors and discrepancies between the
                  requirements that were generated and those
                  <span>read more...</span>
                </p>
              </div>
            </a>
          </div>
        </div>
      </div>
      <!-- service offering section end -->

      <!-- part of solution section start -->
      <div class="part-of-solutions-section container-fuild mt-5">
        <div class="px-4 py-5 text-center">
          <h1 class="display-5 mb-3">Be a part of the solution!</h1>
          <a
            class="btn get-in-touch-btn mx-auto"
            href="./get-in-touch.html"
            role="button"
            >Get In Touch <i class="fa-solid fa-arrow-right-long ms-2"></i
          ></a>
        </div>
      </div>
      <!-- part of solution section end -->

      <!-- technical expertise section start -->
      <?php include 'partials/technical-expertise-section.php' ?>
      <!-- technical expertise section end -->
    </div>

    <!-- footer section start -->
    <?php include 'partials/footer.php' ?>
