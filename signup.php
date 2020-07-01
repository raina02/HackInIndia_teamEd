
<?php 

session_start();

include "header.php";
include "navigation.php";
include "db.php";

?>

<?php

    if(isset($_POST["signup"])){

        if(isset($_POST["term"])){

            //first name validation
            if(isset($_POST["fname"])  && !empty($_POST["fname"])){

                $fname = $_POST["fname"];
                $lname = $_POST["lname"];

            }else{

                $fnameerror='<div class="alert alert-danger alert-dismissible fade show d-inline-block" role="alert">
                                Enter your first name
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';

            }

            //email

            if(isset($_POST["email"]) && !empty($_POST["email"])){

                $email = $_POST["email"];

                $selectquery = "select * from users where email = '$email'";
                $query = mysqli_query($connection,$selectquery);

                if(mysqli_num_rows($query) >0){
                    $emailexists = true;
                    $emailexistserror='<div class="alert alert-danger alert-dismissible fade show " role="alert">
                                            Email already exists
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>';

                }else{
                    $email = $_POST["email"];
                }


            }else{
                $emailerror='<div class="alert alert-danger alert-dismissible fade show " role="alert">
                                        Please enter your email id
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>';
            }


            //password

            if(isset($_POST["pass"]) && !empty($_POST["pass"])){

                if(strlen($_POST["pass"]) >=6){
                    
                    $password = $_POST["pass"];
                   
                }else{
                    $passworderror='<div class="alert alert-danger alert-dismissible fade show " role="alert">
                                            Enter a valid password
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>';
                }

            }else{

                $passworderror='<div class="alert alert-danger alert-dismissible fade show " role="alert">
                                        Please enter a password
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>';

            }


            

        }else{
            $termerror='<div class="alert alert-danger alert-dismissible fade show " role="alert">
                                    Please select terms and conditions
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>';
        }
        if(isset($fname) && isset($email) && isset($password)){
                
            if( isset($emailexists) && $emailexists == true){

            }else{
                $enc_password = password_hash($password,PASSWORD_BCRYPT);
                $insertquery = "insert into users (fname,lname,email,password) values  ('$fname','$lname','$email','$enc_password') "; 

                $query = mysqli_query($connection ,$insertquery);

                if($query){
                    $successmessage='<div class="alert alert-success alert-dismissible fade show " role="alert">
                                        User Created Successfully
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>';
                }else{
                    $errormessage='<div class="alert alert-danger alert-dismissible fade show " role="alert">
                                            Error creating user
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>';
                }
            }
            
        }else{
            $errormessage='<div class="alert alert-danger alert-dismissible fade show " role="alert">
                                Error creating user
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';
        }


    }

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

    <?php if(isset($successmessage)){echo $successmessage;} ?>
    <?php if(isset($errormessage)){echo $errormessage;} ?>

    <div class="group">
        <div class="form-group d-inline-block mr-3">
                <label for="fname" class="form-label">First Name:</label>
                <input type="text" class="form-control mb-2" id="exampleInputEmail1" name="fname" required style="width:180px;">
                <?php if(isset($fnameerror)){echo $fnameerror;} ?>
            
            </div>
            
            <div class="form-group d-inline-block">
                <label for="lname" class="form-label">Last Name:</label>
                <input type="text" class="form-control mb-2" id="exampleInputEmail1" name="lname" style="width:180px;">
            </div>
    </div>
        
    
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control mb-2" id="exampleInputEmail1" name="email" required>
        <?php if(isset($emailerror)){echo $emailerror;} ?>
        <?php if(isset($emailexistserror)){echo $emailexistserror;} ?>

        <label for="exampleInputPassword1" class="form-label">Password:</label>
        <input type="password" class="form-control mb-3" id="exampleInputPassword1" name="pass" title="password must be greater than or equal to 6 characters" pattern = .{6,} required>
        <?php if(isset($passworderror)){echo $passworderror;} ?>

    
        
            <div class="checkbox">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="term" <?php if(isset($_POST["term"])){echo "checked";} ?>>
                <label class="form-check-label mb-2 ml-1" for="exampleCheck1">I agree with the <a href="#" style="text-decoration:none;"> terms and conditions</a></label>    
                <?php if(isset($termerror)){echo $termerror;} ?>

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