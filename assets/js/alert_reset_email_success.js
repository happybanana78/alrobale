const reset_email_success = document.querySelector("#alert_cs_reset_email_success");
const body = document.querySelector("body");
  
reset_email_success.classList.toggle("hide");

if (!reset_email_success.classList.contains("hide")) {
    body.style.overflow = "hidden";
} else {
    body.style.overflow = "auto";
}

function closeAlertResetEmailSuccess() {
    reset_email_success.classList.toggle("hide");
    body.style.overflow = "auto";
}