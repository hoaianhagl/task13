<?php get_header(); ?>

<main class="p-topics">
	<div class="c-title c-title--page">
		<h1>TOPICS</h1>
	</div>
	<div class="l-container">
		<ul class="c-listpost">
		<?php
		$args = [
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page'=> 10,  
			// 'order'    => 'ASC'
		];
		$the_query = new WP_Query( $args );
		?>
		<?php global $wp_query; $wp_query->in_the_loop = true; ?>
		<?php 
			// The Loop
			while ( $the_query->have_posts() ) : $the_query->the_post();
		?>
					<li>
						<span class="datepost"><?= get_the_date('Y-m-d') ?></span>
						<a href="cat.html" class="c-label">特集記事</a>
						<a href="#" class="c-label">デイリーニュース</a>
						<a href="<?= get_the_permalink() ?>"><?= get_the_title(); ?></a>
					</li>
		<?php endwhile; ?>
			<!-- <li>
				<span class="datepost">2018/08/22</span>
				<a href="cat.html" class="c-label">デイリーニュース</a>
				<a href="post.html">介護保険の被保険者</a>
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
			<li>
				<span class="datepost">2018/08/20</span>
				<a href="cat.html" class="c-label">特集記事</a>
				<a href="post.html">国税庁レポートから読み解く2018年度の重点事項</a>
			</li>
			<li>
				<span class="datepost">2018/08/20</span>
				<a href="cat.html" class="c-label">特集記事</a>
				<a href="post.html">国税庁レポートから読み解く2018年度の重点事項</a>
			</li>
			<li>
				<span class="datepost">2018/08/20</span>
				<a href="cat.html" class="c-label">特集記事</a>
				<a href="post.html">国税庁レポートから読み解く2018年度の重点事項</a>
			</li>
			<li>
				<span class="datepost">2018/08/20</span>
				<a href="cat.html" class="c-label">特集記事</a>
				<a href="post.html">国税庁レポートから読み解く2018年度の重点事項</a>
			</li>
			<li>
				<span class="datepost">2018/08/20</span>
				<a href="cat.html" class="c-label">特集記事</a>
				<a href="post.html">国税庁レポートから読み解く2018年度の重点事項</a>
			</li> -->
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