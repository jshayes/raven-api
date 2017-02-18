<?php

namespace SoapBox\Raven\Api\Packages;

interface Input
{
    /**
     * Returns the argument value for a given argument name.
     *
     * @throws \InvalidArgumentException
     *         When argument given doesn't exist
     *
     * @param string $name
     *        The argument name
     *
     * @return mixed
     */
    public function getArgument(string $name);

    /**
     * Returns true if an argument exists by name or position.
     *
     * @param string $name
     *        The argument name
     *
     * @return bool
     */
    public function hasArgument(string $name): bool;

    /**
     * Returns the option value for a given option name.
     *
     * @throws \InvalidArgumentException
     *         When option given doesn't exist
     *
     * @param string $name
     *        The option name
     *
     * @return mixed
     */
    public function getOption(string $name);

    /**
     * Returns true if an option exists by name.
     *
     * @param string $name
     *        The option name
     *
     * @return bool
     */
    public function hasOption(string $name): bool;
}
