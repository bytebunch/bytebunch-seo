<?php
/*
Plugin Name: BBWP SEO
Plugin URI: https://bytebunch.com
Description: It's time to have a good and fast SEO plugin for wordpress.
Version: 0.1
Author: Tahir
Author URI: http://bytebunch.com
License: GPL2
*/


define('BYTEBUNCH_SEO','bbwp_seo');
define('BYTEBUNCH_SEO_SOCIAL','bbwp_seo_social');
define('BBSEO_URL',plugins_url().'/bbwp-seo');
define('BBSEO_ABS',plugin_dir_path(dirname(__FILE__) ).'/bbwp-seo');

include_once BBSEO_ABS.'/inc/functions.php';

if(!class_exists('BBWP_SEO')){
	include_once BBSEO_ABS.'/admin/classes/BBWP_SEO.php';
	$BBWP_SEO = new BBWP_SEO();
}

if(is_admin()){

	if(!class_exists('BBWP_SEO_Setting')){
		include_once BBSEO_ABS.'/admin/classes/BBWP_SEO_Setting.php';
		$BBWP_SEO_Setting = new BBWP_SEO_Setting();
	}
	if(!class_exists('BBWP_SEO_MetaBoxFields')){
		include_once BBSEO_ABS.'/admin/classes/BBWP_SEO_MetaBoxFields.php';
		$BBWP_SEO_MetaBoxFields = new BBWP_SEO_MetaBoxFields();
	}
	if(!class_exists('BBWP_SEO_TaxonomyMetaFields')){
		include_once BBSEO_ABS.'/admin/classes/BBWP_SEO_TaxonomyMetaFields.php';
		$BBWP_SEO_TaxonomyMetaFields = new BBWP_SEO_TaxonomyMetaFields();
	}

}
else{

	if(!class_exists('BBWP_SEO_Core')){
		include_once BBSEO_ABS.'/admin/classes/BBWP_SEO_Core.php';
		$BBWP_SEO_Core = new BBWP_SEO_Core();
	}

}
