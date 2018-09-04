<?php

define( 'UMBRELLALIB_DIR_PATH', dirname(__FILE__) );

Class UmbrellaLib 
{
	public function __construct()
	{
		
		$this->includes();
	}

	public function includes()
	{
		/**
		 * Require options page class.
		 */
		require_once 'classes/class-options-page.php';
	}

	public static function admin()
	{
		echo "string";
		die();
	}	

	// public function register_menu( $args )
	// {

	// }
}

$umbrella_lib = new UmbrellaLib;