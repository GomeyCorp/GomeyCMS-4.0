<?php
/*=======================================================================
| GomeyCMS - Advanced Website and Content Management System for heil.world
| #######################################################################
| Copyright (c) 2017, Arran 'Pillow'.
| https://heil.world & http://gomey.tk
| #######################################################################
| This program is free software: you can redistribute it and/or modify
| it under the terms of the GNU General Public License as published by
| the Free Software Foundation, either version 3 of the License, or
| (at your option) any later version.
| #######################################################################
| This program is distributed in the hope that it will be useful,
| but WITHOUT ANY WARRANTY; without even the implied warranty of
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
| GNU General Public License for more details.
\======================================================================*/

class GomeyEngine
{
	public $config;

	public static function FormatDate()
	{
		return date('j F Y, h:i:s A');
	}

	public static function SystemError($title, $text)
	{
		echo '<div style="width: 80%; padding: 15px 15px 15px 15px; margin: 50px auto; background-color: #F6CECE; font-family: arial; font-size: 12px; color: #000000; border: 1px solid #FF0000;">';
		echo '<img src="/images/error.png" style="float: left;" title="Error">&nbsp;';
		echo '<b>' . $title. '</b><br />';
		echo '&nbsp;' . $text;
		echo '<hr size="1" style="width: 100%; margin: 15px 0px 15px 0px;" />';
		echo 'Script execution was aborted. Blame Danny. If this problem is persistant, please contact an Administrator.';
		echo '</div><center style="font-family: arial; font-size: 10px;">Powered by <a href="http://heil.world/cms/">Al13n</a> - Copyright &copy 2017, <a href="https://heil.world/">Heil.world</a>.</center>';
		exit;
	}

	public function ParseConfig()
	{
		$configPath = 'config.php';

		if (!file_exists($configPath))
		{
			$this->systemError('GomeyCMS :: Al13N Error', 'The configuration file could not be located at ' . $configPath);
		}

		require_once $configPath;

		if (!isset($config) || count($config) < 2)
		{
			$this->systemError('Configuration Error', 'The configuration file was located, but is in an invalid format. Data is missing or in the wrong format.');
		}

		$this->config = $config;

		define('WWW', $this->config['Site']['www']);
	}

	public function CheckConn(){
		$check = mysqli_connect($this->config['MySQLi']['hostname'], $this->config['MySQLi']['username'], $this->config['MySQLi']['password'], $this->config['MySQLi']['database']);
		if (mysqli_connect_errno()) {
		    $this->systemError('GomeyCMS :: AL13N', '</br>MySQL connection details were incorrect/could not connect to host!');
		    exit();
		}
	}

}

?>
