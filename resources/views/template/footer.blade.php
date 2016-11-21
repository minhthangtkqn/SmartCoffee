
<?php $user = Auth::user(); ?>
@if(isset($user))
    <div id="footer" class="inside clearfix">
        <div id="footer-main" class="clearfix">
            <div id="hyperlogo"><a href="linktous.php"><img src="http://www.hyperspin.com/themes/-1-1298823054/images/logo-monitored.png" alt="Monitored by Hyperspin"></a></div>
            <div id="footer-main-links" class="clearfix">
                <ul>
                    <li><a href="faq">FAQ</a></li>
                    <li><a href="tellafriend">Tell a Friend</a></li>
                    <li><a href="terms">Service Agreement</a></li>
                    <li><a href="privacy">Privacy Statement</a></li>
                    <li><a href="refund">Refund Policy</a></li></ul>
            </div>
            <div id="footer-main-copyright"><small>© <a href="./" title="Hyperspin"><span itemprop="name">HYPERSPIN PTE LTD</span></a>, 2002-2016.</small></div>
        </div>
        <div id="footer-sub-sponsor">
            <div class="hosted-by">Hosted by:</div>
            <div class="sponsor-logo"><a href="https://www.wiredtree.com" target="_blank"><img src="https://www.hyperspin.com/images/WT-white.png" alt=""></a></div>
        </div>
    </div>
@else
    <div id="footer-main" class="clearfix">
        <div id="footer-main-usefullinks" class="clearfix">
            <div id="footer-nav-section-left">
                <h4>Company</h4>
                <ul>
                    <li><a href="about">About Us</a></li>
                    <li><a href="contact-us">Contact Us</a></li>
                    <li><a href="partnership">Partnership</a></li>
                    <li><a href="linktous">Link to Us</a></li>
                    <li><a href="languages">Language</a></li>
                </ul>
            </div>
            <div id="footer-nav-section-middle">
                <h4>Resources</h4>
                <ul>
                    <li><a href="website-monitoring">Website Monitoring Service</a></li>
                    <li><a href="server-monitoring">Server Monitoring Service</a></li>
                    <li><a href="faq">FAQ</a></li>
                    <li><a href="tellafriend">Tell a Friend</a></li>
                    <li><a href="terms">Service Agreement</a></li>
                    <li><a href="privacy">Privacy Statement</a></li>
                    <li><a href="refund">Refund Policy</a></li>
                </ul>
            </div>
        </div>
        <div id="hyperlogo"><a href="linktous"><img src="http://www.hyperspin.com/themes/-1-1298823054/images/logo-monitored.png" alt="Monitored by Hyperspin"></a></div>
        <div id="footer-main-copyright"><small>© <a href="./" title="Hyperspin"><span itemprop="name">HYPERSPIN PTE LTD</span></a>, 2002-2016.</small></div>
    </div>
    <div id="footer-sub-sponsor">
        <div class="hosted-by">Hosted by:</div>
        <div class="sponsor-logo"><a href="https://www.wiredtree.com" target="_blank"><img src="http://www.hyperspin.com/images/WT-white.png" alt=""></a></div>
    </div>
@endif