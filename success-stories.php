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

    <!-- custom CSS link for INDEX page -->
    <link rel="stylesheet" href="./css/index.css" />

    <!-- custom CSS link for ABOUT US page -->
    <link rel="stylesheet" href="./css/success-stories.css" />

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

    <!-- success stories page start -->
    <div class="success-stories-page">
      <!-- title section start -->
      <div class="title-section container-fuild mt-3">
        <div class="container py-5">
          <h4 class="mb-3">The Mores</h4>
          <h1 class="display-5 fw-bold mb-3">Of Our Journey</h1>
          <div class="border-white"></div>
        </div>
      </div>
      <!-- title section end -->

      <!-- why choose us section end -->
      <div class="why-choose-us-section container-fluid py-5">
        <div class="container">
          <h2>Why Us?</h2>
          <div class="border-yellow"></div>
          <div class="row mt-4">
            <div class="col-12 col-lg-4 mb-3 mb-lg-0">
              <img
                src="./images/success-stories/why-us.png"
                alt="Why Us"
                class="img-fluid"
              />
            </div>
            <div class="col-12 col-lg-8">
              <p>
                We leverage secure & scalable solutions with the integration of
                technologies to develop solutions to translate your visionary
                ideas into reality.
              </p>
              <p>
                We aim to deliver marketing-led business solutions that define
                bold ambitions.
              </p>
              <p>
                We are hell-bent on creating the best digital world by creating
                better knowledge on insights, market intelligence, and data
                analysis
              </p>
              <p>
                Our experts help organizations nurture strong and deliver
                effective and outstanding customer experiences
              </p>
              <p>
                We help you build business efficiency, optimize digital
                processes and accelerate growth in all spheres.
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- why choose us section end -->

      <!-- question our comp start -->
      <div class="question-our-comp-section container-fluid py-5">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-8 mb-4 mb-md-0 mt-md-4">
              <!-- <div class="px-4 py-5 text-center"> -->
              <h1 class="display-5 mb-4 mt-md-3">Question Our Competence</h1>
              <a
                class="btn schedule-call-btn"
                href="./contact-us.html"
                role="button"
                >Schedule a call
                <i class="fa-solid fa-arrow-right-long ms-2"></i
              ></a>
              <!-- </div> -->
            </div>
            <div class="col-12 col-md-3 text-center">
              <img
                src="./images/success-stories/que-our-comp.png"
                alt="Question Our Competence"
                class="img-fuild"
                style="height: 250px"
              />
            </div>
          </div>
        </div>
      </div>
      <!-- question our comp end -->

      <!-- success stories section start -->
      <div class="success-stories-section container-fluid my-5">
        <div class="container">
          <h2>Success Stories?</h2>
          <div class="border-yellow mb-5"></div>
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col-12 col-lg-4 col-md-6">
              <div class="card">
                <img
                  src="./images/success-stories/ddf.png"
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
                  src="./images/success-stories/m-and-s.png"
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
                  src="./images/success-stories/epam.png"
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

      <!-- our clients section start -->
      <div class="out-clients-section my-5">
        <h2 class="text-center">Our Clients</h2>
        <div class="border-yellow mx-auto"></div>
        <div class="clients-block mx-auto mt-3 py-3 px-3">
          <div class="row justify-content-center">
            <div class="col-6 col-md-4 col-lg-3 my-3 text-center">
              <div class="block py-3">
                <img
                  src="./images/clients/m-and-s.png"
                  alt="M and S"
                  class="img-fluid"
                />
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 my-3 text-center">
              <div class="block py-3">
                <img
                  src="./images/clients/acuver.png"
                  alt="Acuver"
                  class="img-fluid"
                />
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 my-3 text-center">
              <div class="block py-3">
                <img
                  src="./images/clients/car-dekho.png"
                  alt="Car Dekho"
                  class="img-fluid"
                />
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 my-3 text-center">
              <div class="block py-3">
                <img
                  src="./images/clients/design-pax.png"
                  alt="Design Pax"
                  class="img-fluid"
                />
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 my-3 text-center">
              <div class="block py-3">
                <img
                  src="./images/clients/dream-webies.png"
                  alt="Dream Webies"
                  class="img-fluid"
                />
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 my-3 text-center">
              <div class="block py-3">
                <img
                  src="./images/clients/epam.png"
                  alt="Epam"
                  class="img-fluid"
                />
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 my-3 text-center">
              <div class="block py-3">
                <img
                  src="./images/clients/the-coding-trail.png"
                  alt="The Coding Trail"
                  class="img-fluid"
                />
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 my-3 text-center">
              <div class="block py-3">
                <img
                  src="./images/clients/listed.png"
                  alt="Listed"
                  class="img-fluid"
                />
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 my-3 text-center">
              <div class="block py-3">
                <img
                  src="./images/clients/air-tour-australia.png"
                  alt="Air Tour Australia"
                  class="img-fluid"
                />
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 my-3 text-center">
              <div class="block py-3">
                <img
                  src="./images/clients/marsh-mc-lennan.png"
                  alt="Marsh Mc Lennan"
                  class="img-fluid"
                />
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 my-3 text-center">
              <div class="block py-3">
                <img
                  src="./images/clients/metamore.png"
                  alt="Metamore"
                  class="img-fluid"
                />
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 my-3 text-center">
              <div class="block py-3">
                <img
                  src="./images/clients/startup-buddy.png"
                  alt="Startup Buddy"
                  class="img-fluid"
                />
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 my-3 text-center">
              <div class="block py-3">
                <img
                  src="./images/clients/the-coding-trail.png"
                  alt="The Coding Trail"
                  class="img-fluid"
                />
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3 my-3 text-center">
              <div class="block py-3">
                <img
                  src="./images/clients/ddf.png"
                  alt="Delhi Duty Free"
                  class="img-fluid"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- our clients section end -->
    </div>
    <!-- success stories page end -->

    <!-- footer section start -->
    <?php include 'partials/footer.php' ?>
