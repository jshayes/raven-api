<?php namespace Raven\Api\ChangeLog;

use Countable;
use IteratorAggregate;

interface EntryCollection extends Countable, IteratorAggregate
{
	/**
	 * Get an array containing all of the SectionEntries of this collection
	 *
	 * @return array
	 */
	public function all();

	/**
	 * Get the SectionEntry for a given key if it exists. Otherwise,
	 * returns null.
	 *
	 * @param string $key The key to lookup in the collection
	 * @return Raven\Api\ChangeLog\SectionEntry
	 */
	public function get($key);

	/**
	 * Check to see if the collection contains an element for a given key.
	 *
	 * @param string $key The key to lookup in the collection
	 * @return bool
	 */
	public function has($key);
}
