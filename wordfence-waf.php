<?php
// Before removing this file, please verify the PHP ini setting `auto_prepend_file` does not point to this.

if (file_exists('/Applications/MAMP/htdocs/eastcoastsoul/wp-content/plugins/wordfence/waf/bootstrap.php')) {
	define("WFWAF_LOG_PATH", '/Applications/MAMP/htdocs/eastcoastsoul/wp-content/wflogs/');
	include_once '/Applications/MAMP/htdocs/eastcoastsoul/wp-content/plugins/wordfence/waf/bootstrap.php';
}
?>