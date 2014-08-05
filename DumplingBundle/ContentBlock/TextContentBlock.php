<?php
namespace Mortal\DumplingBundle\ContentBlock;

class TextContentBlock {
	public $paragraphs_array;
	public $title;
	public function __construct($name, $title, $paragraphs_array) {
		$this -> name = $name;
		$this -> paragraphs_array = $paragraphs_array;
		$this -> type = 'Text';
		$this -> title = $title;
	}

}
