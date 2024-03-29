<?php 

$title = "Feed back";
include '../outline/header.php'; ?><br><br>


<h2>"Project Review Feedback Form: Let Us Know Your Thoughts!"</h2><br><br><br><br>

<form name="form1" method="post" action="process.php">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="projectid">Project_ID</label>
                
                <select class="form-control" id="projectid" name="projectid">
                <option value="-">-</option><br>
                    <option value="Project01">Project 01</option><br>
                    <option value="Project02">Project 02</option><br>
                    <option value="Project03">Project 03</option><br>
                    <option value="Project04">Project 04</option><br>
                    <option value="Others">Others</option><br>
                </select>

            </div><br><br><br>

            <div class="col">
                <label for="name">User Name:</label>
                <input type="text" name="name" required minlength="4" maxlength="20" id="name"><br>
<span id="nameError"></span>

                <script>
    // function to validate name
    function validateName()
{
    const name=document.getElementById("name").value;
    const nameError=document.getElementById("nameError");

    if(name.length <4 || name.length>20)
    {
        nameError.innerHTML="Name must be between 4 & 20 characters";
        return false;

    }
    else{

        nameError.innerHTML="";
        return true;
    }

}


// event listeners for real time validation'
document.getElementById("name").addEventListener("input", validateName);

</script>
            </div><br>


            <div class="col">
                <label for="email">User E-mail:</label>
                <input type="text" name="email" required minlength="5" maxlength="30" id="email"><br>
<span id="emailError"></span>


                <script>
    // function to validate E-mail
        function validateEmail()
{
    const email= document.getElementById("email").value;
    const emailError= document.getElementById("emailError");

    if(email === "" || !email.includes("@"))
    {
        emailErrorError.innerHTML = "Please enter valied E-mail";
        return false;

    }
    else{

        emailError.innerHTML = "";
        return true;
    }

}


// event listeners for real time validation'
document.getElementById("email").addEventListener("input", validateEmail);

</script>
            </div><br>





        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="city">Progress:</label>
                <select class="form-control" id="progress" name="progress">
                <option value="-">-</option><br>
                    <option value="Pending">Pending</option><br>
                    <option value="Ongoing">Ongoing</option><br>
                    <option value="Completed">Completed</option><br>
                    <option value="Others">Others</option><br>
                </select>
                
            </div><br>

            <div class="col">
                <label for="comments">comments:</label>
                <input type="text" class="form-control" id="comments" placeholder="Enter your comments" name="comments" required>
                
            </div>
        </div>
    </div><br>

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                      
    
</form><br><br>


<?php include '../outline/footer.php'; ?>