<?php
/**
*
* @package phpBB Extension - Fancybox
* @copyright (c) 2016 Jeff Cocking
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace lotusjeff\fancybox\migrations;

class v_1_0_0 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['lotusjeff_fancybox_versions']) && version_compare($this->config['lotusjeff_fancybox_versions'], '1.0.0', '>=');
	}

	static public function depends_on()
	{
		return array('\lotusjeff\fancybox\migrations\v_0_1_0');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('lotusjeff_fancybox_varsions', '1.0.0')),
			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_FANCYBOX_TITLE'
			)),
			array('module.add', array(
				'acp',
				'ACP_FANCYBOX_TITLE',
				array(
					'module_basename'	=> '\lotusjeff\fancybox\acp\fancybox_module',
					'auth'				=> 'ext_lotusjeff\fancybox && acl_a_board',
					'modes'				=> array('settings'),
				),
			)),
		);
	}
}
