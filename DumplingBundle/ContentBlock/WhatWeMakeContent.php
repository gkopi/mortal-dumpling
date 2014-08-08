<?php
namespace Mortal\DumplingBundle\ContentBlock;

class WhatWeMakeContent {
	public $content_blocks;
	
	public function __construct() {
		$this -> content_blocks = array();
		$this -> content_blocks[] = new TextContentBlock('name', 'Some Sample Menus From Events', array( 
					"<a href='#'>Mortal Dumpling Monday Menu (1/2/34)</a>",
					"<a href='#'>Popup Thursday Menu (6/4/21)</a>")
		);
		$this -> content_blocks[] = new ImageContentBlock('imgname', 
					"bundles/mortaldumpling/images/MDMondaysOLD.jpg"
		);
		$this -> content_blocks[] = new TextContentBlock('name', 'Bulk Order', array( 
					"This little known option could be your best friend. We offer a 
					special menu (most of the stuff that's easy for us to make in bulk)
					 for special order, available for pickup at our Monday events. 
					 Check out the menu below, and shoot us an email with your order.",
					"<a href='#'>Popup Thursday Menu (6/4/21)</a>")
		);
	}
}