<?php namespace Raven\Api\ChangeLog;

interface SectionEntry
{
	/**
	 * Get the PullRequest associated with this SectionEntry
	 *
	 * @return Raven\Api\GitHub\PullRequest
	 */
	public function getPullRequest();

	/**
	 * Get the title for this SectionEntry
	 *
	 * @return string
	 */
	public function getTitle();

	/**
	 * Set the title for this SectionEntry
	 *
	 * @param string $title The title to set for this SectionEntry
	 */
	public function setTitle($title);
}
