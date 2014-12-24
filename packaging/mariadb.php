<?php

///////////////////////////////////////////////////////////////////////////////
// B O O T S T R A P
///////////////////////////////////////////////////////////////////////////////

$bootstrap = getenv('CLEAROS_BOOTSTRAP') ? getenv('CLEAROS_BOOTSTRAP') : '/usr/clearos/framework/shared';
require_once $bootstrap . '/bootstrap.php';

///////////////////////////////////////////////////////////////////////////////
// T R A N S L A T I O N S
///////////////////////////////////////////////////////////////////////////////

clearos_load_language('mariadb');

///////////////////////////////////////////////////////////////////////////////
// C O N F I G L E T
///////////////////////////////////////////////////////////////////////////////

$configlet = array(
	'title' => lang('mariadb_app_name'),
	'package' => 'mariadb-server',
	'process_name' => 'mysqld',
	'pid_file' => '/var/run/mariadb/mariadb.pid',
	'reloadable' => TRUE,
	'url' => '/app/mariadb'
);
