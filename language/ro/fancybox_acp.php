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
	'LOTUSJEFF_FANCYBOX_SETTINGS'			=> 'Configurări pentru extensia Fancybox',
	'LOTUSJEFF_FANCYBOX_BUTTON'				=> 'Panou de control adițional',
	'LOTUSJEFF_FANCYBOX_BUTTON_EXPLAIN'		=> 'Un panoul de control adițional apare deasupra imaginilor din Fancybox. Permite slide show-uri automate.',
	'LOTUSJEFF_FANCYBOX_GALLERY'			=> 'Vezi miniaturi',
	'LOTUSJEFF_FANCYBOX_GALLERY_EXPLAIN'	=> 'Afișeaza o miniatura a tuturor imaginilor din galeria Fancybox sub imagine. Utilizatorul poate selecta imagini specifice.',
	'LOTUSJEFF_FANCYBOX_SMALL'				=> 'Include imaginile originale în galerie',
	'LOTUSJEFF_FANCYBOX_SMALL_EXPLAIN'		=> 'Activează Fancybox pentru imaginile care nu au miniaturi. Suportă phpBB dacă generarea de miniaturi este dezactivată.',
	'LOTUSJEFF_FANCYBOX_TITLE'				=> 'FancyBox - A Lightbox Alternative',
));
