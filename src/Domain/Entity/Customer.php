<?php

namespace CleanPhp\Invoicer\Domain\Entity;

class Customer extends AbstractEntity {
    protected $name;
    protected $email;
	/**
	 * 
	 * @return mixed
	 */
	function getName() {
		return $this->name;
	}
	
	/**
	 * 
	 * @param mixed $name 
	 * @return Customer
	 */
	function setName($name): self {
		$this->name = $name;
		return $this;
	}
	/**
	 * 
	 * @return mixed
	 */
	function getEmail() {
		return $this->email;
	}
	
	/**
	 * 
	 * @param mixed $email 
	 * @return Customer
	 */
	function setEmail($email): self {
		$this->email = $email;
		return $this;
	}
}