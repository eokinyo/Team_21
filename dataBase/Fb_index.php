<?php 
$title = "Feed Back";

include '<div class="">
<outline>header.php' ?>


<h2>Project Feedback:</h2>
<form name="form1" method="post" action="process.php">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="fname">Project ID:</label>
                <input type="text" class="form-control" id="User_id" placeholder="Enter your ProjectID" name="ProjectID" required>
            </div><br>

            <div class="col">
                <label for="lname">User Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required>
            </div>
        </div>
    </div><br>

    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="city">Comments:</label>
                <input type="text" class="form-control" id="Comments" placeholder="Comments" name="Comments" required>
            </div><br>

            <div class="col">
                <label for="groupid">Status:</label>
                <select class="form-control" id="groupid" name="groupid">
                    <option value="Pending">Pending</option>
                    <option value="Ongoing">Ongoing</option>
                    <option value="Completed">Completed</option>
                    <option value="Approved">Approved</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>
    </div><br><br>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<?php
include '../footer.php' ?>