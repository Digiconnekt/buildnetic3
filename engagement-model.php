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

    <!-- custom CSS link for SERVICES MAIN page-->
    <link rel="stylesheet" href="./css/single-service.css" />

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

    <div class="single-service-page">
      <!-- title section start -->
      <div class="engagement-model-banner title-section container-fuild mt-3">
        <div class="px-4 py-5 text-center">
          <h4 class="mb-3">Thinking Beyond Limits</h4>
          <h1 class="display-5 fw-bold mb-3">Engagement Model</h1>
        </div>
      </div>
      <!-- title section end -->

      <!-- development section start -->
      <div class="development-section container my-5">
        <div class="row">
          <div class="col-12 col-md-6 mb-3 mb-md-0">
            <div class="img-block mx-auto">
              <img
                src="./images/engagement-model/engagement-model.jpg"
                alt="Engagement Model"
              />
            </div>
          </div>
          <div class="col-12 col-md-6">
            <h2>Engagement Model</h2>
            <div class="border-black mb-3"></div>
            <p>
              An internationally recognized provider of IT services, Buidnetic
              is at your service. We think that our clients should concentrate
              solely on running their businesses while leaving the rest to us.
            </p>
            <ul>
              <li>
                Pocket-friendly. <br />
                Do not over your budget! <br />
                You can always request a fixed price and time estimate.
              </li>
              <li>
                Simplifying your needs. <br />
                Just pay for the hours that were used. <br />
                Utilize resources in accordance with your needs.
              </li>
              <li>
                Dedicated Resources. <br />
                We have dedicated engineers who work around the clock, To make
                sure your project is delivered continuously.
              </li>
              <li>
                Maintenance & Support. <br />
                Looking to maintain or upgrade your projects? We’ll look into
                this, let our tech support handle things while you relax.
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- development section end -->

      <!-- engagement table section start -->
      <div class="choose-right-engagement-section container my-5">
        <h2 class="text-center fw-bold">CHOOSE THE RIGHT ENGAGEMENT MODEL</h2>
        <div class="border-blue mx-auto"></div>

        <div class="table-responsive mt-4">
          <table class="table table-bordered text-center">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">Offshore Dev Center</th>
                <th scope="col">Dedicated Engineers</th>
                <th scope="col">Project Team</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Best for</th>
                <td>Setting up a team as per your requirement</td>
                <td>Scaling your in-house tech team</td>
                <td>Hiring team for a defined project</td>
              </tr>
              <tr>
                <th scope="row">Team</th>
                <td>Custom as per technical skill requirement</td>
                <td>Custom as per technical skill requirement</td>
                <td>Custom as per technical skill requirement</td>
              </tr>
              <tr>
                <th scope="row">Flexibility / Replacement</th>
                <td colspan="3">
                  100% flexibility to ramp up or ramp down the team, Easy
                  replacement
                </td>
              </tr>
              <tr>
                <th scope="row">Ramp up time</th>
                <td>15-30 days</td>
                <td>7-14 days</td>
                <td>1-14 days</td>
              </tr>
              <tr>
                <th scope="row">Ramp down time</th>
                <td>30 days</td>
                <td>30 days</td>
                <td>30 days</td>
              </tr>
              <tr>
                <th scope="row">Cost savings on US rates</th>
                <td>Min 60%</td>
                <td>Min 50%</td>
                <td>Min 50%</td>
              </tr>
              <tr>
                <th scope="row">Support</th>
                <td colspan="3">24 X 7 Support - Email and Chat</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- engagement table section end -->

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
    </div>

    <!-- footer section start -->
    <?php include 'partials/footer.php' ?>
