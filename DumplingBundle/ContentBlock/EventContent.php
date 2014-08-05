<?php
namespace Mortal\DumplingBundle\ContentBlock;

class EventContent {
	public $content_blocks;
	
	public function __construct() {
		$this -> content_blocks = array();
		$this -> content_blocks[] = new EventContentBlock(
			'Thursdays @ Popup',
			'Every Thursday, from 11:30am - 2pm', 
			'1234 Pacific St., Santa Cruz', 
			'Lunch. Lorem ipsum dolor sit amet, justo arcu tellus auctor vel,
			 vitae ut pellentesque. Dumplings, Bao, Kimchi, and a rotating 
			 selection of the things you want.
		');

		$this -> content_blocks[] = new EventContentBlock('Mortal Dumpling Mondays', 
			'Every Monday, 6pm-9pm', 
			'5555 Front St., Santa Cruz', 
			'Sue vel porttitor mauris, nec sagittis. Erat lectus urna velit 
			bibendum suspendisse metus. Id quam praesent vestibulum. Pellentesque 
			at. A eros vivamus ullamcorper integer morbi porta, sit enim odio 
			sed wisi felis accusantium, sociosqu urna, ultricies wisi purus 
			vestibulum id lorem, et vitae.
		');
		
	}
}
