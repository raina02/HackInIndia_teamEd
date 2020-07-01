<?php

    include "header.php";
    include "loginnav.php";

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
        <h2 class="display-6 text-center">Personal Details</h2>
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
            
        <div class="form-group mb-2">
            <label for="gender" class="form-label p-0 m-0 d-block mt-2">Gender:</label>
            
            <input type="radio" class="form-check-input" checked name="gender">
            <label for="male">Male</label>
            
            <input type="radio" class="form-check-input" name="gender">
            <label for="male">Female</label>
            
            <input type="radio" class="form-check-input" name="gender">    
            <label for="male">Other</label>
        </div>

        <label class="form-label mt-2">Date Of Birth:</label><br>
            <select class="form-select-inline date mb-2 mr-2" name="date" required>
                <option value="">--Date--</option>
                <?php if(isset($date)){echo '<option  selected>'.$date.'</option>';}?>
            </select>

            <select class="form-select-inline mb-2 month mr-2" required name="month">
                <option value="">--Month--</option>
                <?php if(isset($month)){echo '<option  selected>'.$month.'</option>';}?>
                <option value="jan">Jan</option>
                <option value="feb">Feb</option>
                <option value="march">March</option>
                <option value="apr">Apr</option>
                <option value="may">May</option>
                <option value="june">June</option>
                <option value="july">July</option>
                <option value="aug">Aug</option>
                <option value="sep">Sep</option>
                <option value="oct">Oct</option>
                <option value="nov">Nov</option>
                <option value="dec">Dec</option>
            </select>
            <select class="form-select-inline mb-2 year" name="year" required>
                <option value="">--Year--</option>
                <?php if(isset($year)){echo '<option  selected>'.$year.'</option>';}?>
            </select>


            <div class="form-group mb-2">
                <label for="gender" class="form-label p-0 m-0 d-block mt-2">Profession:</label>
                
                <input type="radio" class="form-check-input" checked name="gender">
                <label for="male">Student</label>
                
                <input type="radio" class="form-check-input" name="gender">
                <label for="male">Teacher</label>
                
                <input type="radio" class="form-check-input" name="gender">    
                <label for="male">Professional</label>
            </div>

            <label for="email" class="form-label">Contact No:</label>
            <input type="mobile" class="form-control mb-2" id="exampleInputEmail1" name="mobile" required>

            <label for="skills" class="form-label">Skills:</label>
            <input type="mobile" class="form-control mb-2" id="exampleInputEmail1" name="mobile" required placeholder="HTML, CSS, Python...">
        

            <div class="btn-div text-center mt-3">
                <button type="submit" class="btn btn-outline-primary" name="update" style="padding:0.5em 1.5em">Update</button>
            </div>
            
            
        
    </form>
</div>

</div>



<script>
    const profile = document.querySelector(".profile")
    profile.classList.add("active")

    const date = document.querySelector(".date")
    const year = document.querySelector(".year")


    for(let i=1;i<32;i++){
        const option = document.createElement("option")
        option.setAttribute("value",i)
        option.textContent=i
        date.append(option)
    }

    for(let i=80;i<100;i++){
        const option = document.createElement("option")
        option.setAttribute("value","19"+i)
        option.textContent="19"+i
        year.append(option)
    }

    for(let i=00;i<21;i++){
        const option = document.createElement("option")
        if(i<10){
            option.setAttribute("value","200"+i)
            option.textContent="200"+i
            year.append(option)
        }
        else{
            option.setAttribute("value","20"+i)
            option.textContent="20"+i
            year.append(option)
        }
        
    }

</script>

<?php

    include "footer.php";

?>