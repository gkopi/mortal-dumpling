<?php
namespace Mortal\DumplingBundle\PageContent;

use Mortal\DumplingBundle\ContentBlock\TextContentBlock;
use Mortal\DumplingBundle\ContentBlock\EventContentBlock;
use Mortal\DumplingBundle\ContentBlock\ImageContentBlock;

class WhatWeMakeContent {
	public $content_blocks;
	
	public function __construct() {
		$this -> content_blocks = array();
		$this -> content_blocks[] = new TextContentBlock('name', 'Some Sample Menus From Events', array( 
					"</p><p style='text-align:center'><a href='#'>Mortal Dumpling Monday Menu (1/2/34)</a></p>",
					"</p><p style='text-align:center'><a href='#'>Popup Thursday Menu (6/4/21)</a></p>")
		);
	/*	$this -> content_blocks[] = new ImageContentBlock('imgname', 
					"bundles/mortaldumpling/images/MDMondaysOLD.jpg"
		);
	 * 
	 */
		$this -> content_blocks[] = new TextContentBlock('name', 'Bulk Order', array( 
					"This little known option could be your best friend. We offer a 
					special menu (most of the stuff that's easy for us to make in bulk)
					 for special order, available for pickup at our Monday events. 
					 Check out the menu below, and shoot us an email with your order.",
					"</p><p style='text-align:center'><a href='#'>Popup Thursday Menu (6/4/21)</a></p>")
		);
	}
}