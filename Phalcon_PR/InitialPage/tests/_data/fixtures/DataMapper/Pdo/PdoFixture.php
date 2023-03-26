<?php

/**
* This file is part of the Phalcon Framework.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Phalcon\Tests\Fixtures\DataMapper\Pdo;

use Phalcon\DataMapper\Pdo\Connection;

class PdoFixture extends Connection
{
    public function callMe(string $name): string
    {
        return $name;
    }
}
