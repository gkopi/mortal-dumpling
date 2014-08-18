<?php
namespace Mortal\DumplingBundle\PageContent;

use Mortal\DumplingBundle\ContentBlock\TextContentBlock;
use Mortal\DumplingBundle\ContentBlock\EventContentBlock;
use Mortal\DumplingBundle\ContentBlock\ImageContentBlock;

class EventContent {
	public $content_blocks;
	
	public function __construct() {
		$this -> content_blocks = array();
		$this -> content_blocks[] = new EventContentBlock(
			'Thursdays @ Popup',
			'Every Thursday, from 11:30am - 2pm', 
			'1108 Pacific Ave, Santa Cruz', 
			"Dumplings, Bao, Steam Buns & more. Want more details? We've got those at the event."
		);

		$this -> content_blocks[] = new EventContentBlock('Mortal Dumpling Mondays', 
			'Every Monday, 6pm-9pm', 
			'504A Front St, Santa Cruz', 
			'Every Monday we set up a temporary restaurant where, for a few hours, you can order from a full menu of our food.
		');
		
	}
}
