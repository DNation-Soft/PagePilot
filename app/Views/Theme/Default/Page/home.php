<script type="text/javascript">
    jQuery(document).ready(function ($) {
        if (!device.mobile() && !device.tablet()) {
            liteModeSwitcher = false;
            jQuery.srSmoothscroll({
                step: 150,
                speed: 800
            });
        } else {
            liteModeSwitcher = true;
        }
        if ($.browser.msie && parseInt($.browser.version) < 9) {
            liteModeSwitcher = true;
        }
        jQuery('#parallax-slider-57bc8364a5464').parallaxSlider({
            parallaxEffect: "parallax_effect_normal"
            ,
            parallaxInvert: false,
            animateLayout: "simple-fade-eff"
            ,
            duration: 1500,
            autoSwitcher: true,
            autoSwitcherDelay: 10000,
            scrolling_description: false,
            slider_navs: true,
            slider_pagination: "none_pagination"
            ,
            liteMode: liteModeSwitcher
        });
    });
</script>
<div id="parallax-slider-57bc8364a5464" class="parallax-slider">
    <ul class="baseList">
        <li data-preview="<?php echo base_url() ?>/assets/default/images/slide-1.jpg" data-thumb-url="<?php echo base_url() ?>/assets/default/images/slide-1-100x50.jpg" data-ulr-link="#">
            <div class="slider_caption">
                <h2><span>Making It Eezie for You</span>We’re changing the payments landscape</h2>
                <p>When it comes to making payments smarter and more robust, Eeziepay and you are on the same page.
                    Smarter payments with a personal touch. It’s what we’re all about.</p></div>
        </li>
        <!--<li data-preview="images/slide-2.jpg" data-thumb-url="images/slide-2-100x50.jpg" data-ulr-link="#">
            <div class="slider_caption">
                            </div>
        </li>-->
    </ul>
</div>
<div class="motopress-wrapper content-holder clearfix">
    <div class="container">
        <div class="row">
            <div class="span12" data-motopress-wrapper-file="page-home.php" data-motopress-wrapper-type="content">
                <div class="row">
                    <div class="span12" data-motopress-type="static"
                         data-motopress-static-file="static/static-slider.php">
                        <div class="slider_off"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="span12" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
                        <div id="post-203" class="post-203 page type-page status-publish hentry">
                            <div class="content_box box_1 ">
                                <div class="row ">
                                    <div class="span4 ">
                                        <section class="lazy-load-box trigger effect-slidefromleft "
                                                 data-delay="200" data-speed="1000"
                                                 style="-webkit-transition: all 1000ms ease; -moz-transition: all 1000ms ease; -ms-transition: all 1000ms ease; -o-transition: all 1000ms ease; transition: all 1000ms ease;">
                                            <div class="list styled custom-list list_1">
                                                <ul>
                                                    <li><a href="why.html">Why Choose Eeziepay</a></li>
                                                    <li><a href="easy.html">Easy System Integration</a></li>
                                                </ul>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="span4 ">
                                        <section class="lazy-load-box trigger effect-slideup " data-delay="200"
                                                 data-speed="1000"
                                                 style="-webkit-transition: all 1000ms ease; -moz-transition: all 1000ms ease; -ms-transition: all 1000ms ease; -o-transition: all 1000ms ease; transition: all 1000ms ease;">
                                            <div class="list styled custom-list list_2">
                                                <ul>
                                                    <li><a href="premium.html">Premium Customer Care</a></li>
                                                    <li><a href="accept.html">Accept All Major Banks</a></li>
                                                </ul>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="span4 ">
                                        <section class="lazy-load-box trigger effect-slidefromright "
                                                 data-delay="200" data-speed="1000"
                                                 style="-webkit-transition: all 1000ms ease; -moz-transition: all 1000ms ease; -ms-transition: all 1000ms ease; -o-transition: all 1000ms ease; transition: all 1000ms ease;">
                                            <div class="list styled custom-list list_3">
                                                <ul>
                                                    <li><a href="robust.html">Robust and Reliable</a></li>
                                                    <li><a href="secure.html">Secure and Private</a></li>
                                                </ul>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>