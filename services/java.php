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
    <nav class="navbar navbar-expand-lg navbar-light">
      <!-- mobile top links block start -->
      <div class="container d-lg-none justify-content-end">
        <div class="mob-top-links my-1">
          <a
            class="btn me-2"
            href="tel:+6587993124"
            role="button"
            target="_blank"
            ><i class="fa-solid fa-phone"></i
          ></a>
          <a
            class="btn me-2"
            href="https://wa.me/+918595334605 "
            role="button"
            target="_blank"
            ><i class="fa-brands fa-whatsapp"></i
          ></a>
          <a
            class="btn me-2"
            href="mailto:sales@buildnetic.com"
            role="button"
            target="_blank"
            ><i class="fa-solid fa-envelope"></i
          ></a>
          <a class="btn btn-blue" href="../get-in-touch.html" role="button"
            >Get In Touch</a
          >
        </div>
      </div>
      <!-- mobile top links block end -->

      <div class="container">
        <!-- logo start -->
        <a class="navbar-brand" href="../index.html">
          <img
            class="logo"
            src="../images/buildnetic-logo.png"
            alt="Buildnetic"
          />
        </a>
        <!-- logo end -->

        <!-- mobile menu btn start -->
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- mobile menu btn end -->

        <!-- links block start -->
        <div
          class="collapse navbar-collapse flex-column align-items-end"
          id="navbarSupportedContent"
        >
          <!-- top links block start -->
          <div class="top-links my-2 d-none d-lg-block">
            <a
              class="btn me-2 mob-num"
              href="tel:+6587993124"
              role="button"
              target="_blank"
              ><i class="fa-solid fa-phone"></i
              ><span class="ms-2">+6587993124</span></a
            >
            <a
              class="btn me-2"
              href="https://wa.me/+918595334605 "
              role="button"
              target="_blank"
              ><i class="fa-brands fa-whatsapp"></i
            ></a>
            <a
              class="btn me-2"
              href="mailto:sales@buildnetic.com"
              role="button"
              target="_blank"
              ><i class="fa-solid fa-envelope"></i
            ></a>
            <a class="btn btn-blue" href="../get-in-touch.html" role="button"
              >Get In Touch</a
            >
          </div>
          <!-- top links block end -->

          <!-- bottom links block start -->
          <ul class="navbar-nav ml-auto mb-2 mb-lg-0 my-2">
            <li class="nav-item me-xl-4 me-lg-2">
              <a class="nav-link" aria-current="page" href="../index.html"
                >Home</a
              >
            </li>
            <li class="nav-item me-xl-4 me-lg-2 dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Company
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="../about-us.html">About</a>
                </li>
                <li>
                  <a class="dropdown-item" href="../careers.html">Careers</a>
                </li>
                <li><a class="dropdown-item" href="../faq.html">FAQ</a></li>
              </ul>
            </li>
            <li class="nav-item me-xl-4 me-lg-2 dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                IT Solutions
              </a>
              <ul
                class="it-soln dropdown-menu"
                aria-labelledby="navbarDropdown"
              >
                <div class="row">
                  <div class="col-12 col-md-6 border-right">
                    <li>
                      <a class="dropdown-item" href="../services.html"
                        >IT Services</a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="../services/it-support.html"
                        >IT Support</a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="../services/web-development.html"
                        >Web Development</a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="../services/mobile-development.html"
                        >Mobility Solutions</a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="../services/cloud-computing.html"
                        >Cloud Computing</a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="../services/e-learning-solutions.html"
                        >E-Learning Solutions</a
                      >
                    </li>
                  </div>
                  <div class="col-12 col-md-6">
                    <li>
                      <a
                        class="dropdown-item"
                        href="../services/cyber-security.html"
                        >Cyber Security</a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="../services/business-intelligence-consulting.html"
                        >Business Intelligence Consulting</a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="../services/e-commerce-solutions.html"
                        >E-Commerce Solutions</a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="../services/ui-ux-solutions.html"
                        >UI-UX Solutions</a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="../services/software-test-management.html"
                        >Software Test Management</a
                      >
                    </li>
                  </div>
                </div>
              </ul>
            </li>
            <li class="nav-item me-xl-4 me-lg-2">
              <a class="nav-link" href="../engagement-model.html"
                >Engagement Models</a
              >
            </li>
            <li class="nav-item me-xl-4 me-lg-2">
              <a class="nav-link" href="../blogs.html">Blogs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../contact-us.html">Contact Us</a>
            </li>
          </ul>
          <!-- bottom links block end -->
        </div>
        <!-- links block end -->
      </div>
    </nav>
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
