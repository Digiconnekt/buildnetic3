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
        min-height: 270px;
      }

      @media (max-width: 1440px) {
        .services-we-offer-section .card {
          min-height: 300px;
        }
      }

      @media (max-width: 1200px) {
        .services-we-offer-section .card {
          min-height: 320px;
        }
      }

      @media (max-width: 991px) {
        .services-we-offer-section .card {
          min-height: 370px;
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
      <div class="ui-ux-banner title-section container-fuild mt-3">
        <div class="px-4 py-5 text-center">
          <!-- <h4 class="mb-3">
            Second-most widely installed mobile operating system
          </h4> -->
          <h1 class="display-5 fw-bold mb-3">UI-UX Solutions</h1>
        </div>
      </div>
      <!-- title section end -->

      <!-- development section start -->
      <div class="development-section container my-5">
        <div class="row">
          <div class="col-12 col-md-6 mb-3 mb-md-0">
            <div class="img-block mx-auto">
              <img
                src="../images/services/single-services/ui-ux/ui-ux.jpg"
                alt="UI UX Solutions"
              />
            </div>
          </div>
          <div class="col-12 col-md-6">
            <h2>UI-UX-Solutions</h2>
            <div class="border-black mb-3"></div>
            <p>
              Our highly qualified team has dealt with customised user
              interfaces for a range of platforms including desktops, phones,
              tablets, and smart displays. Our main principles of UX/UI design
              have always stayed the same – Design should effortlessly convey
              what the product is , meanwhile keeping user experience as the
              main focal point .
            </p>
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
                  src="../images/services/single-services/ui-ux/services-we-offer-1.png"
                  class="card-img-top"
                  alt="User centric designs"
                />
                <div class="card-body">
                  <h5 class="card-title">User centric designs</h5>
                  <p class="card-text">
                    Our team understands user goals, who shall be the target
                    audience , and as to why they would be grasped throughout
                    the whole experience.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/ui-ux/services-we-offer-2.png"
                  class="card-img-top"
                  alt="Clear and Simple"
                />
                <div class="card-body">
                  <h5 class="card-title">Clear and Simple</h5>
                  <p class="card-text">
                    We tend to eliminate unwanted elements and prefer clarity in
                    whatever we try to portray.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/ui-ux/services-we-offer-3.png"
                  class="card-img-top"
                  alt="Consistent Design"
                />
                <div class="card-body">
                  <h5 class="card-title">Consistent Design</h5>
                  <p class="card-text">
                    Design only such that customers feel comfortable, which in
                    turns leads to increased user engagement.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/ui-ux/services-we-offer-4.png"
                  class="card-img-top"
                  alt="Visual hierarchy"
                />
                <div class="card-body">
                  <h5 class="card-title">Visual hierarchy</h5>
                  <p class="card-text">
                    Our team does a brilliant job in understanding the UI needs
                    and the brainstorms accordingly to create a well suited
                    product categorising on their physical differences, like
                    size, color, contrast, style, etc
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/ui-ux/services-we-offer-5.png"
                  class="card-img-top"
                  alt="Reviews"
                />
                <div class="card-body">
                  <h5 class="card-title">Reviews</h5>
                  <p class="card-text">
                    Consistent client and user feedback, we make sure that your
                    business thrives to the fullest.
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
