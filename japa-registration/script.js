/*
 Theme Name: My Child Theme
 Template: twentytwentythree
*/
jQuery(document).ready(function () {
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

    console.log(
      email,
      phone,
      username,
      password,
      confirmPassword,
      agreementCheckbox
    );

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
    //jQuery("#registrationModal").modal("show");
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
  jQuery("body").on("click", "#otp-phone", function (e) {
    e.preventDefault();
    hideModal();
    render(renderOTPForm);
  });

  jQuery("body").on("click", "#otp-email", function (e) {
    e.preventDefault();
    hideModal();
    render(renderOTPForm);
  });

  jQuery("body").on("click", "#close-registration", function (e) {
    e.preventDefault();
    uiRender.removeChild(currentComponent);
    hideModal();
    window.location.href = wp_vars.base_url;
  });

  jQuery("body").on("click", "#subscribe-process", function (e) {
    e.preventDefault();
    uiRender.removeChild(currentComponent);
    hideModal();
    window.location.href = wp_vars.base_url + "/subscribe";
  });
  // Function to check if the email is valid and apply the "is-valid" class
  function validateEmail() {
    var emailInput = jQuery("#email");
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
    jQuery("input")
      .on("focus", function () {
        jQuery(this).addClass("focused");
      })
      .on("blur", function () {
        jQuery(this).removeClass("focused");
      });
  }

  // Trigger email validation when the input value changes
  jQuery("#email").on("input", validateEmail);
  // toggle Password
  jQuery("#togglePassword").on("click", function () {
    var passwordField = jQuery("#password");
    var type = passwordField.attr("type");

    if (type === "password") {
      passwordField.attr("type", "text");
      jQuery(this).removeClass("fa-eye-slash").addClass("fa-eye");
    } else {
      passwordField.attr("type", "password");
      jQuery(this).removeClass("fa-eye").addClass("fa-eye-slash");
    }
  });
  addGreyOutline();
});
