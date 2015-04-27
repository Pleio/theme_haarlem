<?php 

	define(THEME_HAARLEM_COLOR1, 'E31937'); // red
	define(THEME_HAARLEM_COLOR2, '999999'); // dark grey
	define(THEME_HAARLEM_COLOR3, 'DEDDDD'); // light grey
	define(THEME_HAARLEM_COLOR4, 'EFEFEF'); // background grey
	define(THEME_HAARLEM_COLOR5, 'F18C9C'); // pink

	function theme_haarlem_init() {
		
		$context = elgg_get_context();
		
		elgg_extend_view('css/elgg', 'theme_haarlem/css');
		elgg_extend_view('css/elgg', 'theme_haarlem/custom_css');
				
		if($context == 'dashboard') {
			elgg_extend_view('page/layouts/widgets/add_button', 'theme_haarlem/dashboard_links', 0);
		}
				
		elgg_register_plugin_hook_handler('index', 'system', 'theme_haarlem_index');
	}
	
	elgg_register_event_handler('init', 'system', 'theme_haarlem_init');