<?php

/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 */

declare(strict_types=1);

namespace Spiral\Database\Driver;

use Spiral\Database\Injection\ParameterInterface;

/**
 * Class Parameters
 *
 * @package Spiral\Database\Driver
 */
final class QueryBindings
{
    /**
     * @var array
     */
    private $parameters = [];

    /**
     * @return array
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }

    /**
     * @param ParameterInterface $parameter
     */
    public function push(ParameterInterface $parameter): void
    {
        $this->parameters[] = $parameter;
    }
}
