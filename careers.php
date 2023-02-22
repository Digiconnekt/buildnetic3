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

    <!-- custom CSS link for INDEX page -->
    <link rel="stylesheet" href="./css/index.css" />

    <!-- custom CSS link for CAREERS page -->
    <link rel="stylesheet" href="./css/careers.css" />

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
          <a class="btn btn-blue" href="./get-in-touch.html" role="button"
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
            <a class="btn btn-blue" href="./get-in-touch.html" role="button"
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
                        href="./services/custom-application-development.html"
                        >Custom Application Development</a
                      >
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="./services/dedicated-developers.html"
                        >Dedicated Developers</a
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
                    <li>
                      <a
                        class="dropdown-item"
                        href="./services/e-learning-solutions.html"
                        >E-Learning Solutions</a
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

    <!-- success stories page start -->
    <div class="careers-page">
      <!-- title section start -->
      <div class="title-section container-fuild mt-3 mb-5 py-5">
        <div class="container text-center py-5">
          <h4 class="mb-3">Connect with us to grow your opportunities</h4>
          <h1 class="display-5 fw-bold mb-3">Explore, Connect, Grow</h1>
        </div>
      </div>
      <!-- title section end -->

      <div class="container">
        <h3 class="text-center">Are you interested in growing with us?</h3>
        <h4 class="text-center">
          Write us on -
          <a href="mailto:hr@buildnetic.com" class="text-decoration-none"
            >hr@buildnetic.com</a
          >
        </h4>
        <div class="border-blue mx-auto"></div>

        <div class="career-section row align-items-center my-5">
          <div class="col-12 col-xl-6">
            <div class="row align-items-center">
              <div class="col-12 col-md-6">
                <div class="col-12 mb-4">
                  <div class="card text-center">
                    <img
                      src="./images/carrers/job-icon.png"
                      class="img-fluid mx-auto mt-3"
                      alt="Job"
                    />
                    <div class="card-body">
                      <h5 class="card-title">Challenging Projects</h5>
                      <p class="card-text">
                        <small class="text-muted"
                          >We adore thinkers who challenge our paradigms! Our
                          employees embrace innovation and assist us in
                          redefining what people management can be for both
                          ourselves and our clients.</small
                        >
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-12 mb-4">
                  <div class="card text-center">
                    <img
                      src="./images/carrers/job-icon.png"
                      class="img-fluid mx-auto mt-3"
                      alt="Job"
                    />
                    <div class="card-body">
                      <h5 class="card-title">Promote Flexibility</h5>
                      <p class="card-text">
                        <small class="text-muted"
                          >We support a culture where people are empowered
                          inside and outside the workplace! We arrange trips to
                          the mountains and beach for our staff's annual
                          retreats!</small
                        >
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-12 mb-4">
                  <div class="card text-center">
                    <img
                      src="./images/carrers/job-icon.png"
                      class="img-fluid mx-auto mt-3"
                      alt="Job"
                    />
                    <div class="card-body">
                      <h5 class="card-title">Winning Team</h5>
                      <p class="card-text">
                        <small class="text-muted"
                          >We achieve success by being inclusive and embracing
                          what makes us special.</small
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="col-12 mb-4">
                  <div class="card text-center">
                    <img
                      src="./images/carrers/job-icon.png"
                      class="img-fluid mx-auto mt-3"
                      alt="Job"
                    />
                    <div class="card-body">
                      <h5 class="card-title">Potent Ethos</h5>
                      <p class="card-text">
                        <small class="text-muted"
                          >We take pride in being a company that upholds and
                          actively encourages sound business and professional
                          ethics at all levels.</small
                        >
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card text-center">
                    <img
                      src="./images/carrers/job-icon.png"
                      class="img-fluid mx-auto mt-3"
                      alt="Job"
                    />
                    <div class="card-body">
                      <h5 class="card-title">Built on Diversity</h5>
                      <p class="card-text">
                        <small class="text-muted"
                          >Join us to learn how our commitment to excellence,
                          teamwork, integrity, and innovation is fueled by
                          diversity.</small
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-xl-6 mt-5 mt-xl-0">
            <h2 class="text-center">Let’s Grow Together.</h2>
            <div class="border-black mx-auto mb-4"></div>
            <p>
              We create solutions to turn your imaginative ideas into reality by
              integrating secure, scalable solutions with technology.
            </p>
            <p>
              Delivering marketing-driven business solutions that articulate
              audacious goals is our goal.
            </p>
            <p>
              We are adamant about developing better insights, market
              intelligence, and data analysis skills in order to create the best
              digital world possible.
            </p>
            <p>
              Our experts assist businesses in developing solid customer
              relationships and providing exceptional customer service.
            </p>
            <p>
              We work with you to increase business productivity, improve
              digital workflows, and hasten growth across all domains.
            </p>
            <a
              class="btn join-us-btn mt-4"
              href="./contact-us.html"
              role="button"
              >Join Us <i class="fa-solid fa-arrow-right-long ms-2"></i
            ></a>
          </div>
        </div>
      </div>

      <div class="why-us-section container-fluid mt-5 py-5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12 col-lg-7">
              <h2>Why Us?</h2>
              <div class="border-white mb-4"></div>
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
            <div class="col-12 col-lg-5 mt-4 mt-lg-0">
              <img
                src="./images/carrers/why-us.png"
                alt="Why us"
                class="img-fluid"
              />
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- footer section start -->
    <?php include 'partials/footer.php' ?>
