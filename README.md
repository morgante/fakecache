FakeCache will completely disable caching in Habari by providing a fake cache which does nothing.

To use it, first move the <code>fakecache.php</code> file into your <code>/user/classes</code> folder.

Then add the following line to index.php, underneath where HABARI_PATH is defined.

```php
define('CACHE_CLASS', 'FakeCache');
```

Once complete your <code>index.php</code> file should look like this:
```php
<?php
/**
 * Habari Index
 *
 * In this file, we just set the root dir and include system/system.php
 *
 * @package Habari
 */

/**
 * Define the constant HABARI_PATH.
 * The path to the root of this Habari installation.
 */
if ( !defined( 'HABARI_PATH' ) ) {
	define( 'HABARI_PATH', dirname( __FILE__ ) );
}

define('CACHE_CLASS', 'FakeCache');

/**
 * Require system/index.php, where the magic happens
 */
require( HABARI_PATH . '/system/index.php' );

?>
```