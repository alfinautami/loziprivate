// Show Password and Repeat Password
function showRepeatPassword() {
  let pass = document.getElementById("showRepeatPass");
  if (pass.type === "password") {
    pass.type = "text";
  } else {
    pass.type = "password";
  }
}

function showPassword() {
  let password = document.getElementById("password");
  if (password.type === "password") {
    password.type = "text";
  } else {
    password.type = "password";
  }
}

// Activated Off Canvas
const offcanvasElementList = document.querySelectorAll(".offcanvas");
const offcanvasList = [...offcanvasElementList].map(
  (offcanvasEl) => new bootstrap.Offcanvas(offcanvasEl)
);
