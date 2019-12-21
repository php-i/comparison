<?php

declare(strict_types=1);

namespace I\Comparison;

interface Comparable
{
    /**
     * Get integer identifier result of comparison of $this and $that.
     *
     * @param \I\Comparison\Comparable $that
     * @return int Returns 0 if $this is equal to $that
     *             Returns -1 if $this is less than $that
     *             Returns 1 if $this is greater than $that
     *
     * @throws \I\Comparison\Exceptions\ObjectsIncomparable
     */
    public function getComparisonTo(self $that): int;

    /**
     * If $this is greater than $that.
     *
     * @param \I\Comparison\Comparable $that
     * @return bool
     *
     * @throws \I\Comparison\Exceptions\ObjectsIncomparable
     */
    public function isGreaterThan(self $that): bool;

    /**
     * If $this is greater than $that or equal to $that.
     *
     * @param \I\Comparison\Comparable $that
     * @return bool
     *
     * @throws \I\Comparison\Exceptions\ObjectsIncomparable
     */
    public function isGreaterThanOrEqualTo(self $that): bool;

    /**
     * If $this is less than $that.
     *
     * @param \I\Comparison\Comparable $that
     * @return bool
     *
     * @throws \I\Comparison\Exceptions\ObjectsIncomparable
     */
    public function isLessThan(self $that): bool;

    /**
     * If $this is less than $that or equal to $that.
     *
     * @param \I\Comparison\Comparable $that
     * @return bool
     *
     * @throws \I\Comparison\Exceptions\ObjectsIncomparable
     */
    public function isLessThanOrEqualTo(self $that): bool;
}
