<?php

namespace CleanPhp\Invoicer\Domain\Entity;

class Invoice {
    protected $order;
    protected $invoiceDate;
    protected $total;
	/**
	 * 
	 * @return mixed
	 */
	function getOrder() {
		return $this->order;
	}
	
	/**
	 * 
	 * @param mixed $order 
	 * @return Invoice
	 */
	function setOrder($order): self {
		$this->order = $order;
		return $this;
	}
	/**
	 * 
	 * @return mixed
	 */
	function getInvoiceDate() {
		return $this->invoiceDate;
	}
	
	/**
	 * 
	 * @param mixed $invoiceDate 
	 * @return Invoice
	 */
	function setInvoiceDate($invoiceDate): self {
		$this->invoiceDate = $invoiceDate;
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
	 * @return Invoice
	 */
	function setTotal($total): self {
		$this->total = $total;
		return $this;
	}
}