<?php

namespace Raven\Api\Command;

interface Output
{
    const VERBOSITY_QUIET = 0;
    const VERBOSITY_NORMAL = 1;
    const VERBOSITY_VERBOSE = 2;
    const VERBOSITY_VERY_VERBOSE = 3;
    const VERBOSITY_DEBUG = 4;

    /**
     * Writes a message to the output.
     *
     * @param string|array $messages
     *        The message as an array of lines or a single string
     *
     * @return void
     *
     * @throws \InvalidArgumentException When unknown output type is given
     */
    public function write($messages);

    /**
     * Writes a message to the output and adds a newline at the end.
     *
     * @param string|array $messages
     *        The message as an array of lines of a single string
     *
     * @return void
     *
     * @throws \InvalidArgumentException When unknown output type is given
     */
    public function writeln($messages);

    /**
     * Gets the current verbosity of the output.
     *
     * @return int
     *         The current level of verbosity
     */
    public function getVerbosity();
}
