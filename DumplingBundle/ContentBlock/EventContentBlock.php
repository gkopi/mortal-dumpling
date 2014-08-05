<?php
namespace Mortal\DumplingBundle\ContentBlock;

class EventContentBlock {
	public $when;
	public $where;
	public $what;
	public function __construct($name, $when, $where, $what) {
		$this -> name = $name;
		$this -> when = $when;
		$this -> where = $where;
		$this -> what = $what;
		$this -> type = 'Event';
	}

}
