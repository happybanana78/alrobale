const password_reset_success = document.querySelector("#alert_cs_password_reset_success");
const body = document.querySelector("body");
  
password_reset_success.classList.toggle("hide");

if (!password_reset_success.classList.contains("hide")) {
    body.style.overflow = "hidden";
} else {
    body.style.overflow = "auto";
}

function closeAlertPasswordResetSuccess() {
    password_reset_success.classList.toggle("hide");
    body.style.overflow = "auto";
}