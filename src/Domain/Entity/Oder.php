<?php

namespace CleanPhp\Invoicer\Domain\Entity;

class Order {
    protected $customer;
    protected $orderNumber;
    protected $description;
    protected $total;
	/**
	 * 
	 * @return mixed
	 */
	function getCustomer() {
		return $this->customer;
	}
	
	/**
	 * 
	 * @param mixed $customer 
	 * @return Order
	 */
	function setCustomer($customer): self {
		$this->customer = $customer;
		return $this;
	}
	/**
	 * 
	 * @return mixed
	 */
	function getOrderNumber() {
		return $this->orderNumber;
	}
	
	/**
	 * 
	 * @param mixed $orderNumber 
	 * @return Order
	 */
	function setOrderNumber($orderNumber): self {
		$this->orderNumber = $orderNumber;
		return $this;
	}
	/**
	 * 
	 * @return mixed
	 */
	function getDescription() {
		return $this->description;
	}
	
	/**
	 * 
	 * @param mixed $description 
	 * @return Order
	 */
	function setDescription($description): self {
		$this->description = $description;
		return $this;
	}
	/**
	 * 
	 * @return mixed
	 */
	function getTotal() {
		return $this->total;
	}
	
	/**
	 * 
	 * @param mixed $total 
	 * @return Order
	 */
	function setTotal($total): self {
		$this->total = $total;
		return $this;
	}
}