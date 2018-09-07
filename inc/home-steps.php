<div class="block" id="five-steps-to-success">
			<div class="container">
				<h2 class="center">Five Steps to Your Success</h2>
				<div class="steps">
					<?php if( have_rows('steps') ): $counter = 1; while ( have_rows('steps') ) : the_row(); ?>
					<div class="step width-20">
						<figure>
							<aside><?php echo $counter; ?>.</aside>
							<div class="bar height-<?php $height = 20; if ($counter > 1) { echo $height*$counter; } else { echo $height; } ?>">
								<div class="arrow"></div>
							</div>
						</figure>
						<h3><?php the_sub_field('step_title'); ?></h3>
						<hr>
						<p><?php the_sub_field('step_description'); ?></p>
					</div>
					<?php $counter++; endwhile; endif;?>
				</div>
				<!--/ .steps-->
				<div class="center">
					<a href="/contact/" class="btn btn-primary">Contact Me!</a>
				</div>
			</div>
			<!--/ .container-->
			<div class="bg bg-color-neutral opacity-50"></div><!--/ .bg-->
		</div>
		<!--/ .block-->
