<?php 
$title = "Personal Portfolio";
include '../outline/header.php'; ?>
<br>
<br>
<h2>Please provide the following information to sign up for my weekly content</h2>
<form name="signUpForm" method="post" action="process.php">
    <div class="form-group row-container">
        <div class="row">
            <div class="col-md-6">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname" required>
            </div>
            <div class="col-md-6">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="lname" required>
            </div>
        </div>
    </div>
    <div class="form-group row-container">
        <div class="row">
            <div class="col-md-12">
                <label for="email">Email Address:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter your email address" name="email" required>
            </div>
        </div>
    </div>
    <div class="form-group row-container">
        <div class="row">
            <div class="col-md-6">
                <label for="occupation">Occupation:</label>
                <input type="text" class="form-control" id="occupation" placeholder="What is your occupation?" name="occupation">
            </div>
            <div class="col-md-6">
                <label for="consent">Consent:</label>
                <select class="form-control" id="consent" name="consent" placeholder="Do you give consent for me to keep your contact details and share with you my articles regularly?" required>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
<?php include '../outline/footer.php'; ?>