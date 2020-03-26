<!--header start-->
<header id="site-header" class="header">
    <div id="header-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand logo" href="index">
                    <img id="logo-img" class="img-center" src="images/logo.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span></span>
                    <span></span>
                    <span></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav mr-auto ml-50">
                            <!-- Home -->
                            <li class="nav-item"> <a class="nav-link<?php echo $page=='index' ? ' active' : '' ?>" href="index" role="button" >Home</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link<?php echo $page=='about' ? ' active' : '' ?>" href="about" role="button" >About</a>
                            </li>
                            <li class="nav-item dropdown" data-toggle="hover">
                            <a class="nav-link dropdown-toggle<?php echo $page=='features' ? ' active' : '' ?>" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Features</a>
                            <div class="dropdown-menu">
                                <ul class="list-unstyled">
                                    <li><a href="alerting-text-messaging">Alerting Text Messaging</a>
                                    </li>
                                    <li><a href="conversation-text-messaging">Conversation Text Messaging</a>
                                    </li>
                                    <li><a href="marketing-text-messaging">Marketing Text Messaging</a>
                                    </li>
                                </ul>
                            </div>
                            </li>
                            <li class="nav-item"> <a class="nav-link<?php echo $page=='pricing' ? ' active' : '' ?>" href="pricing" role="button" >Pricing</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link<?php echo $page=='contact' ? ' active' : '' ?>" href="contact" role="button" >Contact</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link mob-show" href="https://sendsms.net/client/login" role="button" >Login</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link mob-show" href="https://sendsms.net/client/register" role="button" >Register</a>
                            </li>
                        </ul>
                    </div>
                    <div class="right-nav align-items-center d-flex justify-content-end list-inline"> <a class="btn btn-white btn-sm" href="https://sendsms.net/client/login" target="_blank">Login</a>  <a class="btn btn-white btn-sm color-btn" href="https://sendsms.net/client/register" target="_blank">Register</a>
                    </div>
                </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!--header end-->