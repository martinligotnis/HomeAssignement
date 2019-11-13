<?php
require_once __DIR__ . '/vendor/autoload.php';
use App\Contact;
use App\Book;
use App\Address;

# Create first contact
$contact = new Contact;
$contact->setName('Mr John Doe');
$contact->setEmail('john@doe.com');

# Add first contact to list of contacts
$contacts[] = $contact;

# Create second contact
$contact = new Contact;
$contact->setName('Ms Anna Baker')->setEmail('anna@baker.com');

# Add second contact to list of contacts
$contacts[] = $contact;


# Open new book
$book = new Book;

# Open new address and declare address properties
$address = new Address;
$address->setHouseNumber('33');
$address->setStreet('Market street')->setCity('London');
$address->setPostCode('EC4 MB5');
$address->setCounty('Greater London');
$address->setCountry('GB');

# Add both contact information to address
foreach($contacts as $contact){
	$address->addContact($contact);	
}

# Add recrds to Book object
$bookdata = $address->getData();
$book->createAddress($bookdata);

# Reset contact list
$contacts = [];

# Create first contact
$contact = new Contact;
$contact->setName('Ms Dane Rovens');
$contact->setEmail('dane@rovens.com');

# Add first contact to list of contacts
$contacts[] = $contact;

# Add second address with one contact
$address = new Address;
$address->setHouseNumber('22');
$address->setStreet('Tower street');
$address->setPostCode('SK4 1HV');
$address->setCounty('Greater London');
$address->setCountry('GB');

# Add both contact information to address
foreach($contacts as $contact){
	$address->addContact($contact);	
}

# Add recrds to Book object
$bookdata = $address->getData();
$book->createAddress($bookdata);

// # Output all of the known information
echo $book->render();
// # preview of expected output below
/**

Book record: #1
Address: 33 Market street, London, Greater London, EC4 MB5, GB
Contact #1: <john@doe.com> John Doe 
Contact #2: <anna@baker.com> Anna Baker
Book record: #2
Address: 22 Tower Street, SK4 1HV, GB
Contact #1: <dane@rovens.com> Ms Dane Rovens

**/