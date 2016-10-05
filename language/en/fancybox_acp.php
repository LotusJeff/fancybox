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
	'LOTUSJEFF_FANCYBOX_SETTINGS'			=> 'Fancybox Extension Configurations',
	'LOTUSJEFF_FANCYBOX_BUTTON'				=> 'Additional control panel',
	'LOTUSJEFF_FANCYBOX_BUTTON_EXPLAIN'		=> 'An additional control panel appears above the Fancybox images. Allows automated slide shows.',
	'LOTUSJEFF_FANCYBOX_GALLERY'			=> 'View thumbnails',
	'LOTUSJEFF_FANCYBOX_GALLERY_EXPLAIN'	=> 'Shows a thumbnail image of all images in the Fancybox gallery below the image. User can select specific images.',
	'LOTUSJEFF_FANCYBOX_SMALL'				=> 'Include non-thumbnail images in gallery',
	'LOTUSJEFF_FANCYBOX_SMALL_EXPLAIN'		=> 'Turns on Fancybox for images that do not have thumbnails.  Supports phpBB if thumbnails are turned off.',
	'LOTUSJEFF_FANCYBOX_TITLE'				=> 'FancyBox - A Lightbox Alternative',
));
