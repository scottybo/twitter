<?php namespace Scottybo\Twitter\Traits;

use BadMethodCallException;

Trait MediaTrait {

	/**
	 * Upload images, GIFs and videos to Twitter, to use in a Tweet or Twitter-hosted Card.
	 *
	 * Parameters :
	 * - media
	 * - media_data
	 */
	public function uploadMedia($parameters = [])
	{
	        if (array_key_exists('media', $parameters) && array_key_exists('media_data', $parameters))
	        {
	            throw new BadMethodCallException('You cannot use media and media_data at the same time');
	        }

		return $this->post('media/upload', $parameters, true);
	}

	/**
	 * Get the status of uploaded media
	 *
	 * Parameters :
	 * - command (STATUS)
	 * - media_id
	 */
	public function uploadStatus($parameters = [])
	{
		return $this->get('media/upload', $parameters);
	}

}
