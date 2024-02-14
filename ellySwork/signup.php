<?php 
$title = "Sign-up form";
include_once '../outline/header.php'; ?>
<br>
<br>
<h2>Please provide the following information to sign up for my weekly content</h2>
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
            <div class="col-md-12">
                <label for="email">Email Address:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter your email address" name="email" required>
                <span id="emailError"></span>
            </div>
        </div>
    </div>
    <div class="form-group row-container">
        <div class="row">
            <div class="col-md-6">
                <label for="occupation">Occupation:</label>
                <input type="text" class="form-control" id="occupation" placeholder="What is your occupation?" name="occupation" minlength="7">
                <span id="occupationError"></span>
            </div>
            <div class="col-md-6">
                <label for="consent">Consent:</label>
                <select class="form-control" id="consent" name="consent" required>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    <span id="consentError"></span>
                </select>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" name="signUpSubmit">Submit</button>
</form>

<script>
    //Function to validate first name
    function validateFname(){
        const fname = document.getElementById("fname").value;
        const fnameError = document.getElementById("fnameError");

        if (fname.length < 3){
            fnameError.innerHTML = "The name must have a minimum of three characters";
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
    }
    //Function to validate email
    function validateEmail(){
        const email = document.getElementById("email").value;
    }
    //Function to validate occupation
    function validateOccupation(){
        const occupation = document.getElementById("occupation").value
    }
    //Function to validate consent
    function validateConsent(){
        const consent = document.getElementById("consent").value
    }

//Event listeners for real time validation
document.getElementById("fname").addEventListener("input", validateFname);
document.getElementById("lname").addEventListener("input", validateLname);
document.getElementById("email").addEventListener("input", validateFname);
document.getElementById("occupation").addEventListener("input", validateEmail);
document.getElementById("consent").addEventListener("input", validateConsent);
</script>
<?php include_once '../outline/footer.php'; ?>