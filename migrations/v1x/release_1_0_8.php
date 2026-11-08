<?php
/**
 *
 * External Links Open in New Window extension for the phpBB Forum Software package
 *
 * @copyright (c) 2020 RMcGirr83
 * @copyright (c) 2026, phpBB Modders, https://www.phpbbmodders.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace phpbbmodders\elonw\migrations\v1x;

class release_1_0_8 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return !isset($this->config['elonw_version']);
	}

	static public function depends_on()
	{
		return ['\phpbbmodders\elonw\migrations\v1x\release_1_0_1'];
	}

	public function update_data()
	{
		return [
			['config.remove', ['elonw_version']],
		];
	}
}
