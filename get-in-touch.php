<?php include 'partials/header.php' ?>

<body>
  <?php include 'partials/menu.php' ?>
  <style>
    .block .select-block label:hover {
      background-color: #0075ff;
      color: white;

    }

    .active-label {
      background-color: #0075ff;
      color: white !important;
    }
  </style>

  <!-- contact page start -->
  <div class="get-in-touch-page">
    <div class="get-in-touch-banner-section container-fluid mt-3 mb-5">
      <div class="container py-4">
        <div class="row">
          <div class="col-12 col-md-6 mb-5 mb-md-0">
            <h2 class="display-5 fw-bold">
              Get <br />
              In Touch
            </h2>
            <div class="border-black"></div>
          </div>
          <div class="col-12 col-md-6">
            <img src="./images//contact/contact-banner.png" alt="Contact" class="img-fluid" />
          </div>
        </div>
      </div>
    </div>

    <div class="get-in-touch-form container py-5">
      <div class="row">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <img src="./images/services/technical-expertise.png" alt="Get In Touch" class="img-fluid" />
        </div>
        <div class="col-lg-6">
          <div class="get-in-touch">
            <!-- step 1 start -->
            <div id="step1" class="block">
              <h2>What are you looking for?</h2>
              <div class="select-block">
                <input title="stepTwo" data-step-id="1" type="radio" id="hireTeam" name="selectPlan" value="hireTeam" />
                <label for="hireTeam">I want to hire a team</label>
                <input title="stepEleven" data-step-id="1" type="radio" id="haveProject" name="selectPlan" value="haveProject" />
                <label for="haveProject">I have a project</label>
                <input title="stepTwo" data-step-id="1" type="radio" id="somethingElse" name="selectPlan" value="somethingElse" />
                <label for="somethingElse">Something else</label>
              </div>
            </div>
            <!-- step 1 end -->


            <!-- step 2 start -->
            <div id="step2" class="block">
              <div class="team_form">
                <h2>What type of project are you hiring for?</h2>
                <ul class="listing">
                  <li>
                    <div class="radio">
                      <input title="stepThree" data-step-id="2" id="new_project" type="radio" name="typeofproject" value="New idea or project" />
                      <label for="new_project">
                        <div class="content">
                          <p>New idea or project</p>
                        </div>
                      </label>
                    </div>
                  </li>
                  <li>
                    <div class="radio">
                      <input title="stepThree" data-step-id="2" id="existing_project" type="radio" name="typeofproject" value="Existing project that needs more resources" />
                      <label for="existing_project">
                        <div class="content">
                          <p>Existing project that needs more resources</p>
                        </div>
                      </label>
                    </div>
                  </li>
                  <li>
                    <div class="radio">
                      <input title="stepThree" data-step-id="2" id="ongoing_assistance" type="radio" name="typeofproject" value="Ongoing assistance or consultation" />
                      <label for="ongoing_assistance">
                        <div class="content">
                          <p>Ongoing assistance or consultation</p>
                        </div>
                      </label>
                    </div>
                  </li>
                  <li>
                    <div class="radio">
                      <input title="stepThree" data-step-id="2" id="none" type="radio" name="typeofproject" value="Something else" />
                      <label for="none">
                        <div class="content">
                          <p>Something else</p>
                        </div>
                      </label>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="project_form">
                <div id="step2" class="block">
                  <h2>A bit about yourself...</h2>
                  <ul class="listing">
                    <li>
                      <div class="radio">
                        <input title="stepThree" data-step-id="2" id="company_represent" type="radio" name="typeofcompany" value="I represent a company" />
                        <label for="new_project">
                          <div class="content">
                            <p>I represent a company</p>
                          </div>
                        </label>
                      </div>
                    </li>
                    <li>
                      <div class="radio">
                        <input title="stepThree" data-step-id="2" id="individual_represent" type="radio" name="typeofcompany" value="I am an individual consultant" />
                        <label for="existing_project">
                          <div class="content">
                            <p>I am an individual consultant</p>
                          </div>
                        </label>
                      </div>
                    </li>

                  </ul>
                </div>
              </div>
            </div>
            <!-- step 2 end -->

            <!-- step 3 start -->
            <div id="step3" class="block">
              <div class="team_form">
                <h2>Tell us about your hiring needs?</h2>
                <div class="select-block">
                  <input title="stepFour" data-step-id="3" type="radio" id="fulltime" name="selectHiringNeeds" value="fulltime" data-gaconnector-tracked="true" />
                  <label for="fulltime">Full-time</label>
                  <input title="stepFour" data-step-id="3" type="radio" id="parttime" name="selectHiringNeeds" value="parttime" data-gaconnector-tracked="true" />
                  <label for="parttime">Part-time</label>
                  <input title="stepFour" data-step-id="3" type="radio" id="couldBeBoth" name="selectHiringNeeds" value="couldBeBoth" data-gaconnector-tracked="true" />
                  <label for="couldBeBoth">Both</label>
                </div>
              </div>
              <div class="project_form">
                <h2>A bit about project...</h2>
                <div class="select-block">
                  <input title="stepFour" data-step-id="3" type="radio" id="project_idea" name="projectintro" value="fulltime" />
                  <label for="fulltime">
                    <p>I have a Project idea<span>(A top level project idea without any documentation at this stage)</span></p>
                  </label>
                  <input title="stepFour" data-step-id="3" type="radio" id="project_plan" name="projectintro" value="parttime" />
                  <label for="parttime">
                    <p>I have a Project plan<span>(If you have a project specification doc, clarity about timelines and phases etc.)</span></p>
                  </label>

                </div>
              </div>
            </div>
            <!-- step 3 end -->

            <!-- step 4 start -->
            <div id="step4" class="block">
              <div class="team_form">
                <h2>What suits you the best?</h2>
                <ul class="listing">
                  <li>
                    <div class="radio">
                      <input id="offshore" data-step-id="4" title="stepFive" type="radio" name="openfor" value="offshore" data-gaconnector-tracked="true" />
                      <label for="offshore">
                        <div class="content">
                          <p>Offshore<span>(Cost advantage)</span></p>
                        </div>
                      </label>
                    </div>
                  </li>
                  <li>
                    <div class="radio">
                      <input id="nearshore" data-step-id="4" title="stepFive" type="radio" name="openfor" value="nearshore" data-gaconnector-tracked="true" />
                      <label for="nearshore">
                        <div class="content">
                          <p>
                            Nearshore<span>(Same time zone and slight cost advantage)</span>
                          </p>
                        </div>
                      </label>
                    </div>
                  </li>
                  <li>
                    <div class="radio">
                      <input id="onshore" data-step-id="4" title="stepFive" type="radio" name="openfor" value="onshore" data-gaconnector-tracked="true" />
                      <label for="onshore">
                        <div class="content">
                          <p>
                            Onshore- remote or onsite<span>(A local native resource)</span>
                          </p>
                        </div>
                      </label>
                    </div>
                  </li>
                  <li>
                    <div class="radio">
                      <input id="open" data-step-id="4" title="stepFive" type="radio" name="openfor" value="open for discussion" data-gaconnector-tracked="true" />
                      <label for="open">
                        <div class="content">
                          <p>Open for discussion</p>
                        </div>
                      </label>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="project_form">
                <h2>A bit about funding source...</h2>
                <ul class="listing">
                  <li>
                    <div class="radio">
                      <input id="offshore" data-step-id="4" title="stepFive" type="radio" name="funding" value="self funded" data-gaconnector-tracked="true" />
                      <label for="offshore">
                        <div class="content">
                          <p>It's a self funded project</span></p>
                        </div>
                      </label>
                    </div>
                  </li>
                  <li>
                    <div class="radio">
                      <input id="nearshore" data-step-id="4" title="stepFive" type="radio" name="funding" value="externally funded" data-gaconnector-tracked="true" />
                      <label for="nearshore">
                        <div class="content">
                          <p>
                            It's externally funded project</span>
                          </p>
                        </div>
                      </label>
                    </div>
                  </li>
                  <li>
                    <div class="radio">
                      <input id="onshore" data-step-id="4" title="stepFive" type="radio" name="openfor" value="dont disclose" />
                      <label for="onshore">
                        <div class="content">
                          <p>
                            Don't want to disclose..</span>
                          </p>
                        </div>
                      </label>
                    </div>
                  </li>

                </ul>
              </div>
            </div>
            <!-- step 4 end -->

            <!-- step 5 start -->
            <div id="step5" class="block">
              <div class="team_form">
                <h2>How many resources do you need?</h2>
                <ul class="listing">
                  <li>
                    <div class="radio">
                      <input title="stepSix" data-step-id="5" id="multiple" type="radio" name="numberofresources" value="Multiple" />
                      <label for="multiple">
                        <div class="content">
                          <p>Multiple</p>
                        </div>
                      </label>
                    </div>
                  </li>
                  <li>
                    <div class="radio">
                      <input title="stepSix" data-step-id="5" id="only_1" type="radio" name="numberofresources" value="Only one" />
                      <label for="only_1">
                        <div class="content">
                          <p>Only one</p>
                        </div>
                      </label>
                    </div>
                  </li>
                  <li>
                    <div class="radio">
                      <input title="stepSix" data-step-id="5" id="num_resources_not_sure" type="radio" name="numberofresources" value="Not sure, I will decide later" data-gaconnector-tracked="true" />
                      <label for="num_resources_not_sure">
                        <div class="content">
                          <p>Not sure, I'll decide later</p>
                        </div>
                      </label>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="project_form">
                <h2>A bit about project...</h2>
                <ul class="listing">
                  <li>
                    <div class="radio">
                      <input title="stepSix" data-step-id="5" id="multiple" type="radio" name="numberofresources" value="Multiple" />
                      <label for="multiple">
                        <div class="content">
                          <p>Application Developement</p>
                        </div>
                      </label>
                    </div>
                  </li>
                  <li>
                    <div class="radio">
                      <input title="stepSix" data-step-id="5" id="only_1" type="radio" name="numberofresources" value="Only one" />
                      <label for="only_1">
                        <div class="content">
                          <p>Digital Marketing</p>
                        </div>
                      </label>
                    </div>
                  </li>
                  <li>
                    <div class="radio">
                      <input title="stepSix" data-step-id="5" id="num_resources_not_sure" type="radio" name="numberofresources" value="Not sure, I will decide later" data-gaconnector-tracked="true" />
                      <label for="num_resources_not_sure">
                        <div class="content">
                          <p>Not sure, I'll decide later</p>
                        </div>
                      </label>
                    </div>
                  </li>
                </ul>
              </div>

            </div>
            <!-- step 5 end -->

            <!-- step 6 start -->
            <div id="step6" class="block">
              <div class="team_form">
                <h2>How long do you need the resource for?</h2>
                <ul class="listing">
                  <li>
                    <div class="radio">
                      <input title="stepSeven" data-step-id="6" id="longer_than_6_months" type="radio" name="durationofproject" value="Longer than 6 months" />
                      <label for="longer_than_6_months">
                        <div class="content">
                          <p>Longer than 6 months</p>
                        </div>
                      </label>
                    </div>
                  </li>
                  <li>
                    <div class="radio">
                      <input title="stepSeven" data-step-id="6" id="3_to_6_months" type="radio" name="durationofproject" value="3 to 6 months" />
                      <label for="3_to_6_months">
                        <div class="content">
                          <p>2 to 6 months</p>
                        </div>
                      </label>
                    </div>
                  </li>
                  <li>
                    <div class="radio">
                      <input title="stepSeven" data-step-id="6" id="1_to_4_weeks" type="radio" name="durationofproject" value="1 to 4 weeks" data-gaconnector-tracked="true" />
                      <label for="1_to_4_weeks">
                        <div class="content">
                          <p>A month or less</p>
                        </div>
                      </label>
                    </div>
                  </li>
                  <li>
                    <div class="radio">
                      <input title="stepSeven" id="not_sure_I_ll_decide_later" type="radio" name="durationofproject" value="Not sure, I will decide later" data-gaconnector-tracked="true" />
                      <label for="not_sure_I_ll_decide_later">
                        <div class="content">
                          <p>Not sure, I'll decide later</p>
                        </div>
                      </label>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="project_form">
                <h2>What type of project ?</h2>
                <ul class="listing">
                  <li>
                    <div class="radio">
                      <input title="stepSeven" data-step-id="6" id="longer_than_6_months" type="radio" name="durationofproject" value="Longer than 6 months" />
                      <label for="longer_than_6_months">
                        <div class="content">
                          <p>Mobile Application</p>
                        </div>
                      </label>
                    </div>
                  </li>
                  <li>
                    <div class="radio">
                      <input title="stepSeven" data-step-id="6" id="3_to_6_months" type="radio" name="durationofproject" value="3 to 6 months" />
                      <label for="3_to_6_months">
                        <div class="content">
                          <p>Web Application</p>
                        </div>
                      </label>
                    </div>
                  </li>
                  <li>
                    <div class="radio">
                      <input title="stepSeven" data-step-id="6" id="1_to_4_weeks" type="radio" name="durationofproject" value="1 to 4 weeks" data-gaconnector-tracked="true" />
                      <label for="1_to_4_weeks">
                        <div class="content">
                          <p>E-Commerce Website</p>
                        </div>
                      </label>
                    </div>
                  </li>
                  <li>
                    <div class="radio">
                      <input title="stepSeven" id="not_sure_I_ll_decide_later" type="radio" name="durationofproject" value="Not sure, I will decide later" data-gaconnector-tracked="true" />
                      <label for="not_sure_I_ll_decide_later">
                        <div class="content">
                          <p>Not sure, I'll decide later</p>
                        </div>
                      </label>
                    </div>
                  </li>
                </ul>
              </div>


            </div>
            <!-- step 6 end -->



            <!-- step 7 start -->
            <div id="step7" class="block">
              <div class="team_form">
                <h2>How soon do you need the resource(s)?</h2>
                <ul class="listing">
                  <li>
                    <div class="radio">
                      <input title="stepNine" data-step-id="7" id="withinNintyDays" type="radio" name="wantToGetStarted" value="Within 90 days" data-gaconnector-tracked="true" />
                      <label for="withinNintyDays">
                        <div class="content">
                          <p>60-90 Days</p>
                        </div>
                      </label>
                    </div>
                  </li>
                  <li>
                    <div class="radio">
                      <input title="stepNine" data-step-id="7" id="withinamonth" type="radio" name="wantToGetStarted" value="Within a month" data-gaconnector-tracked="true" />
                      <label for="withinamonth">
                        <div class="content">
                          <p>Within a month</p>
                        </div>
                      </label>
                    </div>
                  </li>
                  <li>
                    <div class="radio">
                      <input title="stepNine" data-step-id="7" id="sevenToFifteen" type="radio" name="wantToGetStarted" value="7 days to 15 days" data-gaconnector-tracked="true" />
                      <label for="sevenToFifteen">
                        <div class="content">
                          <p>2-4 Weeks</p>
                        </div>
                      </label>
                    </div>
                  </li>
                  <li>
                    <div class="radio">
                      <input title="stepNine" data-step-id="7" id="donotKnow" type="radio" name="wantToGetStarted" value="Donot know yet" data-gaconnector-tracked="true" />
                      <label for="donotKnow">
                        <div class="content">
                          <p>Don't know yet</p>
                        </div>
                      </label>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="project_form">
                <h2>How soon do you wish to start the project?</h2>
                <ul class="listing">
                  <li>
                    <div class="radio">
                      <input title="stepNine" data-step-id="7" id="withinNintyDays" type="radio" name="wantToGetStarted" value="Within 90 days" data-gaconnector-tracked="true" />
                      <label for="withinNintyDays">
                        <div class="content">
                          <p>60-90 Days</p>
                        </div>
                      </label>
                    </div>
                  </li>
                  <li>
                    <div class="radio">
                      <input title="stepNine" data-step-id="7" id="withinamonth" type="radio" name="wantToGetStarted" value="Within a month" data-gaconnector-tracked="true" />
                      <label for="withinamonth">
                        <div class="content">
                          <p>Within a month</p>
                        </div>
                      </label>
                    </div>
                  </li>
                  <li>
                    <div class="radio">
                      <input title="stepNine" data-step-id="7" id="sevenToFifteen" type="radio" name="wantToGetStarted" value="7 days to 15 days" data-gaconnector-tracked="true" />
                      <label for="sevenToFifteen">
                        <div class="content">
                          <p>2-4 Weeks</p>
                        </div>
                      </label>
                    </div>
                  </li>
                  <li>
                    <div class="radio">
                      <input title="stepNine" data-step-id="7" id="donotKnow" type="radio" name="wantToGetStarted" value="Donot know yet" data-gaconnector-tracked="true" />
                      <label for="donotKnow">
                        <div class="content">
                          <p>Don't know yet</p>
                        </div>
                      </label>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- step 7 end -->

            <!-- step 8 start -->
            <div id="step8" class="block">
              <div class="team_form">
                <h2>What's your company size?</h2>
                <div class="select-block">
                  <input title="stepTen" data-step-id="8" type="radio" id="currentEmployeeTen" name="currentEmployee" value="1-10" data-gaconnector-tracked="true" />
                  <label for="currentEmployeeTen">1-10</label>
                  <input title="stepTen" data-step-id="8" type="radio" id="currentEmployeeFifty" name="currentEmployee" value="11-50" data-gaconnector-tracked="true" />
                  <label for="currentEmployeeFifty">11-50</label>
                  <input title="stepTen" data-step-id="8" type="radio" id="currentEmployeeFiftyOne" name="currentEmployee" value="51-250" data-gaconnector-tracked="true" />
                  <label for="currentEmployeeFiftyOne">51-250</label>
                  <input title="stepTen" data-step-id="8" type="radio" id="currentEmployeeTwoFiftyOne" name="currentEmployee" value="251-10K" data-gaconnector-tracked="true" />
                  <label for="currentEmployeeTwoFiftyOne">251-10K</label>
                  <input title="stepTen" data-step-id="8" type="radio" id="currentEmployeeTenPlus" name="currentEmployee" value="10K+" data-gaconnector-tracked="true" />
                  <label for="currentEmployeeTenPlus">10K+</label>
                </div>
              </div>
              <div class="project_form">
                <h2>What's your company size?</h2>
                <div class="select-block">
                  <input title="stepTen" data-step-id="8" type="radio" id="currentEmployeeTen" name="currentEmployee" value="1-10" data-gaconnector-tracked="true" />
                  <label for="currentEmployeeTen">1-10</label>
                  <input title="stepTen" data-step-id="8" type="radio" id="currentEmployeeFifty" name="currentEmployee" value="11-50" data-gaconnector-tracked="true" />
                  <label for="currentEmployeeFifty">11-50</label>
                  <input title="stepTen" data-step-id="8" type="radio" id="currentEmployeeFiftyOne" name="currentEmployee" value="51-250" data-gaconnector-tracked="true" />
                  <label for="currentEmployeeFiftyOne">51-250</label>
                  <input title="stepTen" data-step-id="8" type="radio" id="currentEmployeeTwoFiftyOne" name="currentEmployee" value="251-10K" data-gaconnector-tracked="true" />
                  <label for="currentEmployeeTwoFiftyOne">251-10K</label>
                  <input title="stepTen" data-step-id="8" type="radio" id="currentEmployeeTenPlus" name="currentEmployee" value="10K+" data-gaconnector-tracked="true" />
                  <label for="currentEmployeeTenPlus">10K+</label>
                </div>
              </div>
            </div>
            <!-- step 8 end -->






            <!-- step 9 start -->
            <div id="step9" class="block">
              <form action="submit.php" method="post" onsubmit="return validateAndSubmit()">
                <h2>How can we get in touch with you?</h2>
                <div class="details-block">
                  <div class="company">
                    <img src="./images/get-in-touch/company.png" alt="company" />
                    <input type="text" placeholder="Company Name" required name="company_name" id="company_name" />
                  </div>
                  <div class="email">
                    <img src="./images/get-in-touch/email.png" alt="email" />
                    <input type="email" placeholder="Email" required name="company_email" id="company_email" />
                  </div>

                  <div class="contact-name">
                    <img src="./images/get-in-touch/name.png" alt="contact name" />
                    <input type="text" placeholder="Contact Name" required name="contact_name" id="contact_name" />
                  </div>
                  <div class="contact-number">
                    <input id="phone" placeholder="Mobile" required type="tel" name="phone" />

                  </div>
                </div>

                <div class="block">
                  <h2>

                    <span class="second">Tell us a little more about what you’re looking for ?</span>
                  </h2>
                  <div class="textarea">
                    <textarea maxlength="1000" data-step-id="9" rows="3" id="contact_message" name="contact_message" placeholder="Any specification or message about requirement" class="bm-input no-icon"></textarea>
                  </div>
                  <input type="hidden" value="sd" name="stepsValue" id="stepsValue">

                  <!-- submit btn start -->
                  <div class="submit-btn">
                    <button type="submit" disabled id="submitcontactForm">Submit</button>
                  </div>
                  <!-- submit btn end -->
              </form>
            </div>



          </div>
          <!-- step 10 end -->
        </div>
      </div>
    </div>
  </div>
  </div>
  <script src="js/get-in-touch.js"></script>
  <!-- contact page end -->
  <?php include 'partials/footer.php' ?>