<?php
/**
 *
 * Topic Prefixes extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016 phpBB Limited <https://www.phpbb.com>
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
	'TOPIC_PREFIXES'			=> 'Prefiksy tematów',
	'TOPIC_PREFIXES_EXPLAIN'	=> 'Z tej strony możesz zarządzać prefikasmi tematów dla forów.',

	'TOPIC_PREFIX_TAG'			=> 'Etykieta prefiksu',
	'TOPIC_PREFIX_ENABLED'		=> 'Włączony prefiks',
	'TOPIC_PREFIXES_EMPTY'		=> 'Nie ustawiłeś prefiksów dla tego forum.',
	'TOPIC_PREFIX_PLACEHOLDER'	=> '[Mój Prefiks]',

	'CREATE_TOPIC_PREFIX'			=> 'Stwórz nowy prefiks',
	'DELETE_TOPIC_PREFIX_CONFIRM'	=> 'Czy na pewno chcesz usunąć ten prefiks?',
	'TOPIC_PREFIX_DELETED'			=> 'Prefiks tematu został usunięty.',

	'TOPIC_PREFIX_TOGGLE_STATE'	=> array(
		0	=> 'Kliknij aby włączyć',
		1	=> 'Kliknij aby wyłączyć',
	),

	// Nested set exception messages
	'TOPIC_PREFIXES_LOCK_FAILED_ACQUIRE'	=> 'Nastąpił błąd w rozszerzeniu prefiksu tematu z powodu nie otrzymania możliwośći blokady tabeli.',
	'TOPIC_PREFIXES_INVALID_ITEM'			=> 'Żądany prefiks tematu nie istnieje.',
	'TOPIC_PREFIXES_INVALID_PARENT'			=> 'Żadany prefiks tematu nie ma rodzica.',
));
