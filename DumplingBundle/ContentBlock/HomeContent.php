<?php
namespace Mortal\DumplingBundle\ContentBlock;

class HomeContent {
	public $content_blocks;

	public function __construct() {
		$eventContent = new EventContent();
		$this -> content_blocks = $eventContent -> content_blocks;
		$this -> content_blocks[] = new TextContentBlock('About Blurb','About Us',
			array(
			"The stomach-child of Santa Cruz chef Noah Kopito, Mortal Dumpling
			 is jumping onto the Santa Cruz food scene! And, almost as though
			 the Santa Cruz food scene was a trampoline, we are bouncing from popup 
			 to <a href='heypopup.com'>Popup</a>, and from this website to 
			 <a href='https://www.youtube.com/watch?v=LhzClMf3c6g'> your next catered
			  event</a>. Hopefully we can bounce back from that, 
			 because Noah says we're just getting started.")
		);
		/*catered event img http://www.toff-chef.com/wp-content/uploads/2014/06/dinner-party-advice-resive.jpg */
	}

}