<?php
$title = $args['title'];
$descr = $args['descr'];
?>
<div class="section-header">
	<h2 class="section-header__title title-1">
		<?php echo esc_html($title) ?>
	</h2>
	<?php if ($descr): ?>
		<div class="descr section-header__descr">
			<?php echo wp_kses_post($descr) ?>
		</div>
	<?php endif; ?>
</div>