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
          /* min-height: 340px; */
        }
      }

      @media (max-width: 991px) {
        .services-we-offer-section .card {
          min-height: 390px;
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
      <div class="ios-banner title-section container-fuild mt-3">
        <div class="px-4 py-5 text-center">
          <h4 class="mb-3">
            Second-most widely installed mobile operating system
          </h4>
          <h1 class="display-5 fw-bold mb-3">iOS Application Development</h1>
        </div>
      </div>
      <!-- title section end -->

      <!-- development section start -->
      <div class="development-section container my-5">
        <div class="row">
          <div class="col-12 col-md-6 mb-3 mb-md-0">
            <div class="img-block mx-auto">
              <img
                src="../images/services/single-services/ios/ios.png"
                alt="iOS"
                class="img-fluid"
              />
            </div>
          </div>
          <div class="col-12 col-md-6">
            <h2>iOS Application Development</h2>
            <div class="border-black mb-3"></div>
            <p>
              iOS is a mobile operating system developed by Apple that offers a
              stylish user interface, solid performance, and smooth network
              communication.
            </p>
            <ul>
              <li>Assist in building reliable apps with a performance focus</li>
              <li>
                Designing a humanistic experience with an elegant user interface
              </li>
              <li>Better security is promised by the internal architecture</li>
              <li>Guaranteed income because of the existing User base</li>
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
                  src="../images/services/single-services/ios/services-we-offer-1.png"
                  class="card-img-top"
                  alt="iOS Application Design"
                />
                <div class="card-body">
                  <h5 class="card-title">iOS Application Design</h5>
                  <p class="card-text">
                    Our design scientists humanize your application's design to
                    emulate real-world experiences in keeping with the beautiful
                    design ethos found in iOS.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/ios/services-we-offer-2.png"
                  class="card-img-top"
                  alt="iOS Application Development"
                />
                <div class="card-body">
                  <h5 class="card-title">iOS Application Development</h5>
                  <p class="card-text">
                    Bring your concept to life. The application will be made in
                    record time with the assistance of our skilled iOS
                    developers. Additionally, our coding approach guarantees
                    higher performance.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/ios/services-we-offer-3.png"
                  class="card-img-top"
                  alt="iOS Version Upgrade"
                />
                <div class="card-body">
                  <h5 class="card-title">iOS Version Upgrade</h5>
                  <p class="card-text">
                    iOS often releases operating system updates. Our team
                    assists in developing solutions that are both forward- and
                    backward-compatible in the most resource-effective manner.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/ios/services-we-offer-4.png"
                  class="card-img-top"
                  alt="iOS Maintenance & Support"
                />
                <div class="card-body">
                  <h5 class="card-title">iOS Maintenance & Support</h5>
                  <p class="card-text">
                    You might want to add new features and fix bugs as your
                    application develops. No matter where your project is in its
                    development, we can manage both maintenance and support.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- services we offer section end -->

      <!-- technical expertise section start -->
      <div class="technical-expertise-section container-fluid py-5">
        <div class="container py-5">
          <div class="row">
            <div class="col-md-6 col-12">
              <h2 class="fw-bold">Technical Expertise</h2>
              <p>
                Building scalable secure web applications by leveraging cutting
                edge technologies
              </p>

              <div class="block row">
                <div class="col-12 mb-3">
                  <div class="row align-items-center">
                    <div class="col-3 text-center">
                      <img
                        class="img-fluid"
                        src="../images/home/technology-web-frontend.png"
                        alt="Frontend & UX"
                        width="64px"
                      />
                    </div>
                    <div class="col-9">
                      <h5>Frontend & UX</h5>
                      <p>
                        <a
                          class="text-decoration-none"
                          href="../services/reactjs-development.html"
                          >ReactJS</a
                        >,
                        <a
                          class="text-decoration-none"
                          href="../services/angular-development.html"
                          >AngularJS</a
                        >, VueJS,
                        <a
                          class="text-decoration-none"
                          href="../services/react-native.html"
                          >React Native</a
                        >, Flutter,
                        <a
                          class="text-decoration-none"
                          href="../services/android-development.html"
                          >Android</a
                        >,
                        <a
                          class="text-decoration-none"
                          href="../services/ios-development.html"
                          >iOS</a
                        >
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-12 mb-3">
                  <div class="row align-items-center">
                    <div class="col-3 text-center">
                      <img
                        class="img-fluid"
                        src="../images/home/technology-web-backend.png"
                        alt="Backend"
                        width="64px"
                      />
                    </div>
                    <div class="col-9">
                      <h5>Backend</h5>
                      <p>
                        <a
                          class="text-decoration-none"
                          href="../services/java.html"
                          >Java</a
                        >,
                        <a
                          class="text-decoration-none"
                          href="../services/python.html"
                          >Python</a
                        >, PHP,
                        <a
                          class="text-decoration-none"
                          href="../services/nodejs-development.html"
                          >NodeJS</a
                        >
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-12 mb-3">
                  <div class="row align-items-center">
                    <div class="col-3 text-center">
                      <img
                        class="img-fluid"
                        src="../images/home/technology-database.png"
                        alt="Database"
                        width="64px"
                      />
                    </div>
                    <div class="col-9">
                      <h5>Database</h5>
                      <p>MongoDB, SQL, Redis</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 mb-3">
                  <div class="row align-items-center">
                    <div class="col-3 text-center">
                      <img
                        class="img-fluid"
                        src="../images/home/technology-tools.png"
                        alt="Analytics"
                        width="64px"
                      />
                    </div>
                    <div class="col-9">
                      <h5>Analytics</h5>
                      <p>Panda, R, Hadoop, Hive</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 mb-3">
                  <div class="row align-items-center">
                    <div class="col-3 text-center">
                      <img
                        class="img-fluid"
                        src="../images/home/technology-devops.png"
                        alt="Cloud and DevOps"
                        width="64px"
                      />
                    </div>
                    <div class="col-9">
                      <h5>Cloud and DevOps</h5>
                      <p>AWS, Jenkins, Docker, Kubernet</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12 text-center">
              <img
                class="img-fluid"
                src="../images/services/technical-expertise.png"
                alt="Technical Expertise"
              />
            </div>
          </div>
        </div>
      </div>
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