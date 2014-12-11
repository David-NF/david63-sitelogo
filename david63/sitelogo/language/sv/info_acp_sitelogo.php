<?php
/**
*
* @package Site Logo Extension
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* Swedish translation by Holger (http://www.maskinisten.net)
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'SITE_LOGO'					=> 'Egen logga',

	'SITE_LOGO_EXPLAIN'			=> 'H�r kan du �ndra inst�llningarna f�r att visa din egna sidlogga som ska ers�tta standardloggan.',

	'SITE_LOGO_HEIGHT'			=> 'Loggans h�jd',
	'SITE_LOGO_HEIGHT_EXPLAIN'	=> 'L�mnas detta f�lt tomt s� anv�nds standardloggans h�jd (152px).',

	'SITE_LOGO_IMAGE'			=> 'S�kv�g till den egna sidloggan.',
	'SITE_LOGO_IMAGE_EXPLAIN'	=> 'L�mna detta f�lt tomt f�r att anv�nda standardloggan.<br />Om du vill anv�nda en logga fr�n en annan dom�n anger du hela URLen, annars anger du den lokala s�kv�gen.',

	'SITE_LOGO_LEFT'			=> 'V�nstra h�rn',
	'SITE_LOGO_LEFT_EXPLAIN'	=> 'Runda av de v�nstra h�rnen f�r att matcha sidhuvudet.',
	'SITE_LOGO_LOG'				=> '<strong>Inst�llningarna f�r den egna loggan har sparats</strong>',

	'SITE_LOGO_MANAGE'			=> 'Hantera egen logga',

	'SITE_LOGO_OPTIONS'			=> 'Inst�llningar f�r egen logga',

	'SITE_LOGO_PIXELS'			=> 'pixlar',
	'SITE_LOGO_PIXELS_EXPLAIN'	=> 'St�ller in pixlarna f�r h�rnets rundning.',

	'SITE_LOGO_RIGHT'			=> 'H�gra h�rn',
	'SITE_LOGO_RIGHT_EXPLAIN'	=> 'Runda av de h�gra h�rnen f�r att matcha sidhuvudet.',

	'SITE_LOGO_WIDTH'			=> 'Loggans bredd',
	'SITE_LOGO_WIDTH_EXPLAIN'	=> 'L�mnas detta f�lt tomt s� anv�nds standardloggans bredd (149px).',
));

?>