<?php

class UmbrellaAdminOptionsPage extends UmbrellaLib
{

	/**
	 * Holds an instance of the class
	 **/
	// protected static $instance = null;
	// private static $instance;
	/**
	 * The option ID
	 * 
	 * @var int
	 */
	public $option_id;

	/**
	 * The option page title
	 * 
	 * @var string
	 */
	public $page_title = 'My Option Page Title';

	public $menu_title = 'Custom Menu';

	public $manage_options = 'manage_options';

	public $call_back = '';

	public $template = '';

	public $icon = '';

	public $position;

	public $fields = [];

	public $args = [];

	/**
	 * The constructor
	 * 
	 * @return void
	 */
	public function __construct( $args ) {

		$default = [
			'menu_id' 		=> false,
			'page_title' 	=> 'My Top Level Menu Example',
			'menu_title'	=> 'Top Level Menu',
			'manage_options'=> 'manage_options',
			'template' 		=> false,
			'icon'			=> '',
			'position'		=> null,
			'fields' 		=> [],
		];

		$this->args = array_merge($default, $args);
	}

	/**
	 * Set option ID
	 * 
	 * @param int $option_id 
	 * @return obj
	 */
	// public static function init() 
	// {
	// 	if (!isset(self::$instance)) {
	// 		self::$instance = new UmbrellaAdminOptionsPage();
	// 	}
	// 	return self::$instance;
	// }

	public function setID( $option_id )
	{
		if( $option_id != '' ) {
			$this->option_id = $option_id;
		}
		return $this;
	}

	public function pageTitle( $page_title = '' )
	{
		if( $page_title != '' ) {
			$this->page_title = $page_title;
		}
		return $this;
	}

	public function menuTitle( $menu_title )
	{
		if( $menu_title != '' ) {
			$this->menu_title = $menu_title;
		}
		return $this;
	}

	public function mangeOption( $manage_options )
	{
		if( $manage_options != '' ) {
			$this->manage_options = $manage_options;
		}
		return $this;
	}

	public function callBack( $call_back )
	{
		if( $call_back != '' ) {
			$this->call_back = $call_back;
		}
		return $this;
	}

	public function icon( $icon )
	{
		if( $icon != '' ) {
			$this->icon = $icon;
		}
		return $this;
	}

	public function position( $position )
	{
		if( $position != '' ) {
			$this->position = $position;
		}
		return $this;
	}

	public function fields( $fields = [] )
	{
		if( is_array($fields) && !empty($fields) ) {
			$this->fields = $fields;
		}
		return $this;
	}

	public function register()
	{	

		if( !$this->args['menu_id'] ) { return false; }

		add_action( 'admin_menu', [$this, $this->args['menu_id'] .'_menu'], 10, 2 );
	}

	// public function register()
	// {	
	// 	add_action( 'admin_menu', [$this, $this->option_id .'_menu'], 10, 2 );
	// }

	public function __call($name, $null)
	{	
		switch ($name) {
			case $this->args['menu_id'] .'_menu':

					add_menu_page( 
						$this->args['page_title'], 
						$this->args['menu_title'], 
						$this->args['manage_options'], 
						$this->args['menu_id'] .'.php', 
						[$this, $this->args['menu_id'] .'_option_page'], 
						$this->args['icon'], 
						$this->args['position']
					);
				break;
			case $this->args['menu_id'] .'_option_page':
					$this->option_page();
				break;
			default:
					$this->null();
				break;
		}
	}

	public function option_page()
	{
		echo "asdasda";
	}

	public function null()
	{
		return 'nothing here';
	}

}