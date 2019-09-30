<?php

namespace Facile\DoctrineMySQLComeBack\Doctrine\DBAL;

use Kdyby\Doctrine\Connection as DBALConnection;

/**
 * Class Connection.
 */
class Connection extends DBALConnection implements ConnectionInterface
{
    use ConnectionTrait;
}
