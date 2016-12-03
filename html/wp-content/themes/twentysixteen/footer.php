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

		<footer id="colophon" class="site-footer " role="contentinfo" 
<?php if (strpos($_SERVER["REQUEST_URI"], "/vi/")!==false){ echo""; }else {echo 'style="background-image: url(../../../wp-content/uploads/2016/09/footer-3.png);"';} ?> >
			<div class="site-info site-content site-inner">
				<?php
					/**
					 * Fires before the twentysixteen footer text for footer customization.
					 *
					 * @since Twenty Sixteen 1.0
					 */
					do_action( 'twentysixteen_credits' );
				?>
				<a href="<?php echo get_home_url() ?>">KOALAHOUSE.COM.VN - </a>
				<a href="#" class="site-info-forum">FORUM | </a>
				<a href="#" class="site-info-forum">SITEMAP</a>
				</br>
				<table class="footer-address">
					<tr>
						<td>
							* <?php gmwfb( $id = "2"); ?> </br>
							  &nbsp;&nbsp;&nbsp;Tel: +(84.4)3772 3060/ 3762 1453/ 3831 4426
					
						</td>
						<td>
						</td>
					</tr>
					<tr>
						<td>
							* <?php gmwfb( $id = "3"); ?> </br>
							  &nbsp;&nbsp;&nbsp;Tel: +(84.4) 3974 7617/ 3974 7681
						</td>

						<td>
							* <?php gmwfb( $id = "4"); ?></br>
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
