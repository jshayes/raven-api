<?php namespace Raven\Api\GitHub;

interface PullRequest {
	/**
	 * Retrieve the body content of a pull request
	 *
	 * @return string
	 */
	public function getBody();

	/**
	 * Retrieve the title of a pull request
	 *
	 * @return string
	 */
	public function getTitle();

	/**
	 * Retrieve the pull request number of a pull request
	 *
	 * @return int
	 */
	public function getNumber();
}
