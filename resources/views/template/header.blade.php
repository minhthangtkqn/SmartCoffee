<div id="header">
    <div id="logo">
        <h1><a itemprop="url" href="./" title="Hyperspin"><img itemprop="logo" src="http://www.hyperspin.com/themes/-1-1298823054/images/logo.png" alt="Hyperspin"></a></h1>
        <div class="box">
            <div class="box-bgr">
                <div class="box-bgr-">
                    <div id="top-hide-box" class="content hide">
                        <div id="form-login">
                            <div id="form-login-center">
                                <form action="https://www.hyperspin.com/en/login" method="post">
                                    <fieldset>
                                        <input name="login_username" type="text" value="Username" onfocus="clickclear(this, 'Username')" onblur="clickrecall(this,'Username')">
                                        <input name="password" type="password" value="********" onfocus="clickclear(this, '********')">
                                        <input type="submit" value="Login" class="btn">
                                    </fieldset>
                                </form>
                            </div>
                            <!--/form-login-centered -->
                        </div>
                        <!--/form-login -->
                    </div>
                    <!--/content -->
                    <?php
                    $user = Auth::user();
                    if(isset($user)) { ?>
                    <div id="nav-top">
                        <ul>
                            @if (Auth::guest())
                                <li><a href="{{ url('/login') }}">Login</a></li>
                            @else
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    {{--<ul class="dropdown-menu" role="menu">--}}
                                        {{----}}
                                    {{--</ul>--}}
                                </li>
                            @endif
                            <li><a href="http://www.hyperspin.com/forum/" target="_blank">Forum</a></li>
                            <li><a href="contact-us">Contact</a></li>
                            <li><a href="languages">Language</a></li>
                        </ul>
                    </div>
                     <?php }else {?>
                    <div id="nav-top">
                        <ul>
                            <li><a href="/partners">Partners</a></li>
                            <li><a href="http://www.hyperspin.com/forum/" target="_blank">Forum</a></li>
                            <li><a href="/contact-us">Contact</a></li>
                            <li><a href="/languages">Language</a></li>
                            @if (Auth::guest())
                                <li><a href="{{ url('/login') }}">Login</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                    </ul>
                                </li>
                            @endif

                        </ul>
                    </div>
                    <!--/nav-top -->
                    <?php }?>

                    <!--/nav-top -->
                </div>
            </div>
            <!--/box-bgr -->
            <div class="box-bot">
                <div class="bot"></div>
                <div class="bot-"></div>
            </div>
        </div>
        <!--/box -->
    </div>
    <!--/logo -->
    <?php
    $user = Auth::user();
    $contacts = \App\Contact::all();

    $contact_resume_count = 0;
    foreach( $contacts as $contact) {
        if( $contact->pause_notification == 0 ) {
            $contact_resume_count++;
        }
    }
    if(isset($user)) { ?>
        <div id="nav1">
            <ul><li class="active"><a href="/monitoring-overview">Monitoring</a><ul>
                        <li><a href="/monitoring-overview">Overview</a></li>
                        <li><a href="/monitoring-addtest">Add a Test</a></li>
                        <li><a href="/monitoring-bulk-addtest">Bulk Add Test</a></li>
                        <li><a href="/monitoring-bulk-actions">Bulk Actions</a></li>
                        <li><a href="/monitoring-profile">Monitoring Profile</a></li>
                        <li><a href="/monitoring-http-headers">HTTP Headers</a></li>
                        <li><a href="/quicktest">Quick Test</a></li>
                        <li><a href="/monitoring-instructions">Setup Instructions</a></li>
                    </ul>
                </li>
                <li><a href="/report-overview">Report</a><ul>
                        <li><a href="/report-overview">Overview</a></li>
                        <li><a href="/report-uptime">Uptime Report</a></li>
                        <li><a href="/report-performance">Performance Report</a></li>
                        <li><a href="/public-report">Public Report</a></li>
                        <li><a href="/contact">Email Report</a></li>
                    </ul>
                </li>
                <li><a href="/contact">Contacts</a><ul>
                        <li><a href="/contact">Contacts</a></li>
                        <li><a href="/contact/create-email">Add New Email Contact</a></li>
                        <li><a href="/contact/create-sms">Add New SMS Contact</a></li>
                        <li><a href="/contact/contact-form-push">Add New Push Contact</a></li>
                        <li><a href="/contact-template">Notification Template</a></li>
                        @if( $contact_resume_count > 0 )
                        <li><a href="/contact-pause-all">Pause All Notification</a></li>
                        @else
                        <li><a href="/contact-resume-all">Resume All Notification</a></li>
                        @endif
                        <li><a href="/contact-notifications-history">Notification History</a></li>
                    </ul>
                </li>
                <li><a href="/maintenance-list">Maintenance</a><ul>
                        <li><a href="/maintenance-list">Maintenance</a></li>
                        <li><a href="/recurring-maintenance/create">Add Recurring Maintenance</a></li>
                        <li><a href="/onetime-maintenance/create">Add One-time Maintenance</a></li>
                    </ul>
                </li>
                <li><a href="/account-settings">Account</a><ul>
                        <li><a href="/account-settings">Account Settings</a></li>
                        <li><a href="/account-change-password">Change Password</a></li>
                        <li><a href="/account-usage">Usage</a></li>
                        <li><a href="/account-sms">SMS Usage</a></li>
                        <li><a href="/account-subscription">Subscription</a></li>
                        <li><a href="/account-statement">Invoice</a></li>
                        <li><a href="/account-funds">Funds</a></li>
                        <li><a href="/account-close">Close Account</a></li>
                    </ul>
                </li>
                <li><a href="/reseller-settings">Reseller</a></li>
                <li><a href="/affiliate-overview">Affiliate</a></li>
            </ul>
        </div>
        <?php } else { ?>


        <div id="nav1">
            <ul>
                <li class="active"><a href="./">Home</a></li>
                <li>
                    <a href="features">Monitoring</a>
                    <ul>
                        <li><a href="features">Features</a></li>
                        <li><a href="howitworks">How It Works</a></li>
                        <li><a href="network">Monitoring Network</a></li>
                        <li><a href="notification">SMS &amp; Email Notification</a></li>
                        <li><a href="pushnotification">Push Notification</a></li>
                        <li><a href="quicktest">Quick Test</a></li>
                        <li><a href="signup?type=default">Sign Up</a></li>
                    </ul>
                </li>
                <li>
                    <a href="pricing">Pricing</a>
                    <ul>
                        <li><a href="pricing">Pricing</a></li>
                        <li><a href="discount">Discount</a></li>
                        <li><a href="compare">Compare Free &amp; Professional</a></li>
                    </ul>
                </li>
                <li>
                    <a href="reseller">Reseller</a>
                </li>
                <li>
                    <a href="affiliate">Affiliate</a>
                </li>
                <li>
                    <a href="introduction">Webhost Ranking</a>
                    <ul>
                        <li><a href="introduction">Introduction</a></li>
                        <li><a href="shared">Shared</a></li>
                        <li><a href="vitual-private">Virtual Private</a></li>
                        <li><a href="cated">Dedicated</a></li>
                        <li><a href="colocation">Colocation</a></li>
                        <li><a href="leased">Leased Line</a></li>
                        <li><a href="broadband">Broadband</a></li>
                        <li><a href="others">Others</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--/nav1-->
        <?php } ?>

</div>


