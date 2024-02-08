<h2>Input Your Information Below:</h2>
<form name="signUpForm" method="post" action="process.php">
    <div class="signUpForm">
        <div class="row">
            <div class="col">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname" required>
            </div>
            <div class="col">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="lname" required>
            </div>
        </div>
    </div>
    <div class="signUpForm">
        <div class="row">
            <div class="col">
                <label for="email">Email Address:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter your email address" name="email" required>
            </div>
            <div class="col">
                <label for="lname">Interests:</label>
                <input type="text" class="form-control" id="interests" placeholder="Please list some of your interests here" name="interests" required>
            </div>
        </div>
    </div>
    <div class="form-group">
    <div class="col">
                <label for="frequency">Frequency preference:</label>
                <select class="form-control" id="frequency" name="frequency" placeholder="How often should I contact you?">
                    <option value="Weekly">Weekly</option>
                    <option value="Monthly">Monthly</option>
                    <option value="Yearly">Yearly</option>
                    <option value="Never">Never</option>
                </select>
            </div>
            <div class="col">
                <label for="location">Location:</label>
                <select class="form-control" id="location" name="location" placeholder="Where are you from?">
                    <option value="Africa">Africa</option>
                    <option value="Asia">Asia</option>
                    <option value="Europe">Europe</option>
                    <option value="North America">North America</option>
                    <option value="Oceanic">Oceanic</option>
                    <option value="South America">South America</option>
                    <option value="Prefer not to say">Prefer not to say</option>
                </select>
            </div>
        </div>
    </div>
    <div class="signUpForm">
        <div class="row">
            <div class="col">
                <label for="occupation">Occupation:</label>
                <input type="text" class="form-control" id="fname" placeholder="What is your occupation?" name="fname">
            </div>
            <div class="col">
                <label for="suggestions">Suggestions:</label>
                <input type="text" class="form-control" id="lname" placeholder="Please enter any suggestions of content you'd like me to cover" name="lname" required>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>