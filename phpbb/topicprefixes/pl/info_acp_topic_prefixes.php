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
	'ACP_TOPIC_PREFIXES'	=> 'Prefiksy tematu',
	'ACP_MANAGE_PREFIXES'	=> 'Zarządzaj prefiksami',

	// ACP Log messages
	'ACP_LOG_PREFIX_ADDED'		=> '<strong>Stworzono nowy prefiks tematu</strong><br />» %1$s na forum: %2$s',
	'ACP_LOG_PREFIX_DELETED'	=> '<strong>Usunięto prefiks tematu</strong><br />» %1$s z forum: %2$s',
));
