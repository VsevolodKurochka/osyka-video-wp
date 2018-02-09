<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package videooperator
 */

?>

	</div><!-- #content -->

	<footer class="footer">
		<div class="footer__container container">
			<p class="footer__title">© <?php echo date("Y") ?>. All rights reserverd</p>
			<div class="footer__social">
				<ul class="social social_white">
					<li class="social__item"><a class="social__item-link" href="#"><i class="fab fa-facebook-f"></i></a>
					</li>
					<li class="social__item"><a class="social__item-link" href="#"><i class="fab fa-instagram"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
