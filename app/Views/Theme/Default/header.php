<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title><?php echo $title;?></title>
    <meta name="description" content="<?php echo $description;?>" >
    <meta name="keywords" content="<?php echo $keywords;?>" >
    <link rel="shortcut icon" href="<?php echo base_url() ?>/uploads/logo/<?php echo get_lebel_by_value_in_theme_settings('favicon');?>">

    <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url() ?>/assets/default/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url() ?>/assets/default//responsive.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url() ?>/assets/default/css/camera.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url() ?>/assets/default/css/style.css">
    <link rel="stylesheet" id="flexslider-css" href="<?php echo base_url() ?>/assets/default/css/flexslider.css" type="text/css" media="all">
    <link rel="stylesheet" id="owl-carousel-css" href="<?php echo base_url() ?>/assets/default/css/owl.carousel.css" type="text/css" media="all">
    <link rel="stylesheet" id="owl-theme-css" href="<?php echo base_url() ?>/assets/default/css/owl.theme.css" type="text/css" media="all">
    <link rel="stylesheet" id="font-awesome-css" href="<?php echo base_url() ?>/assets/default/css/font-awesome.css" type="text/css" media="all">
    <link rel="stylesheet" id="cherry-plugin-css" href="<?php echo base_url() ?>/assets/default/css/cherry-plugin.css" type="text/css" media="all">
    <link rel="stylesheet" id="cherry-lazy-load-css" href="<?php echo base_url() ?>/assets/default/css/lazy-load.css" type="text/css" media="all">
    <link rel="stylesheet" id="contact-form-7-css" href="<?php echo base_url() ?>/assets/default/css/styles.css" type="text/css" media="all">
    <link rel="stylesheet" id="theme52467-css" href="<?php echo base_url() ?>/assets/default/css/main-style.css" type="text/css" media="all">
    <link rel="stylesheet" id="magnific-popup-css" href="<?php echo base_url() ?>/assets/default/css/magnific-popup.css" type="text/css" media="all">
    <link rel="stylesheet" id="options_typography_Lato-css" href="<?php echo base_url() ?>/assets/default/css/css.css" type="text/css" media="all">
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/default/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/default/js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/default/js/swfobject.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/default/js/modernizr.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/default/js/jflickrfeed.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/default/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/default/js/custom.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/default/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>/assets/default/js/jquery.elastislide.js"></script>
    <script type="text/javascript"
            src="http://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;ver=4.0.12"></script>
    <style type="text/css"></style>
    <style type="text/css">
        h1 {
            font: normal 35px/40px Lato;
            color: #000000;
        }

        h2 {
            font: normal 35px/40px Lato;
            color: #000000;
        }

        h3 {
            font: normal 25px/33px Lato;
            color: #000000;
        }

        h4 {
            font: normal 27px/32px Lato;
            color: #000000;
        }

        h5 {
            font: normal 12px/18px Arial, Helvetica, sans-serif;
            color: #333333;
        }

        h6 {
            font: normal 12px/18px Arial, Helvetica, sans-serif;
            color: #333333;
        }

        body {
            font-weight: normal;
        }

        .logo_h__txt, .logo_link {
            font: bold 60px/65px Lato;
            color: #000000;
        }

        .sf-menu > li > a {
            font: normal 20px/32px Lato;
            color: #ffffff;
        }

        .nav.footer-nav a {
            font: normal 16px/18px Lato;
            color: #000000;
        }
    </style>
    <script src="<?php echo base_url() ?>/assets/default/js/jquery.mobile.customized.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(function () {
            jQuery('.sf-menu').mobileMenu({defaultText: "Navigate to..."});
        });
    </script>
    <script type="text/javascript">
        // Init navigation menu
        jQuery(function () {
            // main navigation init
            jQuery('ul.sf-menu').superfish({
                delay: 1000, // the delay in milliseconds that the mouse can remain outside a sub-menu without it closing
                animation: {
                    opacity: "show",
                    height: "show"
                }, // used to animate the sub-menu open
                speed: "normal", // animation speed
                autoArrows: false, // generation of arrow mark-up (for submenu)
                disableHI: true // to disable hoverIntent detection
            });
            //Zoom fix
            //IPad/IPhone
            var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
                ua = navigator.userAgent,
                gestureStart = function () {
                    viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0";
                },
                scaleFix = function () {
                    if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
                        viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
                        document.addEventListener("gesturestart", gestureStart, false);
                    }
                };
            scaleFix();
        })
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            if (!device.mobile() && !device.tablet()) {
                jQuery('header .custom_poz').tmStickUp({
                    correctionSelector: jQuery('#wpadminbar')
                    , listenSelector: jQuery('.listenSelector')
                    , active: true, pseudo: true
                });
            }
        })
    </script>
</head>
<body class="home page page-id-203 page-template page-template-page-home-php">
<div id="motopress-main" class="main-holder">
    <header class="motopress-wrapper header">
        <div class="container">
            <div class="row">
                <div class="span12" data-motopress-wrapper-file="wrapper/wrapper-header.php"
                     data-motopress-wrapper-type="header" data-motopress-id="57bc83648d5fa">
                    <div class="">
                        <div class="container">
                            <div class="row cont">
                                <div class="span6 logo_bl">
                                    <div class="logo_poz" data-motopress-type="static"
                                         data-motopress-static-file="static/static-logo.php">
                                        <div class="logo pull-left">
                                            <a href="<?php echo base_url() ?>" class="logo_h logo_h__img">
                                                <?php $logoImg = get_lebel_by_value_in_theme_settings('side_logo');
                                                echo image_view('uploads/logo','',$logoImg,'noimage.png','img-fluid');?>
                                            </a>

                                            <p class="logo_tagline"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="span6">
                                    <div data-motopress-type="dynamic-sidebar"
                                         data-motopress-sidebar-id="header-sidebar-1">
                                        <div id="text-6">
                                            <div class="textwidget">
                                                <p>Online Payment Made Simple.</p>Do more with
                                                <p class="phone1"><?php echo get_lebel_by_value_in_settings('store_name'); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hidden-phone" data-motopress-type="static"
                                         data-motopress-static-file="static/static-search.php"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom_poz">
                        <div class="container">
                            <div class="row">
                                <div class="block_menu">
                                    <div class="span12">
                                        <div data-motopress-type="static"
                                             data-motopress-static-file="static/static-nav.php">
                                            <nav class="nav nav__primary clearfix">
                                                <ul id="topnav" class="sf-menu">
                                                    <li id="menu-item-1807"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-203 current_page_item">
                                                        <a href="<?= base_url()?>">Home</a>
                                                    </li>
                                                    <li id="menu-item-1808"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                        <a href="<?= base_url('page/services')?>">Services</a></li>
                                                    <li id="menu-item-1809"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                        <a href="merchant.html">Merchants</a></li>
                                                    <li id="menu-item-1810"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                        <a href="support.html">Support</a></li>
                                                    <li id="menu-item-1811"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page ">
                                                        <a href="contacts.html">Contacts</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>