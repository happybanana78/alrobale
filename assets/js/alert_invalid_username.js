const invalid_username = document.querySelector("#alert_cs_invalid_username");
const body = document.querySelector("body");
  
invalid_username.classList.toggle("hide");

if (!invalid_username.classList.contains("hide")) {
    body.style.overflow = "hidden";
} else {
    body.style.overflow = "auto";
}

function closeAlertInvalidUsername() {
    invalid_username.classList.toggle("hide");
    body.style.overflow = "auto";
}