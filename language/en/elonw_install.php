<?php
/**
 * Extension enablement requirements [English].
 *
 * @license GNU General Public License, version 2 (GPL-2.0)
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
	'ELONW_NOT_ENABLEABLE' => 'External Links Open in New Window could not be enabled. It requires phpBB 3.3.19 or later and PHP 8.3.36 or later.',
));
