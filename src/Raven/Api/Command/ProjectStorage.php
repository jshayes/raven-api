<?php

namespace Raven\Api\Command;

interface ProjectStorage
{
    /**
     * Get the root directory for the project
     *
     * @return string
     */
    public function getProjectRoot();

    /**
     * Get an element from the stoarage
     *
     * @param string $key
     *        The key for which to search the storage
     *
     * @param mized  $default
     *        The deafault value for when the key is not found
     *
     * @return mixed
     */
    public function get($key, $default = null);

    /**
     * Check to see if the storage contains a value
     *
     * @param string $key
     *        The key to check
     *
     * @return bool
     */
    public function has($key);
}
