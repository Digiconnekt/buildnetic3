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
        min-height: 365px;
      }

      @media (max-width: 1440px) {
        .services-we-offer-section .card {
          min-height: 410px;
        }
      }

      @media (max-width: 1200px) {
        .services-we-offer-section .card {
          min-height: 480px;
        }
      }

      @media (max-width: 991px) {
        .services-we-offer-section .card {
          min-height: 435px;
        }
      }

      @media (max-width: 768px) {
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
      <div class="dotnet-banner title-section container-fuild mt-3">
        <div class="px-4 py-5 text-center">
          <!-- <h4 class="mb-3">Paradigm Shifting Technology</h4> -->
          <h1 class="display-5 fw-bold mb-3">Dotnet</h1>
        </div>
      </div>
      <!-- title section end -->
      
      <div class="container my-5">
        <h2 class="text-center">Why is .NET required?</h2>
        <div class="border-black mx-auto mb-3"></div>
        <p>Many companies choose .NET due to various reasons:</p>
        <ul>
          <li>
          High performance:.NET is a highly performant framework that enables programmers to create quick, dependable, and scalable applications.
          </li>
          <li>
          Cross-platform compatibility:.NET is made to run on different operating systems, including Windows, Linux, and macOS, making it the perfect choice for businesses that work in a multi-platform setting.
          </li>
          <li>
          Integration with Microsoft technologies:.NET integrates seamlessly with Microsoft products like Azure and SharePoint, which are used by many businesses.
          </li>
          <li>
          Security: With built-in security features like role-based authentication and encryption,.NET offers a secure framework for developing applications.
          </li>
          <li>
          Productivity: Thanks to features like code reuse, automated testing, and simple technology integration,.NET helps developers create applications more quickly and effectively while spending less money.
          </li>
        </ul>
      </div>

      <!-- why us section start -->
      <div class="development-section container my-5">
        <div class="row">
          <div class="col-12 col-md-6 mb-3 mb-md-0">
            <div class="img-block mx-auto">
              <img
                src="../images/services/single-services/dotnet/dotnet.jpg"
                alt="Dotnet"
              />
            </div>
          </div>
          <div class="col-12 col-md-6">
            <h2>Why Us?</h2>
            <div class="border-black mb-3"></div>
            <ul>
              <li>
              Expertise: Buildnetic has a significant experience and expertise in .NET development. Our developers have a thorough understanding of the .NET framework and are capable of providing high-quality services.
              </li>
              <li>Services offered: We offer full-stack development services, specializing in specific areas such as web development, mobile app development, and cloud solutions. Ensure that their services align with your project requirements.</li>
              <li>Technology stack: Our team is well-versed in the latest .NET technologies and tools, such as ASP.NET, Entity Framework, and .NET Core. </li>
              <li>Project management approach: Our team always has a clear communication channel, and a well-defined project plan, maintaining transparency on a regular progress update.</li>
              <li>Reputation: Check out our online reviews, testimonials, and case studies to get an idea of how satisfied our clients our.</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- why us section end -->

      <!-- services we offer section start -->
      <div class="services-we-offer-section container-fluid my-5">
        <div class="container">
          <h2 class="text-center">Services We Offer</h2>
          <div class="border-yellow mx-auto mb-5"></div>
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/dotnet/services-we-offer-1.png"
                  class="card-img-top"
                  alt="Full-stack .NET development"
                />
                <div class="card-body">
                  <h5 class="card-title">Full-stack .NET development</h5>
                  <p class="card-text">
                  We offer end-to-end .NET development services, including front-end development using technologies such as Angular, React, or Vue, back-end development using .NET technologies such as ASP.NET or .NET Core, and database development using SQL Server.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/dotnet/services-we-offer-2.png"
                  class="card-img-top"
                  alt="Custom .NET application development"
                />
                <div class="card-body">
                  <h5 class="card-title">Custom .NET application development</h5>
                  <p class="card-text">
                  Our experts can develop custom applications that meet specific business requirements. This can include web applications, desktop applications, mobile applications, or cloud-based applications.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/dotnet/services-we-offer-3.png"
                  class="card-img-top"
                  alt=".NET migration and upgrade"
                />
                <div class="card-body">
                  <h5 class="card-title">.NET migration and upgrade</h5>
                  <p class="card-text">
                  Our team helps migrate legacy applications to the latest .NET technologies such as .NET Core. They can also provide services for upgrading existing applications to the latest version of .NET.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/dotnet/services-we-offer-4.png"
                  class="card-img-top"
                  alt=".NET integration services"
                />
                <div class="card-body">
                  <h5 class="card-title">.NET integration services</h5>
                  <p class="card-text">
                  We help in integration services for integrating .NET applications with other systems or third-party applications. This can include integration with ERP, CRM, or other enterprise applications.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/dotnet/services-we-offer-5.png"
                  class="card-img-top"
                  alt=".NET consulting services"
                />
                <div class="card-body">
                  <h5 class="card-title">.NET consulting services</h5>
                  <p class="card-text">
                  Buildnetic offers consulting services related to .NET development. This can include architecture design, technology selection, code review, and performance optimization.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/dotnet/services-we-offer-6.png"
                  class="card-img-top"
                  alt=".NET maintenance and support"
                />
                <div class="card-body">
                  <h5 class="card-title">.NET maintenance and support</h5>
                  <p class="card-text">
                  We extend our service to maintenance and support services for .NET applications. This can include bug fixing, performance tuning, security updates, and version upgrades.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/dotnet/services-we-offer-7.png"
                  class="card-img-top"
                  alt=".NET testing services"
                />
                <div class="card-body">
                  <h5 class="card-title">.NET testing services</h5>
                  <p class="card-text">
                  Our team of testers performs testing services for .NET applications. This can include functional testing, performance testing, load testing, and security testing.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- services we offer section end -->

      <!-- technical expertise section start -->
      <?php include '../partials/technical-expertise-section.php' ?>
      <!-- technical expertise section end -->

      <!-- success stories section start -->
      <?php include '../partials/success-stories-section.php' ?>
      <!-- success stories section end -->

      <!-- part of solution section start -->
      <div class="part-of-solutions-section container-fuild mt-5">
        <div class="px-4 py-5 text-center">
          <h1 class="display-5 mb-3">Be a part of the solution!</h1>
          <a
            class="btn get-in-touch-btn mx-auto"
            href="../get-in-touch.php"
            role="button"
            >Get In Touch <i class="fa-solid fa-arrow-right-long ms-2"></i
          ></a>
        </div>
      </div>
      <!-- part of solution section end -->
    </div>

    <!-- footer section start -->
    <?php include '../partials/footer.php' ?>
