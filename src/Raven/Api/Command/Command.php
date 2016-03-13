<?php

namespace Raven\Api\Command;

interface Command
{
    /**
     * Get the name for this command
     *
     * @return string
     */
    public function getName();

    /**
     * Get the description for this command
     *
     * @return string
     */
    public function getDescription();

    /**
     * Run this command
     *
     * @param Raven\Api\Command\Input $input
     *        The input for this command
     *
     * @param Raven\Api\Command\Output $output
     *        The output for this command
     *
     * @return int
     *         The exit status of the command
     */
    public function run(Input $input, Output $output);
}
