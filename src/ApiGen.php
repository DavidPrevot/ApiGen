<?php

/**
 * This file is part of the ApiGen (http://apigen.org)
 *
 * For the full copyright and license information, please view
 * the file license.md that was distributed with this source code.
 */

namespace ApiGen;

use ApiGen\Bridge\ApiGen\VersionInterface;


class ApiGen implements VersionInterface
{

	/**
	 * @var string
	 */
	const VERSION = '4.2.0-dev';


	/**
	 * {@inheritdoc}
	 */
	public function getVersion()
	{
		return self::VERSION;
	}

}
