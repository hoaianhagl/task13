<?php get_header(); ?>

<main class="p-topics">
	<div class="c-title c-title--page">
		<h1>SEARCH RESULTS</h1>
	</div>
	<div class="l-container">
		<ul class="c-listpost">
			<?php 
				$s = get_search_query(); 
				$args = [
					's' =>  $s,
				];
				$the_query = new WP_Query( $args );
				global $wp_query; $wp_query->in_the_loop = true; 
			?>
			<?php 
				// The Loop
				while ( $the_query->have_posts() ) : $the_query->the_post();
			?>
				<li>
					<span class="datepost"><?= get_the_date('Y/m/d') ?></span>
					<?php 
						$cats = get_the_category(get_the_ID());
						foreach ($cats as $cat) {
					?>	
						<a href="<?= get_category_link($cat->cat_ID) ?>" class="c-label"><?= $cat->name ?></a>
					<?php } ?>
					<a href="<?= get_the_permalink() ?>"><?= get_the_title(); ?></a>
				</li>
			<?php endwhile; ?>
		</ul>

		<div class="c-pnav">
			<a href="" class="prev"></a>
			<a href="" class="current">1</a>
			<a href="">2</a>
			<a href="">3</a>
			<a href="">4</a>
			<a href="" class="next"></a>
		</div>
	</div>
</main>

<?php get_footer(); ?>
