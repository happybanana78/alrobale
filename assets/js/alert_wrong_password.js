const wrong_password = document.querySelector("#alert_cs_wrong_password");
const body = document.querySelector("body");
  
wrong_password.classList.toggle("hide");

if (!wrong_password.classList.contains("hide")) {
    body.style.overflow = "hidden";
} else {
    body.style.overflow = "auto";
}

function closeAlertWrongPassword() {
    wrong_password.classList.toggle("hide");
    body.style.overflow = "auto";
}