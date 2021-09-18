<?php get_header() ?>

<main class="blog-wrapper">
	<div class="blog-title-wrapper"><h1 class="blog__title">Blog</h1></div>

	<section class="blog__text">
		<p>Here you can find announcements, events, news, and posts.</p>
	</section>

	<main class="blog-list-wrapper">

		<?php
		$p = new WP_Query(array('post-type' => 'post'));
		if ($p->have_posts()) {
			while ($p->have_posts()) {
				$p->the_post(); ?>
				<section class="blog__entry">
					<div class="blog-entry__title-wrapper">
						<div class="blog-entry__category"><?php the_category(); ?></div>
						<h1 class="blog-entry__title"><a href="#"><?php the_title(); ?></a></h1>
					</div>

					<div class="blog-entry__metadata">
						<div class="blog-entry__author"><span>By:</span> <span><?php the_author(); ?></span></div>
						<div class="blog-entry__slashes"> // </div>
						<div class="blog-entry__date"><span>Posted:</span> <span><?php the_date(); ?></span></div>
					</div>
					
					<article class="blog-entry__preview-wrapper">
						<p><?php the_excerpt(); ?></p>
					</article>

					<div class="blog-entry__cta">
						<?php the_shortlink("Read more"); ?>
					</div>
				</section> <!-- end entry --> <?php
			}
		} ?>

		
	</main> <!-- end set of entries -->

</main> <!-- end main content -->

<?php get_footer() ?>