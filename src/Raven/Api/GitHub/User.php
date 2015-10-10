<?php namespace Raven\Api\GitHub;

interface User
{
	/**
	 * Get the user's login username
	 *
	 * @return string
	 */
	public function getLogin();
}
