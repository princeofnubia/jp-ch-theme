/*
 Theme Name: My Child Theme
 Template: twentytwentythree
*/
jQuery(document).ready(function () {
  const selectRelocation = document.querySelector("#select-relocation-region");
  const selectScholarship = document.querySelector("#select-scholarships");
  const selectJobsIntership = document.querySelector("#select-jobs-internship");
  const subscriptionOption = document.querySelectorAll(".subscription-option");
  const removeSubscription = document.querySelectorAll(".remove-subscription");
  const editSubscription = document.querySelectorAll(".edit-subscription");
  const editPreference = document.querySelector("#edit-preference");
  const selectPrograms = document.querySelector("#select-programs");
  const subNext = document.querySelector("#sub-next");
  const modalComponent = {};
  const tab1 = document.querySelector("#tabLink1");
  const tab2 = document.querySelector("#tabLink2");
  const tab3 = document.querySelector("#tabLink3");
  const tabContent1 = document.querySelector("#tab1");
  const tabContent2 = document.querySelector("#tab2");
  const tabContent3 = document.querySelector("#tab3");
  let currentTab = "#tab1";
  let currentTbH = "#tabLink1";
  function subscribe(param) {
    subscriptionPlan();
  }

  editPreference.addEventListener("click", toggleEdit);

  removeSubscription.forEach((ele) => {
    ele.addEventListener("click", () => {
      let id = "subscription-" + ele.dataset.preference;
      document.getElementById(id).classList.add("hidden");
    });
  });
  editSubscription.forEach((ele) => {
    ele.addEventListener("click", () => {
      let id = "subscription-" + ele.dataset.preference;
      showSelectModal(ele.dataset.preference);
    });
  });
  subscriptionOption.forEach((ele) => {
    ele.addEventListener("click", checkout);
  });

  selectRelocation.addEventListener("click", () => {
    showSelectModal("relocation-region");
  });
  selectScholarship.addEventListener("click", () => {
    showSelectModal("scholarships");
  });
  selectJobsIntership.addEventListener("click", () => {
    showSelectModal("jobs-internship");
  });
  selectPrograms.addEventListener("click", () => {
    showSelectModal("programs");
  });
  subNext.addEventListener("click", () => {
    subscriptionPlan();
  });

  function toggleEdit() {
    let prefs = document.querySelectorAll("[data-edit]");
    prefs.forEach(function (pref) {
      if (pref.classList.contains("hidden")) {
        pref.classList.remove("hidden");
      } else {
        pref.classList.add("hidden");
      }
    });
  }

  function showSelectModal(id) {
    if (id in modalComponent) {
      createModal(modalComponent[id]);
      return;
    }
    const sampleContent = document.getElementById(id).cloneNode(true);
    modalComponent[id] = sampleContent;
    modalComponent[id].style.display = "block"; // Show the cloned content
    createModal(modalComponent[id]);
  }
  const content = () => {
    resetTab();
    if (currentTab === "#tab1") {
      return;
    }
    let currentTb = document.querySelector(currentTab);
    let currentTbh = document.querySelector(currentTbH);
    currentTb.classList.remove("active");
    currentTbh.classList.remove("active");
    currentTb.classList.remove("show");
    let newTab = document.querySelector("#tab1");
    let newTbh = document.querySelector("#tabLink1");
    newTbh.classList.add("active");
    newTab.classList.add("active");
    newTab.classList.add("show");
    currentTab = "#tab1";
    currentTbH = "#tabLink1";
  };
  function subscriptionPlan() {
    resetTab();
    if (currentTab === "#tab2") {
      return;
    }
    let currentTb = document.querySelector(currentTab);
    let currentTbh = document.querySelector(currentTbH);
    currentTb.classList.remove("active");
    currentTbh.classList.remove("active");
    currentTb.classList.remove("show");
    let newTab = document.querySelector("#tab2");
    let newTbh = document.querySelector("#tabLink2");
    newTbh.classList.add("active");
    newTab.classList.add("active");
    newTab.classList.add("show");
    currentTab = "#tab2";
    currentTbH = "#tabLink2";
  }
  function checkout() {
    renderPaymentUI();
    if (currentTab === "#tab3") {
      return;
    }

    let currentTb = document.querySelector(currentTab);
    let currentTbh = document.querySelector(currentTbH);
    currentTb.classList.remove("active");
    currentTbh.classList.remove("active");
    currentTb.classList.remove("show");
    let newTab = document.querySelector("#tab3");
    let newTbh = document.querySelector("#tabLink3");
    newTbh.classList.add("active");
    newTab.classList.add("active");
    newTab.classList.add("show");
    currentTab = "#tab3";
    currentTbH = "#tabLink3";
  }

  tab1.addEventListener("click", content);
  tab2.addEventListener("click", subscriptionPlan);
  tab3.addEventListener("click", checkout);

  function renderPaymentUI() {
    // Create a Bootstrap card
    const cardDiv = document.createElement("div");
    cardDiv.classList.add("card", "mt-5", "payment-card");

    const cardBodyDiv = document.createElement("div");
    cardBodyDiv.classList.add("card-body");

    const h2Element = document.createElement("h2");
    h2Element.classList.add("card-title");
    h2Element.textContent = "Payment Details";

    const formElement = document.createElement("form");
    formElement.id = "paymentForm";

    const labelElement = document.createElement("label");
    labelElement.classList.add("cl-checkbox");

    // Create checkbox input element with "checked" attribute
    const checkboxInput = document.createElement("input");
    checkboxInput.type = "checkbox";
    checkboxInput.checked = true; // Checked attribute
    //   checkboxInput.classList.add(""); // Add any classes you want here

    // Create the span element
    const spanElement = document.createElement("span");
    spanElement.textContent =
      "By subscribing to MrJapa you are agreeing to our Subscription policiey, Terms and Conditions and Privacy Policy.";
    // Append checkbox and span elements to the label
    labelElement.appendChild(checkboxInput);
    labelElement.appendChild(spanElement);

    const buttonElement = document.createElement("button");
    buttonElement.type = "button";
    buttonElement.classList.add("btn", "btn-primary", "mt-3");
    buttonElement.id = "paymentButton";
    buttonElement.textContent = "Make Payment";

    // Append elements

    formElement.appendChild(labelElement);
    formElement.appendChild(buttonElement);

    cardBodyDiv.appendChild(h2Element);
    cardBodyDiv.appendChild(formElement);

    cardDiv.appendChild(cardBodyDiv);

    // Attach event listener to the button
    buttonElement.addEventListener("click", function () {
      const termsCheckbox = document.getElementById("termsCheckbox");

      if (termsCheckbox.checked) {
        alert("Payment successful!");
      } else {
        alert(
          "Please accept the terms and conditions to proceed with the payment."
        );
      }
    });
    const container = document.querySelector(".col-img-2");
    container.classList.remove("col-img-2");
    container.classList.add("col-pay");
    container.appendChild(cardDiv);
  }

  function resetTab() {
    const container = document.querySelector(".col-pay");
    const paymentCard = document.querySelector(".payment-card");
    if (container !== null) {
      container.classList.add("col-img-2");
      container.classList.remove("col-pay");
      container.removeChild(paymentCard);
    }
  }
});
