<?php
namespace App;

class Contact {
	
	private $name = '';
	public $email = '';
	
	

	public function setName($provided_name){
		$this->name = $provided_name;
		return $this;
	}


	public function setEmail($provided_mail){
		$this->email = $provided_mail;
		return $this;
	}


	public function printName(){
		$output = $this->name . ' ' . $this->email;
		return $output;
	}


	public function getName(){
		return $this->name;
	}


	public function getEmail(){
		return $this->email;
	}

}