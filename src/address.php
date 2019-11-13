<?php
namespace App;

class Address
{
    /**
     * @var string
     */
    private $houseNumber = '';

    /**
     * @var string
     */
    private $street = '';

    /**
     * @var string
     */
    protected $city = '';

    /**
     * @var string
     */
    protected $county = '';

    /**
     * @var string
     */
    public $postcode = '';

    /**
     * @var string
     */
    public $country = '';

    /**
     * @var array
     */
    private $contacts = [];

    /**
     * setHouseNumber
     *
     * @param  string $provided_housenumber
     *
     * @return void
     */
    public function setHouseNumber($provided_housenumber)
    {
        $this->houseNumber = $provided_housenumber;
    }

    /**
     * setStreet
     *
     * @param  string $provided_street
     *
     * @return model for inline method call
     */
    public function setStreet($provided_street)
    {
        $this->street = $provided_street;
        return $this;
    }

    /**
     * setCity
     *
     * @param  string $provided_city
     *
     * @return model for inline method call
     */
    public function setCity($provided_city)
    {
        $this->city = $provided_city;
        return $this;
    }

    /**
     * setPostCode
     *
     * @param  string $provided_postcode
     *
     * @return void
     */
    public function setPostCode($provided_postcode)
    {
        $this->postcode = $provided_postcode;
    }

    /**
     * setCounty
     *
     * @param  string $provided_county
     *
     * @return void
     */
    public function setCounty($provided_county)
    {
        $this->county = $provided_county;
    }

    /**
     * setCountry
     *
     * @param  string $provided_country
     *
     * @return void
     */
    public function setCountry($provided_country)
    {
        $this->country = $provided_country;
    }

    /**
     * addContact
     *
     * @param  mixed $contact
     *
     * @return void
     */
    public function addContact($contact)
    {
        $this->contacts[] = $contact;
    }
    
    /**
     * getData
     *
     * @return array with all properties
     */
    public function getData()
    {
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
