<?php

namespace SoapBox\Raven\Api\Packages;

interface Output
{
    /**
     * Writes a message to the output.
     *
     * @param string $messages
     *        The message as an array of lines or a single string
     * @param int $options
     *        A bitmask of options (one of the OUTPUT or VERBOSITY constants), 0 is considered the same as self::OUTPUT_NORMAL | self::VERBOSITY_NORMAL
     *
     * @return void
     */
    public function write(string $message, int $options = 0);

    /**
     * Writes a message to the output and adds a newline at the end.
     *
     * @param string $message
     *        The message as an array of lines of a single string
     * @param int $options
     *        A bitmask of options (one of the OUTPUT or VERBOSITY constants), 0 is considered the same as self::OUTPUT_NORMAL | self::VERBOSITY_NORMAL
     *
     * @return void
     */
    public function writeln(string $message, int $options = 0);

    /**
     * Returns whether verbosity is quiet (-q).
     *
     * @return bool
     */
    public function isQuiet(): bool;

    /**
     * Returns whether verbosity is verbose (-v).
     *
     * @return bool
     */
    public function isVerbose(): bool;

    /**
     * Returns whether verbosity is very verbose (-vv).
     *
     * @return bool
     */
    public function isVeryVerbose(): bool;

    /**
     * Returns whether verbosity is debug (-vvv).
     *
     * @return bool
     */
    public function isDebug(): bool;
}
