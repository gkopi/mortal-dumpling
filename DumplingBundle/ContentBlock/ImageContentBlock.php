<?php

namespace Mortal\DumplingBundle\ContentBlock;

class ImageContentBlock {
	public $url;

	public function __construct($name, $url) {
		$this -> name = $name;
		$this -> url = $url;
		$this -> type = 'Image';
	}

}
