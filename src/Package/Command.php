<?php

namespace SoapBox\Raven\Api\Packages;

interface Command
{
    /**
     * Configures the current command.
     *
     * @param \SoapBox\Raven\Api\Packages\Configuration $configuration
     *        The configuration instance that can be used to set configuration
     *        values for this command
     *
     * @return void
     */
    public function configure(Configuration $configuration);

    /**
     * Executes the current command.
     *
     * @param \SoapBox\Raven\Api\Packages\Input $input
     *        An Input instance
     * @param \SoapBox\Raven\Api\Packages\Output $output
     *        An Output instance
     *
     * @return null|int
     *         null or 0 if everything went fine, or an error code
     */
    public function execute(Input $input, Output $output);

    /**
     * Interacts with the user.
     *
     * This method is executed before the Input is validated.
     * This means that this is the only place where the command can
     * interactively ask for values of missing required arguments.
     *
     * @param \SoapBox\Raven\Api\Packages\Input $input
     *        An Input instance
     * @param \SoapBox\Raven\Api\Packages\Output $output
     *        An Output instance
     *
     * @return void
     */
    public function interact(Input $input, Output $output);

    /**
     * Initializes the command just after the input has been validated.
     *
     * This is mainly useful when a lot of commands extends one main command
     * where some things need to be initialized based on the input arguments and options.
     *
     * @param \SoapBox\Raven\Api\Packages\Input $input
     *        An Input instance
     * @param \SoapBox\Raven\Api\Packages\Output $output
     *        An Output instance
     *
     * @return void
     */
    public function initialize(Input $input, Output $output);
}
