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
	'MCP_FLAIR'			=> 'Osiągnięcia',
	'MCP_FLAIR_EXPLAIN'	=> 'Tutaj możesz zarządzać osiągnięciami %s.<ul><li>Kliknij <b>Ustaw</b> przycisk aby ustawić pożądaną ilość osiągnięć.</li><li>Kliknij <b>&times;</b> aby usunąć osiągnięcie.</li><li>Kliknij <b>+</b> przycisk aby dodać osiągnięcie z ustawioną ilością.</li></ul>',

	'MCP_FLAIR_USER'	=> 'Zarządzaj osiągnięciami użytkownika',
	'MCP_FLAIR_FRONT'	=> 'Przednia strona',

	'MCP_FLAIR_USER_FLAIR'		=> 'Osiągnięcia %s',
	'MCP_FLAIR_AVAILABLE'		=> 'Dostępne osiągnięcia',
	'MCP_FLAIR_NO_FLAIR'		=> 'Żadne osiągnięcie nie zostało przypisane do tego profilu użytkownika.',
	'MCP_FLAIR_NO_AVAILABLE'	=> 'Nie ma dostępny osiągnięć.',
	'MCP_FLAIR_ADD_TITLE'		=> 'Dodaj “%1$s” do %2$s profilu użytkownika',
	'MCP_FLAIR_SET_COUNT_TITLE'	=> 'Ustaw ilość “%1$s” na %2$s’s profilu',
	'MCP_FLAIR_REMOVE_TITLE'	=> 'Usuń “%1$s” z %2$s profilu',
	'MCP_FLAIR_REMOVE_CONFIRM'	=> 'Czy na pewno chcesz usunąć tą rzecz?',

	'MCP_FLAIR_SET'	=> 'Ustaw',
));
