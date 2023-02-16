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

    <!-- fontawesome link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- animate on scroll AOS cdn link -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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

    <!-- hero section start -->
    <div data-aos="zoom-in" class="hero-section mt-0 mt-lg-3 mb-5">
      <div class="hero-image">
        <img
          src="./images/home/hero.png"
          data-src="./images/home/hero-ani.gif"
          alt="Hero Image"
          class="lazy"
        />
      </div>
      <div class="black-overlay"></div>
      <div class="hero-text">
        <!-- <p>Every Device</p> -->
        <h1 class="">
          IT OUTSOURCING <br />
          & SUPPORT SERVICES <br />
          FOR YOUR BUSINESS
        </h1>
        <div class="border-white mb-4"></div>
        <a class="solution-link text-decoration-none" href="./services.html"
          >FIND YOUR SOLUTION <i class="fa-solid fa-arrow-right-long"></i
        ></a>
      </div>
    </div>
    <!-- hero section end -->

    <!-- about section start -->
    <div class="about-section container py-md-4" style="overflow-x: hidden">
      <div class="row flex-lg-row align-items-center">
        <div class="col-lg-6" data-aos="fade-right">
          <h1>About Us</h1>
          <div class="border-black mb-4"></div>
          <p>
            Buildnetic serves as a powerful tool for your digitalization,
            changing your visualization into genuine business innovation and
            increasing the rate at which customers convert into paying
            customers. We are prepared to assist you with our expertise!
          </p>
          <p>
            Our expertise combines brand creation, analytics, and consulting
            expertise to help you effectively identify client needs and create
            reliable systems and user-friendly solutions. We provide a full
            range of services, including.
          </p>
          <p>
            We come together to support you as you transform your bold concepts
            into user-centered solutions. By utilizing current strategies and
            incorporating new technologies to promote digital excellence, we
            seek to broaden your brand's recognition across dimensions, boost
            client engagement, and maximize ROI.
          </p>
        </div>
        <div class="col-12 col-lg-6" data-aos="fade-left">
          <img
            src="./images/home/about.png"
            class="img-fluid"
            alt="About Us"
            loading="lazy"
          />
        </div>
      </div>
    </div>
    <!-- about section end -->

    <!-- counter section start -->
    <div class="counter-section container my-5">
      <div class="row col-11 mx-auto flex-lg-row align-items-center">
        <div class="col-6 col-sm-6 col-md-3 text-center mt-3 mt-md-0">
          <h1 class="counter-number" data-number="10">0+</h1>
          <h5>Years in Business</h5>
        </div>
        <div class="col-6 col-sm-6 col-md-3 text-center mt-3 mt-md-0">
          <h1 class="counter-number" data-number="100">0+</h1>
          <h5>Dedicated Developers</h5>
        </div>
        <div class="col-6 col-sm-6 col-md-3 mt-sm-4 mt-md-0 mt-3 text-center">
          <h1 class="counter-number" data-number="500">0+</h1>
          <h5>Global Clients</h5>
        </div>
        <div class="col-6 col-sm-6 col-md-3 mt-sm-4 mt-md-0 mt-3 text-center">
          <h1 class="counter-number" data-number="3000">0+</h1>
          <h5>Outcomes achieved</h5>
        </div>
      </div>
    </div>
    <!-- counter section end -->

    <!-- contact btn section start -->
    <div class="contact-btn-section container my-5">
      <a
        href="./contact-us.html"
        class="text-decoration-none py-3 px-4 mx-auto mb-5"
        >LIKE NUMBERS ? YOU WILL LOVE OUR RATES - CONTACT US
      </a>
    </div>
    <!-- contact btn section end -->

    <!-- industry developer section start -->
    <div
      class="industry-developer-section container my-5"
      style="overflow-x: hidden"
    >
      <h2 class="text-center mb-5 pt-5">
        Industry-Experienced Developers, On Demand
      </h2>
      <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
        <div class="col-lg-4 col-md-6" data-aos="fade-right">
          <a
            href="./services/custom-application-development.html"
            class="card text-decoration-none"
          >
            <img
              src="./images/home/industry-developer-1.png"
              class="card-img-top"
              alt="Industry Developers"
            />
            <div class="card-body">
              <h5 class="card-title">Custom Application Development</h5>
              <div class="border-yellow"></div>
              <p class="card-text">
                Our software engineers can create outstanding programs for
                various gadgets, including desktop, mobile, and tablet
                computers. We are able to provide the end user with the most
                excellent application experience across numerous channels with
                the aid of our industry expertise.
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
              src="./images/home/industry-developer-2.png"
              class="card-img-top"
              alt="Industry Developers"
            />
            <div class="card-body">
              <h5 class="card-title">Dedicated Developers</h5>
              <div class="border-yellow"></div>
              <p class="card-text">
                We are pleased to have a sizable in-house developer workforce
                with a wide range of software development experience across
                numerous sectors. Eliminating the headaches of managing numerous
                vendors, logistics, and technological constraints enables us to
                be a one-stop shop.
              </p>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-left">
          <a
            href="./services/e-commerce-solutions.html"
            class="card text-decoration-none"
          >
            <img
              src="./images/home/industry-developer-3.png"
              class="card-img-top"
              alt="Industry Developers"
            />
            <div class="card-body">
              <h5 class="card-title">E-commerce Solutions</h5>
              <div class="border-yellow"></div>
              <p class="card-text">
                To provide our clients with exceptional software solutions, we
                collaborate with other sector leaders. Our qualified developers
                are able to implement new software, integrate it into your
                business without a hitch, and offer assistance for any upcoming
                upgrades.
              </p>
            </div>
          </a>
        </div>
      </div>

      <a
        class="btn get-developer-btn mt-5 mx-auto"
        href="./services/dedicated-developers.html"
        role="button"
        >GET DEVELOPERS NOW</a
      >
    </div>
    <!-- industry developer section end -->

    <!-- inovation section start -->
    <div class="inovation-section container-fuild mt-5">
      <div class="px-4 py-5 text-center">
        <h4 class="mb-3">Our Values</h4>
        <h1 class="display-5 fw-bold mb-3">INNOVATION</h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4">hese values give us the foundations we need.</p>
        </div>
      </div>
    </div>
    <!-- inovation section end -->

    <!-- why buildnetic section start -->
    <div
      class="why-buildnetic-section container-fluid mb-5 py-5"
      style="overflow-x: hidden"
    >
      <div class="container">
        <h2 class="">Why Buildnetic?</h2>
        <div class="border-yellow"></div>
        <p class="col-md-7 mt-3 mb-5">
          We are an outcome-focused and result-conscious organization that
          offers a complete portfolio of custom software development, digital
          transformation services
        </p>
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col-lg-4 col-md-6" data-aos="fade-up">
            <div class="card">
              <img
                src="./images/home/why-buildnetic-1.png"
                class="card-img-top"
                alt="Industry Developers"
              />
              <div class="card-body">
                <p class="card-text">
                  Extensive Experience in Remote IT services.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up">
            <div class="card">
              <img
                src="./images/home/why-buildnetic-2.png"
                class="card-img-top"
                alt="Industry Developers"
              />
              <div class="card-body">
                <p class="card-text">
                  Keeping up with the new and trending technologies.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up">
            <div class="card">
              <img
                src="./images/home/why-buildnetic-3.png"
                class="card-img-top"
                alt="Industry Developers"
              />
              <div class="card-body">
                <p class="card-text">Strong Project Management</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up">
            <div class="card">
              <img
                src="./images/home/why-buildnetic-4.png"
                class="card-img-top"
                alt="Industry Developers"
              />
              <div class="card-body">
                <p class="card-text">
                  Different engagement Models to Sout your needs.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up">
            <div class="card">
              <img
                src="./images/home/why-buildnetic-5.png"
                class="card-img-top"
                alt="Industry Developers"
              />
              <div class="card-body">
                <p class="card-text">
                  Building trust and Value based relationship with clients
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up">
            <div class="card">
              <img
                src="./images/home/why-buildnetic-6.png"
                class="card-img-top"
                alt="Industry Developers"
              />
              <div class="card-body">
                <p class="card-text">Global Solutions Local Services.</p>
              </div>
            </div>
          </div>
        </div>
        <a
          class="btn discuss-btn mt-5 mx-auto"
          href="./contact-us.html"
          role="button"
          >DISCUSS OUR COLLABORATION MODELS</a
        >
      </div>
    </div>
    <!-- why buildnetic section end -->

    <!-- technology section start -->
    <div class="technology-section container mt-5">
      <h2 class="text-center fw-bold">TECHNOLOGIES WE EXCEL AT</h2>
      <div class="border-blue mx-auto"></div>
      <h4 class="text-center mt-4">Web Development</h4>
      <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <img
              src="./images/home/technology-web-frontend.png"
              class="card-img-top"
              alt="Frontend"
            />
            <div class="card-body">
              <h5 class="card-title">Frontend</h5>
              <p class="card-text">
                Languages: <br />
                <span>
                  <a href="./services/java.html" class="text-decoration-none"
                    >Java</a
                  >, HTML, CSS and JavaScript</span
                >
              </p>
              <p class="card-text">
                Framework & Library: <br />
                <span
                  ><a
                    href="./services/angular-development.html"
                    class="text-decoration-none"
                    >AngularJS</a
                  >,
                  <a
                    href="./services/reactjs-development.html"
                    class="text-decoration-none"
                    >ReactJS</a
                  >,
                  <a
                    href="./services/react-native.html"
                    class="text-decoration-none"
                    >React Native</a
                  >, JQuery and Ionic</span
                >
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <img
              src="./images/home/technology-web-backend.png"
              class="card-img-top"
              alt="Backend"
            />
            <div class="card-body">
              <h5 class="card-title">Backend</h5>
              <p class="card-text">
                Languages: <br />
                <span
                  >PHP, Ruby, C#, C++,
                  <a href="./services/python.html" class="text-decoration-none"
                    >Python</a
                  >, JavaScript and
                  <a
                    href="./services/nodejs-development.html"
                    class="text-decoration-none"
                    >NodeJS</a
                  ></span
                >
              </p>
              <p class="card-text">
                Framework & Library: <br />
                <span
                  >Django, Ruby on Rails, Springboot, Flask, Laravel,
                  ExpressJS</span
                >
              </p>
            </div>
          </div>
        </div>
      </div>
      <hr class="my-5" />

      <h4 class="text-center mt-4">Mobility Solutions</h4>
      <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <img
              src="./images/home/technology-mob-ios.png"
              class="card-img-top"
              alt="iOS"
            />
            <div class="card-body">
              <h5 class="card-title">iOS</h5>
              <p class="card-text">
                Languages: <br />
                <span>Swift, Objective C and Swift UI</span>
              </p>
              <p class="card-text">
                Framework & Library: <br />
                <span
                  >Cocoa Pods,
                  <a
                    href="./services/reactjs-development.html"
                    class="text-decoration-none"
                    >ReactJS</a
                  >, Firebase, Cloudkit and Mapkit</span
                >
              </p>
              <p class="card-text">
                Software: <br />
                <span>Xcode</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <img
              src="./images/home/technology-mob-android.png"
              class="card-img-top"
              alt="Android"
            />
            <div class="card-body">
              <h5 class="card-title">Android</h5>
              <p class="card-text">
                Languages: <br />
                <span
                  >Kotlin and
                  <a href="./services/java.html" class="text-decoration-none"
                    >Java</a
                  ></span
                >
              </p>
              <p class="card-text">
                Framework & Library: <br />
                <span
                  >Spring Rest Templates, Sencha Touch and Appcelerator
                  Titanium</span
                >
              </p>
              <p class="card-text">
                Software: <br />
                <span
                  >Andriod Studio, Greenrobot, Eventbus and Sweet Alert
                  Dialog</span
                >
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <img
              src="./images/home/technology-mob-cross-platform.png"
              class="card-img-top"
              alt="Cross Platform"
            />
            <div class="card-body">
              <h5 class="card-title">Cross Platform</h5>
              <p class="card-text">
                Languages: <br />
                <span>Dart and JS/TS</span>
              </p>
              <p class="card-text">
                Framework & Library: <br />
                <span
                  >Flutter, Ionic,
                  <a
                    href="./services/react-native.html"
                    class="text-decoration-none"
                    >React Native</a
                  >
                  and Xamarin</span
                >
              </p>
            </div>
          </div>
        </div>
      </div>
      <hr class="my-5" />

      <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <img
              src="./images/home/technology-ai-ml.png"
              class="card-img-top"
              alt="AI & ML"
            />
            <div class="card-body">
              <h5 class="card-title">AI & ML</h5>
              <p class="card-text">
                <span
                  >NLP, Chatbots, Image Processing, Amazon, Textract, ASR, OCR
                  and KNN Algorithm</span
                >
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <img
              src="./images/home/technology-database.png"
              class="card-img-top"
              alt="Database"
            />
            <div class="card-body">
              <h5 class="card-title">Database</h5>
              <p class="card-text">
                <span
                  >Microsoft SQL Server, MongoDB, MySQL, Oracle PostgreSQL and
                  DynamoDB</span
                >
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <img
              src="./images/home/technology-devops.png"
              class="card-img-top"
              alt="DevOps"
            />
            <div class="card-body">
              <h5 class="card-title">DevOps</h5>
              <p class="card-text">
                <span>AWS, Google Cloud, Docker, Jenkins and Kubernetes</span>
              </p>
            </div>
          </div>
        </div>
      </div>
      <hr class="my-5" />

      <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <img
              src="./images/home/technology-testing.png"
              class="card-img-top"
              alt="Testing"
            />
            <div class="card-body">
              <h5 class="card-title">Testing</h5>
              <p class="card-text">
                Automation: <br />
                <span>Appium, selenium and Mocha</span>
              </p>
              <p class="card-text">
                Manual: <br />
                <span>Black box testing and White box testing</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <img
              src="./images/home/technology-tools.png"
              class="card-img-top"
              alt="Tools"
            />
            <div class="card-body">
              <h5 class="card-title">Tools</h5>
              <p class="card-text">
                <span
                  >Tesseract, PowerBI, Qlikview, MS Excel, BIRT, Hibernate/
                  NHibernate and GitHub</span
                >
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- technology section end -->

    <!-- clients review section start -->
    <div class="clients-review-section my-5">
      <div class="container pt-5">
        <h2>Clients Review</h2>
        <p class="col-12 col-md-6">
          Client satisfaction is our ultimate goal. They have a shared a few
          kind words to express their satisfaction with service. Here is what
          they have to say.
        </p>

        <!-- awards section start -->
        <div
          class="award-section py-3 py-xl-5 px-3 px-md-5"
          data-aos="fade-up"
          data-aos-anchor-placement="top-bottom"
        >
          <div class="award-section-inner d-flex justify-content-between">
            <div class="left-block d-flex align-items-center">
              <div class="img-block me-2 me-sm-3">
                <img src="./images/home/award.png" alt="Award" />
              </div>
              <p class="col-6 col-sm-7">
                Award Winning Top IT & Business Service Provider
              </p>
            </div>
            <div class="right-block">
              <h3 class="fw-bold">
                Get a <span> FREE </span> project estimation
              </h3>
              <p>We will get back to you within 48 hours</p>
              <a
                class="btn get-in-touch-btn"
                href="./contact-us.html"
                role="button"
                >Get In Touch <i class="fa-solid fa-arrow-right-long ms-2"></i
              ></a>
            </div>
          </div>
        </div>
        <!-- awards section end -->
      </div>

      <div
        id="carouselExampleCaptions"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="carousel-caption">
              <div class="block">
                <div
                  class="profile-block d-flex justify-content-start mb-2 mb-sm-4"
                >
                  <div class="img-block me-2 me-sm-3">
                    <img
                      src="./images/home/testimonial/sunny.png"
                      alt="Sunny Nandwani"
                    />
                  </div>
                  <div class="name-block">
                    <h5 class="text-start">Sunny Nandwani</h5>
                    <p class="text-start">Founder, Acuver</p>
                  </div>
                </div>
                <div class="review-block">
                  <p class="text-start">
                    Buildnetic support us to expand our portfolios and
                    established a trust to deliver reliable products to the end
                    customers. I highly recommend to industries practitioners to
                    take their services.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="carousel-caption">
              <div class="block">
                <div
                  class="profile-block d-flex justify-content-start mb-2 mb-sm-4"
                >
                  <div class="img-block me-2 me-sm-3">
                    <img
                      src="./images/home/testimonial/amit.png"
                      alt="Amit Manocha"
                    />
                  </div>
                  <div class="name-block">
                    <h5 class="text-start">Amit Manocha</h5>
                    <p class="text-start">Private Equity Investor</p>
                  </div>
                </div>
                <div class="review-block">
                  <p class="text-start">
                    It's a pleasure to work with Buildnetic on a sales CRM
                    project. Our requirement was specific. I'm proud to say they
                    have delivered better than what we asked.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="carousel-caption">
              <div class="block">
                <div
                  class="profile-block d-flex justify-content-start mb-2 mb-sm-4"
                >
                  <div class="img-block me-2 me-sm-3">
                    <img
                      src="./images/home/testimonial/milind.png"
                      alt="Milind Srivastava"
                    />
                  </div>
                  <div class="name-block">
                    <h5 class="text-start">Milind Srivastava</h5>
                    <p class="text-start">Senior Manager, Wise</p>
                  </div>
                </div>
                <div class="review-block">
                  <p class="text-start">
                    It has been a pleasure working with the entire Buildnetic
                    development team. The company is thorough, hard working and
                    devoted to the goals for any given project. Creating
                    expectational softwares and building teams with their
                    clients comes naturally to them and I would easily recommend
                    them for any projects.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- clients review section end -->

    <!-- blogs section start -->
    <div
      class="blogs-section container my-5"
      style="overflow-x: hidden; overflow-y: hidden"
    >
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col-12 col-md-6 col-lg-7 mb-3" data-aos="fade-right">
          <div class="card border-0 h-100 shadow-none">
            <div class="card-body d-flex flex-column justify-content-around">
              <h2 class="display-5 fw-bold">
                Buildnetic a perfect <br />
                solution for your business
              </h2>
              <a
                class="read-more mt-4 text-decoration-none pb-2"
                href="./blogs.html"
                >READ MORE <i class="fa-solid fa-arrow-right-long"></i
              ></a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-5 mb-3" data-aos="fade-left">
          <div class="card">
            <img
              src="./images/blogs/biggest-it-staff.jpg"
              class="card-img-top"
              alt="Blog"
            />
            <div class="card-body">
              <h5 class="card-title mt-2">
                <a
                  href="./blogs/biggest-it-staff-augmentation.html"
                  class="blog-link text-decoration-none"
                  >Biggest IT Staff Augmentation Challenges and Solutions for
                  Your Business</a
                >
              </h5>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mt-4" data-aos="fade-up">
          <div class="card">
            <img
              src="./images/blogs/chatgpt.jpg"
              class="card-img-top"
              alt="Blog"
            />
            <div class="card-body">
              <h5 class="card-title mt-2">
                <a
                  href="./blogs/open-ai-chatgpt.html"
                  class="blog-link text-decoration-none"
                  >Open AI ChatGPT: What is it? How can business owners in 2023
                  benefit...</a
                >
              </h5>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mt-4" data-aos="fade-up">
          <div class="card">
            <img
              src="./images/blogs/product-management.jpg"
              class="card-img-top"
              alt="Blog"
            />
            <div class="card-body">
              <h5 class="card-title mt-2">
                <a
                  href="./blogs/product-management-the-key.html"
                  class="blog-link text-decoration-none"
                  >Product Management: The key to increasing the returns on
                  software...</a
                >
              </h5>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mt-4" data-aos="fade-up">
          <div class="card">
            <img
              src="./images/blogs/exploring-the-latest.jpg"
              class="card-img-top"
              alt="Blog"
            />
            <div class="card-body">
              <h5 class="card-title mt-2">
                <a
                  href="./blogs/top-15-emerging-technology.html"
                  class="blog-link text-decoration-none"
                  >Top 15 emerging technology trends to keep an eye on through
                  2023</a
                >
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- blogs section end -->

    <!-- footer section start -->
    <footer class="footer-section container-fluid mt-5 py-5">
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

    <!-- cookies modal start -->
    <!-- <div class="cookies-modal">
      <div
        class="modal fade"
        id="staticBackdrop"
        data-bs-backdrop="static"
        data-bs-keyboard="false"
        tabindex="-1"
        aria-labelledby="staticBackdropLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Cookies</h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">This website accept cookies</div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-secondary"
                data-bs-dismiss="modal"
                onclick="clickedDataHandler('Reject')"
              >
                Reject
              </button>
              <button
                type="button"
                class="btn btn-primary"
                data-bs-dismiss="modal"
                onclick="clickedDataHandler('Accept')"
              >
                Accept
              </button>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- cookies modal end -->

    <!-- bootstrap 5 JS cdn link -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <!-- custom JS link start -->
    <script src="./index.js"></script>

    <!-- animate on scroll AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        offset: 200,
      });
    </script>

    <!-- cookies modal start -->
    <!-- <script>
      const checkAcceptCookies = localStorage.getItem("acceptCookies");

      const clickedDataHandler = (data) => {
        localStorage.setItem("acceptCookies", data);
      };

      if (checkAcceptCookies !== "Accept") {
        const myModal = new bootstrap.Modal(
          document.getElementById("staticBackdrop"),
          {}
        );
        document.onreadystatechange = function () {
          myModal.show();
        };
      }
    </script> -->

    <!-- lazyloading for hero image -->
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        var lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));

        if ("IntersectionObserver" in window) {
          let lazyImageObserver = new IntersectionObserver(function (
            entries,
            observer
          ) {
            entries.forEach(function (entry) {
              if (entry.isIntersecting) {
                let lazyImage = entry.target;
                lazyImage.src = lazyImage.dataset.src;
                lazyImage.classList.remove("lazy");
                lazyImageObserver.unobserve(lazyImage);
              }
            });
          });

          lazyImages.forEach(function (lazyImage) {
            lazyImageObserver.observe(lazyImage);
          });
        } else {
          // Fallback for unsupported browsers
          lazyImages.forEach(function (lazyImage) {
            lazyImage.src = lazyImage.dataset.src;
          });
        }
      });
    </script>
  </body>
</html>
