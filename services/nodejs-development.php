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
        min-height: 320px;
      }

      @media (max-width: 1440px) {
        .services-we-offer-section .card {
          min-height: 370px;
        }
      }

      @media (max-width: 1200px) {
        .services-we-offer-section .card {
          min-height: 420px;
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
      <div class="nodejs-banner title-section container-fuild mt-3">
        <div class="px-4 py-5 text-center">
          <h4 class="mb-3">Paradigm Shifting Technology</h4>
          <h1 class="display-5 fw-bold mb-3">NodeJS Development</h1>
        </div>
      </div>
      <!-- title section end -->

      <!-- development section start -->
      <div class="development-section container my-5">
        <div class="row">
          <div class="col-12 col-md-6 mb-3 mb-md-0">
            <div class="img-block mx-auto">
              <img
                src="../images/services/single-services/node-js/node-js.jpg"
                alt="Node JS"
              />
            </div>
          </div>
          <div class="col-12 col-md-6">
            <h2>NodeJS Development</h2>
            <div class="border-black mb-3"></div>
            <p>
              The non-blocking nature of Node.js functions enables concurrent
              and simultaneous command execution. Applications that demand many
              concurrent connections and are highly scalable should use it. A
              server-side runtime environment that is open-source and
              cross-platform is called Node.js.
            </p>
            <ul>
              <li>Ideal for developing real-time web applications</li>
              <li>
                Support for high-load web applications that work effectively
              </li>
              <li>An event-driven, non-blocking I/O model</li>
              <li>
                Elegant and straightforward opportunity for code sharing,
                updating, and reuse
              </li>
              <li>
                Construction of a network application that is quick and flexible
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
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/node-js/services-we-offer-1.png"
                  class="card-img-top"
                  alt="Custom Node JS Development"
                />
                <div class="card-body">
                  <h5 class="card-title">Custom Node JS Development</h5>
                  <p class="card-text">
                    We offer Node.js programmers who are skilled in developing
                    websites and mobile apps. We'll run it for you, whether it's
                    a Node.js module or an end-to-end solution.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/node-js/services-we-offer-2.png"
                  class="card-img-top"
                  alt="Node JS Mobile Development"
                />
                <div class="card-body">
                  <h5 class="card-title">Node JS Mobile Development</h5>
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
                  src="../images/services/single-services/node-js/services-we-offer-3.png"
                  class="card-img-top"
                  alt="Migrate to Node JS"
                />
                <div class="card-body">
                  <h5 class="card-title">Migrate to Node JS</h5>
                  <p class="card-text">
                    Our Node.js programmers assist you in redesigning any and
                    all solutions. Regardless of the old technology, our Node.js
                    developers are trained to migrate the legacy solution.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/node-js/services-we-offer-4.png"
                  class="card-img-top"
                  alt="Node JS Support & Maintenance"
                />
                <div class="card-body">
                  <h5 class="card-title">Node JS Support & Maintenance</h5>
                  <p class="card-text">
                    We never want your systems or solutions to fail. The Node.js
                    support team works to give you fast, frequent updates on how
                    your system is performing.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/node-js/services-we-offer-5.png"
                  class="card-img-top"
                  alt="Node JS Web Development"
                />
                <div class="card-body">
                  <h5 class="card-title">Node JS Web Development</h5>
                  <p class="card-text">
                    Web development and Node.js application integration are
                    significantly simplified by our Node.js outsourcing team.
                    The development and deployment will be phased out by Node.js
                    engineers.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/node-js/services-we-offer-6.png"
                  class="card-img-top"
                  alt="Upgrade Node JS Version"
                />
                <div class="card-body">
                  <h5 class="card-title">Upgrade Node JS Version</h5>
                  <p class="card-text">
                    Every project requires improvement. Your project will be
                    updated to the most recent Node.js version by our Node.js
                    developers to keep it on the leading edge.
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
