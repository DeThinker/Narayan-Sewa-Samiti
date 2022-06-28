<?php
/**
 * Template part for displaying header contact.
 *
 * @since Gutener
 */

?>

<?php if( !get_theme_mod( 'disable_contact_detail', false ) ){ ?>
	<div class="header-contact">
		<ul>
			<li>
				<?php if( get_theme_mod( 'contact_phone', '+ 1987 123456' ) ){ ?>
					<a href="tel:<?php echo esc_url( get_theme_mod( 'contact_phone', '+ 1987 123456' )); ?>"><i class="fas fa-phone"></i>
						<?php echo esc_html(get_theme_mod( 'contact_phone', '+ 1987 123456' ) ); ?>
					</a>
				<?php } ?>
			</li>
			<li>
				<?php if( get_theme_mod( 'contact_email', 'yourmail@email.com' ) ){ ?>
					<a href="mailto:<?php echo esc_url( get_theme_mod( 'contact_email', 'yourmail@email.com' )); ?>"><i class="fas fa-envelope"></i>
					<?php echo esc_html( get_theme_mod( 'contact_email', 'yourmail@email.com' ) ); ?>
					</a>
				<?php } ?>
			</li>
			<li>
				<?php if( get_theme_mod( 'contact_address', 'Rock Street, San Francisco, California' ) ){ ?>
					<i class="fas fa-map-marker-alt"></i>
					<?php echo esc_html( get_theme_mod( 'contact_address', 'Rock Street, San Francisco, California' ) ); ?>
				<?php } ?>
			</li>
		</ul>
	</div>
<?php } ?>