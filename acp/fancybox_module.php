<?php
/**
*
* @package phpBB Extension - Fancybox
* @copyright (c) 2016 Jeff Cocking
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace lotusjeff\fancybox\acp;

/**
* @ignore
*/
//use lotusjeff\socialshare\prefixes;

class fancybox_module
{
	/** @var \phpbb\cache\driver\driver_interface */
	protected $cache;
	/** @var \phpbb\config\config */
	protected $config;
	/** @var \phpbb\config\db_text */
	protected $config_text;
	/** @var \phpbb\db\driver\driver_interface */
	protected $db;
	/** @var \phpbb\log\log */
	protected $log;
	/** @var \phpbb\request\request */
	protected $request;
	/** @var \phpbb\template\template */
	protected $template;
	/** @var \phpbb\user */
	protected $user;
	/** @var string */
	protected $phpbb_root_path;
	/** @var string */
	protected $php_ext;
	/** @var string */
	public $u_action;

	/**
	 * Delegates to proper functions that handle the specific case
	 *
	 * @param string $id the id of the acp-module (the url-param "i")
	 * @param string $mode the phpbb acp-mode
	 */
	public function main($id, $mode)
	{
		global $user, $phpbb_container;

		$user->add_lang_ext('lotusjeff/fancybox', 'fancybox_acp');

		switch ($mode)
		{
			case 'settings':
			// no break
			default:
				$this->tpl_name = 'fancybox';
				$this->page_title = 'ACP_FANCYBOX_SETTINGS';
				$this->handle_settings();
		}
	}

	/**
	 * Default settings page
	 */
	private function handle_settings()
	{
		global $config, $request, $template, $user;
		// Define the name of the form for use as a form key
		$form_name = 'fancybox';
		add_form_key($form_name);

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key($form_name))
			{
				trigger_error('FORM_INVALID');
			}

			$commit_to_db = true;

			//Submit to db

			if ($commit_to_db)
			{
				$config->set('lotusjeff_fancybox_gallery', $request->variable('lotusjeff_fancybox_gallery', 0));
				$config->set('lotusjeff_fancybox_button', $request->variable('lotusjeff_fancybox_button', 0));
				$config->set('lotusjeff_fancybox_small', $request->variable('lotusjeff_fancybox_small', 0));
			}
		}
		$template->assign_vars(array(
			'LOTUSJEFF_FANCYBOX_SMALL'			=> $config['lotusjeff_fancybox_small'],
			'LOTUSJEFF_FANCYBOX_BUTTON'		=> $config['lotusjeff_fancybox_button'],
			'LOTUSJEFF_FANCYBOX_GALLERY'		=> $config['lotusjeff_fancybox_gallery'],
			'U_ACTION'                               => $this->u_action,
		));
	}
}
