<?php ?>

#theme_haarlem_service_tools {
	float: left;
	width: 65.5%;
	padding-left: 5px;
   	margin-bottom: 20px;
	
}

.elgg-search-header-container input {
float: left;
}

#theme_haarlem_service_tools > div {
 	background: #FFFFFF;
 	-moz-border-radius-bottomleft:8px;
	-moz-border-radius-bottomright:8px;
	-webkit-border-bottom-right-radius:8px;
	-webkit-border-bottom-left-radius:8px;
	
	border-bottom: 1px solid #CCCCCC;
    border-left: 1px solid #CCCCCC;
    border-right: 1px solid #CCCCCC;
}
 
#theme_haarlem_service_tools h1 {
	color: #FFFFFF;
    font-size: 100%;
    min-height: 21px;
    line-height: 1.2em;
 	background: #<?php echo THEME_HAARLEM_COLOR2; ?>;
 	-moz-border-radius-topleft:8px;
	-moz-border-radius-topright:8px;
	-webkit-border-top-right-radius:8px;
	-webkit-border-top-left-radius:8px;
 	border-bottom: 1px solid #CCCCCC;
   
   	margin: 0;
    padding: 4px 10px 0px 10px;
 }
 
#theme_haarlem_service_tools h1 a {
 	float: right;
 	font-size: 11px;
}

#theme_haarlem_service_tools .theme_haarlem_service_tools_tool {
	margin: 5px 0px;
	float: left;
	width: 100px;
	text-align: center;
}

#theme_haarlem_service_tools .theme_haarlem_service_tools_tool a{
	color: #<?php echo THEME_HAARLEM_COLOR2; ?>;
	white-space: nowrap;
}

#theme_haarlem_service_tools .theme_haarlem_service_tools_tool a:hover{
	color: #333333;
}

#theme-haarlem-header-right-box {
	background: url("<?php echo elgg_get_site_url(); ?>mod/theme_haarlem/graphics/topbar_search.png") no-repeat scroll left top transparent;
	position: absolute;
	height: 29px;
	right: 0;
    top: 90px;
    width: 230px;
	-moz-border-radius-topleft: 8px;
	-moz-border-radius-topright: 8px;
	-webkit-border-top-left-radius: 8px;
	-webkit-border-top-right-radius: 8px;
}
