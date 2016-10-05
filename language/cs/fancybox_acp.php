<?php
/**
*
* @package phpBB Extension - Fancybox
* @copyright (c) 2016 Jeff Cocking
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'LOTUSJEFF_FANCYBOX_TITLE'				=> 'FancyBox - A Lightbox Alternative',
	'LOTUSJEFF_FANCYBOX_SETTINGS'			=> 'Nastavení rozšíření Fancybox',
	'LOTUSJEFF_FANCYBOX_BUTTON'				=> 'Rozšířený ovládací panel',
	'LOTUSJEFF_FANCYBOX_BUTTON_EXPLAIN'		=> 'Rozšířený ovládací panel se zobrazuje nad obrázky ve Fancybox prohlížeči. Umožňuje spuštění automatické prezentace.',
	'LOTUSJEFF_FANCYBOX_GALLERY'			=> 'Zobrazovat náhledy',
	'LOTUSJEFF_FANCYBOX_GALLERY_EXPLAIN'	=> 'Zobrazení náhledů všech obrázků ve Fancybox galerii pod prohlíženým obrázkem. Umožňuje uživateli vybrat konkrétní obrázek.',
	'LOTUSJEFF_FANCYBOX_SMALL'				=> 'Zahrnout do galerie obrázky bez náhledu',
	'LOTUSJEFF_FANCYBOX_SMALL_EXPLAIN'		=> 'Zapne Fancybox pro obrázky, které nemají vytvořené náhledy. Podporuje phpBB pokud jsou náhledy vypnuté.',
));
