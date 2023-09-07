<?php
/*
Template Name: Subscription Page Template
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User Registration Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <!-- Add Font Awesome CSS link here (you need an internet connection) J!Wi;no0jcrT -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <?php wp_head(); ?>
</head>

<body>


  <div class="reg">
    <div class="d-flex max-height">
      <div class="col-md-6">
        <img src="<?php echo get_stylesheet_directory_uri() .
            '/cover.png'; ?>" alt="" srcset="" style="margin-left: 2rem">
        <div class="sub-form">
          <ul class="numbered-list" role="tablist">
            <li class="nav-item active" id="tabLink1">
              <a class="nav-link">Content</a>
            </li>
            <li class="nav-item" id="tabLink2">
              <a class="nav-link">Subscriptions</a>
            </li>
            <li class="nav-item" id="tabLink3">
              <a class="nav-link">Checkout</a>
            </li>
          </ul>
          <div class="tab-content ml-2">
            <div id="tab1" class="tab-pane fade show active">
              <h3 style="margin-bottom: -1px; margin-top:0px;">Select Preferred Content</h3>
              <small>Select the preference of opportunities you want to get updates on</small>
              <div class="list-group mt-3">
                <a href="#" role="button" id="select-relocation-region"
                  class="list-group-item  my-2 list-group-item-action flex-column align-items-start">

                  <h5 class="mb-1">Relocations Regions</h5>

                  <p class="mb-1">Get updates on all destinations and peculiarities</p>
                </a>
                <a href="#" role="button" id="select-scholarships"
                  class="list-group-item border-top my-2 list-group-item-action flex-column align-items-start">

                  <h5 class="mb-1">Scholarships</h5>

                  <p class="mb-1">Get updates on all destinations and peculiarities</p>

                </a>
                <a href="#" role="button" id="select-jobs-internship"
                  class="list-group-item my-2 border-top list-group-item-action  flex-column align-items-start">

                  <h5 class="mb-1">Jobs and Internships</h5>

                  <p class="mb-1">Get updates on all destinations and peculiarities</p>

                </a>
                <a href="#" role="button" id="select-programs"
                  class="list-group-item my-2 border-top list-group-item-action flex-column align-items-start">

                  <h5 class="mb-1">Programs</h5>

                  <p class="mb-1">Get updates on all destinations and peculiarities</p>

                </a>
                <div class="d-flex justify-content-between w-50">
                    <button type="button" class="btn btn-sm btn-light text-dark mx-2" onclick="close()">Close</button> 
                    <button type="button" class="btn btn-sm btn-success mx-2" id="sub-next">Next</button>
                </div>
              
              </div>
            </div>
            <div id="tab2" class="tab-pane fade">
              <h3 style="margin-bottom: -1px;margin-top: 13px;margin-left:0.5rem">Select Subscription Frequency</h3>
              <small style="margin-left:0.5rem">You are one step away from tailored help and information travelling abroad</small>
              <div class="card-group m-4" style="margin-top: 2rem !important;margin-left: 0 !important;">
                <div class="card border rounded-0 mx-2" >
                  <div class="card-body">
                    <span
                      class="badge rounded-pill bg-warning text-dark p-2 my-2 rounded-pill w-50 adjust-pill">Warning</span>
                    <strong>
                      <h3 class="card-title">
                        <span>N</span> 20 <span>/day</span>
                      </h3>
                    </strong>
                    <small><strong>Get updates on all destinations and their peculiarities</strong></small>

                    <ul class="mt-3 list-group">
                      <li class="list-item my-2">Adjust Japa Preferences</li>
                      <li class="list-item my-2">Set Custom SMS alert</li>
                      <li class="list-item my-2">Daily access to Japa Opportunities</li>
                    </ul>
                    <a href="#" role="button" class="btn btn-success mt-2 w-100 subscription-option" data-subscriptionoption ="daily">Subscribe</a>
                  </div>
                </div>
                <div class="card border rounded-0 mx-2">
                  <div class="card-body">
                    <span
                      class="badge rounded-pill bg-warning text-dark p-2 my-2 rounded-pill w-50 adjust-pill">Warning</span>
                    <strong>
                      <h3 class="card-title">
                        <span>N</span> 20 <span>/day</span>
                      </h3>
                    </strong>
                    <small><strong>Get updates on all destinations and their peculiarities</strong></small>

                    <ul class="mt-3 list-group">
                      <li class="list-item my-2">Adjust Japa Preferences</li>
                      <li class="list-item my-2">Set Custom SMS alert</li>
                      <li class="list-item my-2">Daily access to Japa Opportunities</li>
                    </ul>
                    <a href="#" role="button" class="btn btn-success mt-2 w-100 subscription-option" data-subscriptionoption ="weekly">Subscribe</a>
                  </div>
                </div>
                <div class="card border rounded-0 mx-2">
                  <div class="card-body">
                    <span
                      class="badge rounded-pill bg-warning text-dark p-2 my-2 rounded-pill w-50 adjust-pill">Warning</span>
                    <strong>
                      <h3 class="card-title">
                        <span>N</span> 20 <span>/day</span>
                      </h3>
                    </strong>
                    <small><strong>Get updates on all destinations and their peculiarities</strong></small>

                    <ul class="mt-3 list-group">
                      <li class="list-item my-2">Adjust Japa Preferences</li>
                      <li class="list-item my-2">Set Custom SMS alert</li>
                      <li class="list-item my-2">Daily access to Japa Opportunities</li>
                    </ul>
                    <a href="#" role="button" class="btn btn-success mt-2 w-100 subscription-option" data-subscriptionoption="monthly">Subscribe</a>
                  </div>
                </div>
              </div>



            </div>
            <div id="tab3" class="tab-pane fade">
              <?php require_once plugin_dir_path(__FILE__) .
                  '/japa-subscription/checkout_template.php'; ?>
            </div>
          </div>
        </div>

      </div>
      <div class="col-md-6 d-none d-md-block no-padding">
        <div class="col-img-2" />
      </div>
    </div>
  </div>

  <!-- UI steps -->

  <!-- Preference -->
  <div id="relocation-region">
    <div class="p-2">
      <h2 class="card-title">Relocation Regions</h2>
      <small class="card-text">Select the Regions you would love to get update from</small>
      <div class="mt-3">
        <span class="badge rounded-pill bg-light text-black p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="relocation-region" data-value="Northern Europe">
          <i class="bi bi-check font-weight-bolder mx-1"></i>Northern Europe
        </span>
        <span class="badge rounded-pill bg-light text-black p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="relocation-region" data-value="South America">South America</span>
        <span class="badge rounded-pill bg-light text-black  p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="relocation-region" data-value="Oceania">Oceania</span>
        <span class="badge rounded-pill bg-light text-black p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="relocation-region" data-value="North America">North America</span>
        <span class="badge rounded-pill bg-light text-black  p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="relocation-region" data-value="South Asia">South Asia</span>
        <span class="badge rounded-pill bg-light text-black p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="relocation-region" data-value="Western Europe">Western Europe</span>
        <span class="badge rounded-pill bg-light text-black  p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="relocation-region" data-value="North-East Asia">North-East Asia</span>
        <span class="badge rounded-pill bg-light text-black  p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="relocation-region" data-value="Subsaharan Africa">Subsaharan Africa</span>
        <span class="badge rounded-pill bg-light text-black  p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="relocation-region" data-value="Central and Eastern Europe">Central and Eastern Europe</span>
        <span class="badge rounded-pill bg-light text-black  p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="relocation-region" data-value="Southern/Mediterranean Europe">Southern/Mediterranean Europe</span>
        <span class="badge rounded-pill bg-light text-black  p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="relocation-region" data-value="South-East Asia">South-East Asia</span>
        <span class="badge rounded-pill bg-light text-black  p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="relocation-region" data-value="The Middle East">The Middle East</span>
        <span class="badge rounded-pill bg-light text-black  p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="relocation-region" data-value="North Africa">North Africa</span>
        <span class="badge rounded-pill bg-light text-black  p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="relocation-region" data-value="The Carribean">The Carribean</span>
        <span class="badge rounded-pill bg-light text-black  p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="relocation-region" data-value="Central America">Central America</span>
      </div>
      <div class="border-0 d-flex justify-content-between">
        <button type="button" class="btn btn-light text-dark mx-2" data-bs-dismiss="modal"
          onclick="cancelSelection('relocation-region')">Cancel</button> <button type="button" class="btn btn-success" data-bs-dismiss="modal"
          onclick="hideModal()">Done</button>
      </div>
    </div>
  </div>

  <div id="scholarships">
    <div class="p-2">
      <h2 class="card-title">Scholarships</h2>
      <small class="card-text">Select the Regions you would love to get update from</small>
      <div class="mt-3">

        <span class="badge rounded-pill bg-light text-black  p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="scholarships" data-value="Merit-Based Scholarships">Merit-Based Scholarships</span>
        <span class="badge rounded-pill bg-light text-black p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="scholarships" data-value="University Scholarships">University Scholarships</span>
        <span class="badge rounded-pill bg-light text-black  p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="scholarships" data-value="Country-Specific Scholarships">Country-Specific Scholarships</span>
        <span class="badge rounded-pill bg-light text-black p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="scholarships" data-value="Government Scholarships">Government Scholarships</span>
        <span class="badge rounded-pill bg-light text-black  p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="scholarships" data-value="Private Scholarships">Private Scholarships</span>
        <span class="badge rounded-pill bg-light text-black p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="scholarships" data-value="Financial Scholarships">Financial Scholarships</span>
      </div>
      <div class="border-0 d-flex justify-content-between">
        <button type="button" class="btn btn-light text-dark mx-2" data-bs-dismiss="modal"
          onclick="cancelSelection('scholarships')">Cancel</button> <button type="button" class="btn btn-success" data-bs-dismiss="modal"
          onclick="hideModal()">Done</button>
      </div>
    </div>
  </div>

  <div id="programs">
    <div class="p-2">
      <h2 class="card-title">Programs</h2>
      <small class="card-text">Select the Regions you would love to get update from</small>
      <div class="mt-3">
        <span class="badge rounded-pill bg-light text-black p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="programs" data-value="Study Abroad Programs">
          <i class="bi bi-check font-weight-bolder mx-1"></i>Study Abroad Programs
        </span>
        <span class="badge rounded-pill bg-light text-black p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="programs" data-value="Volunteer Abroad Programs">Volunteer Abroad Programs</span>
        <span class="badge rounded-pill bg-light text-black  p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="programs" data-value="Intern Abroad Programs">Intern Abroad Programs</span>
        <span class="badge rounded-pill bg-light text-black p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="programs" data-value="Teach Abroad Programs">Teach Abroad Programs</span>
        <span class="badge rounded-pill bg-light text-black  p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="programs" data-value="International TEFL Courses">International TEFL Courses</span>
        <span class="badge rounded-pill bg-light text-black p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="programs" data-value="Degree Programs Abroad">Degree Programs Abroad</span>
        <span class="badge rounded-pill bg-light text-black  p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="programs" data-value="High School Study Abroad">High School Study Abroad</span>
        <span class="badge rounded-pill bg-light text-black  p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="programs" data-value="Degree Programs Abroad">Degree Programs Abroad</span>
        <span class="badge rounded-pill bg-light text-black  p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="programs" data-value="High School Study Abroad">High School Study Abroad</span>
        <span class="badge rounded-pill bg-light text-black  p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="programs" data-value="Southern/Mediterranean Europe">Southern/Mediterranean Europe</span>
        <span class="badge rounded-pill bg-light text-black  p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="programs" data-value="Language Schools Abroad">Language Schools Abroad</span>
      </div>
      <div class="border-0 d-flex justify-content-between">
        <button type="button" class="btn btn-light text-dark mx-2" data-bs-dismiss="modal"
          onclick="cancelSelection('programs')">Cancel</button> <button type="button" class="btn btn-success" data-bs-dismiss="modal"
          onclick="hideModal()">Done</button>
      </div>
    </div>
  </div>

  <div id="jobs-internship">
    <div class="p-2">
      <h2 class="card-title">Jobs And Internships</h2>
      <small class="card-text">Select the Regions you would love to get update from</small>
      <div class="mt-3">
        <span class="badge rounded-pill bg-light text-black p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="jobs-internship" data-value="Jobs_Internships">
          <i class="bi bi-check font-weight-bolder mx-1"></i>Jobs & Internships
        </span>
        <span class="badge rounded-pill bg-light text-black  p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="jobs-internship" data-value="Paid_Unpaid_Virtual">Paid/Unpaid/Virtual</span>
        <span class="badge rounded-pill bg-light text-black p-3 m-1" onclick="handlePreference(event)" role="button"  data-preference="jobs-internship" data-value="Non-Profit_Externship">Non-Profit/Externship</span>
      </div>
      <div class="border-0 d-flex justify-content-between">
        <button type="button" class="btn btn-light text-dark mx-2" data-bs-dismiss="modal"
          onclick="cancelSelection('job-internship')">Cancel</button> <button type="button" class="btn btn-success" data-bs-dismiss="modal"
          onclick="hideModal()">Done</button>
      </div>
    </div>
  </div>

</body>