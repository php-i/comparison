<?php

/*
 * This file is part of PHP I: Comparison.
 *
 * (c) Anton Komarev <anton@komarev.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace I\Comparison;

interface Equalable
{
    /**
     * @param \I\Comparison\Equalable $that
     * @return bool
     *
     * @throws \I\Comparison\Exceptions\ObjectsIncomparable
     */
    public function isEqualTo(self $that): bool;

    /**
     * @param \I\Comparison\Equalable $that
     * @return bool
     *
     * @throws \I\Comparison\Exceptions\ObjectsIncomparable
     */
    public function isNotEqualTo(self $that): bool;
}
