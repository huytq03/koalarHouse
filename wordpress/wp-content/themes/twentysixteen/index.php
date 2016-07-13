<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="tin-tuc home-page-item">
			<div class="site-header-menu-child header-menu-child-tin-tuc">
			<img src="wp-content/uploads/2016/07/tin-tuc.png" >
			<h2 class="child-menu-title">Tin tức nổi bật </h2>
			</div>
			<ul class="menu-child-items">
			  <?php
			    $args = array( 'posts_per_page' => 3, 'orderby' => 'post_date', 'category' => 6 );
			    $count = 0;
			    $hotnews = get_posts( $args );
			    foreach ( $hotnews as $post ) : setup_postdata( $post );
			    if($count == 0) 
			    	the_post_thumbnail();
			    $count++;
			    ?>
			        <li>
			            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			        </li>
			    <?php endforeach; 
			    wp_reset_postdata();?>
			</ul>
			<?php if($hotnews != 0) { ?>
				<a href="#" class="button-detail button-tin-tuc">Chi tiết</a>
			<?php } ?>
		</div>
		<div class="thong-bao home-page-item">
			<div class="site-header-menu-child header-menu-child-thong-bao">
			<img src="wp-content/uploads/2016/07/thong-bao.png" >
			<h2 class="child-menu-title"> Bảng thông báo </h2>
			</div>
			<ul class="menu-child-items">
				<?php
			    $args = array( 'posts_per_page' => 3, 'orderby' => 'post_date', 'category' => 4 );
			    $hotannotations = get_posts( $args );
			    foreach ( $hotannotations as $post ) : setup_postdata( $post );			    ?>
			        <li>
			            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			        </li>
			    <?php endforeach; 
			    wp_reset_postdata();?>
			</ul>

			<?php if($hotannotations != 0) { ?>

			<a href="#" class="button-detail button-thong-bao">Chi tiết</a>
			<?php } ?>
		</div>
		<div class="kien-thuc home-page-item">
			<div class="site-header-menu-child header-menu-child-kien-thuc">
			<img src="wp-content/uploads/2016/07/kien-thuc.png" >
			<h2 class="child-menu-title"> Kiến thức nuôi dạy trẻ </h2>
			</div>
			<ul class="menu-child-items">
			<?php
			    $args = array( 'posts_per_page' => 4, 'orderby' => 'post_date', 'category' => 5 );
			    $hotknowledges = get_posts( $args );
			    foreach ( $hotknowledges as $post ) : setup_postdata( $post );			    ?>
			        <li>
			            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			        </li>
			    <?php endforeach; 
			    wp_reset_postdata();?>
			</ul>

			<?php if($hotknowledges != 0) { ?>
			<a href="#" class="button-detail button-kien-thuc">Chi tiết</a>
			<?php } ?>
		</div>
		<div class="thu-vien home-page-item">
			<div>
				<img src="wp-content/uploads/2016/07/home-icon-fun-story.png">
				</br>
				<a href=<?php echo get_page_link(217); ?>>Bé Koalar </br>ngộ nghĩnh</a>
			</div>
			<div>
				<img src="wp-content/uploads/2016/07/home-icon-images.png" style="margin-bottom: 30px;">
				</br><a href=<?php echo get_page_link(231); ?> >Thư viện ảnh</a>
			</div>
			<div>
				<img src="wp-content/uploads/2016/07/home-icon-video.png" style="margin-bottom: 30px;">
				</br><a href=<?php echo get_page_link(225); ?> >Video Clip</a>
			</div>
		</div>
		<div class="gioi-thieu home-page-item"></div>
		<div class="tay-nho home-page-item">
			<div class="">
			<img src="wp-content/uploads/2016/07/Forma-11.png" >
			<h2 > Quỹ bàn tay nhỏ </h2>
			</div>
			
			<ul class="menu-child-items">
			<?php
			    $args = array( 'posts_per_page' => 3, 'orderby' => 'post_date', 'category' => 7 );
			    $hotcharity = get_posts( $args );
			    foreach ( $hotcharity as $post ) : setup_postdata( $post );			    ?>
			        <li>
			            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			        </li>
			    <?php endforeach; 
			    wp_reset_postdata();?>
			</ul>
		</div>
		<div class="vuon-rau home-page-item"></div>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>