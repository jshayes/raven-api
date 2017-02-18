<?php

namespace SoapBox\Raven\Api\Packages;

interface Configuration
{
    const ARGUMENT_REQUIRED = 1;
    const ARGUMENT_OPTIONAL = 2;
    const ARGUMENT_IS_ARRAY = 4;

    const OPTION_VALUE_NONE = 1;
    const OPTION_VALUE_REQUIRED = 2;
    const OPTION_VALUE_OPTIONAL = 4;
    const OPTION_VALUE_IS_ARRAY = 8;

    /**
     * Set the name for the command. This is what is used to execute the
     * command.
     *
     * @param string $name
     *        The name of the command
     *
     * @return \SoapBox\Raven\Api\Packages\Configuration
     *         This Configuration instance
     */
    public function setName(string $name): Configuration;

    /**
     * Set the description for the command. This is displayed beside the command
     * in the command listing.
     *
     * @param string $description
     *        The command description
     *
     * @return \SoapBox\Raven\Api\Packages\Configuration
     *         This Configuration instance
     */
    public function setDescription(string $description): Configuration;

    /**
     * Set the help text for this command. This is displayed when you submit
     * the --help flag for the command.
     *
     * @param string $help
     *        The help text
     *
     * @return \SoapBox\Raven\Api\Packages\Configuration
     *         This Configuration instance
     */
    public function setHelp(string $help): Configuration;

    /**
     * Add an argument for this command.
     *
     * @param string $name
     *        The name for the argument. This will be displayed in the usage
     *        statement for the command. This is also what is used to fetch
     *        the argument from the command's input.
     * @param int mode
     *        Default: self::ARGUMENT_OPTIONAL
     *        The argument mode. This is either self::ARGUMENT_REQUIRED or
     *        self::ARGUMENT_OPTIONAL.
     *        This value can also be combined with self::ARGUMENT_IS_ARRAY by
     *        using a bitwise or.
     * @param string $description
     *        The description for the argument. This will be displayed in the
     *        help text for the command.
     * @param mixed $default
     *        The default value for the argument. This is only used when using
     *        the self::ARGUMENT_OPTIONAL mode
     *
     * @return \SoapBox\Raven\Api\Packages\Configuration
     *         This Configuration instance
     */
    public function addArgument(
        string $name,
        int $mode = self::ARGUMENT_OPTIONAL,
        string $description = '',
        $default = null
    ): Configuration;

    /**
     * Add an option for this command.
     *
     * @param string $name
     *        The name for the option. This is the long variant of the flag.
     *        This will also be displayed in the usage statement for the
     *        command. This is also what is used to fetch the option from the
     *        command's input.
     * @param string $shortcut
     *        This is the one character short version for the option.
     * @param int mode
     *        Default: self::OPTION_VALUE_NONE
     *        The option mode. This is one of self::OPTION_VALUE_NONE,
     *        self::OPTION_VALUE_REQUIRED or self::OPTION_VALUE_OPTIONAL.
     *        This value can also be combined with self::OPTION_VALUE_IS_ARRAY
     *        by using a bitwise or.
     * @param string $description
     *        The description for the option. This will be displayed in the
     *        help text for the command.
     * @param mixed $default
     *        The default value for the option. This is only used when using
     *        the self::OPTION_VALUE_OPTIONAL mode. Must be null what using
     *        the self::OPTION_VALUE_NONE mode.
     *
     * @return \SoapBox\Raven\Api\Packages\Configuration
     *         This Configuration instance
     */
    public function addOption(
        string $name,
        string $shortcut = '',
        int $mode = self::OPTION_VALUE_NONE,
        string $description = '',
        $default = null
    ): Configuration;
}
