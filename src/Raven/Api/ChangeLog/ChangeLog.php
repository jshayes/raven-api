<?php namespace Raven\Api\ChangeLog;

interface ChangeLog
{
	/**
	 * Get the title text that appears at the top of the ChangeLog
	 *
	 * @return string
	 */
	public function getTitle();

	/**
	 * Set the title text for this ChangeLog
	 *
	 * @param string $title The title text to set
	 */
	public function setTitle($title);

	/**
	 * Get the collection of Sections for this ChangeLog
	 *
	 * @return Raven\Api\ChangeLog\SectionCollection
	 */
	public function getSections();

	/**
	 * Get the version from which this change log is generated
	 *
	 * @return string
	 */
	public function getPreviousVersion();

	/**
	 * Get the version to which change log is generated
	 *
	 * @return string
	 */
	public function getCurrentVersion();

	/**
	 * Add some text to the list of closed tickets
	 *
	 * @param string $ticket The ticket that was closed
	 */
	public function addClosedTicket($ticket);
}
