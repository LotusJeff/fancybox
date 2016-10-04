<?php
/**
*
* @package phpBB Extension - Fancybox
* @copyright (c) 2016 Jeff Cocking
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace lotusjeff\fancybox\acp;

class fancybox_info
{
	public function module()
	{
		return array(
			'filename'	=> '\lotusjeff\fancybox\acp\fancybox_module',
			'title'		=> 'ACP_FANCYBOX_TITLE',
			'modes'		=> array(
				'settings'	=> array(
					'title' => 'ACP_FANCYBOX_SETTINGS',
					'auth' => 'ext_lotusjeff/fancybox && acl_a_board',
					'cat' => array('ACP_FANCYBOX_TITLE')
				),
			),
		);
	}
}
