
<?php 

include "header.php";
include "navigation.php";

?>

<style>
body{
    background:#efefef;
}
.form{
    width:500px;
    margin:4em auto;
    background:white;
    box-shadow:0px 4px 8px rgba(0,0,0,0.2);
}
.login-btn button{
    padding:0.5em 2em;
}

</style>

<div class="conatiner form-group">
<div class="form px-5 py-3">
    <div class="heading mb-3">
        <h2 class="display-6 text-center">Register</h2>
    </div>
    <form action="" method="post">
    
    <div class="group">
        <div class="form-group d-inline-block mr-3">
                <label for="fname" class="form-label">First Name:</label>
                <input type="text" class="form-control mb-2" id="exampleInputEmail1" name="fname" required style="width:190px;">
            </div>
            
            <div class="form-group d-inline-block">
                <label for="lname" class="form-label">Last Name:</label>
                <input type="text" class="form-control mb-2" id="exampleInputEmail1" name="lname" style="width:190px;">
            </div>
    </div>
        
    
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control mb-2" id="exampleInputEmail1" name="email" required>
            

        <label for="exampleInputPassword1" class="form-label">Password:</label>
        <input type="password" class="form-control mb-3" id="exampleInputPassword1" name="password" required>
    
    
        
            <div class="checkbox">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label mb-2 ml-1" for="exampleCheck1">I agree with the <a href="#" style="text-decoration:none;"> terms and conditions</a></label>    
            </div>
            

        <div class="login-btn ght mt-2 mb-2">
            <button type="submit" class="btn btn-primary " name="signup">Login</button>
        </div>
        <div class="text">
            <p class="d-inline"><b>Already have an account?</b></p><a href="login.php" class="ml-1">login</a>
        </div>
        
    </form>
</div>

</div>

<script>
    const signup = document.querySelector(".signup")
    signup.classList.add("active")
</script>

<?php

include "footer.php";

?>