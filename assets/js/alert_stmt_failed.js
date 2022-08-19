const stmt_failed = document.querySelector("#alert_cs_stmt_failed");
const body = document.querySelector("body");
  
stmt_failed.classList.toggle("hide");

if (!stmt_failed.classList.contains("hide")) {
    body.style.overflow = "hidden";
} else {
    body.style.overflow = "auto";
}

function closeAlertStmtFailed() {
    stmt_failed.classList.toggle("hide");
    body.style.overflow = "auto";
}