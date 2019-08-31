<?php

declare(strict_types=1);

namespace drupol\collection\Contract;

/**
 * Interface Prependable.
 */
interface Prependable
{
    /**
     * Push an item onto the beginning of the collection.
     *
     * @param mixed ...$items
     *
     * @return \drupol\collection\Contract\Collection
     */
    public function prepend(...$items): Base;
}