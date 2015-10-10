<?php namespace Raven\Api\ChangeLog;

interface Validator
{
	/**
	 * Validate that the SectionEntry is valid
	 *
	 * @param Raven\Api\ChangeLog\SectionEntry $entry The SectionEntry to validate
	 * @return bool
	 */
	public function isValid(SectionEntry $entry);
}
