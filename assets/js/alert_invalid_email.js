const invalid_email = document.querySelector("#alert_cs_invalid_email");
const body = document.querySelector("body");
  
invalid_email.classList.toggle("hide");

if (!invalid_email.classList.contains("hide")) {
    body.style.overflow = "hidden";
} else {
    body.style.overflow = "auto";
}

function closeAlertInvalidEmail() {
    invalid_email.classList.toggle("hide");
    body.style.overflow = "auto";
}