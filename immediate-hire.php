<?php
session_start();
$post=$_POST;


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Buildnetic</title>

  <!-- favicon link -->
  <link rel="shortcut icon" href="./images/buildnetic-fav.ico" type="image/x-icon" />

  <!-- bootstrap 5 CSS cdn link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- custom CSS link for INDEX page -->
  <link rel="stylesheet" href="./css/index.css" />

  <!-- fontawesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- animate on scroll AOS cdn link -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- CUSTOM CSS LINK FOR LANDING PAGE START -->
  <link rel="stylesheet" href="./css/immediate-hire.css" />
</head>

<body>
  <!-- header section start -->
  <?php include 'partials/menu.php' ?>
  <!-- header section end -->

  <!-- hero section START -->
  <section class="landing-hero-section container-fluid py-5 mt-3" style="overflow-x: hidden">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
          <h1 class="fw-bold display-4">
            Hire <span style="color: #0075ff">Immediately</span> <br />
            available Professionals
          </h1>
          <h3 class="mt-4 fw-light">
            No upfront fees, until you hire a candidate
          </h3>
        </div>
        <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-duration="1000">
          <h3 class="text-center" style="color: #0075ff">Get In Touch</h3>
          <div class="border-blue mx-auto"></div>
          <p class="text-center mt-2 mb-4">Fill out the information below and we will reach you soon</p>
          <form method="post" action="submit_hiring.php">
            <div class="row">
              <div class="col-sm-6 mb-3">
                <input name="name" required class="form-control" type="text" placeholder="Enter Your Name" required />
              </div>
              <div class="col-sm-6 mb-3">
                <input name="mobile" required class="form-control" type="text" placeholder="Enter Your Mobile Number" required />
              </div>
              <div class="col-12 mb-3">
                <input name="email" required class="form-control" type="text" placeholder="Enter Your Email" required />
              </div>
              <div class="col-12 mb-3">
                <textarea name="message" required class="form-control" rows="3" placeholder="Enter Your Message" required></textarea>
              </div>
              <div class="col-lg-6 col-sm-12 mb-3">
                <label for="assistanceWith" class="form-label">I need candidates with:</label>
                <div class="form-check">
                  <input name="assistanceWith" class="form-check-input" type="radio" name="assistanceWith" id="your-payroll" value="Your Payroll" required>
                  <label class="form-check-label" for="your-payroll">
                    My Payroll
                  </label>
                </div>
                <div class="form-check">
                  <input name="assistanceWith" class="form-check-input" type="radio" name="assistanceWith" id="buildnetic-payroll" value="Buildnetic's Payroll" required>
                  <label class="form-check-label" for="buildnetic-payroll">
                    Buildnetic's Payroll
                  </label>
                </div>
                <div class="form-check">
                  <input name="assistanceWith" class="form-check-input" type="radio" name="assistanceWith" id="other" value="Other" required>
                  <label class="form-check-label" for="other">
                    Other
                  </label>
                </div>
              </div>
              <div class="col-lg-6 col-sm-12 mb-3">
                <label for="formFile" class="form-label">Upload Your JD / Job Description</label>
                <input name="upload-jd" class="form-control" type="file" id="formFile" required>
              </div>

            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- hero section END -->

  <!-- how it works section START -->
  <section id="how-it-works" class="how-it-works-section container my-5" style="overflow-x: hidden; overflow-y: hidden">
    <h1 class="text-center fw-bold heading section-heading">How It Works</h1>
    <div class="border-blue mx-auto mb-3"></div>
    <h5 class="text-center fw-light">Hire a candidate in three steps</h5>
    <div class="row mt-5 align-items-center">
      <div class="col-lg-6">
        <div class="row align-items-center">
          <div class="col-6 border-tracker" data-aos="fade-up">
            <div class="image-block text-center">
              <img src="./images/landing/how-it-works-1.png" alt="Submit the Job " class="img-fluid" />
            </div>
          </div>
          <div class="col-6 ps-sm-5" data-aos="fade-up">
            <button class="btn btn-light mb-3">1</button>
            <h4>Submit the Job</h4>
            <p>Submit your Job, and you are done!</p>
          </div>

          <div class="col-6 pt-5 border-tracker active" data-aos="fade-up">
            <button class="btn btn-primary mb-3">2</button>
            <h4>Handpicked Candidates</h4>
            <p>Our HR will check and align the best possible candidates.</p>
            <p>
              Note: To maintain the quality, we call and screen the
              candidates.
            </p>
          </div>
          <div class="col-6 pt-5" data-aos="fade-up">
            <div class="image-block text-center">
              <img src="./images/landing/how-it-works-2.png" alt="Handpicked Candidates" class="img-fluid" />
            </div>
          </div>

          <div class="col-6 pt-5 border-tracker" data-aos="fade-up">
            <div class="image-block text-center">
              <img src="./images/landing/how-it-works-3.png" alt="Hire" class="img-fluid" />
            </div>
          </div>
          <div class="col-6 pt-5 ps-sm-5" data-aos="fade-up">
            <button class="btn btn-light mb-3">3</button>
            <h4>Hire</h4>
            <p>Hire them immediately</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-duration="1000">
        <div class="img-block text-center">
          <img src="./images/landing/how-it-works.png" alt="How It Works" class="img-fluid" />
        </div>
      </div>
    </div>
  </section>
  <!-- how it works section END -->

  <!-- why us section START -->
  <section id="why-us" class="why-us-section my-5 py-5" style="overflow-x: hidden; overflow-y: hidden">
    <div class="container">
      <h1 class="text-center fw-bold section-heading">Why Us</h1>
      <div class="border-blue mx-auto mb-3"></div>
      <h5 class="text-center fw-light">
        It’s easy to place an offer letter but tough to convert the candidates
      </h5>

      <div class="row align-items-center mt-5 align-items-center">
        <div class="col-lg-7" data-aos="fade-right" data-aos-duration="1000">
          <h4 class="fw-bold pb-4">
            There is work for us <br />
            Immediate Hire
          </h4>
          <p class="py-2">
            <i class="fa-sharp fa-solid fa-play me-2"></i> Candidates profile
            are active only for 30 days.
          </p>
          <p class="py-2">
            <i class="fa-sharp fa-solid fa-play me-2"></i> More than 80%
            conversion rate, which is 3X higher than other portals or HR
            agencies.
          </p>
          <p class="py-2">
            <i class="fa-sharp fa-solid fa-play me-2"></i> We don’t charge
            anything until you hire a candidate.
          </p>
        </div>
        <div class="col-lg-5 mt-5 mt-lg-0 text-center" data-aos="fade-left" data-aos-duration="1000">
          <img src="./images/landing/why-us.png" alt="Why Us" class="img-fluid" />
        </div>
        <div class="col-12 mt-5">
          <div class="row justify-content-around text-center">
            <div class="col-6 col-md-3">
              <div class="block p-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="icon-block mb-2">
                  <img src="./images/landing/why-us-1.png" alt="Why Us" class="img-fluid" />
                </div>
                <h1>80K+</h1>
                <p>Candidates</p>
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="block p-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="icon-block mb-2">
                  <img src="./images/landing/why-us-2.png" alt="Why Us" class="img-fluid" />
                </div>
                <h1>300+</h1>
                <p>Clients</p>
              </div>
            </div>
            <div class="col-6 col-md-3 mt-4 mt-md-0">
              <div class="block p-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="icon-block mb-2">
                  <img src="./images/landing/why-us-3.png" alt="Why Us" class="img-fluid" />
                </div>
                <h1>5K+</h1>
                <p>Jobs</p>
              </div>
            </div>
            <div class="col-6 col-md-3 mt-4 mt-md-0">
              <div class="block p-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="icon-block mb-2">
                  <img src="./images/landing/why-us-4.png" alt="Why Us" class="img-fluid" />
                </div>
                <h1>100+</h1>
                <p>Recruiters</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- why us section END -->

  <!-- hiring model section START -->
  <section class="hiring-model-section my-5 py-5">
    <div class="container">
      <h1 class="text-center fw-bold section-heading mt-5">Hiring Model</h1>
      <div class="border-white mx-auto mb-3"></div>
      <h5 class="text-center fw-light">Let’s build a team.</h5>

      <div class="row my-5 justify-content-around">
        <div class="col-lg-4">
          <div class="block pb-4">
            <h3 class="text-center py-4">Your Pay Role</h3>
            <ul class="mx-5 pt-4">
              <li class="pb-3">
                You have an HR team to manage the candidates.
              </li>
              <li>Stable projects which requires less flexibility.</li>
            </ul>

            <hr class="mx-5" />

            <p class="mx-5 fw-bold">Highlighted Points
              <i class="fa-solid fa-arrow-right-long ms-2"></i>
            </p>
            <p class="mx-5 mt-3">
              <i class="fa-regular fa-circle-check me-2"></i> Flat one time
              15% of CTC.
            </p>
            <p class="mx-5">
              <i class="fa-regular fa-circle-check me-2"></i> Quickly ramp up
              the team size.
            </p>
          </div>
        </div>
        <div class="col-lg-4 mt-5 mt-lg-0">
          <div class="block pb-4">
            <h3 class="text-center py-4">Buildnetic Pay Role</h3>
            <ul class="mx-5 pt-4">
              <li class="pb-3">
                We will manage payroll, timesheet, benefits, legal and
                policies.
              </li>
              <li>More flexibility on resources and projects.</li>
            </ul>

            <hr class="mx-5" />

            <p class="mx-5 fw-bold">Highlighted Points
              <i class="fa-solid fa-arrow-right-long ms-2"></i>
            </p>
            <p class="mx-5 mt-3">
              <i class="fa-regular fa-circle-check me-2"></i> Hourly billing,
              based on resources.
            </p>
            <p class="mx-5">
              <i class="fa-regular fa-circle-check me-2"></i> Monthly
              timesheet to track the progress.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- hiring model section END -->

  <!-- FAQ section START -->
  <section class="faq-section container py-5">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="img-block">
          <img src="./images/landing/faq.png" alt="FAQ" class="img-fluid" />
        </div>
      </div>
      <div class="col-lg-6 mt-5 mt-lg-0">
        <h1 class="fw-bold section-heading">Frequently Asked Questions</h1>
        <div class="border-blue mb-3"></div>

        <div class="accordion mt-4" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                What's the average notice period of a candidate?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                We only deal with immediate profiles with less than 30 days of notice period.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Do you guys provide HR services as well? If we hire a candidate on our payroll?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                No, to attain HR services you have to hire a candidate on Buildnetic payroll.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                The candidate is a duplicate and we already aligned the interview, does it affect the billing?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                No, please check the candidate's resume thoroughly before aligning the interview rounds. Once the interview is aligned via our portal, we will consider it as a lead and our verification team might block your account in case of external conversion of the candidate.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Do we have to pay to post a job?
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                No, we won't charge anything until you hire a candidate.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                I posted a job but didn't receive any profiles.
              </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                As we screen the candidates before aligning and sometimes it takes more than expected, usually within 48 hours you should get the candidates.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingSix">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                I received less number of candidates for a job.
              </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                These are immediately available handpicked candidates. The average number of candidates on a job is around 8-10.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingSeven">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                I can see the candidate is up for other jobs.
              </button>
            </h2>
            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Yes, these are immediately available profiles and are generally high in demand. Better to hire them first.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingEight">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                Min. duration to hire a candidate on Buildnetic payroll?
              </button>
            </h2>
            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Min duration is six months and above.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingNine">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                I have an issue with the billing.
              </button>
            </h2>
            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Please reach out to your dedicated account manager.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- FAQ section END -->

  <!-- our clients section START -->
  <section class="our-clients-section container-fluid mt-5 py-5" style="overflow-x: hidden; overflow-y: hidden">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-3" data-aos="fade-right" data-aos-duration="1000">
          <h1 class="fw-bold section-heading">Our Clients</h1>
          <div class="border-blue mb-3"></div>
        </div>
        <div class="col-lg-9 mt-5 mt-lg-0">
          <div class="row">
            <div class="col-6 col-md-3 mt-5">
              <div class="image-block mb-4 py-4" data-aos="fade-up" data-aos-duration="1000">
                <img src="./images/clients/repl.png" alt="REPL" />
              </div>
              <div class="image-block mb-4 py-4" data-aos="fade-up" data-aos-duration="1000">
                <img src="./images/clients/ddf.png" alt="DDF" />
              </div>
              <div class="image-block mb-4 py-4" data-aos="fade-up" data-aos-duration="1000">
                <img src="./images/clients/acuver.png" alt="Acuver" />
              </div>
              <div class="image-block mb-4 py-4" data-aos="fade-up" data-aos-duration="1000">
                <img src="./images/clients/the-coding-trail.png" alt="The Coding Trail" />
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="image-block mb-4 py-4" data-aos="fade-up" data-aos-duration="1000">
                <img src="./images/clients/car-dekho.png" alt="Car Dekho" />
              </div>
              <div class="image-block mb-4 py-4" data-aos="fade-up" data-aos-duration="1000">
                <img src="./images/clients/m-and-s.png" alt="M and S" />
              </div>
              <div class="image-block mb-4 py-4" data-aos="fade-up" data-aos-duration="1000">
                <img src="./images/clients/buildnetic.png" alt="Buildnetic" />
              </div>
              <div class="image-block mb-4 py-4" data-aos="fade-up" data-aos-duration="1000">
                <img src="./images/clients/metamore.png" alt="Metamore" />
              </div>
            </div>
            <div class="col-6 col-md-3 mt-5">
              <div class="image-block mb-4 py-4" data-aos="fade-up" data-aos-duration="1000">
                <img src="./images/clients/marsh-mc-lennan.png" alt="marsh mc lennan" />
              </div>
              <div class="image-block mb-4 py-4" data-aos="fade-up" data-aos-duration="1000">
                <img src="./images/clients/listed.png" alt="listed" />
              </div>
              <div class="image-block mb-4 py-4" data-aos="fade-up" data-aos-duration="1000">
                <img src="./images/clients/air-tour-australia.png" alt="air tour australia" />
              </div>
              <div class="image-block mb-4 py-4" data-aos="fade-up" data-aos-duration="1000">
                <img src="./images/clients/dream-webies.png" alt="dream webies" />
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="image-block mb-4 py-4" data-aos="fade-up" data-aos-duration="1000">
                <img src="./images/clients/epam.png" alt="epam" />
              </div>
              <div class="image-block mb-4 py-4" data-aos="fade-up" data-aos-duration="1000">
                <img src="./images/clients/design-pax.png" alt="design-pax" />
              </div>
              <div class="image-block mb-4 py-4" data-aos="fade-up" data-aos-duration="1000">
                <img src="./images/clients/life-trail.png" alt="the life trail" />
              </div>
              <div class="image-block mb-4 py-4" data-aos="fade-up" data-aos-duration="1000">
                <img src="./images/clients/startup-buddy.png" alt="startup buddy" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- our clients section END -->

  <!-- footer section start -->
  <?php include 'partials/footer.php' ?>