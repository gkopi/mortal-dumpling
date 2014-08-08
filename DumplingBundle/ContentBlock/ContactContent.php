<?php
namespace Mortal\DumplingBundle\ContentBlock;

class ContactContent {
	public $content_blocks;
	
	public function __construct() {
		$this -> content_blocks = array();
		$this -> content_blocks[] = new TextContentBlock(
			'General Contact Stuff','',
			array('
			<h2><strong>Are You A Mortal Dumpling?</strong></h3>
					<br>
					<h4> Neither are we - but we know some, and can put you in touch. </h4>
					<br><br>
					<p> Email us at: mortaldumpling@gmail.com </p>
					<p> Like us on <a href="#">facebook</a>, and follow us on <a href="#">twitter</a> - @mortaldumpling.'
			 )
		);
	}
}
