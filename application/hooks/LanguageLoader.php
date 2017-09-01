<?php

/**
 * Created by PhpStorm.
 * User: ArturoSF
 * Date: 14/07/17
 * Time: 16:26
 */
class LanguageLoader {
	function initialize() {
		$ci =& get_instance();
		$ci->load->helper( 'language' );
		$siteLang = $ci->session->userdata('site_lang');
		if ($siteLang) {
			$ci->lang->load('message',$siteLang);
		} else {
			$ci->lang->load('message','spanish');
		}
	}
}