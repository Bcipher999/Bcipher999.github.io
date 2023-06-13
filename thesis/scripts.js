// Get the modal element
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var reservationBtn = document.getElementById("reservationBtn");

// Get the close button element
var closeButton = document.getElementsByClassName("close")[0];

// Function to open the modal
function openModal() {
  modal.style.display = "block";
}

// Function to close the modal
function closeModal() {
  modal.style.display = "none";
}

// Event listener for the "Make a Reservation" button
reservationBtn.addEventListener("click", openModal);

// Event listener for the close button
closeButton.addEventListener("click", closeModal);

// Event listener for form submission
document.getElementById("reservationForm").addEventListener("submit", function(event) {
  // Prevent the default form submission behavior
  event.preventDefault();

  // Close the modal after submitting the form
  closeModal();

  // Show a confirmation message
  alert("Reservation submitted successfully!");
});
    