<?php
/**
 * This class pretends to do caching
 *
 * Put this in /user/classes/
 */
class FakeCache extends Cache
{
	protected $enabled = false;

	/**
	 * Constructor for FakeCache
	 *
	 * Sets up paths etc. and reads cache index, if it exists.
	 */
	public function __construct()
	{
		$this->enabled = true;
				
		// $this->enabled = Options::get( 'nocache__instancecache', false );
	}

	/**
	 * Is record with $name in the cache?
	 *
	 * @param string $name name of the cached item
	 * @return boolean true if item is cached, false if not
	 */
	protected function _has( $name, $group )
	{
		return false;
	}

	/**
	 * Is group in the cache?
	 *
	 * @param string $name name of the cached item
	 * @return boolean true if item is cached, false if not
	 */
	protected function _has_group( $group )
	{
		return false;
	}

	/**
	 * Returns the group from the cache.
	 *
	 * @param string $name The name of the cached item
	 * @return mixed The group or array() if it doesn't exist in cache
	 */
	protected function _get_group( $group )
	{
		return array();
	}

	/**
	 * Returns the named value from the cache.
	 *
	 * @param string $name The name of the cached item
	 * @return mixed The item value or null if it doesn't exist in cache
	 */
	protected function _get( $name, $group )
	{
		return null;
	}

	protected function _set( $name, $value, $expiry, $group, $keep )
	{
		return null;
	}

	/**
	 * Expires the named value from the cache.
	 *
	 * @param string $name The name of the cached item
	 * @param string $group The name of the cache group
	 * @param string $match_mode (optional) how to match bucket names ('strict', 'regex', 'glob') (default 'strict')
	 */
	protected function _expire( $name, $group, $match_mode = 'strict' )
	{
		return null;
	}


	/**
	 * Return whether a named cache value has expired
	 *
	 * @param string $name The name of the cached item
	 * @param string $group The group of the cached item
	 * @return boolean true if the stored value has expired
	 */
	protected function _expired( $name, $group )
	{
		return null;
	}

	/**
	 * Extend the expiration of the named cached value.
	 *
	 * @param string $name The name of the cached item
	 * @param integer $expiry The duration in seconds to extend the cache expiration by
	 */
	protected function _extend( $name, $expiry, $group )
	{
		return null;
	}

	/**
	 * Remove all cache files
	 */
	protected function _purge()
	{
		return null;
	}

}

?>