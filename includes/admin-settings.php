<?php
add_action('admin_menu', function () {
	add_options_page(
		'Clean External Links',
		'Clean External Links',
		'manage_options',
		'clean-external-links',
		'cel_render_settings_page'
	);
});

add_action('admin_init', function () {
	register_setting('cel_settings', 'cel_whitelist');
	add_settings_section('cel_main_section', '', null, 'clean-external-links');
	add_settings_field(
		'cel_whitelist',
		'Domain Whitelist',
		function () {
			$value = esc_textarea(get_option('cel_whitelist', ''));
			echo "<textarea name='cel_whitelist' rows='8' cols='40' class='large-text code' placeholder='e.g. trusted.com\nexample.org'>$value</textarea>";
			echo "<p class='description'>Enter one domain per line to exclude from nofollow/blank behavior.</p>";
		},
		'clean-external-links',
		'cel_main_section'
	);
});

function cel_render_settings_page()
{
	?>
	<div class="wrap">
		<h1>Clean External Links Settings</h1>
		<form method="post" action="options.php">
			<?php
			settings_fields('cel_settings');
			do_settings_sections('clean-external-links');
			submit_button();
			?>
		</form>
	</div>
	<?php
}
