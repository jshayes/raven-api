<?php namespace Raven\Api\ChangeLog;

interface SectionEntry {
	/**
	 * Get the PullRequets associated with this SectionEntry
	 *
	 * @return Raven\Api\GitHub\PullRequest
	 */
	public function getPullRequest();

	/**
	 * Get the text for this SectionEntry
	 *
	 * @return string
	 */
	public function getText();

	/**
	 * Set the text for this SectionEntry
	 *
	 * @param string $text The text to set for this SectionEntry
	 */
	public function setText($text);
}
