<?php
/*	Project:	EQdkp-Plus
 *	Package:	Order and Chaos online game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}

if(!class_exists('hots')) {
	class hots extends game_generic {
		protected static $apiLevel	= 20;
		public $version				= '1.0.0';
		protected $this_game		= 'hots';
		protected $types			= array('classes');
		protected $classes			= array();
		protected $races			= array();
		protected $filters			= array();
		public $langs				= array('english', 'german');

		protected $class_dependencies = array(
			array(
				'name'		=> 'class',
				'type'		=> 'classes',
				'admin'		=> false,
				'decorate'	=> true,
				'primary'	=> true,
				'colorize'	=> true,
				'roster'	=> true,
				'recruitment' => true,
				'parent'	=> true,
			),
		);
		
		public $default_roles = array(
			1	=> array(1),
			2	=> array(2),
			3	=> array(3),
			4	=> array(4),
		);
		
		protected $class_colors = array(
			1	=> '#7F00FF',
			2	=> '#ff0000',
			3	=> '#00ff00',
			4	=> '#0000ff',
		);

		protected $glang		= array();
		protected $lang_file	= array();
		protected $path			= '';
		public $lang			= false;

		protected function load_filters($langs){
		}

		public function install($install=false){}
	}
}
?>