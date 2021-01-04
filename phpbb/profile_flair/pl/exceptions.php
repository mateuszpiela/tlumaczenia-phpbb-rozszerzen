<?php
/**
 *
 * Profile Flair. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Steve Guidetti, https://github.com/stevotvr
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

$lang = array_merge($lang, array(
	'EXCEPTION_OUT_OF_BOUNDS'		=> 'To pole `%s` otrzymało wartość poza zakresem.',
	'EXCEPTION_INVALID_COLOR'		=> 'To pole `%s` otrzymało nie poprawna wartość koloru. Poprawny kolor składa się z 6 znaków heksadecymetralny  (0-9, A-F).',
	'EXCEPTION_TOO_LONG'			=> 'To pole `%s` otrzymało wartość dłuższą niż maksymalna długość.',
	'EXCEPTION_NAME_REQUIRED'		=> 'Musisz wprowadzić nazwę dla tego osiągnięcia.',
	'EXCEPTION_CAT_NAME_REQUIRED'	=> 'Musisz wprowadzić nazwę dla tej kategorii.',
	'EXCEPTION_IMG_CONFLICT'		=> 'Obrazek z tą nazwą już istnieje.',
	'EXCEPTION_IMG_PROCESSING'		=> 'Nie udało się przetworzyć obrazka z powodu błędu.',

	'EXCEPTION_FIELD_FLAIR_COLOR'		=> 'Kolor osiągnięcia',
	'EXCEPTION_FIELD_FLAIR_ICON_COLOR'	=> 'Kolor ikony osiągnięcia',
	'EXCEPTION_FIELD_FLAIR_FONT_COLOR'	=> 'Kolor czcionki osiągnięcia',
));
