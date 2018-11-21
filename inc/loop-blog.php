<!-- Content -->
<div class="col-md-8 col-sm-8">
	<section id="content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article class="blog-post">
			<?php if(has_post_thumbnail()) { ?>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array('class' => 'img-responsive'));?></a>
			<?php } else {}?>
			<header><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></header>
			<figure class="meta">
				<i class="fa fa-user"></i> <?php the_author(); ?>&nbsp;
				<i class="fa fa-calendar"></i> <?php the_time( get_option( 'date_format' ) ); ?>
				<div class="tags">
					<?php the_category(', '); ?>
				</div>
			</figure>
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>" class="btn btn-default btn-small btn-grey">Read More</a>
		</article><!-- /.blog-post -->
		<?php endwhile; endif; ?>
		

		<!-- Pagination -->
		<div class="center">
			<?php wpex_pagination(); ?>
			<ul class="pagination">
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
			</ul><!-- /.pagination-->
		</div><!-- /.center-->
	</section><!-- /#content -->
</div><!-- /.col-md-9 -->
<!-- end Content -->
