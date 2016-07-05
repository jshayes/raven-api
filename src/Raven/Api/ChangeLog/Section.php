<?php

namespace Raven\Api\ChangeLog;

interface Section
{
    /**
     * Get the entries for this section
     *
     * @return Raven\Api\ChangeLog\EntryCollection
     */
    public function getEntries();

    /**
     * Get the title for this Section
     *
     * @return string
     */
    public function getTitle();
}
