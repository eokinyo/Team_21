function validateFirstName() {
const firstName = document.getElementById("first_name").value;
const firstNameError = document.getElementById("firstNameError")
if(firstName.length < 3 || firstName.length > 20) {
    firstNameError.innerHTML = "Name must be between 2 & 20 characters."
    return false
}else {
    firstNameError.innerHTML = ""
    return true
}
}
function validateLastName() {
const lastName = document.getElementById("last_name").value
const lastNameError = document.getElementById("lastNameError")
if(lastName.length < 3 || lastName.length > 20) {
    lastNameError.innerHTML = "Last name must be between 2 & 20 characters."
    return false;
}else {
    lastNameError.innerHTML = ""
    return true;
}
}
function validateEmail() {
const email = document.getElementById("email").value
const emailError = document.getElementById("emailError")
if(email ==="" || !email.includes("@")) {
    emailError.innerHTML = "Your email must include @."
    return false
}else {
    emailError.innerHTML = ""
    return true
}
}
function validateMessage() {
const message = document.getElementById("message").value
const messageError = document.getElementById("messageError")
if (message.length < 10){
    messageError.innerHTML =  "Your message must be at least 10 characters!"
    return false
}else {
    messageError.innerHTML=""
    return true
}
}
//event listeners
document.getElementById("first_name").addEventListener("input", validateFirstName)
document.getElementById("last_name").addEventListener("input", validateLastName)
document.getElementById("email").addEventListener("input", validateEmail)
document.getElementById("message").addEventListener("input", validateMessage)

        