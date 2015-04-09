<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">



		<?php
		query_posts(
			array(
				/* 投稿タイプのslug */
				'post_type' => 'custom_post_type1',
				// 'posts_per_page' => 0,
				'paged' => get_query_var('paged'),
			)
		);
		?>
		<?php if (have_posts()): ?>
		<!-- 投稿記事があった場合の処理 -->
			<?php while(have_posts()) : the_post(); ?>
			<!-- 投稿記事の数だけループ（固定ページでも投稿ページでも使える） -->
		        	<h2><?php the_title(); /* タイトルを出力 */ ?></h2>
		        	<div class="post">
		        		<?php the_content(); /* 投稿蘭の内容を出力 */ ?>
		        	</div>
			<?php endwhile; ?>
		<?php else: ?>
			<!-- 投稿記事がなかった場合の処理 -->
		<?php endif; ?>

		<p><?php previous_posts_link( '前の10件へ' ); ?> | <?php next_posts_link( '次の10件へ' ); ?></p>
		<?php wp_reset_query(); ?>


		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
<!-- tpl: <?php /* debug */global $template; echo $template_name = basename($template, '.php');  ?> -->