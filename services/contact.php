<?php include 'fileinclude/topheader.php'?>
<!-- insert script-->
<?php include 'fileinclude/bottomheader.php'?>


<!--End Top bar area -->

<!--Start header area-->
<?php include 'fileinclude/header.php'?>

<!--End header area-->

<!--Start mainmenu area-->
<?php include 'fileinclude/navbar.php'?>
<!--End mainmenu area-->
<!--End mainmenu area-->


<!--Start breadcrumb area-->
<div class="breadcrumb-area" style="background-image: url(images/background/3.jpg);">
    <div class="container text-center">
        <h1>Contact Us</h1>
        <div class="breadcrumbs_path">
            <a href="#">Home</a>&nbsp;&nbsp;-&nbsp;&nbsp; Contact
        </div>
    </div>
</div>
<!--End breadcrumb area-->




<!--Start contact form area-->
<div class="contact-form-area sec-padd-top">
    <div class="container">


        <div class="row">

            <div class="col-md-8">

                <div class="contact-form">
                    <h4 class="sent-notification"></h4>
                    <form id="contact-form" name="contact_form" class="default-form" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" id="name" name="form_name" value="" placeholder="Your Name*"
                                    required="">
                            </div>
                            <div class="col-md-6">
                                <input type="email" id="email" name="form_email" value="" placeholder="Your Mail*"
                                    required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" id="phone" name="form_phone" value="" placeholder="Phone">
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="subject" name="form_subject" value="" placeholder="Subject">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="form_message" id="message" placeholder="Your Message.."
                                    required=""></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden"
                                    value="">
                                <button class="thm-btn bg-clr1" onclick="sendEmail()" type="button">send
                                    message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-4">
                <div class="footer-contact-info">
                    <div class="title">
                        <h4>Quick Contact</h4>
                        <p>Contact for your query
                        </p>
                    </div>
                    <ul class="clearfix">
                        <li>
                            <div class="iocn-holder">
                                <span class="fa fa-home"></span>
                            </div>
                            <div class="text-holder">

                                <h6>
                                    Delhi ncr Delhi, India 11002</h6>

                            </div>
                        </li>
                        <li>
                            <div class="iocn-holder">
                                <span class="icon-technology-1"></span>
                            </div>
                            <div class="text-holder">
                                <h6>Call Us On</h6>
                                <p>+91 99119 27111</p>
                            </div>
                        </li>
                        <li>
                            <div class="iocn-holder">
                                <span class="icon-letter-1"></span>
                            </div>
                            <div class="text-holder">
                                <h6>Mail Us @</h6>
                                <a href="#">
                                    <p>info@quicklysupports.com</p>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
</div>
<!--End contact form area-->





<div class="call-out2">
    <div class="container">
        <div class="clearfix">
            <div class="float_left">
                <h4>Have any question or need any business consultation?</h4>
            </div>
            <div class="float_right">
                <a href="contact.php" class="thm-btn bg-clr2">Request Quote</a>
            </div>
        </div>

    </div>
</div>


<div class="brand-logo sec-padd">
    <div class="container">
        <ul class="brand-carousel">
            <li><a href="#"><img src="images/brand/1.png" alt=""></a></li>
            <li><a href="#"><img src="images/brand/2.png" alt=""></a></li>
            <li><a href="#"><img src="images/brand/3.png" alt=""></a></li>
            <li><a href="#"><img src="images/brand/4.png" alt=""></a></li>
            <li><a href="#"><img src="images/brand/5.png" alt=""></a></li>
            <li><a href="#"><img src="images/brand/6.png" alt=""></a></li>
        </ul>
    </div>
</div>

<?php include 'fileinclude/topfooter.php'?>
<!-- Script here-->
<script>
function sendEmail() {
    var name = $("#name");
    var email = $("#email");
    var phone = $("#phone");
    var subject = $("#subject");
    var phone = $("#phone");
    var message = $("#message");

    if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(message)) {
        $.ajax({
            url: 'Mailer/send_mail.php',
            type: 'POST',
            data: {
                name: name.val(),
                email: email.val(),
                sbject: subject.val(),
                phone: phone.val(),
                message: message.val(),
            },
            success: function(response) {
                console.log(response);
                $('contact-form')[0].reset();
                $('sent-notification').text("Message senr successfully.");
            }
        });
    }

}

function isNotEmpty(caller) {
    if (caller.val() == "") {
        caller.css('border', '1px solid red');
        return false;
    } else {
        caller.css('border', '');
        return true;
    }

}
</script>
<?php include 'fileinclude/bottomfooter.php'?>