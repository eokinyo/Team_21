<?php 
$title = "Sign-up form";
include_once '../outline/header.php'; ?>
<br>
<br>
<h2>Please provide the following information to sign up for my weekly content</h2>
<div class="col-md-12 text-center">
    <div class= "signUp">
        <form name="signUpForm" method="post" action="process.php">
            <div class="form-group row-container">
                <div class="row">
                    <div class="col-md-6">
                        <label for="fname">First Name:</label>
                        <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname" required minlength="3">
                        <span id="fnameError"></span>
                    </div>
                    <div class="col-md-6">
                        <label for="lname">Last Name:</label>
                        <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="lname" required minlength="3">
                        <span id="lnameError"></span>
                    </div>
                </div>
            </div>
            <div class="form-group row-container">
                <div class="row">
                    <div class="col-md-6">
                        <label for="email">Email Address:</label>
                        <input type="text" class="form-control" id="email" placeholder="Your email address" name="email" required>
                        <span id="emailError"></span>
                    </div>
                    <div class="col-md-6">
                        <label for="occupation">Occupation:</label>
                        <input type="text" class="form-control" id="occupation" placeholder="Your occupation?" name="occupation" minlength="2">
                        <span id="occupationError"></span>
                    </div>
                </div>
            </div>
            <div class="form-group row-container">
                <div class="row">
                    <div class="col-md-6">
                        <label for="consent">Consent:</label>
                        <select class="form-control" id="consent" name="consent" required>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            <span id="consentError"></span>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary" name="signUpSubmit">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
</div>


<script>
    //Function to validate first name
    function validateFname(){
        const fname = document.getElementById("fname").value;
        const fnameError = document.getElementById("fnameError");

        if (fname.length < 3){
            fnameError.innerHTML = "The first name must have a minimum of three characters";
            return false;
        }
        else{
            fnameError.innerHTML = "";
            return true;
        }
    }
    //Function to validate last name
    function validateLname(){
        const lname = document.getElementById("lname").value;
        const lnameError = document.getElementById("lnameError");

        if (lname.length < 3){
            lnameError.innerHTML = "The last name must have a minimum of three characters";
            return false;
        }
        else{
            lnameError.innerHTML = "";
            return true;
        }
    }
    //Function to validate email
    function validateEmail(){
        const email = document.getElementById("email").value;
        const emailError = document.getElementById("emailError");
        if (email === "" || !email.includes("@")){
            emailError.innerHTML = "Please enter a valid email address";
            return false;
        }
        else{
            emailError.innerHTML = "";
            return true;
        }
    }
    //Function to validate occupation
    function validateOccupation(){
        const occupation = document.getElementById("occupation").value
        const occupationError = document.getElementById("occupationError");
        if (occupation.length < 2){
            occupationError.innerHTML = "Please enter a valid occupation"
            return false;
        }
        else{
            occupationError.innerHTML = ""
            return true;
        }
    }
    //Function to validate consent
    function validateConsent(){
        const consent = document.getElementById("consent").value
    }

//Event listeners for real time validation
document.getElementById("fname").addEventListener("input", validateFname);
document.getElementById("lname").addEventListener("input", validateLname);
document.getElementById("email").addEventListener("input", validateEmail);
document.getElementById("occupation").addEventListener("input", validateOccupation);
document.getElementById("consent").addEventListener("input", validateConsent);
</script>
<?php include_once '../outline/footer.php'; ?>