<?php ?>
<div>
	<?php echo elgg_echo("theme_haarlem:settings:info"); ?>
</div>
<div>
	<?php echo elgg_echo("theme_haarlem:service_tools:service_desk");?>
	<?php echo elgg_view("input/text", array("name" => "params[service_desk_url]", "value" => $vars["entity"]->service_desk_url));?>
	
	<?php echo elgg_echo("theme_haarlem:service_tools:youpp");?>
	<?php echo elgg_view("input/text", array("name" => "params[youpp_url]", "value" => $vars["entity"]->youpp_url));?>
	
	<?php echo elgg_echo("theme_haarlem:service_tools:hr_wiki");?>
	<?php echo elgg_view("input/text", array("name" => "params[hr_wiki_url]", "value" => $vars["entity"]->hr_wiki_url));?>
	
	<?php echo elgg_echo("theme_haarlem:service_tools:vicrea");?>
	<?php echo elgg_view("input/text", array("name" => "params[vicrea_url]", "value" => $vars["entity"]->vicrea_url));?>
	
	<?php echo elgg_echo("theme_haarlem:service_tools:qlickview");?>
	<?php echo elgg_view("input/text", array("name" => "params[qlickview_url]", "value" => $vars["entity"]->qlickview_url));?>
	
	<?php echo elgg_echo("theme_haarlem:service_tools:or");?>
	<?php echo elgg_view("input/text", array("name" => "params[or_url]", "value" => $vars["entity"]->or_url));?>

	<?php echo elgg_echo("theme_haarlem:settings:custom_css:title");?>
	<?php echo elgg_view("input/plaintext", array("name" => "params[custom_css]", "value" => $vars["entity"]->custom_css));?>
	<?php echo elgg_echo("theme_haarlem:settings:custom_css:disclaimer"); ?>
</div>