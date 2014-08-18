<?php
namespace Mortal\DumplingBundle\PageContent;

use Mortal\DumplingBundle\ContentBlock\TextContentBlock;
use Mortal\DumplingBundle\ContentBlock\EventContentBlock;
use Mortal\DumplingBundle\ContentBlock\ImageContentBlock;

class AboutContent {
	public $content_blocks;
	
	public function __construct() {
		$this -> content_blocks = array();
		$this -> content_blocks[] = new TextContentBlock('name', '', array( 
					"Dumplings. Life. One moment you've got a plate full of fresh, hot dumplings - next thing you
					 know they're all gone, and you're left wondering where everything went. Here at Mortal Dumpling,
					  however, we believe that if you don't attempt the sisyphean task of eating your fill of dumplings,
					   you've given up on life.",
					   
					   "We focus on Asian speciality foods: particularly on all types of dumplings, from Chinese dim sum
					 to Japanese mochi. Because it is the labor and technique of making these foods that makes them 
					 so special, rather than the use of expensive or rare ingredients, these foods play an important 
					 role in the lives of people all across Asia.  The traditions of making them are often passed down 
					 in the home, rather than professionally, in restaurants.  They play a large role in daily cuisines, 
					 as well as often being a big part of holiday meal traditions."
					)
		);
		$this -> content_blocks[] = new ImageContentBlock('imgname', 
					"bundles/mortaldumpling/images/noah1.JPG"
		);
		$this -> content_blocks[] = new TextContentBlock('name','',
				array("Check out our <a href ='Food.html'>What We Make</a> page for more about the foods we make, 
					and the events page to see what we're up to! You can join our email list using the sign-up form
					on the home page, or by contacting us at mortaldumpling@gmail.com."
					
				)
		);
		$this -> content_blocks[] = new TextContentBlock('name','Press',
				array(
					"Check out this <a href='http://ediblemontereybay.com/blog/mortal-dumpling-mondays-are-sum-thing-special/'>
					article</a> about us in <i>Edible Monterey Bay</i>!"
				)
				
		);
		
	}
}