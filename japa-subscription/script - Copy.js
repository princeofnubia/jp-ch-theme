// Wrap your code in a function to avoid polluting the global scope
(function () {
  // Define your constants
  const selectRelocation = document.querySelector("#select-relocation-region");
  const selectScholarship = document.querySelector("#select-scholarship");
  const selectJobsIntership = document.querySelector("#select-jobs-internship");
  const selectPrograms = document.querySelector("#select-programs");

  const tabs = {
    tab1: {
      link: document.querySelector("#tabLink1"),
      content: document.querySelector("#tab1"),
    },
    tab2: {
      link: document.querySelector("#tabLink2"),
      content: document.querySelector("#tab2"),
    },
    tab3: {
      link: document.querySelector("#tabLink3"),
      content: document.querySelector("#tab3"),
    },
  };

  let currentTab = tabs.tab1;

  // Function to show select modal
  function showSelectModal(id) {
    const sampleContent = document.getElementById(id).cloneNode(true);
    sampleContent.style.display = "block";
    createModal(sampleContent);
  }

  // Event listeners for select options
  selectRelocation.addEventListener("click", () => {
    showSelectModal("relocation-region");
  });
  selectScholarship.addEventListener("click", () => {
    showSelectModal("scholarship");
  });
  selectJobsIntership.addEventListener("click", () => {
    showSelectModal("jobs-internship");
  });
  selectPrograms.addEventListener("click", () => {
    showSelectModal("programs");
  });

  // Function to reset tabs
  function resetTab() {
    const container = document.querySelector(".col-pay");
    const paymentCard = document.querySelector(".payment-card");
    if (container !== null) {
      container.classList.add("col-img-2");
      container.classList.remove("col-pay");
      container.removeChild(paymentCard);
    }
  }

  // Function to handle tab switching
  function switchTab(newTab) {
    resetTab();
    if (currentTab === newTab) {
      return;
    }
    currentTab.link.classList.remove("active");
    currentTab.link.classList.remove("show");
    newTab.link.classList.add("active");
    newTab.link.classList.add("show");
    currentTab = newTab;
  }

  // Event listeners for tab switching
  tabs.tab1.link.addEventListener("click", () => {
    switchTab(tabs.tab1);
  });
  tabs.tab2.link.addEventListener("click", () => {
    switchTab(tabs.tab2);
  });
  tabs.tab3.link.addEventListener("click", () => {
    switchTab(tabs.tab3);
  });

  // Function to render payment UI
  function renderPaymentUI() {
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
    checkboxInput.checked = true;

    // Create the span element
    const spanElement = document.createElement("span");
    spanElement.textContent =
      "By subscribing to MrJapa you are agreeing to our Subscription policy, Terms and Conditions, and Privacy Policy.";

    // Append checkbox and span elements to the label
    labelElement.appendChild(checkboxInput);
    labelElement.appendChild(spanElement);

    const buttonElement = document.createElement("button");
    buttonElement.type = "button";
    buttonElement.classList.add("btn", "btn-primary", "mt-3");
    buttonElement.id = "paymentButton";
    buttonElement.textContent = "Make Payment";

    // Append elements to the form
    formElement.appendChild(labelElement);
    formElement.appendChild(buttonElement);

    // Append elements to the card
    cardBodyDiv.appendChild(h2Element);
    cardBodyDiv.appendChild(formElement);

    cardDiv.appendChild(cardBodyDiv);

    // Attach event listener to the button
    buttonElement.addEventListener("click", function () {
      const termsCheckbox = document.querySelector('input[type="checkbox"]');

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

  // Initialize the default tab
  switchTab(tabs.tab1);

  // You can add more code here as needed
})();
