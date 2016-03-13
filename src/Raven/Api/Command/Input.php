<?php

namespace Raven\Api\Command;

interface Input
{
    /**
     * Returns all the given arguments merged with the default values.
     *
     * @return array
     */
    public function getArguments();

    /**
     * Gets argument by name.
     *
     * @param string $name
     *        The name of the argument
     *
     * @return mixed
     */
    public function getArgument($name);

    /**
     * Returns true if an InputArgument object exists by name or position.
     *
     * @param string|int $name
     *        The InputArgument name or position
     *
     * @return boolean
     *         true if the InputArgument object exists, false otherwise
     */
    public function hasArgument($name);

    /**
     * Returns all the given options merged with the default values.
     *
     * @return array
     */
    public function getOptions();

    /**
     * Gets an option by name.
     *
     * @param string $name
     *         The name of the option
     *
     * @return mixed
     */
    public function getOption($name);

    /**
     * Returns true if an InputOption object exists by name.
     *
     * @param string $name
     *        The InputOption name
     *
     * @return boolean
     *         true if the InputOption object exists, false otherwise
     */
    public function hasOption($name);

    /**
     * Is this input means interactive?
     *
     * @return boolean
     */
    public function isInteractive();
}
