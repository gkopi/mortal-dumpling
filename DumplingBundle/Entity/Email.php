<?php

namespace Mortal\DumplingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Email
 */
class Email {
	/**
	 * @var integer
	 */
	private $id;

	/**
	 * @var string
	 */
	private $name;

	/**
	 * @var string
	 */
	private $email;

	public function __construct($email_address) {
		$this -> email = $email_address;
	}

	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId() {
		return $this -> id;
	}

	/**
	 * Set name
	 *
	 * @param string $name
	 * @return Email
	 */
	public function setName($name) {
		$this -> name = $name;

		return $this;
	}

	/**
	 * Get name
	 *
	 * @return string
	 */
	public function getName() {
		return $this -> name;
	}

	public function getEmail() {
		return $this -> email;
	}
	
	/**
	 * Set email
	 *
	 * @param string $email_address
	 * @return Email
	 */
	public function setEmail($email_address) {
		$this -> email = $email_address;

		return $this;
	}

}
