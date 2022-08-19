const something_went_wrong = document.querySelector("#alert_cs_something_went_wrong");
const body = document.querySelector("body");
  
something_went_wrong.classList.toggle("hide");

if (!something_went_wrong.classList.contains("hide")) {
    body.style.overflow = "hidden";
} else {
    body.style.overflow = "auto";
}

function closeAlertSomethingWentWrong() {
    something_went_wrong.classList.toggle("hide");
    body.style.overflow = "auto";
}