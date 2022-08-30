<?php get_header(); ?>

<?php
	$posts = get_posts([
		'post_type' => 'topics',
		'post_status' => 'publish',
		'numberposts' => -1
		// 'order'    => 'ASC'
  	]);
?>

<main class="p-topics">
	<div class="c-title c-title--page">
		<h1>TOPICS</h1>
	</div>
	<div class="l-container">
		<ul class="c-listpost">
			<?php foreach ($posts as $post){?>
			<li>
				<span class="datepost"><?php echo $post->post_date_gmt ?></span>
				<a href="cat.html" class="c-label">特集記事</a>
				<a href="#" class="c-label">デイリーニュース</a>
				<a href="<?php echo $post->post_title ?>"><?php echo $post->post_title; ?></a>
			</li>
			<?php } ?>
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