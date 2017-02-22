<?php


class Form {
	private $request;
	public $hasErrors = false;

	public function __construct($postOrGet) {
		$this->request = $postOrGet;
	}

	public function get($people, $default = null) {

		$amount = isset($this->request[$people]) ? $this->request[$people] : $default;

		return $amount;
	}

	public function get($tab, $default = null) {

		$bill = isset($this->request[$tab]) ? $this->request[$tab] : $default;

		return $bill;
	}
	public function get($service, $default = null) {

		$opinion = isset($this->request[$service]) ? $this->request[$service] : $default;

		return $opinion;
	}

	public function get($check, $default = null) {

		$total = isset($this->request[$check]) ? $this->request[$check] : $default;

		return $total;
	}

}