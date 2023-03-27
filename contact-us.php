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
  <link rel="shortcut icon" href="./images/buildnetic-fav.ico" type="image/x-icon" />

  <!-- bootstrap 5 CSS cdn link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- custom CSS link for INDEX page -->
  <link rel="stylesheet" href="./css/index.css" />

  <!-- custom CSS link for CONTACT page -->
  <link rel="stylesheet" href="./css/contact-us.css" />

  <!-- fontawesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://www.google.com/recaptcha/api.js"></script>
</head>

<body>
  <!-- header section start -->
  <?php include 'partials/menu.php' ?>
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
            <img src="./images//contact/contact-banner.png" alt="Contact" class="img-fluid" />
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
              <img src="./images/contact/working-hour.png" alt="Working Hours" class="img-fluid" />
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-xl-4 mt-5 mt-md-0 text-center">
          <div class="block py-5 px-5">
            <h2 class="mb-2">Call Us</h2>
            <div class="border-black mx-auto mb-5"></div>
            <h5 class="mb-3">Singapore</h5>
            <p class="mb-4">
              <a href="tel:+6587993124" class="text-decoration-none" target="_blank">+65 879 93124</a>
            </p>
            <h5 class="mb-3">India</h5>
            <p class="mb-4">
              <a href="tel:+918595334605" class="text-decoration-none" target="_blank">+91 85953 34605</a>
            </p>
            <h5 class="mb-3">USA</h5>
            <p class="mb-4">
              <a href="tel:+12143770359" class="text-decoration-none" target="_blank">+1 214 377 0359</a>
            </p>
            <h5 class="mb-3">Canada</h5>
            <p class="mb-4">
              <a href="tel:+16478198634" class="text-decoration-none" target="_blank">+1 (647) 819-8634</a>
            </p>
            <div class="img-block pt-4">
              <img src="./images/contact/call-us.png" alt="Call Us" class="img-fluid" />
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
              <img src="./images/contact/our-office.png" alt="Our Offices" class="img-fluid" />
            </div>
          </div>
        </div>
      </div>

      <div class="mail-block mt-5">
        <a href="mailto:sales@buildnetic.com" class="text-decoration-none py-3 px-4 mx-auto mb-5" target="_blank">You can also email us at: sales@buildnetic.com
        </a>
      </div>
    </div>

    <div class="contact-form container py-5 ">
      <form action="submit_contact.php" novalidate method="post" onsubmit="return validateForm();" class="form py-5" id="contact-form">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <form class="p-5">
              <div class="mb-3">
                <div class="row">
                  <div class="col-12 col-md-6 form-group">
                    <label for="fullName" class="form-label">Full Name:</label>
                    <input type="text" required class="form-control mb-3" name="full_name" id="fullName" placeholder="John Doe" />

                  </div>
                  <div class="col-12 col-md-6 mt-3 mt-md-0 form-group">
                    <label for="organization" class="form-label">Organization:</label>
                    <input type="text" name="company_name" required class="form-control mb-3" id="organization" placeholder="Company Name" />
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <div class="row">
                  <div class="col-12 col-md-6 form-group">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="email" required class="form-control mb-3" id="email" placeholder="name@company.com" />
                  </div>
                  <div class="col-12 col-md-6 mt-3 mt-md-0 form-group">
                    <label for="phone" class="form-label">Phone Number:</label>
                    <input type="tel" name="mobile" required class="form-control mb-3" id="phone" placeholder="Full Number (incl. prefix)" />
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <div class="row">
                  <div class="col-12 col-md-6 form-group">
                    <label for="companySize" class="form-label">Company size:</label>
                    <select class="form-select mb-3" name="company_size" aria-label="Default select example" id="companySize">

                      <option value="1(Freelancer)">1 (Freelancer)</option>
                      <option value="2-19">2-19</option>
                      <option value="20-49">20-49</option>
                      <option value="50+">50+</option>
                    </select>
                  </div>
                  <div class="col-12 col-md-6 mt-3 mt-md-0 form-group">
                    <label for="inquiry" class="form-label">What’s your inquiry about?</label>
                    <select class="form-select mb-3" name="enquiry_about" aria-label="Default select example" id="inquiry">

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
              <div class="mb-3 form-group">
                <label for="exampleFormControlTextarea1" class="form-label">How can we help you?</label>
                <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Let us know what you need"></textarea>
              </div>
              <button class="g-recaptcha btn btn-primary mt-3" data-sitekey="6LdR3MgkAAAAAOUnRChNIU9tUh3CST0Cnsa1ggO-" data-callback='onSubmit' data-action='submit'>Submit</button>

            </form>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- contact page end -->
  <script src="js/pristine.min.js"></script>

  <script type="text/javascript">
    var form = document.getElementById("contact-form");
    var pristine = new Pristine(form);

    function validateForm() {
      var valid = pristine.validate();
      var errors = pristine.getErrors();
      return valid;

    }

    function onSubmit(token) {
      let validForm = validateForm();
      if (validForm) {
        document.getElementById("contact-form").submit();
      }

    }
  </script>
  <!-- footer section start -->
  <?php include 'partials/footer.php' 
  ?>
  <style>
    .has-success .form-control {
      border-bottom: 2px solid #168b3f;
    }

    .has-danger .form-control {
      border-bottom: 2px solid #dc1d34;
    }

    .form-group .text-help {
      color: #dc1d34;
    }

    .inline-label label {
      display: inline;
    }

    .pristine-error {
      display: table;
    }
  </style>