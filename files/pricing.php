<?php
$page = 'pricing';
$head_script = '<link href="css/flags.css" rel="stylesheet" type="text/css" />';
require_once 'inc/head.php';
require_once 'inc/header.php';
?>
<!--hero section start-->
<!-- <section class="fullscreen-banner banner banner-2 p-0 o-hidden bg-contain bg-pos-r animatedBackground" data-bg-img="images/bg/05.png">-->
<section class="fullscreen-banner banner banner-2 p-0 o-hidden bg-contain bg-pos-r animatedBackground" data-bg-img="images/bg/05.png">
	<div class="mouse-parallax" data-bg-img="images/pattern/01.png"></div>
	<div class="h-100 bg-contain bg-pos-rb sm-bg-cover" data-bg-img="images/bg/04.png">
		<div class="align-center">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="white-bg box-shadow px-5 py-5 sm-px-3 sm-py-3 xs-px-2 xs-py-2 bg-contain bg-pos-l radius" data-bg-img="images/bg/01.png">
							<div class="row align-items-center">
								<div class="col-lg-6 col-md-12 text-center">
									<img class="img-center" src="images/pricing.png" alt="">
								</div>
								<div class="col-lg-6 col-md-12 md-mt-5"> 
									<h1 class="mb-4 flag-title">Pay only <span class="font-w-5">for what you use, </span>nothing more</h1>
									 <form>
                                        <div class="form-group">
                                            <div id="basic" data-input-name="country"></div>
                                        </div>
                                    </form>
                                    <div class="send-msg-cost">
                                        <div class="cost-table">
                                            <div class="cost-table-row">
                                                <div class="r1">Send a message</div>
                                                <div class="r2 t-price sr-only">$0.1600</div>
                                            </div>
                                            <div class="cost-table-row carrier-pricing">
                                                
                                            </div>
                                            <div class="cost-table-row">
                                                <div class="r1"><span>to any number in Mayotte</span></div>
                                                <div class="r2"><span>per message</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cost-sign">
                                     <button class="">$</button><span>Pricing in USD is approximate based on applying an exchange rate to the USD pricing.</span>
                                      
                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--hero section end-->

<!--body content start-->
<div class="page-content about-page">
<!--Top Footer start-->
<section class="text-left top-footer-section">
    <div class="container">
        <div class="row">
            <div class="top-footer">
            <div class="col-lg-5 col-md-12 offset-1">
                <div class="try-email">
                    <h4 class="mb-4 bold-font">Try SendSMS Today!</h4>
                    <p class="mb-0">Trusted by thousands of customers in multiple markets. Just enter your email and we will get right back with you!</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 md-mt-5">
                <div class="email-subscribe">
                    <input class="input-group-field" type="email" placeholder="Enter your email" required>
                    <button onclick="location.href='https://sendsms.net/client/register'" class="button">Get Started</button>
                    <ul>
                        <li>Easy</li>
                        <li>Fast</li>
                        <li>Simple</li>
                    </ul>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- Top Footer end-->
</div>
<!--body content end--> 
<?php
$bottom_script = '
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prettify/r298/prettify.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>    
    <script src="js/jquery.flagstrap.js"></script>   
    <script>
        $("#basic").flagStrap({
            onSelect: function(value, element) {
                console.log(value, element)
                $.ajax({
                    type: "GET",
                    url: "api/web/get_carrier_pricing.php",
                    data: {"country": value},
                    dataType: "json",
                    success: function(res) { 
                        $(".carrier-pricing").empty();
                        for(var item in res) {
                            $(".carrier-pricing").append("<div class=\'r1\'>"+item+" -</div><div class=\'r2 t-price\'>$"+res[item]+"</div>");
                        }
                    }
                 });
            }
        });
    </script>';
require_once 'inc/footer.php';
require_once 'inc/foot.php';
?>