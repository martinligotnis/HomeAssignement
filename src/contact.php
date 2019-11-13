<?php
namespace App;

class Contact
{
    /**
     * @var string
     */
    private $name = '';

    /**
     * @var string
     */
    public $email = '';
    
    

    /**
     * setName
     *
     * @param  string $provided_name
     *
     * @return model for method inline execution
     */
    public function setName($provided_name)
    {
        $this->name = $provided_name;
        return $this;
    }


    /**
     * setEmail
     *
     * @param  string $provided_mail
     *
     * @return model for method inline execution
     */
    public function setEmail($provided_mail)
    {
        $this->email = $provided_mail;
        return $this;
    }


    /**
     * printName
     *
     * @return string Full name and email
     */
    public function printName()
    {
        $output = $this->name . ' ' . $this->email;
        return $output;
    }


    /**
     * getName
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * getEmail
     *
     * @return string $name
     */
    public function getEmail()
    {
        return $this->email;
    }
}
