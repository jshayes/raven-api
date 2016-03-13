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
     * Get the array of arguments for this command
     *
     * @return array
     */
    public function getArguments();

    /**
     * Get the array of options for this command
     *
     * @return array
     */
    public function getOptions();

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
