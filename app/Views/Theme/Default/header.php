<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title><?php echo $title;?></title>
    <meta name="description" content="<?php echo $description;?>" >
    <meta name="keywords" content="<?php echo $keywords;?>" >
    <link rel="shortcut icon" href="<?php echo base_url() ?>/uploads/logo/<?php echo get_lebel_by_value_in_theme_settings('favicon');?>">

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url() ?>/assets/default/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>/assets/default/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/default/css/lightbox.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="<?php echo base_url() ?>/assets/default/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>/assets/default/js/lightbox-plus-jquery.min.js"></script>
</head>
<body>
<section class="header">
    <div class="container bg_green border_L_R">
        <div class="row">
<!--            <div class="col-md-2 mt_25">-->
<!--                <img src="--><?php //echo base_url() ?><!--/assets/default/image/logo_le.png" alt="">-->
<!--            </div>-->
<!--            <div class="col-md-8 mt_25 text-center">-->
<!--                <p class="text_1">বাংলাদেশ কারিগরি শিক্ষা বোর্ড কর্তৃক অনুমোদিত। প্রতিষ্ঠান কোডঃ ৩৩২৬৮</p>-->
<!--                <h4 class="title_1">নওয়াপাড়া টেকনিক্যাল ইন্সটিটিউট</h4>-->
<!--                <p class="text_2">Noapara technical institute</p>-->
<!--            </div>-->
<!--            <div class="col-md-2 mt_25 text-end">-->
<!--                <img src="--><?php //echo base_url() ?><!--/assets/default/image/logo_rf.png" alt="">-->
<!--            </div>-->
            <div class="col-md-12">
                <img src="<?php echo base_url() ?>/assets/default/image/header.png" alt="" class="w-100">
            </div>
        </div>
    </div>
</section>
<?php $uri = current_url(true); $url = empty($uri->getSegment(2))?'':$uri->getSegment(3);  ?>
<section class="menu_2">
    <div class="container border_L_R menu-con">
        <nav class="navbar navbar-expand-lg navbar-light bg-light bg_ye p-0" style="margin-left: -12px; margin-right: -11px;">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav  ">
                        <li class="nav-item bor_l <?php echo ($url == '')?'active':''?>">
                            <a class="nav-link  <?php echo ($url == '')?'active':''?>" aria-current="page" href="<?= base_url()?>">হোম</a>
                        </li>
                        <?php $drop =  (($url == 'protithan-somporke') || ($url == 'protithaner-boisisto') || ($url == 'teacher') || ($url == 'komiti') )?'active show':''?>
                        <?php $expand =  (($url == 'protithan-somporke') || ($url == 'protithaner-boisisto') || ($url == 'teacher') || ($url == 'komiti') )?'true':'false'?>
                        <li class="nav-item bor_l dropdown <?php echo $drop;?> ">
                            <a class="nav-link dropdown-toggle <?php echo $drop;?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="<?php echo $expand;?>" href="#">আমাদের সম্পর্কে</a>
                            <ul class="dropdown-menu <?php echo $drop;?>" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item subLink bg_ye <?php echo ($url == 'protithan-somporke')?'active':''?> " href="<?= base_url('page/protithan-somporke')?>">প্রতিষ্ঠান সম্পর্কে</a></li>
                                <li><a class="dropdown-item subLink bg_ye <?php echo ($url == 'protithaner-boisisto')?'active':''?>" href="<?= base_url('page/protithaner-boisisto')?>">প্রতিষ্ঠান বৈশিষ্ট</a></li>
                                <li><a class="dropdown-item subLink bg_ye <?php echo ($url == 'teacher')?'active':''?>" href="<?= base_url('page/teacher')?>">শিক্ষক কর্মচারী তথ্য</a></li>
                                <li><a class="dropdown-item subLink bg_ye <?php echo ($url == 'komiti')?'active':''?>" href="<?= base_url('page/komiti')?>">প্রতিষ্ঠান পরিচালনা কমিটি</a></li>
                            </ul>
                        </li>
                        <li class="nav-item bor_l <?php echo ($url == 'course')?'active':''?>">
                            <a class="nav-link <?php echo ($url == 'course')?'active':''?> " aria-current="page" href="<?= base_url('page/course')?>">কোর্স সমুহ</a>
                        </li>
                        <li class="nav-item bor_l <?php echo ($url == 'result')?'active':''?>">
                            <a class="nav-link  <?php echo ($url == 'result')?'active':''?>" aria-current="page" href="<?= base_url('page/result')?>" >রেজাল্ট</a>
                        </li>
                        <li class="nav-item bor_l <?php echo ($url == 'form')?'active':''?>">
                            <a class="nav-link  <?php echo ($url == 'form')?'active':''?>" aria-current="page" href="<?= base_url('page/form')?>">ভর্তি ফরম</a>
                        </li>
                        <li class="nav-item bor_l <?php echo ($url == 'payment')?'active':''?>">
                            <a class="nav-link <?php echo ($url == 'payment')?'active':''?> " aria-current="page" href="<?= base_url('page/payment')?>">পেমেন্ট</a>
                        </li>
                        <li class="nav-item bor_l <?php echo ($url == 'notice')?'active':''?>">
                            <a class="nav-link <?php echo ($url == 'notice')?'active':''?> " aria-current="page" href="<?= base_url('page/notice')?>">নোটিশ</a>
                        </li>
                        <li class="nav-item bor_l <?php echo ($url == 'gallery')?'active':''?>">
                            <a class="nav-link <?php echo ($url == 'gallery')?'active':''?>  " aria-current="page" href="<?= base_url('page/gallery')?>">ফটোগ্যালারি</a>
                        </li>
                        <li class="nav-item bor_l <?php echo ($url == 'contact')?'active':''?>">
                            <a class="nav-link <?php echo ($url == 'contact')?'active':''?>  " aria-current="page" href="<?= base_url('page/contact')?>">যোগাযোগ</a>
                        </li>
                        <li class="nav-item <?php echo ($url == 'login')?'active':''?>">
                            <a class="nav-link <?php echo ($url == 'login')?'active':''?>  " aria-current="page" href="<?= base_url('page/login')?>">লগ ইন</a>
                        </li>

                    </ul>

                </div>
            </nav>
    </div>
</section>

<section class="marque">
    <div class="container bg_w">
        <div class="row">
            <div class="col-md-2 pe-0">
                <button class="btn btn-news-2"> সর্বশেষ খবর </button>
            </div>
            <div class="col-md-10  ps-0 ">
                <marquee class="p-2 bg-marque_2" behavior="scroll" direction="left" scrollamount="8">
                    <?php foreach (notice_marquee_view() as $notice) { ?>
                        <span ><?php echo $notice->description . '... '; ?></span>
                    <?php } ?>
                </marquee>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container bg_w border_L_R" >
        <div class="row">
