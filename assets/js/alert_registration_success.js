const registration_success = document.querySelector("#alert_cs_registration_success");
const body = document.querySelector("body");
  
registration_success.classList.toggle("hide");

if (!registration_success.classList.contains("hide")) {
    body.style.overflow = "hidden";
} else {
    body.style.overflow = "auto";
}

function closeAlertRegistrationSuccess() {
    registration_success.classList.toggle("hide");
    body.style.overflow = "auto";
}