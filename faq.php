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

    <!-- custom CSS link for FAQ page -->
    <link rel="stylesheet" href="./css/faq.css" />

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

    <!-- FAQ page start -->
    <div class="faq-page">
      <!-- title section start -->
      <div class="title-section container-fuild mt-3 mb-5 py-5">
        <div class="container py-5">
          <!-- <h4 class="mb-3">limitless are the possibilities</h4> -->
          <h1 class="display-5 fw-bold mb-3">
            Frequently Asked <br />
            Questions
          </h1>
        </div>
      </div>
      <!-- title section end -->

      <div class="faq container">
        <h3 class="text-center">Frequently Asked Questions</h3>
        <p class="text-center">Have questions? We are here to help</p>
        <div class="border-yellow mx-auto"></div>

        <div class="accordion mt-4" id="accordionPanelsStayOpenExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
              <button
                class="accordion-button"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseOne"
                aria-expanded="true"
                aria-controls="panelsStayOpen-collapseOne"
              >
                Are free Anti-Virus software any good?
              </button>
            </h2>
            <div
              id="panelsStayOpen-collapseOne"
              class="accordion-collapse collapse show"
              aria-labelledby="panelsStayOpen-headingOne"
            >
              <div class="accordion-body">
                First and foremost, you never want to go without security
                protection on your computer. Free Anti-Virus has very low
                detection rates. Give us a call and we will be happy to inform
                you of the latest security software we recommend and sell to all
                our clients for Spyware, Malware and Virus protection.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseTwo"
                aria-expanded="false"
                aria-controls="panelsStayOpen-collapseTwo"
              >
                What exactly are Managed IT Services?
              </button>
            </h2>
            <div
              id="panelsStayOpen-collapseTwo"
              class="accordion-collapse collapse"
              aria-labelledby="panelsStayOpen-headingTwo"
            >
              <div class="accordion-body">
                Simply put, NanoSoft Managed IT Services means we take care of
                your entire information technology requirement. We manage all
                your hardware and software sourcing, installation, technical
                support, and IT staffing needs. It also means NanoSoft acts as
                your go-to consultancy and support team, providing scheduled
                maintenance and upgrading of your systems, along with emergency
                assistance to keep your business up and running.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseThree"
                aria-expanded="false"
                aria-controls="panelsStayOpen-collapseThree"
              >
                What is cloud backup?
              </button>
            </h2>
            <div
              id="panelsStayOpen-collapseThree"
              class="accordion-collapse collapse"
              aria-labelledby="panelsStayOpen-headingThree"
            >
              <div class="accordion-body">
                Cloud backup also known as Online Backup is the process where
                your onsite backups are transferred to an offsite server every
                night. The server is located in a secure data centre in Perth.
                Cloud Backup replaces the need for someone to take a backup home
                each night. It is more secure, reliable and easier to manage and
                monitor.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingFour">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseFour"
                aria-expanded="false"
                aria-controls="panelsStayOpen-collapseFour"
              >
                What kind of response times can I expect?
              </button>
            </h2>
            <div
              id="panelsStayOpen-collapseFour"
              class="accordion-collapse collapse"
              aria-labelledby="panelsStayOpen-headingFour"
            >
              <div class="accordion-body">
                We work with each client to establish specific expectations. Our
                measurable service levels specify clear consequences for not
                living up to agreed-upon expectations.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingFive">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseFive"
                aria-expanded="false"
                aria-controls="panelsStayOpen-collapseFive"
              >
                How Long is a Managed Services Contract For?
              </button>
            </h2>
            <div
              id="panelsStayOpen-collapseFive"
              class="accordion-collapse collapse"
              aria-labelledby="panelsStayOpen-headingFive"
            >
              <div class="accordion-body">
                Managed IT Services Contracts vary by provider. Some providers
                offer month-to-month programs, while others require a multi-year
                contract. Some have a very high startup cost and lower monthly,
                while others require a multi-year contract. Some have a very
                high startup cost and lower monthly, while others offer a middle
                of the road monthly cost and spread the cost of startup over the
                term of the agreement.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingSix">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseSix"
                aria-expanded="false"
                aria-controls="panelsStayOpen-collapseSix"
              >
                What should I do before I call for help?
              </button>
            </h2>
            <div
              id="panelsStayOpen-collapseSix"
              class="accordion-collapse collapse"
              aria-labelledby="panelsStayOpen-headingSix"
            >
              <div class="accordion-body">
                When possible, write down any information about error messages
                and take screen shots your issue. Next, attempt to recreate the
                issue. Often times, it helps to close the program and restart
                the computer to reset the system, and possibly resolve the
                problem.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseSeven"
                aria-expanded="false"
                aria-controls="panelsStayOpen-collapseSeven"
              >
                What does having Managed IT Services cost?
              </button>
            </h2>
            <div
              id="panelsStayOpen-collapseSeven"
              class="accordion-collapse collapse"
              aria-labelledby="panelsStayOpen-headingSeven"
            >
              <div class="accordion-body">
                Our service model uses a fixed monthly fee, which is based on
                the size and complexity of your particular network. Once
                contracted, your Managed IT Services will cover maintenance and
                support for every component of your network, providing you with
                peace of mind and the ability to accurately forecast your IT
                maintenance costs.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingEight">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseEight"
                aria-expanded="false"
                aria-controls="panelsStayOpen-collapseEight"
              >
                What if we already have an internal IT department?
              </button>
            </h2>
            <div
              id="panelsStayOpen-collapseEight"
              class="accordion-collapse collapse"
              aria-labelledby="panelsStayOpen-headingEight"
            >
              <div class="accordion-body">
                No problem! We offer scalable solutions that can be tailored to
                meet your specific needs. Whether you need a full package of
                managed IT services and consulting, security solutions or
                service desk support, NanoSoft makes it simple with an
                affordable and customized flat rate service plan.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingNine">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseNine"
                aria-expanded="false"
                aria-controls="panelsStayOpen-collapseNine"
              >
                How does a flat rate billing save me money?
              </button>
            </h2>
            <div
              id="panelsStayOpen-collapseNine"
              class="accordion-collapse collapse"
              aria-labelledby="panelsStayOpen-headingNine"
            >
              <div class="accordion-body">
                Flat-rate billing gives you the ability to budget your IT
                expenses so you can better focus on your core business goals. We
                customize each service package for your unique business, so you
                only pay for what you need. NanoSoft serves as your “one stop
                shop” for all your managed IT services needs. And we do it all
                for one fixed monthly cost – We Don’t Profit from your Pain!
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTen">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseTen"
                aria-expanded="false"
                aria-controls="panelsStayOpen-collapseTen"
              >
                What types of systems do you support?
              </button>
            </h2>
            <div
              id="panelsStayOpen-collapseTen"
              class="accordion-collapse collapse"
              aria-labelledby="panelsStayOpen-headingTen"
            >
              <div class="accordion-body">
                We pride ourselves on being “ecosystem agnostic”: whether you
                use Google Apps or Office365, Windows or Mac, Android or iOS, we
                will support your team. Need to install a server onsite or host
                one virtually on Amazon or Azure? We will support you. Need to
                transition from one ecosystem to another? We’ll be there for
                you.
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- contact us start -->
      <div class="contact-us-section container-fluid mt-5 py-5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12 col-md-8 mb-4 mb-md-0">
              <h1 class="display-5">Still have Questions?</h1>
            </div>
            <div class="col-12 col-md-3">
              <a class="btn contact-btn" href="./contact-us.html" role="button"
                >Contact Us <i class="fa-solid fa-arrow-right-long ms-2"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
      <!-- contact us end -->
    </div>
    <!-- FAQ page end -->

    <!-- footer section start -->
    <?php include 'partials/footer.php' ?>
