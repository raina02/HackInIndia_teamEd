
<?php 

    include "header.php";
    include "navigation.php";

?>

<style>
    body{
        background:#efefef;
    }
    .form{
        width:450px;
        margin:3em auto;
        background:white;
        box-shadow:0px 4px 8px rgba(0,0,0,0.2);
    }
    .login-btn button{
        padding:0.5em 2em;
    }
    .line-div{
        justify-content:space-between;
    }
</style>

<div class="conatiner form-group">
    <div class="form px-5 py-4">
        <div class="heading">
            <h2 class="display-5 text-center">Login</h2>
        </div>
        <form action="" method="post">
        
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control mb-2" id="exampleInputEmail1" name="email" placeholder="Email">
            
        
            <label for="exampleInputPassword1" class="form-label">Password:</label>
            <input type="password" class="form-control mb-3" id="exampleInputPassword1" name="password" placeholder="Password">
        
        
            <div class="line-div d-flex ">
                <div class="checkbox">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label mb-2" for="exampleCheck1">Remember Me</label>    
                </div>
                <div class="forgot mr-2">
                    <a href="#" class="" style="text-decoration:none;">forgot password</a>
                </div>
            </div>

            <div class="login-btn ght mt-2 mb-2">
                <button type="submit" class="btn btn-primary " name="login">Login</button>
            </div>
            <hr>
            <h4 class="d-block text-center mb-3" >Don't have an account?</h4>
            <div class="text-center"><a href="signup.php" class="btn text-black" style="padding:0.5em 3em;color:black;background:#cccccc"><h4 style="font-weight:normal">Register</h4></a></div>
            <!-- <div class="text">
                <p class="d-inline"><b>Don't have an account?</b></p><a href="signup.php" class="ml-1">signup</a>
            </div> -->
            
        </form>
    </div>
    
</div>

<script>
    const login = document.querySelector(".login")
    login.classList.add("active")
</script>

<?php

    include "footer.php";

?>