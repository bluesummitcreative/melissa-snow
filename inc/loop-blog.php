<!-- Content -->
<div class="col-md-8 col-sm-8">
	<section id="content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article class="blog-post">
			<?php if(has_post_thumbnail()) { ?>
				<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(array('class' => 'img-responsive'));?></a>
			<?php } else {}?>
			<header><a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a></header>
			<figure class="meta">
				<a href="#" class="link-icon"><i class="fa fa-user"></i><?php the_author(); ?></a>
				<a href="#" class="link-icon"><i class="fa fa-calendar"></i><?php the_time( get_option( 'date_format' ) ); ?></a>
				<div class="tags">
					<?php the_category(', '); ?>
				</div>
			</figure>
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink() ?>" class="btn btn-default btn-small btn-grey">Read More</a>
		</article><!-- /.blog-post -->
		<?php endwhile; endif; ?>
		

		<!-- Pagination -->
		<div class="center">
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