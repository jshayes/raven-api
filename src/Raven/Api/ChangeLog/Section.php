<?php namespace Raven\Api\ChangeLog;

interface Section {
	/**
	 * Get the entries for this section
	 *
	 * @return Raven\Api\ChangeLog\EntryCollection
	 */
	public function getEntries();
}
