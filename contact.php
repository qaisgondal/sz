<?php
define('TITLE','Contact Us');
$page="contact";
// define('PAGE', 'dashboard');
include('header.php');

if(isset($_REQUEST['submit'])){
    if(($_REQUEST['name'] =="")||($_REQUEST['subject'] =="")||($_REQUEST['email'] =="")||
    ($_REQUEST['message'] =="")){
        $msg='<div class="alert alert-warning"><h3>Please fill all fields</h3></div>';
    }else{
        $name = $_REQUEST['name'];
 $subject = $_REQUEST['subject'];
 $email = $_REQUEST['email'];
 $message = $_REQUEST['message'];

 $mailTo = "contact@geekyshows.com";
 $headers = "From: ". $email;
 $txt = "You have received an email from ". $name. ".\n\n".$message;
 mail($mailTo, $subject, $txt, $headers);
    }
}

?>
<div class="container-fulid"  >
    <div class="row">
        <div class="col-sm-12">
                <img class="image-resize-contactform1" src="img/avatar2.jpg" alt="">
        </div>
    </div>
</div>

    


        <!--Start Contact Us-->
<div class="container" >  <!--Start Contact Us Container--> 
<div class="row">  
<div class="col-md-12">
            <img class="image-resize-contactform2" src="img/contact-us-2993000_1920.jpg" alt="">
        </div> 
</div> 
        <h2 class="text-center mb-4">Contact US</h2> <!-- Contact Us Heading -->
               <!--Start Contact Us Row-->  
               <div class="row">         
    <div class="col-md-8">      <!--Start Contact Us 1st Column-->
    
        <form action="" method="post">
            <input type="text" class="form-control" name="name" placeholder="Name"><br>
            <input type="text" class="form-control" name="subject" placeholder="Subject"><br>
            <input type="email" class="form-control" name="email" placeholder="E-mail"><br>
            <textarea class="form-control" name="message" placeholder="How can we help you?" style="height:150px;"></textarea><br>
            <input class="btn btn-primary" type="submit" value="Send" name="submit"><br><br>
            <?php if(isset($msg)){echo $msg;}  ?>
        </form>
    </div> 
            <!-- End Contact Us 1st Column -->

        <div class="col-md-4 text-center">
            <!-- Start Contact Us 2nd Column-->
            <strong>Headquarter:</strong> <br>
            S&Z Barristers Pvt Ltd Pvt Ltd, <br>
            11 fane Road <br>
            Lahore - 834005 <br>
            Phone: +00000000 <br>
            <a href="#" target="_blank">www.s&z.com</a> <br>

            <br><br>
            <strong>M.B.Din Branch:</strong> <br>
            S&Z Barristers Pvt Ltd, <br>
           cheema chowk saqi Plaza <br>
            M.B.Din - 804002 <br>
            Phone: +00000000 <br>
            <a href="#" target="_blank">www.s&z.com</a> <br>
        </div> <!-- End Contact Us 2nd Column-->
        
        <!-- start Google map -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3362.039525762143!2d73.49534940361288!3d32.57846993233092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!
        1s0x391f7d93352ec219%3A0x90b150ba1338a6c!2sSaqi%20Plaza!5e0!3m2!1sen!2s!4v1586318835692!5m2!1sen!2s" width="1200" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <!-- End google map -->

        </div> <!-- End Contact Us Row-->
</div> <!-- End Contact Us Container-->
  <!-- End Contact Us -->


<?php
include('footer.php');
?>



