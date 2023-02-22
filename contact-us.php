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

    <!-- custom CSS link for CONTACT page -->
    <link rel="stylesheet" href="./css/contact-us.css" />

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

    <!-- contact page start -->
    <div class="contact-page">
      <div class="contact-banner-section container-fluid mt-3 mb-5">
        <div class="container py-4">
          <div class="row">
            <div class="col-12 col-md-6 mb-5 mb-md-0">
              <h2 class="display-5 fw-bold">
                Let us discuss <br />
                your requirement
              </h2>
            </div>
            <div class="col-12 col-md-6">
              <img
                src="./images//contact/contact-banner.png"
                alt="Contact"
                class="img-fluid"
              />
            </div>
          </div>
        </div>
      </div>

      <div class="contact-details-section container">
        <h1 class="text-center fw-bold">Contact Us</h1>
        <div class="border-blue mx-auto"></div>
        <div class="row mt-5 justify-content-center">
          <div class="col-12 col-md-6 col-xl-4 text-center">
            <div class="block py-5 px-5">
              <h2 class="mb-2">Working Hours</h2>
              <div class="border-black mx-auto mb-5"></div>
              <h5 class="mb-3">Open</h5>
              <p class="mb-4">Monday To Friday</p>
              <h5 class="mb-3">From</h5>
              <p class="mb-4">09:00 AM to 6:00 PM</p>
              <div class="img-block pt-4">
                <img
                  src="./images/contact/working-hour.png"
                  alt="Working Hours"
                  class="img-fluid"
                />
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-4 mt-5 mt-md-0 text-center">
            <div class="block py-5 px-5">
              <h2 class="mb-2">Call Us</h2>
              <div class="border-black mx-auto mb-5"></div>
              <h5 class="mb-3">Singapore</h5>
              <p class="mb-4">
                <a
                  href="tel:+6587993124"
                  class="text-decoration-none"
                  target="_blank"
                  >+65 879 93124</a
                >
              </p>
              <h5 class="mb-3">India</h5>
              <p class="mb-4">
                <a
                  href="tel:+918595334605"
                  class="text-decoration-none"
                  target="_blank"
                  >+91 85953 34605</a
                >
              </p>
              <h5 class="mb-3">USA</h5>
              <p class="mb-4">
                <a
                  href="tel:+12143770359"
                  class="text-decoration-none"
                  target="_blank"
                  >+1 214 377 0359</a
                >
              </p>
              <h5 class="mb-3">Canada</h5>
              <p class="mb-4">
                <a
                  href="tel:+16478198634"
                  class="text-decoration-none"
                  target="_blank"
                  >+1 (647) 819-8634</a
                >
              </p>
              <div class="img-block pt-4">
                <img
                  src="./images/contact/call-us.png"
                  alt="Call Us"
                  class="img-fluid"
                />
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-4 mt-5 mt-xl-0 text-center">
            <div class="block py-5 px-5">
              <h2 class="mb-2">Our Offices</h2>
              <div class="border-black mx-auto mb-5"></div>
              <h5 class="mb-3">Singapore(HQ)</h5>
              <p class="mb-4">5-03 Plus, 20 Cecil Street Singapore 049705</p>
              <h5 class="mb-3">India</h5>
              <p class="mb-4">
                927, JMD Megapolis, Sohna Road, Sector 48 Gurgaon, Haryana
                122018, India
              </p>
              <h5 class="mb-3">Canada</h5>
              <p class="mb-4">
                441 Centre street East, Richmond Hill, L4C1B8, Ontario, Canada
              </p>
              <div class="img-block pt-4">
                <img
                  src="./images/contact/our-office.png"
                  alt="Our Offices"
                  class="img-fluid"
                />
              </div>
            </div>
          </div>
        </div>

        <div class="mail-block mt-5">
          <a
            href="mailto:sales@buildnetic.com"
            class="text-decoration-none py-3 px-4 mx-auto mb-5"
            target="_blank"
            >You can also email us at: sales@buildnetic.com
          </a>
        </div>
      </div>

      <div class="contact-form container py-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <form class="p-5">
              <div class="mb-3">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <label for="fullName" class="form-label">Full Name:</label>
                    <input
                      type="text"
                      class="form-control mb-3"
                      id="fullName"
                      placeholder="John Doe"
                    />
                  </div>
                  <div class="col-12 col-md-6 mt-3 mt-md-0">
                    <label for="organization" class="form-label"
                      >Organization:</label
                    >
                    <input
                      type="text"
                      class="form-control mb-3"
                      id="organization"
                      placeholder="Company Name"
                    />
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <label for="email" class="form-label">Email:</label>
                    <input
                      type="email"
                      class="form-control mb-3"
                      id="email"
                      placeholder="name@company.com"
                    />
                  </div>
                  <div class="col-12 col-md-6 mt-3 mt-md-0">
                    <label for="phone" class="form-label">Phone Number:</label>
                    <input
                      type="tel"
                      class="form-control mb-3"
                      id="phone"
                      placeholder="Full Number (incl. prefix)"
                    />
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <label for="companySize" class="form-label"
                      >Company size:</label
                    >
                    <select
                      class="form-select mb-3"
                      aria-label="Default select example"
                      id="companySize"
                    >
                      <option selected>Please select</option>
                      <option value="1(Freelancer)">1 (Freelancer)</option>
                      <option value="2-19">2-19</option>
                      <option value="20-49">20-49</option>
                      <option value="50+">50+</option>
                    </select>
                  </div>
                  <div class="col-12 col-md-6 mt-3 mt-md-0">
                    <label for="inquiry" class="form-label"
                      >What’s your inquiry about?</label
                    >
                    <select
                      class="form-select mb-3"
                      aria-label="Default select example"
                      id="inquiry"
                    >
                      <option selected>Please select</option>
                      <option value="General Information Request">
                        General Information Request
                      </option>
                      <option value="Partner Relations">
                        Partner Relations
                      </option>
                      <option value="Careers">Careers</option>
                      <option value="Software Licencing">
                        Software Licencing
                      </option>
                      <option value="I need help">I need help</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"
                  >How can we help you?</label
                >
                <textarea
                  class="form-control"
                  id="exampleFormControlTextarea1"
                  rows="3"
                  placeholder="Let us know what you need"
                ></textarea>
              </div>
              <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- contact page end -->

    <!-- footer section start -->
    <?php include 'partials/footer.php' ?>
