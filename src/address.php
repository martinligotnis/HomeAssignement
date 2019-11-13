<?php
namespace App;

class Address {

	private $houseNumber = '';
	private $street = 'the street';
	protected $city = '';
	protected $county = '';
	public $postcode = '';
	public $country = '';
	private $contacts = [];



	public function setHouseNumber($provided_housenumber){
		$this->houseNumber = $provided_housenumber;
	}


	public function setStreet($provided_street){
		$this->street = $provided_street;
		return $this;
	}


	public function setCity($provided_city){
		$this->city = $provided_city;
		return $this;
	}


	public function setPostCode($provided_postcode){
		$this->postcode = $provided_postcode;
	}


	public function setCounty($provided_county){
		$this->county = $provided_county;
	}


	public function setCountry($provided_country){
		$this->country = $provided_country;
	}


	public function addContact($contact){
		$this->contacts[] = $contact;
	}
	

	public function getData(){
		$output = [
			$this->houseNumber,
			$this->street,
			$this->city,
			$this->county,
			$this->postcode,
			$this->country,
			$this->contacts,
		];
		return $output;
	}

}