<?php

    include "header.php";
    include "loginnav.php";

?>
<style>
    body{
        background:#efefef;
    }
    .change-password{
        width:470px;
        background:white;
        box-shadow:0px 4px 8px rgba(0,0,0,0.2);
    }
</style>

<div class="change-password m-auto my-5 p-2 px-5">
    <div class="title text-center my-2"><h3 style="" class="display-6  px-3  d-inline">Change Password</h3></div>
        <div class="form-group">
            <form action="" method="post">
                <label class="form-label">Current Password:</label>
                <input type="password" class="form-control mb-2" name="currentpassword">
                <?php if(isset($passworderror)){echo $passworderror;}?> 
                <?php if(isset($errorpassmessage)){echo $errorpassmessage;}?>

                <label class="form-label">New Password:</label>
                <input type="password" class="form-control mb-2" pattern=".{6,}" name="newpassword" title="please fill greater than 6 characters">
                <?php if(isset($nullerror)){echo $nullerror;}?>
                
                <label class="form-label">Confirm Password:</label>
                <input type="password" class="form-control mb-2" name="newconfirmpassword">
                <?php  if(isset($confirmpasserror)){echo $confirmpasserror;}?>

                <div class="button text-center">
                    <button type="submit" class="btn btn-primary my-2" name="changepassword">Change Password</button>
                </div>   
            </form>
        </div>
    </div>
</div>
<?php

    include "footer.php";

?>