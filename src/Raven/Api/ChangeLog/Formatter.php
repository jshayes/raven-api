<?php namespace Raven\Api\ChangeLog;

interface Formatter
{
	/**
	 * Change log output
	 *
	 * @param Raven\Api\ChangeLog\ChangeLog
	 */
	public function format(ChangeLog $changeLog);
}
