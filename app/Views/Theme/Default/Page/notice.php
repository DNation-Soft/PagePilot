<div class="col-md-9 d-flex flex-column justify-content-between">
    <div class="row">
        <div class="col-md-12">
            <div class="main_content position-relative">
                <img src="<?php echo base_url() ?>/assets/default/image/ar.PNG" alt="" class="main-img">
                <center><p class="main-title">নোটিশ বোর্ড  </p></center>
                <?php $data = get_all_notice(); ?>
                <div class="main-text">
                    <table class="table table-bordered " id="teacher">
                        <thead>
                        <tr>
                            <th>ক্রমিক </th>
                            <th> শিরোনাম </th>
                            <th> প্রকাশের তালিকা </th>
<!--                            <th> ডাউনলোড </th>-->
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; foreach ($data as $val){ ?>
                            <tr>
                                <td width="5"><?php echo $i++?></td>
                                <td><?php echo $val->description;?></td>
                                <td width="120"><?php echo invoiceDateFormat($val->createdDtm);?></td>
<!--                                <td>d</td>-->
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <div class="map mt-4 bottom-row">
        <center><p class="title-home "><a href="https://maps.app.goo.gl/syrWkN55uJLzsdBTA" class="text-decoration-none text-danger " target="_blank">প্রতিষ্ঠানের গুগল ম্যাপ </a></p></center>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29372.021260362104!2d89.3942166!3d23.0420263!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ffa1d46d09228d%3A0x34f9ff76c7bae818!2sNOAPARA%20TECHNICAL%20INSTITUTE!5e0!3m2!1sen!2sbd!4v1728222935153!5m2!1sen!2sbd"
                width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>