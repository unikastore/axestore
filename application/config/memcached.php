<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Pengaturan Memcached
| -------------------------------------------------------------------------
| Server Memcached Anda dapat ditentukan di bawah ini.
|
| Lihat: https://codeigniter.com/userguide3/libraries/caching.html#memcached
|
*/

$config = array(
	'default' => array(
		'hostname' => '127.0.0.1',
		'port'     => '11211',
		'weight'   => '1',
	),
);
