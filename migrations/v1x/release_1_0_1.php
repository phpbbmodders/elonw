<?php
/**
 *
 * External Links Open in New Window extension for the phpBB Forum Software package
 *
 * @copyright (c) 2015 RMcGirr83
 * @copyright (c) 2026, phpBB Modders, https://www.phpbbmodders.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace phpbbmodders\elonw\migrations\v1x;

class release_1_0_1 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['elonw_version']) && version_compare($this->config['elonw_version'], '1.0.1', '>=');
	}

	static public function depends_on()
	{
		return array('\phpbbmodders\elonw\migrations\v1x\release_1_0_0_data');
	}

	public function update_data()
	{
		return array(
			array('config.update', array('elonw_version', '1.0.1')),
		);
	}
}
