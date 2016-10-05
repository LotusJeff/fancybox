<?php
/**
*
* @package phpBB Extension - Fancybox
* @copyright (c) 2016 Jeff Cocking
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace lotusjeff\fancybox\migrations;

class v_0_1_0 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return;
	}
	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\gold');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('lotusjeff_fancybox_button', 1)),
			array('config.add', array('lotusjeff_fancybox_gallery', 1)),
			array('config.add', array('lotusjeff_fancybox_small', 1)),
			array('config.add', array('lotusjeff_fancybox_versions', '0.1.0')),
		);
	}
}
