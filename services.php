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
          <a class="btn btn-blue" href="./contact-us.html" role="button"
            >Get In Touch</a
          >
        </div>
      </div>
      <!-- mobile top links block end -->
      <div class="container">
        <!-- logo start -->
        <a class="navbar-brand" href="./index.html">
          <img
            class="logo"
            src="./images/buildnetic-logo.png"
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
            <a class="btn btn-blue" href="./contact-us.html" role="button"
              >Get In Touch</a
            >
          </div>
          <!-- top links block end -->

          <!-- bottom links block start -->
          <ul class="navbar-nav ml-auto mb-2 mb-lg-0 my-2">
            <li class="nav-item me-xl-4 me-lg-2">
              <a class="nav-link" aria-current="page" href="./index.html"
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
                  <a class="dropdown-item" href="./about-us.html">About</a>
                </li>
                <li>
                  <a class="dropdown-item" href="./careers.html">Careers</a>
                </li>
                <li><a class="dropdown-item" href="./faq.html">FAQ</a></li>
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
                      <a class="dropdown-item" href="./services.html"
                        >IT Services</a
                      >
                    </li>
                    <li>
                      <a class="dropdown-item" href="./services/it-support.html"
                        >IT Support</a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="./services/web-development.html"
                        >Web Development</a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="./services/mobile-development.html"
                        >Mobility Solutions</a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="./services/cloud-computing.html"
                        >Cloud Computing</a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="./services/e-learning-solutions.html"
                        >E-Learning Solutions</a
                      >
                    </li>
                  </div>
                  <div class="col-12 col-md-6">
                    <li>
                      <a
                        class="dropdown-item"
                        href="./services/cyber-security.html"
                        >Cyber Security</a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="./services/business-intelligence-consulting.html"
                        >Business Intelligence Consulting</a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="./services/e-commerce-solutions.html"
                        >E-Commerce Solutions</a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="./services/ui-ux-solutions.html"
                        >UI-UX Solutions</a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="./services/software-test-management.html"
                        >Software Test Management</a
                      >
                    </li>
                  </div>
                </div>
              </ul>
            </li>
            <li class="nav-item me-xl-4 me-lg-2">
              <a class="nav-link" href="./engagement-model.html"
                >Engagement Models</a
              >
            </li>
            <li class="nav-item me-xl-4 me-lg-2">
              <a class="nav-link" href="./blogs.html">Blogs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./contact-us.html">Contact Us</a>
            </li>
          </ul>
          <!-- bottom links block end -->
        </div>
        <!-- links block end -->
      </div>
    </nav>
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
            href="./contact-us.html"
            role="button"
            >Get In Touch <i class="fa-solid fa-arrow-right-long ms-2"></i
          ></a>
        </div>
      </div>
      <!-- part of solution section end -->

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
                        src="./images/home/technology-web-frontend.png"
                        alt="Frontend & UX"
                        width="64px"
                      />
                    </div>
                    <div class="col-9">
                      <h5>Frontend & UX</h5>
                      <p>
                        <a
                          class="text-decoration-none"
                          href="./services/reactjs-development.html"
                          >ReactJS</a
                        >,
                        <a
                          class="text-decoration-none"
                          href="./services/angular-development.html"
                          >AngularJS</a
                        >, VueJS,
                        <a
                          class="text-decoration-none"
                          href="./services/react-native.html"
                          >React Native</a
                        >, Flutter,
                        <a
                          class="text-decoration-none"
                          href="./services/android-development.html"
                          >Android</a
                        >,
                        <a
                          class="text-decoration-none"
                          href="./services/ios-development.html"
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
                        src="./images/home/technology-web-backend.png"
                        alt="Backend"
                        width="64px"
                      />
                    </div>
                    <div class="col-9">
                      <h5>Backend</h5>
                      <p>
                        <a
                          class="text-decoration-none"
                          href="./services/java.html"
                          >Java</a
                        >,
                        <a
                          class="text-decoration-none"
                          href="./services/python.html"
                          >Python</a
                        >, PHP,
                        <a
                          class="text-decoration-none"
                          href="./services/nodejs-development.html"
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
                        src="./images/home/technology-database.png"
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
                        src="./images/home/technology-tools.png"
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
                        src="./images/home/technology-devops.png"
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
                src="./images/services/technical-expertise.png"
                alt="Technical Expertise"
              />
            </div>
          </div>
        </div>
      </div>
      <!-- technical expertise section end -->
    </div>

    <!-- footer section start -->
    <footer class="footer-section container-fluid py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <p>
              <a href="./index.html">
                <img
                  class="img-fluid logo"
                  src="./images/buildnetic-logo.png"
                  alt="Buildnetic"
                />
              </a>
            </p>
            <p>
              <a
                href="mailto:sales@buildnetic.com"
                class="text-decoration-none"
                target="_blank"
              >
                <i class="fa-solid fa-envelope me-2"></i>sales@buildnetic.com
              </a>
            </p>
            <p>
              <a
                href="tel:+6587993124"
                class="text-decoration-none"
                target="_blank"
                ><i class="fa-solid fa-phone me-2"></i>+65 87993124</a
              >
            </p>
            <p>
              <a
                href="tel:+918595334605"
                class="text-decoration-none"
                target="_blank"
                ><i class="fa-solid fa-phone me-2"></i>+91 85953 34605</a
              >
            </p>
            <p>
              <a
                href="tel:+12143770359"
                class="text-decoration-none"
                target="_blank"
                ><i class="fa-solid fa-phone me-2"></i>+1 214 377 0359</a
              >
            </p>
            <p class="social-media-links d-flex">
              <a
                href="https://www.facebook.com/buildnetic"
                class="me-3"
                target="_blank"
                ><i class="fa-brands fa-facebook-f"></i
              ></a>
              <a
                href="https://twitter.com/buildnetic_"
                class="me-3"
                target="_blank"
                ><i class="fa-brands fa-twitter"></i
              ></a>
              <a
                href="https://www.linkedin.com/company/buildnetic/"
                class="me-3"
                target="_blank"
                ><i class="fa-brands fa-linkedin-in"></i
              ></a>
            </p>
          </div>
          <div class="col-lg-3 col-sm-6 mt-3 mt-sm-0">
            <h5>COMPANY</h5>
            <div class="border-yellow mb-4"></div>
            <p>
              <a href="./services.html" class="text-decoration-none"
                >Services</a
              >
            </p>
            <p>
              <a href="./engagement-model.html" class="text-decoration-none"
                >Engagement Model</a
              >
            </p>
            <p>
              <a href="./success-stories.html" class="text-decoration-none"
                >Success Stories</a
              >
            </p>
            <p>
              <a href="./about-us.html" class="text-decoration-none"
                >About Us</a
              >
            </p>
            <p>
              <a href="./contact-us.html" class="text-decoration-none"
                >Contact Us</a
              >
            </p>
            <p><a href="./blogs.html" class="text-decoration-none">Blogs</a></p>
          </div>
          <div class="col-lg-3 col-sm-6 mt-3 mt-sm-5 mt-lg-0">
            <h5>SERVICES</h5>
            <div class="border-yellow mb-4"></div>
            <p>
              <a
                href="./services/custom-application-development.html"
                class="text-decoration-none"
                >Custom Application Development</a
              >
            </p>
            <p>
              <a
                href="./services/devops-solutions.html"
                class="text-decoration-none"
                >DevOps Solutions & Services</a
              >
            </p>
            <p>
              <a
                href="./services/product-re-engineering.html"
                class="text-decoration-none"
                >Product Re-Engineering</a
              >
            </p>
            <p>
              <a
                href="./services/e-commerce-solutions.html"
                class="text-decoration-none"
                >E-commerce Solutions</a
              >
            </p>
            <p>
              <a
                href="./services/dedicated-developers.html"
                class="text-decoration-none"
                >Dedicated Developers</a
              >
            </p>
            <p>
              <a
                href="./services/mobile-development.html"
                class="text-decoration-none"
                >Mobility Solutions</a
              >
            </p>
            <p>
              <a
                href="./services/data-analytics.html"
                class="text-decoration-none"
                >Data Analytics</a
              >
            </p>
            <p>
              <a href="./services/testing.html" class="text-decoration-none"
                >Testing</a
              >
            </p>
          </div>
          <div class="col-lg-3 col-sm-6 mt-3 mt-sm-5 mt-lg-0">
            <h5>TECHNOLOGY</h5>
            <div class="border-yellow mb-4"></div>
            <p>
              <a
                href="./services/nodejs-development.html"
                class="text-decoration-none"
                >NodeJS</a
              >
            </p>
            <p>
              <a href="./services/java.html" class="text-decoration-none"
                >Java</a
              >
            </p>
            <p>
              <a href="./services/python.html" class="text-decoration-none"
                >Python</a
              >
            </p>
            <p>
              <a
                href="./services/android-development.html"
                class="text-decoration-none"
                >Android</a
              >
            </p>
            <p>
              <a
                href="./services/ios-development.html"
                class="text-decoration-none"
                >iOS</a
              >
            </p>
            <p>
              <a
                href="./services/reactjs-development.html"
                class="text-decoration-none"
                >ReactJS</a
              >
            </p>
            <p>
              <a
                href="./services/react-native.html"
                class="text-decoration-none"
                >React Native</a
              >
            </p>
            <p>
              <a
                href="./services/angular-development.html"
                class="text-decoration-none"
                >Angular</a
              >
            </p>
            <p>
              <a
                href="./services/blockchain-development.html"
                class="text-decoration-none"
                >Blockchain</a
              >
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer section end -->

    <!-- bootstrap 5 JS cdn link -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <!-- custom JS link start -->
    <script src="./index.js"></script>
  </body>
</html>
