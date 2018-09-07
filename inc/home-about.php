<div class="block" id="about-me">
        <div class="container">
            <h2>About Me</h2>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="center">
                        <img src="<?php the_field('about_image'); ?>" class="circle" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <?php the_field('about_text'); ?>
                </div>
                <!--/ .col-sm-6-->
            </div>
            <!--/ .row-->
        </div>
        <!--/ .container-->
    </div>
    	<!--/ .block-->
