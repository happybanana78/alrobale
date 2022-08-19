const bad_access = document.querySelector("#alert_cs_bad_access");
const body = document.querySelector("body");
  
bad_access.classList.toggle("hide");

if (!bad_access.classList.contains("hide")) {
    body.style.overflow = "hidden";
} else {
    body.style.overflow = "auto";
}

function closeAlertBadAccess() {
    bad_access.classList.toggle("hide");
    body.style.overflow = "auto";
}