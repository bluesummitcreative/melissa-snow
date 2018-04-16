<!-- Content -->
<div class="col-md-8 col-sm-8">
	<section id="content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</section><!-- /#content -->
</div><!-- /.col-md-9 -->
<!-- end Content -->