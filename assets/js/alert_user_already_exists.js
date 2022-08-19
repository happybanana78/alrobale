const user_already_exists = document.querySelector("#alert_cs_user_already_exists");
const body = document.querySelector("body");
  
user_already_exists.classList.toggle("hide");

if (!user_already_exists.classList.contains("hide")) {
    body.style.overflow = "hidden";
} else {
    body.style.overflow = "auto";
}

function closeAlertUserAlreadyExists() {
    user_already_exists.classList.toggle("hide");
    body.style.overflow = "auto";
}