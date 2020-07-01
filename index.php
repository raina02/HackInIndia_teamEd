<?php

    include "header.php";
    include "navigation.php";

?>

<style>
    
    iframe{
        height:220px;
        width:290px; 
        box-shadow:0px 4px 8px rgba(0,0,0,0.4);
    }
    .button-div button{
        border-radius:0;
        border-bottom:3px solid #efefef;
    }
    .button-div button:hover{
        background:#efefef;
    }
    img{
        height:200px;
        width:270px; 
   }
    
</style>

<div class="container-fluid px-5">
    <div class="heading mt-4"><h3 class="text-left pl-2 " style="font-weight:normal;">Latest</h3></div>
        <div class="row pt-2">
            <div class="col-lg-3">
                <iframe src="https://youtube.com/embed/lqX93bR4pWA" allowfullscreen></iframe>
                <figcapion><p style="font-size:1.3em;">Gaunlet 2.0</p></figcaption>        
            </div>
            <div class="col-lg-3">
                <iframe  src="https://www.youtube.com/embed/RSIclWvNTdQ" frameborder="0" allowfullscreen></iframe>
                <figcapion><p style="font-size:1.3em;">CSS Grid vs Flexbox</p></figcaption>
            </div>
                <div class="col-lg-3">
                    <iframe  src="https://youtube.com/embed/XMr3xPdJbjY" frameborder="0" allowfullscreen></iframe>
                        <figcapion><p style="font-size:1.3em;">Bekhayali Rap</p></figcaption>
                </div>
                <div class="col-lg-3">
                    <iframe src="https://youtube.com/embed/lqX93bR4pWA" allowfullscreen></iframe>
                    <figcapion><p style="font-size:1.3em;">Gaunlet 2.0</p></figcaption>        
                </div>
            </div>
        </div>
       
</div>
<hr style="height:2px ; color:#cccccc" class="m-3">




<div class="container-fluid px-5">
    <div class="heading mt-2"><h3 class=" d-inline text-left pl-2 " style="font-weight:normal;">Ongoing</h3><a class="btn btn-outline-danger ml-3 mb-1" style="border-radius:0;padding:0.1em 1.3em;">LIVE</a></div>
        <div class="row pt-2">
        <div class="col-lg-3">
                <iframe src="https://youtube.com/embed/-G7bJVAIiEI" allowfullscreen></iframe>
                <figcapion><p style="font-size:1.3em;">Html complete responsive</p></figcaption>        
            </div>
            <div class="col-lg-3">
                <iframe  src="https://youtube.com/embed/JOkS2Xk7SV0" frameborder="0" allowfullscreen></iframe>
                <figcapion><p style="font-size:1.3em;">CSS Grid complete</p></figcaption>
            </div>
                <div class="col-lg-3">
                    <iframe  src="https://youtube.com/embed/UB1O30fR-EE" frameborder="0" allowfullscreen></iframe>
                        <figcapion><p style="font-size:1.3em;">React </p></figcaption>
                </div>
                <div class="col-lg-3">
                    <iframe src="https://youtube.com/embed/RUku45vpSDU" allowfullscreen></iframe>
                    <figcapion><p style="font-size:1.3em;">Version Control</p></figcaption>        
                </div>
            </div>
           
        <div class="row pt-2">
            <div class="col-lg-3">
                <iframe  src="https://youtube.com/embed/lqX93bR4pWA" allowfullscreen></iframe>
                    <figcapion><p style="font-size:1.3em;">Gaunlet 2.0</p></figcaption>       
            </div>
            <div class="col-lg-3">
                <iframe  src="https://www.youtube.com/embed/RSIclWvNTdQ" frameborder="0" allowfullscreen></iframe>
                    <figcapion><p style="font-size:1.3em;">CSS Grid vs Flexbox</p></figcaption>
            </div>
                <div class="col-lg-3">
                    <iframe  src="https://youtube.com/embed/XMr3xPdJbjY" frameborder="0" allowfullscreen></iframe>
                        <figcapion><p style="font-size:1.3em;">Bekhayali Rap</p></figcaption>
                </div>
                <div class="col-lg-3">
                    <iframe  src="https://youtube.com/embed/lqX93bR4pWA" allowfullscreen></iframe>
                    <figcapion><p style="font-size:1.3em;">Gaunlet 2.0</p></figcaption>     
                </div>

                <?php if(isset($_POST["show_more"]))
                {
                    echo '<div class="col-lg-3">
                           <iframe  src="https://youtube.com/embed/lqX93bR4pWA" allowfullscreen></iframe>
                           <figcapion><p style="font-size:1.3em;">Gaunlet 2.0</p></figcaption>     
                        </div>';
                } ?>
            </div>
        </div>     

        <div class="button-div px-5 mb-4 mt-2">
            <form action="" method="post">
                <button class="btn w-100 " name="show_more">Show more</button>
            </form>
        </div>
</div>


<div class="container-fluid px-5">
    <div class="heading mt-4"><h3 class="text-left pl-2 " style="font-weight:normal;">Upcoming</h3></div>
        <div class="row pt-2">
            <div class="col-lg-3">
                <img  src="images/1.jpg" alt="image"></img>
                <figcapion><p style="font-size:1.3em;">Html</p></figcaption>        
            </div>
            <div class="col-lg-3">
                <img src="images/2.jpg" alt="image"></iframe>
                <figcapion><p style="font-size:1.3em;">CSS</p></figcaption>
            </div>
                <div class="col-lg-3">
                    <img  src="images/3.png" alt="img"></iframe>
                        <figcapion><p style="font-size:1.3em;">JS</p></figcaption>
                </div>
                <div class="col-lg-3">
                    <img  src="images/4.jpg" alt="img"></iframe>
                        <figcapion><p style="font-size:1.3em;">PHP</p></figcaption>
                </div>
            </div>
        </div> 
        <div class="button-div px-5 mb-4 mt-2">
            <button class="btn w-100 " >Show more</button>
        </div>
</div>

<?php

    include "footer.php";

?>