<?php namespace Raven\Api\ChangeLog;

use Countable;
use IteratorAggregate;

interface SectionCollection extends Countable, IteratorAggregate {
	/**
	 * Get an array containing all of the Sections of this collection
	 *
	 * @return array
	 */
	public function all();

	/**
	 * Get the Section for a given key if it exists. Otherwise,
	 * returns null.
	 *
	 * @param string $key The key to lookup in the collection
	 * @return Raven\Api\ChangeLog\Section
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
