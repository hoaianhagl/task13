<?php get_header(); ?>

<div class="c-mainvisual">
	<div class="l-container">
		<div class="c-mainvisual__inner js-slider">
		<?php $slider = get_field('slider') ?>
		<?php if ($slider): ?>
			<?php foreach ($slider as $imageItem): ?>	
			<a href="#">
				<img src="<?= $imageItem['image_slider']['url'] ?>" alt="<?= $imageItem['image_slider']['alt'] ?>">
			</a>
			<?php endforeach; ?>
		<?php endif; ?>
		</div>
	</div>
</div>

<main>
	<div class="l-container">
		<div class="c-grouplink">
			<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/img_01_no.png" alt="" class="js-imglink"></a>
			<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/img_02_no.png" alt="" class="js-imglink"></a>
			<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/img_03_no.png" alt="" class="js-imglink"></a>
		</div>

		<div class="p-topics">
			<h2 class="c-title">Topics</h2>
			
			<ul class="c-listpost">
				<?php
				$args = [
					'post_type' => 'post',
					'post_status' => 'publish',
					'posts_per_page'=> 5,  
				];
				$the_query = new WP_Query( $args );
				?>
				<?php global $wp_query; $wp_query->in_the_loop = true; ?>
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
			<div class="l-btn">
				<a href="topics" class="c-btn c-btn--small">一覧を見る</a>
			</div>
		</div>

		<div class="c-grouplink">
			<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/btn_03_no.png" alt="" class="js-imglink"></a>
			<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/btn_04_no.png" alt="" class="js-imglink"></a>
		</div>

		<!-- <div class="c-access"> -->
		
		<?php
		// Get field
		$access = get_field('access');
		?>
		
		<?php 
		// If having access
		if($access): ?>
			<?php foreach ($access as $item): ?>
				<?php 
					$title = $item['title_map'];
					$add = $item['add'];
					$time = $item['time'];
					$tel = $item['tel'];
					$fax = $item['fax'];
					$email = $item['email'];
					$image_link = $item['image']['url'];
					$image_alt = $item['image']['alt'];
				?>
			<div class="c-access">
				<div class="c-access__info">
					<h3 class="c-title c-title--sub"><?= $title ?></h3>
					<p class="address"><?= $add ?></p>
					<p class="time"><?= $time ?></p>
					<br/>
					<p>
						<span class="tel">tel : <?= $tel ?></span>
						<span class="fax">fax : <?= $fax ?></span>
						<br/>
						<?php if($email): ?>
						<span class="email">mail : <?= $email ?></span>	
						<?php endif; ?>				
					</p>
				</div>
				<div class="c-access__img">
					<img src="<?= $image_link ?>" alt="<?= $image_alt ?>">
				</div>
			</div>
			
			<?php endforeach; ?>
		<?php endif; ?>
		<!-- </div> -->
	</div>
</main>

<?php get_footer(); ?>
