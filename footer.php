<footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div class="left">
                        <span>Copyright &copy <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | <a<?php if (!is_front_page()) { ?> rel="nofollow"<?php } ?> target="_blank" href="https://www.bluesummitcreative.com/">Website Design by Blue Summit Creative</a></span>
                        <div class="bg-left"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="right">
                        <span><a href="#top" class="scroll">To Top<i class="arrow_carrot-up_alt2"></i></a></span>
                        <div class="bg-right"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-bg.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ .container-->
    </footer>

</div>
</div>

<div class="modal fade" id="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title">Make an Appointment</h2>
                <h4>Select the Time</h4>
            </div>
            <div class="modal-body">
                <div class="times">
                    <form>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn time-radio active">
                                <input type="radio" name="options" id="option1">08:00
                                <span>Available</span>
                            </label>
                            <label class="btn time-radio">
                                <input type="radio" name="options" id="option2">09:00
                                <span>Available</span>
                            </label>
                            <label class="btn time-radio">
                                <input type="radio" name="options" id="option3">10:00
                                <span>Available</span>
                            </label>
                            <label class="btn time-radio">
                                <input type="radio" name="options" id="option4">11:00
                                <span>Available</span>
                            </label>
                            <label class="btn time-radio not-available">
                                <input type="radio" name="options" id="option5">12:00
                                <span>Not available</span>
                            </label>
                            <label class="btn time-radio">
                                <input type="radio" name="options" id="option6">13:00
                                <span>Available</span>
                            </label>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control framed" name="modal-first-name" placeholder="First Name" required>
                                </div><!-- /.form-group -->
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control framed" name="modal-last-name" placeholder="Last Name" required>
                                </div><!-- /.form-group -->
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="email" class="form-control framed" name="modal-email" placeholder="E-mail" required>
                                </div><!-- /.form-group -->
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control framed" name="modal-number" placeholder="Number" pattern="\d*" required>
                                </div><!-- /.form-group -->
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn pull-right btn-primary" id="form-contact-submit">Contact Me</button>
                            </div><!-- /.form-group -->
                        </div>
                    </form>
                </div><!-- /.times -->
            </div><!-- /.modal-body -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php wp_footer(); ?>
</body>