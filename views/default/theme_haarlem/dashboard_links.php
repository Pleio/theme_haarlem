<?php
	$service_desk_title = elgg_echo("theme_haarlem:service_tools:service_desk");
	if(!($service_desk_url = elgg_get_plugin_setting("service_desk_url", "theme_haarlem"))){
		$service_desk_url = "#";
	}
	
	$youpp_title = elgg_echo("theme_haarlem:service_tools:youpp");
	if(!($youpp_url = elgg_get_plugin_setting("youpp_url", "theme_haarlem"))){
		$youpp_url = "#";
	}
	
	$hr_wiki_title = elgg_echo("theme_haarlem:service_tools:hr_wiki");
	if(!($hr_wiki_url = elgg_get_plugin_setting("hr_wiki_url", "theme_haarlem"))){
		$hr_wiki_url = "#";
	}
	
	$qlickview_title = elgg_echo("theme_haarlem:service_tools:qlickview");
	if(!($qlickview_url = elgg_get_plugin_setting("qlickview_url", "theme_haarlem"))){
		$qlickview_url = "#";
	}
	
	$vicrea_title = elgg_echo("theme_haarlem:service_tools:vicrea");
	if(!($vicrea_url = elgg_get_plugin_setting("vicrea_url", "theme_haarlem"))){
		$vicrea_url = "#";
	}
	
	$or_title = elgg_echo("theme_haarlem:service_tools:or");
	if(!($or_url = elgg_get_plugin_setting("or_url", "theme_haarlem"))){
		$or_url = "#";
	}
?><div id="theme_haarlem_service_tools">
	<h1><a href="http://www.haarlem.nl" target="_blank">www.haarlem.nl</a>Service Tools</h1>
	<div>
		<div class="theme_haarlem_service_tools_tool">
			<div>
				<img src="<?php echo elgg_get_site_url(); ?>mod/theme_haarlem/graphics/ServiceDesk.png" alt="<?php echo $service_desk_title; ?>" title="<?php echo $service_desk_title; ?>"/>
			</div>
			<a target="_blank" href="<?php echo $service_desk_url; ?>"><?php echo $service_desk_title; ?></a>
		</div>
		<div class="theme_haarlem_service_tools_tool">
			<div>
				<img src="<?php echo elgg_get_site_url(); ?>mod/theme_haarlem/graphics/Youpp.png" alt="<?php echo $youpp_title; ?>" title="<?php echo $youpp_title; ?>"/>
			</div>
			<a target="_blank" href="<?php echo $youpp_url; ?>"><?php echo $youpp_title; ?></a>
		</div>
		<div class="theme_haarlem_service_tools_tool">
			<div>
				<img src="<?php echo elgg_get_site_url(); ?>mod/theme_haarlem/graphics/Personeelswiki.png" alt="<?php echo $hr_wiki_title; ?>" title="<?php echo $hr_wiki_title; ?>"/>
			</div>
			<a target="_blank" href="<?php echo $hr_wiki_url; ?>"><?php echo $hr_wiki_title; ?></a>
		</div>
		<div class="theme_haarlem_service_tools_tool">
			<div>
				<img src="<?php echo elgg_get_site_url(); ?>mod/theme_haarlem/graphics/Vicrea.png" alt="<?php echo $vicrea_title; ?>" title="<?php echo $vicrea_title; ?>"/>
			</div>
			<a target="_blank" href="<?php echo $vicrea_url; ?>"><?php echo $vicrea_title; ?></a>
		</div>
		<div class="theme_haarlem_service_tools_tool">
			<div>
				<img src="<?php echo elgg_get_site_url(); ?>mod/theme_haarlem/graphics/Qlickview.png" alt="<?php echo $qlickview_title; ?>" title="<?php echo $qlickview_title; ?>"/>
			</div>
			<a target="_blank" href="<?php echo $qlickview_url; ?>"><?php echo $qlickview_title; ?></a>
		</div>
		<div class="theme_haarlem_service_tools_tool">
			<div>
				<img src="<?php echo elgg_get_site_url(); ?>mod/theme_haarlem/graphics/Ondernemingsraad.png" alt="<?php echo $or_title; ?>" title="<?php echo $or_title; ?>"/>
			</div>
			<a target="_blank" href="<?php echo $or_url; ?>"><?php echo $or_title; ?></a>
		</div>
		<div class="clearfloat"></div>
	</div>
</div>