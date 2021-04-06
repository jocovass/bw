<?php

/**
 * Displays footer widgets if assigned
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<?php
if (
	is_active_sidebar('sidebar-2') ||
	is_active_sidebar('sidebar-3') || is_active_sidebar('sidebar-4')
) :
?>


	<?php
	if (is_active_sidebar('sidebar-2')) {
	?>
		<div class="col-sm-12 col-md-6 col-lg-3 mb-small">
			<?php dynamic_sidebar('sidebar-2'); ?>
		</div>
	<?php
	}
	if (is_active_sidebar('sidebar-3')) {
	?>
		<div class="col-sm-12 col-md-4 col-lg-2 mb-small offset-md-2 offset-lg-1 text-center">
			<h4 class="h4 text-primary mb-2">Footer Nav</h4>
			<?php dynamic_sidebar('sidebar-3'); ?>
		</div>
	<?php }
	if (is_active_sidebar('sidebar-4')) {
	?>
		<div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 offset-lg-1">
			<?php dynamic_sidebar('sidebar-4'); ?>
		</div>
	<?php } ?>


<?php endif; ?>