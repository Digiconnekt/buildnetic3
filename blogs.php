<?php include("./blogs-data.php") ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Full Stack Developers for Hire: Expert Advice from Buildnetic Blogs</title>

    <meta name="description" content="Gain access to insider strategies for hiring full stack developers with Buildnetic's blog section. Stay ahead of the competition with expert advice and industry insights.">

    <link rel="canonical" href="https://buildnetic.com/blogs.html">

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
    <link rel="stylesheet" href="./css/blogs.css" />

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
    <?php include 'partials/menu.php' ?>
    <!-- header section end -->

    <div class="blogs-page">
      <!-- title section start -->
      <div class="title-section container-fuild mt-3">
        <div class="container py-5">
          <h1 class="display-5 fw-bold pt-5">Read Blogs</h1>
          <div class="border-white mb-5"></div>
        </div>
      </div>
      <!-- title section end -->

      <!-- blog content start -->
      <div class="blog-content-section container my-5">
        <div class="row">
          <div class="all-blogs col-lg-12 mb-4 mb-lg-0">
            <div class="row row-cols-1 row-cols-md-2 g-4 mb-4">
              <?php 
                foreach($blogs as $blog){
                  ?>
                    <div class="col-12 col-md-6 col-lg-4">
                      <a
                        href="./blogs/<?php echo $blog->href; ?>.php"
                        class="card text-decoration-none"
                      >
                        <img
                          src="./images/blogs/<?php echo $blog->image ?>"
                          class="card-img-top"
                          alt="Blog"
                        />
                        <div class="card-body">
                          <h5 class="card-title">
                          <?php echo $blog->title; ?>
                          </h5>
                          <p class="card-text">
                            <?php echo $blog->description; ?> <span>read more...</span>
                          </p>
                        </div>
                      </a>
                    </div>
                  <?php
                }
              ?>
            </div>
          </div>

          <div class="col-12">
            <h4>Recent Blog's</h4>
            <div class="border-blue mb-3"></div>
            <div class="row">
              <?php 
                $count = 1;
                foreach ($blogs as $blog) {
                  if ($count > 3) {
                    break;
                  }
                  ?>
                    <div class="col-12 col-sm-6 col-lg-4">
                      <a
                        href="./blogs/<?php echo $blog->href; ?>.php"
                        class="card mb-3 text-decoration-none"
                      >
                        <div class="card-body row align-items-center">
                          <div class="col-md-4">
                            <img
                              src="./images/blogs/<?php echo $blog->image; ?>"
                              class="img-fluid"
                              alt="Blog"
                            />
                          </div>
                          <div class="col-md-8 mt-2 mt-md-0">
                            <p class="head card-text"><?php echo $blog->title; ?></p>
                          </div>
                        </div>
                      </a>
                    </div>
                  <?php
                  $count++;
                }
              ?>
            </div>
          </div>
        </div>
      </div>
      <!-- blog content end -->
    </div>

    <!-- footer section start -->
    <?php include 'partials/footer.php' ?>
