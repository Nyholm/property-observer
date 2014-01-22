<?php

/**
 * (c) FSi sp. z o.o. <info@fsi.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FSi\Component\PropertyObserver;

interface MultiplePropertyObserverInterface extends PropertyObserverInterface
{
    /**
     * Saves current values of specified properties in internal storage.
     *
     * @param object $object
     * @param array $propertyPaths
     * @throws \InvalidArgumentException
     */
    public function saveValues($object, array $propertyPaths);

    /**
     * Returns true if any previously saved value of specified properties is different
     * (in PHP strict sense) from the current values.
     *
     * @param object $object
     * @param array $propertyPaths
     * @throws \InvalidArgumentException
     * @return boolean
     */
    public function hasChangedValues($object, array $propertyPath);
}
