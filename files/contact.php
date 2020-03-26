<?php
$page = 'contact';
require 'vendor/autoload.php';
use Mailgun\Mailgun;

Define("MAILGUN_API", "b5e476165b3bd8a1759fac70d3daef5e-16ffd509-804c2a1e");

/* ===================== +
 |  Submit Send message  |
 + ===================== */
if(isset($_POST['email'])) {
    $mg = Mailgun::create(MAILGUN_API);
    $domain = "mailsv.sendsms.com";

    $from_email = $_POST['email'];
    $to_email = 'info@sendsms.com';
    $name = $_POST['name'];
    $message = $_POST['message'];
    
    $yes = $mg->messages()->send($domain, [
        'from'      => $from_email,
        'to'        => $to_email,
        'subject'   => 'Contact message from '.$name.' <'.$from_email.'>',
        'text'      => $message
    ]);

    $success = TRUE;
}


require_once 'inc/head.php';
require_once 'inc/header.php';
?>
<!--hero section start-->
<section class="fullscreen-banner banner banner-2 p-0 o-hidden bg-contain bg-pos-r animatedBackground" data-bg-img="images/bg/05.png contact-page">
    <div class="mouse-parallax" data-bg-img="images/pattern/01.png"></div>
    <div class="h-100 bg-contain bg-pos-rb sm-bg-cover" data-bg-img="images/bg/04.png">
    <div class="align-center">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 col-md-12 offset-2">
                <?php if(isset($success)) { ?>
                    <div class="alert alert-success mt-5 mb-5" role="alert">Thank you for contacting SendSMS, one of our representatives will get back with you.</div>
                <?php } ?>
                <h1>Get in Touch with Us</h1>
                <p class="lead">Feel free to write or contact with us, if you have any question or query.</p>
                <div class="contact-form">
                    <form id="contact-form" class="row" method="POST">
                        <div class="form">
                            <input id="name" type="text" name="name" class="control" placeholder="Your Name" required="required" data-error="Name is required.">
                        </div>
                        <div class="form">
                            <input id="email" type="email" name="email" class="control" placeholder="Your Email Address" required="required" data-error="Valid email is required.">
                        </div>
                        <div class="form">
                            <input id="message" type="text" name="message" class="control" placeholder="Your Query" required="required" data-error="Please,leave us a message.">
                        </div>
                        <div class="text-right col-md-10 p-0">
                            <button class="contact-send"><span>Send</span>
                            </button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!--hero section end-->
<section class="o-hidden">
    <div class=" container">
    </div>
</section>
<!--body content start-->
<div class="page-content">
    <!--Contact Top Footer start-->
    <section class="text-left">
    <div class="container">
        <div class="row">
            <div class="contact-top-footer">
                <div class="col-lg-5 col-md-12">
                <div class="information">
                    <h2 class="mb-4 bold-font">Our Information</h2>
                    <p class="mb-0 bold-font">Feel free to write or contact with us, if you have any question or query.</p>
                </div>
                </div>
                <div class="col-lg-5 col-md-12 md-mt-5 offset-2">
                <div class="conatct-info">
                    <ul class="contact-page list-unstyled">
                        <li class="address bold-font">4228 E Belknap St, Ste #110, Fort Worth, TX 76117</li>
                        <li class="mail bold-font"><a href="mailto:info@sendsms.com">info@sendsms.com</a></li>
                        <li class="telephone bold-font"><a href="tel:18669297539">1-866-929-7539</a></li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!--Contact Top Footer end-->
</div>
<!--body content end--> 
<?php
require_once 'inc/footer.php';
require_once 'inc/foot.php';
?>