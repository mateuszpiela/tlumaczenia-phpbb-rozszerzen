<?php
/**
 *
 * Profile Flair. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Steve Guidetti, https://github.com/stevotvr
 * @license GNU General Public License, version 2 (GPL-2.0)
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'UCP_FLAIR'			=> 'Zarządzaj osiągnięciami',
	'UCP_FLAIR_EXPLAIN'	=> 'Tutaj możesz zarządzać twoimi osiągnięciami.<ul><li>Kliknij <i class="fa fa-star"></i>/<i class="fa fa-star-o"></i> przycisk aby dodać do ulubionych/usunąć z ulubionych osiągnięcie. Ulubione są pokazane jako pierwsze na twoim profilu.</li><li>Kliknij <b>&times;</b> przycisk aby usunąć osiągnięcie. Ta opcja może być nie dostępna do wszystkich ikon.</li><li>Panel <b>dostępnych osiągnięć</b> lista osiągnięć które możesz dodać do twojego profilu.</li></ul>',

	'UCP_USER_FLAIR'			=> 'Twoje osiągnięcia',
	'UCP_FLAIR_AVAILABLE'		=> 'Dostępne osiągnięcia',
	'UCP_FLAIR_NO_FLAIR'		=> 'Nie masz żadnych osiągnięć',
	'UCP_FLAIR_NO_AVAILABLE'	=> 'Nie masz dostępnych osiągnięć',
	'UCP_FLAIR_ADD'				=> 'Dodaj “%s”',
	'UCP_FLAIR_REMOVE'			=> 'Usuń “%s”',
	'UCP_FLAIR_FAV'				=> 'Dodaj “%s” do ulubionych',
	'UCP_FLAIR_UNFAV'			=> 'Usuń “%s” z ulubionych',
	'UCP_FLAIR_REMOVE_CONFIRM'	=> 'Czy na pewno chcesz usunąć tą rzecz ?',

	'UCP_FLAIR_ADD_BUTTON'	=> 'Dodaj do profilu',
));
