<?php
/**
 * Elgg header logo
 */

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();
?>

<h1>
	<a class="elgg-heading-site" href="<?php echo $site_url; ?>">
		<img src="<?php echo $site_url; ?>/mod/theme_haarlem/graphics/Logo_GH.png">
	</a>
</h1>

<img src="<?php echo $site_url; ?>mod/theme_haarlem/graphics/Insitebeta.png" class="elgg-inner-img" />