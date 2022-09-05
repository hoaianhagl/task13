<?php get_header(); ?>

<main class="p-single">
	<div class="c-title c-title--page">
		<h1>TOPICS</h1>
	</div>
	<div class="l-container">
		<?php get_sidebar(); ?>
		<div class="l-main">
			<h2 class="p-single__title"><?= get_the_title() ?></h2>
			<div class="p-single__info">
				<span><?= get_the_date('Y/m/d') ?></span>
				<p>
					<?php 
						$cats = get_the_category(); 
						foreach ($cats as $cat) {
					?>
						<a href="<?= get_category_link($cat->cat_ID) ?>"><?= $cat->name ?></a>
					<?php } ?>
				</p>
			</div>

			<div class="p-single__content">
				<?php the_post_thumbnail(); ?>
				<?php the_content(); ?>
			</div>

			<ul class="groupbtn">
				<li class="prev_link">
					<?php 
						$prev_post = get_adjacent_post(false, '', true);
						if(!empty($prev_post)) {
					?>
					<a href="<?= get_permalink($prev_post->ID) ?>">Prev</a>
					<?php } ?>
				</li>
				<li class="next_link"><a href="<?= next_posts_link(); ?>">Next</a></li>
			</ul>
		</div>
	</div>
</main>

<?php get_footer(); ?>