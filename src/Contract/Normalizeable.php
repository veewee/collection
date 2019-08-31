<?php

declare(strict_types=1);

namespace drupol\collection\Contract;

/**
 * Interface Normalizeable.
 */
interface Normalizeable
{
    /**
     * Reset the keys on the underlying array.
     *
     * @return \drupol\collection\Contract\Collection
     */
    public function normalize(): Base;
}