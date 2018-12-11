<!-- Content -->
	<?php if ( is_page_template('full-width.php') ) { ?>
	<div class="col-sm-12">
	<?php } else { ?>
	<div class="col-md-8 col-sm-8">
		<?php } ?>
	<section id="content">
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php if(has_post_thumbnail()) { ?>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full',array('class' => 'img-responsive'));?></a>
			<?php } else {}?>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</section><!-- /#content -->
</div><!-- /.col-md-9 -->
<!-- end Content -->
