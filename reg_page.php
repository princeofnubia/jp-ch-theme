<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Registration Form</title>
    <link
          rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        />
        <!-- Add Font Awesome CSS link here (you need an internet connection) -->
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        />
    <?php wp_head(); ?>
  </head>
      <div class="reg">
          <div class="d-flex max-height">
            <div class="col-md-6 mt-5 justify-content-center">
              <div class="reg-form">

              </div>
            
            </div>
            <div class="col-md-6 d-none d-md-block no-padding">
              <div
                class="col-img-2"
              />
            </div>
          </div>
        </div>
        <div class="modal fade" id="registrationModal" tabindex="-1" role="dialog" aria-labelledby="registrationModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="otp-content" id="k">
              <div class="otp-header">
                <h5 class="modal-title" id="registrationModalLabel">Choose your verification method</h5>
            
                <small>We will send a code to your preferred method</small>
              </div>
             
              <div class="otp-body" >
                
                <div class="container-otp" id="otp-phone">
                  <div>
                    <div>Phone</div>
                    <small>send an otp to my email abubakrilaitan@gmail.com</small>
                  </div>
                
                  <i class="fas fa-chevron-right chevron-arrow"></i>
                </div>
                <div class="container-otp" id="otp-email">
                  <div>
                    <div>Email</div>
                    <small>send an otp to my email abubakrilaitan@gmail.com</small>
                  </div>
                
                  <i class="fas fa-chevron-right chevron-arrow"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- UI steps -->
        <!-- Preference -->
        <div>
          <div class="preferences" style="display: none;">
            <ul class="numbered-list" role="tablist">
              <li class="nav-item">
                <a class="nav-link  active" id="tabLink1">Content</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tabLink2">Subscriptions</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tabLink3">Checkout</a>
              </li>
            </ul>
        
            <div class="tab-content mt-3">
              <div id="tab1" class="tab-pane fade show active">
                <h3 style="margin-bottom: -1px;">Select Preferred Content</h3>
                <small>Select the preference of opportunities you want to get updates on</small>
                <div class="list-group mt-3">
                  <a href="#" class="list-group-item  my-2 list-group-item-action flex-column align-items-start">
                
                      <h5 class="mb-1">Relocations Regions</h5>
      
                    <p class="mb-1">Maecenas sed diam eget risus varius blandit.</p>
                  </a>
                  <a href="#" class="list-group-item border-top my-2 list-group-item-action flex-column align-items-start">
                
                      <h5 class="mb-1">Scholarships</h5>
        
                    <p class="mb-1">Maecenas sed diam eget risus varius blandit.</p>
            
                  </a>
                  <a href="#" class="list-group-item my-2 border-top list-group-item-action flex-column align-items-start">
                
                    <h5 class="mb-1">Jobs and Internships</h5>
      
                  <p class="mb-1">DMaecenas sed diam eget risus varius blandit.</p>
          
                </a>
                <a href="#" class="list-group-item my-2 border-top list-group-item-action flex-column align-items-start">
                
                  <h5 class="mb-1">Programs</h5>
    
                <p class="mb-1">DonMaecenas sed diam eget risus varius blandit.</p>
        
              </a>
                </div>
              </div>
              <div id="tab2" class="tab-pane fade">
                <h3 style="margin-bottom: -1px;">Select Subscription Frequency</h3>
                <small>You are one step away from tailored help and information travelling abroad</small>
               
                <div class="row">
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-header bg-primary text-white">
                        Card 1
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Card Title 1</h5>
                        <p class="card-text">This is some sample text for Card 1.</p>
                        <a href="#" class="btn btn-primary">Pay Now</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-header bg-success text-white">
                        Card 2
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Card Title 2</h5>
                        <p class="card-text">This is some sample text for Card 2.</p>
                        <a href="#" class="btn btn-success">Pay Now</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-header bg-danger text-white">
                        Card 3
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Card Title 3</h5>
                        <p class="card-text">This is some sample text for Card 3.</p>
                        <a href="#" class="btn btn-danger">Pay Now</a>
                      </div>
                    </div>
                  </div>
              </div>
              <div id="tab3" class="tab-pane fade">
                <h2></h2>
                <div class="list-group">
                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">List group item heading</h5>
                      <small>3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    <small>Donec id elit non mi porta.</small>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">List group item heading</h5>
                      <small class="text-muted">3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    <small class="text-muted">Donec id elit non mi porta.</small>
                  </a>
                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                      <h5 class="mb-1">List group item heading</h5>
                      <small class="text-muted">3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    <small class="text-muted">Donec id elit non mi porta.</small>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Pricing -->



        <!-- Otp -->
        <!-- This is just a sample content to be shown as a modal -->
       

        <!-- Content -->

        <!-- Checkout -->

        <!-- Registration -->

        <!-- Subscription Dialog Modal-->
        <div id="subscription-prompt" style="display: none;">
          <div class="subscription-prompt mt-5 pt-5 px-5">
            <div class="">
              <h4 >Welcome to MR. Japa Opportunities</h4>
              <small>Proceed to subscribe to get the best out of Mr Japa</small>
            </div>

  
            <div class="d-flex ">
              <button class="btn btn-light mx-2 mt-5 border-dark">Close</button> <button class="btn btn-success mx-2 mt-5" id="subscribe-process">Subscribe</button>
            </div>
          </div>

        </div>
        <!-- Payment Dialog -->

        <!-- <button id="openModalButton" class="btn btn-primary">Open Modal</button> -->
        <!-- Add Bootstrap JS and jQuery script links here (you need an internet connection) -->
        <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
       
<script >
/*
 Theme Name: My Child Theme
 Template: twentytwentythree
*/
let dynamicModal;
// Function to create a modal shell with the given content and optional title
console.log(9);
function createModal(content, title = "") {
  // Create the modal element
  const modal = document.createElement("div");
  modal.classList.add("modal");
  modal.id = "dynamicModal";

  // Create the modal dialog element
  const modalDialog = document.createElement("div");
  modalDialog.classList.add("modal-dialog");

  // Create the modal content element
  const modalContent = document.createElement("div");
  modalContent.classList.add("modal-content");

  // Create the modal header element if a title is provided
  if (title) {
    const modalHeader = document.createElement("div");
    modalHeader.classList.add("modal-header");

    // Create the modal title element
    const modalTitle = document.createElement("h4");
    modalTitle.classList.add("modal-title");
    modalTitle.textContent = title;

    // Create the close button element
    const closeButton = document.createElement("button");
    closeButton.type = "button";
    closeButton.classList.add("close");
    closeButton.setAttribute("data-dismiss", "modal");
    closeButton.innerHTML = "&times;";

    // Append the title and close button to the header
    modalHeader.appendChild(modalTitle);
    modalHeader.appendChild(closeButton);

    // Append the header to the content
    modalContent.appendChild(modalHeader);
  }

  // Create the modal body element
  const modalBody = document.createElement("div");
  modalBody.classList.add("modal-body");

  // Append the content to the body
  modalBody.appendChild(content);

  // Append the body to the content
  modalContent.appendChild(modalBody);

  // Append the content to the dialog
  modalDialog.appendChild(modalContent);

  // Append the dialog to the modal
  modal.appendChild(modalDialog);

  // Add the modal to the DOM
  document.body.appendChild(modal);

  // Initialize the Bootstrap modal
  dynamicModal = new bootstrap.Modal(modal, {
    backdrop: "static", // To prevent closing the modal when clicking outside
    keyboard: false, // To prevent closing the modal with the escape key
  });

  // Show the modal
  dynamicModal.show();
}

function hideModal() {
  dynamicModal.hide();
}

</script>

<script>
    /*
 Theme Name: My Child Theme
 Template: twentytwentythree
*/
console.log("Theme Name:");
$(document).ready(function () {
  let uiRender = document.querySelector(".reg-form");
  let currentComponent;

  function renderOTPForm() {
    const formContainer = document.createElement("div");

    // Form Title
    const formTitle = document.createElement("h2");
    formTitle.textContent = "Verify Account";
    const formDetails = document.createElement("small");
    formDetails.textContent = "Please enter the otp sent to your phone number";
    formContainer.appendChild(formTitle);
    formContainer.appendChild(formDetails);

    // Form
    const form = document.createElement("form");
    form.classList.add("mt-4");
    form.addEventListener("submit", handleOTPSubmit);

    // OTP Input Slots
    const otpSlots = createOTPSlots();
    form.appendChild(otpSlots);

    // Submit Button
    const submitButton = document.createElement("button");
    submitButton.setAttribute("type", "submit");
    submitButton.classList.add("btn", "btn-success", "primary", "otp-submit");
    submitButton.textContent = "Verify Account";
    form.appendChild(submitButton);

    formContainer.appendChild(form);

    // Append the form container to the document body or any desired parent element
    return formContainer;
  }

  function createOTPSlots() {
    const otpSlotsContainer = document.createElement("div");
    otpSlotsContainer.classList.add("otp-container");

    for (let i = 1; i <= 6; i++) {
      const inputSlot = document.createElement("input");
      inputSlot.setAttribute("type", "text");
      inputSlot.setAttribute("inputmode", "numeric");
      inputSlot.setAttribute("pattern", "\\d");
      inputSlot.setAttribute("maxlength", "1");
      inputSlot.classList.add("otp-slot");
      inputSlot.setAttribute("required", "true");

      inputSlot.addEventListener("input", handleOTPInput);

      otpSlotsContainer.appendChild(inputSlot);
    }

    return otpSlotsContainer;
  }

  function handleOTPInput(event) {
    const input = event.target;
    if (input.nextElementSibling) {
      input.nextElementSibling.focus();
    }
  }

  function handleOTPSubmit(event) {
    event.preventDefault();
    const otpSlots = document.querySelectorAll(".otp-slot");
    const otpCode = Array.from(otpSlots)
      .map((slot) => slot.value)
      .join("");

    // Validate the OTP code here, and handle further logic as needed
    if (otpCode.length === 6 && /^\d+$/.test(otpCode)) {
      console.log("Valid OTP code:", otpCode);
      // Place your code to handle the valid OTP code here
    } else {
      console.log("Invalid OTP code:", otpCode);
      // Place your code to handle the invalid OTP code here, e.g., show an error message to the user
    }

    const sampleContent = document
      .getElementById("subscription-prompt")
      .cloneNode(true);
    sampleContent.style.display = "block"; // Show the cloned content
    createModal(sampleContent);
  }

  function render(ui) {
    if (currentComponent) {
      uiRender.removeChild(currentComponent);
    }

    currentComponentUI = ui();
    uiRender.appendChild(currentComponentUI);
    currentComponent = currentComponentUI;
    console.log(currentComponent);
  }
  function renderRegistrationForm() {
    const formContainer = document.createElement("div");
    formContainer.className = "registration";
    // Form Title
    const formTitle = document.createElement("h2");
    formTitle.classList.add("mb-4");
    formTitle.textContent = "User Registration";
    formContainer.appendChild(formTitle);

    // Form
    const form = document.createElement("form");

    // Email Input
    const emailFormGroup = createFormGroup(
      "email",
      "Your email",
      "email",
      "Please provide a valid email address."
    );
    form.appendChild(emailFormGroup);

    // Phone Input
    const phoneFormGroup = createFormGroup(
      "phone",
      "Phone Number",
      "phone",
      "Please provide a valid phone number."
    );
    form.appendChild(phoneFormGroup);

    // Username Input
    const usernameFormGroup = createFormGroup(
      "username",
      "Preferred Username",
      "text",
      "Please provide a valid username."
    );
    form.appendChild(usernameFormGroup);

    // Password Input
    const passwordFormGroup = createFormGroup(
      "password",
      "Password",
      "password",
      "Please provide a valid password."
    );
    form.appendChild(passwordFormGroup);

    // Confirm Password Input
    const confirmPasswordFormGroup = createFormGroup(
      "confirmPassword",
      "Confirm Password",
      "password",
      "Please confirm your password."
    );
    form.appendChild(confirmPasswordFormGroup);

    // Terms and Conditions Checkbox
    const termsCheckbox = document.createElement("div");
    termsCheckbox.classList.add("d-flex");
    termsCheckbox.innerHTML = `
        <label class="cl-checkbox">
          <input checked="" type="checkbox">
          <span></span>
        </label> 
        <span style="font-size: small;">By creating an account you are agreeing to our Terms and Conditions and Privacy Policy</span>
      `;
    form.appendChild(termsCheckbox);

    // Submit Button
    const submitButton = document.createElement("button");
    submitButton.setAttribute("type", "submit");
    submitButton.classList.add("btn", "btn-success", "primary");
    submitButton.textContent = "Register";
    form.appendChild(submitButton);

    formContainer.appendChild(form);

    // Append the form container desired parent element
    return formContainer;
  }

  function createFormGroup(inputId, label, inputType, errorMessage) {
    const formGroup = document.createElement("div");
    formGroup.classList.add("form-group");

    const labelElement = document.createElement("label");
    labelElement.setAttribute("for", inputId);
    labelElement.innerHTML = `${label} <span class="text-danger">*</span>`;
    formGroup.appendChild(labelElement);

    const inputGroup = document.createElement("div");
    inputGroup.classList.add("input-group");

    const inputElement = document.createElement("input");
    inputElement.setAttribute("type", inputType);
    inputElement.classList.add("form-control");
    inputElement.setAttribute("id", inputId);
    inputElement.setAttribute("required", "true");
    inputGroup.appendChild(inputElement);

    const invalidFeedback = document.createElement("div");
    invalidFeedback.classList.add("invalid-feedback");
    invalidFeedback.textContent = errorMessage;
    formGroup.appendChild(invalidFeedback);

    formGroup.appendChild(inputGroup);

    return formGroup;
  }

  render(renderRegistrationForm);
  // Function to handle form submission

  function handleFormSubmission(event) {
    event.preventDefault();

    // Get form input values
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;
    const agreementCheckbox = document.querySelector('input[type="checkbox"]');

    // Perform form validation
    // if (!isValidEmail(email)) {
    //   // Display error message for invalid email
    //   document.getElementById("email").classList.add("is-invalid");
    //   return;
    // } else {
    //   document.getElementById("email").classList.remove("is-invalid");
    // }

    // if (!isValidPhoneNumber(phone)) {
    //   // Display error message for invalid phone number
    //   document.getElementById("phone").classList.add("is-invalid");
    //   return;
    // } else {
    //   document.getElementById("phone").classList.remove("is-invalid");
    // }

    if (username.trim() === "") {
      // Display error message for empty username
      document.getElementById("username").classList.add("is-invalid");
      return;
    } else {
      document.getElementById("username").classList.remove("is-invalid");
    }

    if (password.trim() === "") {
      // Display error message for empty password
      document.getElementById("password").classList.add("is-invalid");
      return;
    } else {
      document.getElementById("password").classList.remove("is-invalid");
    }

    if (password !== confirmPassword) {
      // Display error message for password mismatch
      document.getElementById("confirmPassword").classList.add("is-invalid");
      return;
    } else {
      document.getElementById("confirmPassword").classList.remove("is-invalid");
    }

    if (!agreementCheckbox.checked) {
      // Display error message for agreement checkbox not checked
      alert("Please agree to the terms and conditions before proceeding.");
      return;
    }

    // If all form inputs are valid, you can submit the form here
    // Uncomment the line below to submit the form programmatically
    // event.target.submit();

    // For demonstration purposes, we'll just log the success message
    //$("#registrationModal").modal("show");
    const sampleContent = document.getElementById("k").cloneNode(true);
    sampleContent.style.display = "block"; // Show the cloned content
    createModal(sampleContent);
    console.log("Form submitted successfully!");
  }

  // Add event listener for form submission
  const registrationForm = document.querySelector("form");
  registrationForm.addEventListener("submit", handleFormSubmission);

  // // Add event lister for otp form submission
  // const phoneOTP = document.querySelector("#otp-phone");
  const emailOTP = document.querySelector("#otp-email");
  $("body").on("click", "#otp-phone", function (e) {
    e.preventDefault();
    hideModal();
    render(renderOTPForm);
  });

  $("body").on("click", "#otp-email", function (e) {
    e.preventDefault();
    hideModal();
    render(renderOTPForm);
  });

  let preferences = document.querySelector(".preferences").cloneNode(true);
  preferences.style.display = "block";
  $("body").on("click", "#subscribe-process", function (e) {
    e.preventDefault();

    uiRender.removeChild(currentComponent);
    currentComponent = preferences;
    uiRender.appendChild(currentComponent);

    hideModal();
    uiRender.firstChild.style.width = "90%";
    $("#tabLink1").click(function () {
      $(".nav-link").removeClass("active");
      $(this).addClass("active");
      $(".tab-pane").removeClass("show active");
      $("#tab1").addClass("show active");
    });

    $("#tabLink2").click(function () {
      $(".nav-link").removeClass("active");
      $(this).addClass("active");
      $(".tab-pane").removeClass("show active");
      $("#tab2").addClass("show active");
    });

    $("#tabLink3").click(function () {
      $(".nav-link").removeClass("active");
      $(this).addClass("active");
      $(".tab-pane").removeClass("show active");
      $("#tab3").addClass("show active");
    });
  });
  // Function to check if the email is valid and apply the "is-valid" class
  function validateEmail() {
    var emailInput = $("#email");
    var isValid = emailInput[0].checkValidity();

    if (isValid) {
      emailInput.addClass("is-valid");
      emailInput.removeClass("is-invalid");
    } else {
      emailInput.addClass("is-invalid");
      emailInput.removeClass("is-valid");
    }
  }

  function addGreyOutline() {
    $("input")
      .on("focus", function () {
        $(this).addClass("focused");
      })
      .on("blur", function () {
        $(this).removeClass("focused");
      });
  }

  // Trigger email validation when the input value changes
  $("#email").on("input", validateEmail);
  // toggle Password
  $("#togglePassword").on("click", function () {
    var passwordField = $("#password");
    var type = passwordField.attr("type");

    if (type === "password") {
      passwordField.attr("type", "text");
      $(this).removeClass("fa-eye-slash").addClass("fa-eye");
    } else {
      passwordField.attr("type", "password");
      $(this).removeClass("fa-eye").addClass("fa-eye-slash");
    }
  });
  addGreyOutline();

  // render the subscription modal after registration
  function triggerSubscription() {}

  // render the subscription preferences
  function renderPreferences() {
    // render content
    // render pricing
    // render checkout
  }

  function renderSubscriptionFeedback() {}
});

// oop

// [] array object
// {} a generic object


</script> -->