<?php
namespace App;

class Book {

	private $records = [];

	


	public function createAddress($address) {
		$this->records[] = $address;
    }



	public function render(){

		$output = [];

		foreach($this->records as $index => $record){

			$output[] = htmlspecialchars( 'Book record #'.($index+1) );

			if(	$record[2] == ''){
				$output[] = htmlspecialchars('Address: '. $record[0] . ' ' . $record[1] . ', ' . $record[4] . ', ' . $record[5] );
			} else {
				$output[] = htmlspecialchars('Address: '. $record[0] . ' ' . $record[1] . ', ' . $record[2] . ', ' . $record[3] . ', ' . $record[4] . ', ' . $record[5] );
			}
			
			foreach($record[6] as $index => $contact){
				if( $record[2] == ''){
					$output[] = htmlspecialchars('Contact # '.($index+1).': <'. $contact->getEmail() .'> ' . $contact->getName() );
				}else{
					$output[] = htmlspecialchars('Contact #'.($index+1).': <'. $contact->getEmail() .'> ' . substr($contact->getName(), 3) );
				}				
			}

		}
		return implode('<br>', $output);
	}
}