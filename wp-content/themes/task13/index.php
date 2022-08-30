<?php get_header(); ?>

<div class="c-mainvisual">
	<div class="l-container">
		<div class="c-mainvisual__inner js-slider">
			<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/main_img01_no.png" alt=""></a>
			<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/main_img02_no.png" alt=""></a>
			<a href="service.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/main_img03_no.png" alt=""></a>
			<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/main_img04_no.png" alt=""></a>
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
				<a href="topics.html" class="c-btn c-btn--small">一覧を見る</a>
			</div>
		</div>

		<div class="c-grouplink">
			<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/btn_03_no.png" alt="" class="js-imglink"></a>
			<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/btn_04_no.png" alt="" class="js-imglink"></a>
		</div>

		<!-- <div class="c-access"> -->
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="c-access">
			<div class="c-access__info">
				<h3 class="c-title c-title--sub"><?php the_field('title_map'); ?></h3>
				<p class="address"><?php the_field('add'); ?></p>
				<p class="time"><?php the_field('time'); ?></p>
				<br/>
				<p>
					<span class="tel">tel : <?php the_field('tel'); ?></span>
					<span class="fax">fax : <?php the_field('fax'); ?></span>
					<br/>
					<span class="email">mail : <?php the_field('email'); ?></span>
				</p>
			</div>
			<div class="c-access__img">
				<img src="<?php echo get_stylesheet_directory_uri(); ?><?php the_field('image'); ?>" alt="">
			</div>
		</div>
		<?php endwhile; // end of the loop. ?>
		
		<div class="c-access">
			<div class="c-access__info">
				<h3 class="c-title c-title--sub">本店</h3>
				<p class="address">〒210-0005　川崎市川崎区東田町8 パレール三井ビル8階</p>
				<p class="time">JR川崎駅東口より徒歩7分　京急川崎駅より徒歩5分</p>
				<br/>
				<p>
					<span class="tel">tel : 044-233-2811</span>
					<span class="fax">fax : 044-233-0818</span>
					<br/>
					<span class="email">mail : info@wms.or.jp</span>
				</p>
			</div>
			<div class="c-access__img">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/map_01.png" alt="">
			</div>
		</div>

		<div class="c-access">
			<div class="c-access__info">
				<h3 class="c-title c-title--sub">相模原支店</h3>
				<p class="address">〒252-0231　相模原市中央区相模原3-8-25 第3JSビル7階</p>
				<p class="time">JR横浜線相模原駅より徒歩2分</p>
				<br/>
				<p>
					<span class="tel">tel : 042-704-9581</span>
					<span class="fax">fax : 042-704-9582</span>
					<br/>
					<span class="email"></span>
				</p>
			</div>
			<div class="c-access__img">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/map_02.png" alt="">
			</div>
		</div>
		<!-- </div> -->
	</div>
</main>

<?php get_footer(); ?>
