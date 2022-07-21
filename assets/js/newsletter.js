function transferEmailValue(input) {
    let postInput = document.getElementById("email_input");
    let sendBtn = document.getElementById("email_send_btn");
    
    postInput.value = input;

    sendBtn.click();
}