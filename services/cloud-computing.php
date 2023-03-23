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
        min-height: 300px;
      }

      /* @media (max-width: 1440px) {
            .services-we-offer-section .card {
              min-height: 340px;
            }
          } */

      @media (max-width: 991px) {
        .services-we-offer-section .card {
          min-height: 340px;
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
      <div class="cloud-computing-banner title-section container-fuild mt-3">
        <div class="px-4 py-5 text-center">
          <!-- <h4 class="mb-3">
            Second-most widely installed mobile operating system
          </h4> -->
          <h1 class="display-5 fw-bold mb-3">Cloud Computing</h1>
        </div>
      </div>
      <!-- title section end -->

      <div class="container my-5">
        <h2 class="text-center">Why is Cloud Computing required?</h2>
        <div class="border-black mx-auto mb-3"></div>
        <p style="text-align: justify">
        Cloud computing has advantages for individuals as well as for companies. The cloud has also changed the way we live our personal lives. Many of us make daily use of cloud services. Most likely, we use applications hosted by cloud services when we check our bank accounts, update our status on social media, or binge-watch a new streaming series. Instead of being downloaded to our devices or hard drives, these apps are accessed online.
        </p>
        <p style="text-align: justify">
        With today's cloud technology, businesses can scale and adapt quickly, drive business agility, accelerate innovation, modernize operations, and cut costs. This can not only help businesses get through the current crisis, but it can also result in more robust, long-term growth.
        </p>
      </div>

      <!-- development section start -->
      <div class="development-section container my-5">
        <div class="row">
          <div class="col-12 col-md-6 mb-3 mb-md-0">
            <div class="img-block mx-auto">
              <img
                src="../images/services/single-services/cloud-computing/cloud-computing.png"
                alt="Cloud Computing"
              />
            </div>
          </div>
          <div class="col-12 col-md-6">
            <h2>Why Us?</h2>
            <div class="border-black mb-3"></div>
            <p>
            Although the cloud has emerged as a transformation enabler, there are still substantial barriers preventing its widespread adoption, and many businesses are finding it difficult to demonstrate the value of transformation or link IT value to business outcomes. 
            </p>
            <p>
            Buildnetic Cloud Services offer a 360-degree approach for locating problems, finding solutions, and advancing transformation.
            </p>
            <ul>
              <li>Technology consulting with a focus on results By coordinating business objectives with the technology that supports them, Buildnetic Consult quickens the pace of digital transformation.
              </li>
              <li>The curiosity that drives change Our teams collaborate with you to identify and address the most challenging business issues.
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
            <div class="col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/cloud-computing/services-we-offer-1.png"
                  class="card-img-top"
                  alt="Cloud Consulting"
                />
                <div class="card-body">
                  <h5 class="card-title">Cloud Consulting</h5>
                  <p class="card-text">
                  To streamline your cloud architecture and aid you in achieving your business goals, we combine decades of experience with widely accepted frameworks for cloud adoption.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/cloud-computing/services-we-offer-2.png"
                  class="card-img-top"
                  alt="Private Cloud Services"
                />
                <div class="card-body">
                  <h5 class="card-title">Private Cloud Services</h5>
                  <p class="card-text">
                  For a unified, uniform approach across the cloud landscape, we provide a cloud experience with dedicated on-premises resources in a fully managed model that works with public cloud workloads.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/cloud-computing/services-we-offer-3.png"
                  class="card-img-top"
                  alt="Public Cloud Services"
                />
                <div class="card-body">
                  <h5 class="card-title">Public Cloud Services</h5>
                  <p class="card-text">
                  Our tried-and-true, standardized, and repeatable services are made to assist you in selecting the best platform for your applications and workloads while keeping security and management simplicity in mind.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <img
                  src="../images/services/single-services/cloud-computing/services-we-offer-4.png"
                  class="card-img-top"
                  alt="Modern Operations"
                />
                <div class="card-body">
                  <h5 class="card-title">Modern Operations</h5>
                  <p class="card-text">
                  To deliver value that iterates on where you are today, where you need to go, and the steps needed to modernize your operational processes and maximize efficiency, Buildnetic integrates people, processes, and technology.
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
