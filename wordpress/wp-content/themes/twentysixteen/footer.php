<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer " role="contentinfo">
			<div class="site-info site-content site-inner">
				<?php
					/**
					 * Fires before the twentysixteen footer text for footer customization.
					 *
					 * @since Twenty Sixteen 1.0
					 */
					do_action( 'twentysixteen_credits' );
				?>
				<a href="<?php echo get_home_url() ?>">KOALAHOUSE.COM.VN - FORUM | SITEMAP</a>
				</br>
				<table class="footer-address">
					<tr>
						<td>
							<p>
							* Số 5 Phan Kế Bính, Quận Ba Đình, Hà Nội, Việt Nam </br>
							  &nbsp;&nbsp;&nbsp;Tel: +(84.4)3772 3060/ 3762 1453/ 3831 4426
							  </p>
						</td>
						<td>
						</td>
					</tr>
					<tr>
						<td>
							* Số 340 Bà Triệu, Quận Hai Bà Trưng, Hà Nội, Việt Nam</br>
							  &nbsp;&nbsp;&nbsp;Tel: +(84.4) 3974 7617/ 3974 7681
						</td>

						<td>
							* Villa A48 Đỗ Quang, Quận Cầu Giấy, Hà Nội, Việt Nam</br>
							  &nbsp;&nbsp;&nbsp;Tel: +(84.4) 6281 1296/ 6284 2746
						</td>
					</tr>
				</table>
			</div> 
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
