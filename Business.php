<?php

class Contact {

    private $businessName;
    private $location;
    private $amountBilled;

    public function __construct($businessName, $location, $amountBilled)
    {
        $this->businessName = $businessName;
        $this->location = $location;
        $this->amountBilled = $amountBilled;

        $this->setBusinessName($businessName);
        $this->setLocation($location);
        $this->setAmountBilled($amountBilled);
    }

    public function setBusinessName($businessName)
    {
        $this->businessName = $businessName;

        return $this;
    }

    public function getBusinessName()
    {
        return $this->businessName;
    }

    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    public function getLocation()
    {
        return $this->location;
    }
    
    public function setAmountBilled($amountBilled)
    {
        $this->amountBilled = $amountBilled;

        return $this;
    }

    public function getAmountBilled()
    {
        return $this->amountBilled;
    }

    public function redirect($path)
    {
        header("Location: $path");
        die();
    }
}
