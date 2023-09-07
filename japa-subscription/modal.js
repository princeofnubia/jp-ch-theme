let dynamicModal;
// Function to create a modal shell with the given content and optional title

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

// handling preferences

let preferences = {
  "relocation-region": new Set(),
  scholarships: new Set(),
  programs: new Set(),
  "jobs-internship": new Set(),
};

// Event handler function
function handlePreference(event) {
  // Access the clicked element's data attributes
  const preference = event.target.dataset.preference;
  const value = event.target.dataset.value;
  if (event.target.classList.contains("bg-success")) {
    event.target.classList.remove("bg-success");
    event.target.classList.add("bg-light");
    event.target.classList.add("text-dark");
    event.target.classList.remove("text-light");
    preferences[preference].delete(value);
    if (preferences[preference].size == 0) {
      document
        .getElementById("select-" + preference)
        .classList.remove("outline-green");
    }
    return;
  }
  if (!event.target.classList.contains("bg-success")) {
    event.target.classList.remove("bg-light");
    event.target.classList.add("bg-success");
    event.target.classList.remove("text-dark");
    event.target.classList.add("text-light");
    preferences[preference].add(value);
    document
      .getElementById("select-" + preference)
      .classList.add("outline-green");
  }

  // Perform actions based on the data
  console.log(`Preference: ${preference}, Value: ${value}`);
}

function cancelSelection(param) {
  preferences[param] = new Set();
  document
    .querySelectorAll(`[data-preference=${param}`)
    .forEach(function (event) {
      event.classList.add("bg-light");
      event.classList.remove("bg-success");
      event.classList.add("text-dark");
      event.classList.remove("text-light");
    });
  document.getElementById("select-" + param).classList.remove("outline-green");
}
