	</main><!-- .main-container -->
	<footer role="contentinfo" class="c-footer">
		<div class="c-footer__inner l-frame">
			<!-- Logo -->
			<a href="/" class="c-logo-link c-footer__logo"><?php include(CJ_THEME_DIR . "/img/logo.svg"); ?></a>	
			<nav class="social-nav">
				<ul class="social-nav__list">
					<li>
						<a class="twitter social-icon" href="" title="Twitter Profile" target="_blank" rel="nofollow">
						<svg><use xlink:href="#shape-twitter"/></svg>
						</a>
					</li>
					<li>
						<a class="facebook social-icon" href="" target="_blank"title="Facebook Page" rel="nofollow">
						<svg><use xlink:href="#shape-facebook"/></svg>
						</a>
					</li>
					<li>
						<a class="youtube social-icon" href="" title="YouTube Channel" target="_blank" rel="nofollow">
						<svg><use xlink:href="#shape-youtube"/></svg>
						</a>
					</li>
					<li>
						<a class="linkedin social-icon" href="" target="_blank" title="LinkedIn Profile" rel="nofollow">
						<svg><use xlink:href="#shape-linkedin"/></svg>
						</a>
					</li>
				</ul>
			</nav>
			<div class="c-footer__address vcard">
			<div class="adr">
				<div class="street-address">123 Washingto Way, <span class="ste">Suite 123</span></div>
				<span class="locality">Nashville</span>, <span class="region">TN</span>, <span class="postal-code">12345</span>
			</div>
				<div class="tel"><a href="tel:(555) 555-5555<?php // echo do_shortcode('[phone]'); ?>" title="Call link">(555) 555-5555<?php // echo do_shortcode('[phone]'); ?></div>
			</div>
		</div>
		<div class="utility-container">
			<nav class="c-utility-nav">
				<?php 
				wp_nav_menu( array(
					'theme_location' => 'utility-nav',
					'container' => false,
					'item_sep' => '&middot;'
					// 'menu_class' => ''
				)); 
				?>
			</nav>
			<p class="copyright">All elements of this website are copyrighted materials for cj Advertising, LLC, or <?php bloginfo('name'); ?> &copy;<?php echo date('Y'); ?></p>
		</div>
		
			</div>
	</footer>

	<?php wp_footer(); ?>


<!-- START SCRIPTS INCLUDE -->  
<!-- JavaScript at the bottom for fast page loading -->

	</body>
</html>
