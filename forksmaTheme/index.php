<?php get_header(); ?>

<div class="body-container">
	<div class="content-container">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post(); ?>

					<h2><?php the_title() ?></h2>
					<?php the_content() ?>
					By <?php the_author_posts_link(); ?> on <?php the_time('F jS, Y'); ?>
				
				<?php endwhile;

			else :
				echo '<p>There are no posts!</p>';

			endif;
			?>
	</div>
</div>

<?php get_footer(); ?>