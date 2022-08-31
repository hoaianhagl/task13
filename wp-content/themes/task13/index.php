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
				<li>
					<span class="datepost">2018/08/24</span>
					<a href="cat.html" class="c-label">特集記事</a>
					<a href="cat.html" class="c-label">デイリーニュース</a>
					<a href="post">新しい権利　配偶者終身居住権</a>
				</li>
				<li>
					<span class="datepost">2018/08/22</span>
					<a href="cat.html" class="c-label">デイリーニュース</a>
					<a href="post">介護保険の被保険者</a>
				</li>
				<li>
					<span class="datepost">2018/08/21</span>
					<a href="cat.html" class="c-label">デイリーニュース</a>
					<a href="post.html">自然災害と中小企業支援策</a>
				</li>	
				<li>
					<span class="datepost">2018/08/20</span>
					<a href="cat.html" class="c-label">特集記事</a>
					<a href="post.html">国税庁レポートから読み解く2018年度の重点事項</a>
				</li>
				<li>
					<span class="datepost">2018/08/20</span>
					<a href="cat.html" class="c-label">事務所ニュース</a>
					<a href="post.html">働き方改革”と管理者</a>
				</li>
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
