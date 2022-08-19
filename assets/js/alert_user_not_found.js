const user_not_found = document.querySelector("#alert_cs_user_not_found");
const body = document.querySelector("body");
  
user_not_found.classList.toggle("hide");

if (!user_not_found.classList.contains("hide")) {
    body.style.overflow = "hidden";
} else {
    body.style.overflow = "auto";
}

function closeAlertUserNotFound() {
    user_not_found.classList.toggle("hide");
    body.style.overflow = "auto";
}