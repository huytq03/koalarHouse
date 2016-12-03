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

get_header(); 
$is_vi = strpos($_SERVER["REQUEST_URI"], "/vi/"); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="tin-tuc home-page-item">
			<div class="site-header-menu-child header-menu-child-tin-tuc">
			<img src="../wp-content/uploads/2016/07/tin-tuc.png" >
			<h2 class="child-menu-title"><?php if (strpos($_SERVER["REQUEST_URI"], "/vi/")!==false){ echo"Tin tức nổi bật"; }else {echo "From the Director";} ?>  </h2>
			</div>
			<ul class="menu-child-items">
			  <?php
			  if($is_vi)
			  	$cate_tag = 6;
			  	else $cate_tag = 18;
			    $args = array( 'posts_per_page' => 3, 'orderby' => 'post_date', 'category' => $cate_tag );
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
			<?php if($hotnews != 0) {
			if (strpos($_SERVER["REQUEST_URI"], "/vi/")!==false){ ?>
				<a href="./tin-tuc-noi-bat/" class="button-detail button-tin-tuc"> Chi tiết</a>
			<?php } else { ?>
				<!-- <a href="./hot-news/" class="button-detail button-tin-tuc"> Detail</a> -->
			<?php }}?> 
		</div>
		<div class="thong-bao home-page-item">
			<div class="site-header-menu-child header-menu-child-thong-bao">
			<img src="../wp-content/uploads/2016/07/thong-bao.png" >
			<h2 class="child-menu-title"> <?php if (strpos($_SERVER["REQUEST_URI"], "/vi/")!==false){ echo"Bảng tin"; }else {echo "Newsletter";} ?>  </h2>
			</div>
			<ul class="menu-child-items">
                        <?php
			if(strpos($_SERVER["REQUEST_URI"], "/vi/")!==false){ ?>
			    <li>
			    		<a href="./lich-su-kien/"> Lịch sự kiện</a>
			    </li>
			    <li>
			    		<a href="./thong-bao-3/">Thông báo</a>
			    </li>
			    <li>
			    		<a href="./ban-tin-thang/">Bản tin tháng</a>
			    
			    </li>
                         <?php } else { 
                            $cate_tag_2 = 82;
			    $args = array( 'posts_per_page' => 3, 'orderby' => 'post_date', 'category' => $cate_tag_2 );
			    $hotknowledges = get_posts( $args );
			    foreach ( $hotknowledges as $post ) : setup_postdata( $post ); ?>
			        <li>
			            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			        </li>
			    <?php endforeach; 
			    wp_reset_postdata(); ?>
			</ul>
			
			 <a href="./announcement/" class="button-detail button-thong-bao">Detail</a>
                        <?php } ?>
		</div>
		<div class="kien-thuc home-page-item">
			<div class="site-header-menu-child header-menu-child-kien-thuc">
			<img src="../wp-content/uploads/2016/07/kien-thuc.png" >
			<h2 class="child-menu-title"> <?php if (strpos($_SERVER["REQUEST_URI"], "/vi/")!==false){ echo"Kiến thức nuôi dạy trẻ"; }else {echo "Parenting tips";} ?>  </h2>
			</div>
			<ul class="menu-child-items">
			<?php
			if($is_vi)
			  	$cate_tag_2 = 5;
			  	else $cate_tag_2 = 70;
			    $args = array( 'posts_per_page' => 3, 'orderby' => 'post_date', 'category' => $cate_tag_2 );
			    $hotknowledges = get_posts( $args );
			    foreach ( $hotknowledges as $post ) : setup_postdata( $post );			    ?>
			        <li>
			            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			        </li>
			    <?php endforeach; 
			    wp_reset_postdata();?>
			</ul>

			<?php if($hotknowledges != 0) {
			if (strpos($_SERVER["REQUEST_URI"], "/vi/")!==false){ ?>
			<a href="./kien-thuc-nuoi-day-tre/" class="button-detail button-kien-thuc">Chi tiết</a>
			<?php } else { ?>
				<a href="./knowledge-of-parenting/" class="button-detail button-kien-thuc"> Detail</a>
			<?php }}?> 
		</div>
		<div class="thu-vien home-page-item">
			<div <?php if(strpos($_SERVER["REQUEST_URI"], "/vi/")!==false) {echo ""; } else {echo "style=display:none;";} ?> >
				<a href=<?php if(strpos($_SERVER["REQUEST_URI"], "/vi/")!==false) echo get_page_link(217); else echo get_page_link(586); ?>>
					<img src="../wp-content/uploads/2016/07/home-icon-fun-story.png" style="margin-bottom: 10px;width: 70% !important;">
					</br>
					<span>
						<?php if(strpos($_SERVER["REQUEST_URI"], "/vi/")!==false) {echo "Bé Koala ngộ nghĩnh";} else {echo "Funny Stories";} ?>
					</span>
				</a>
			</div>
			<div>
				<a href=<?php if(strpos($_SERVER["REQUEST_URI"], "/vi/")!==false) echo get_page_link(231); else echo get_page_link(582);?> >
					<img src="../wp-content/uploads/2016/07/home-icon-images.png" style="margin-bottom: 10px; width: 70% !important;">
					</br>
					<span>
						<?php if (strpos($_SERVER["REQUEST_URI"], "/vi/")!==false) echo "Thư viện ảnh"; else echo "Gallery"; ?>
					</span>
				</a>
			</div>
			<div>
				<a href=<?php if(strpos($_SERVER["REQUEST_URI"], "/vi/")!==false) echo get_page_link(225); else echo get_page_link(574); ?> >
					<img src="../wp-content/uploads/2016/07/home-icon-video.png" style="margin-bottom: 10px; width: 70%!important;">
					</br>
					<span>Video Clips</span>
				</a>
			</div>
		</div>
		<div class="gioi-thieu home-page-item">
			<?php 
				if (strpos($_SERVER["REQUEST_URI"], "/vi/")!==false)
					$post_id = 292;
				else
					$post_id = 633;
				$bucket_post = get_post($post_id);
			?>
			<div class="gioi-thieu-header">
				<?php echo get_the_post_thumbnail($post_id, array(65,65)) ?>
				<h2>
				<?php echo $bucket_post->post_title; ?>
				</h2>
				</div>
			<div class="bucket-post-home-page">
				<span>
					<?php echo $bucket_post->post_excerpt; ?>

					<a class="more-link" href=<?php echo get_permalink($post_id) ?> > </br> <?php if(pll_current_language() != 'en') echo"Xem tiếp"; else echo"Continue"; ?> >> </a>
				</span>
				<img src="../wp-content/uploads/2016/07/imgcenter.png">
			</div>
		</div>
		
		<div class="tay-nho home-page-item">
			<div class="tay-nho-header">
			<img src="../wp-content/uploads/2016/07/Forma-11.png">
			<h2 > <?php if (strpos($_SERVER["REQUEST_URI"], "/vi/")!==false){ echo"Quỹ bàn tay nhỏ"; }else {echo '"Little hand" community projects';} ?> </h2>
			</div>
			
			<ul class="menu-child-items tay-nho-menu">
			<?php 
			    if($is_vi)
				$category = 7;
				else $category = 79;
			    $args = array( 'posts_per_page' => 3, 'orderby' => 'post_date', 'category' => $category );
			    $hotcharity = get_posts( $args );
			    foreach ( $hotcharity as $post ) : setup_postdata( $post );			    ?>
			        <li>
			            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			        </li>
			    <?php endforeach; 
			    wp_reset_postdata();?>
			</ul>
		</div>
		<div class="vuon-rau home-page-item">
			<?php 
			if (strpos($_SERVER["REQUEST_URI"], "/vi/")!==false)
					$post_id = 296;
				else
					$post_id = 638;
				$bucket_post = get_post($post_id);
			?>
			<div class="gioi-thieu-header">
				<?php echo get_the_post_thumbnail($post_id) ?>
				<h2>
				<?php echo $bucket_post->post_title; ?></h2>
				</div>
			<div class="green-post-home-page">
				<span>
					<?php echo $bucket_post->post_excerpt; ?>

					<a class="more-link" href=<?php echo get_permalink($post_id) ?> ></br><?php if(pll_current_language() != 'en') echo"Xem tiếp"; else echo"Continue"; ?> >> </a>
				</span>
				<img style="border-radius: 20px;" src="../wp-content/uploads/2016/09/anh-vuon-rau-e1474471563582.jpg">
			</div>

		</div>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>