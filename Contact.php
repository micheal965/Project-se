<?php
class Contact extends Person {
    private $contactname;
    private $isfavourite;
    private $isBlocked;
    private $isEmergency;
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;
    }

    public function getContactName()
    {
        return $this->contactname;
    }
    public function setisFavorite($isfavourite)
    {
        $this->isfavourite = $isfavourite;
    }


    public function getIsFavorite()
    {
        return $this->isfavourite;
    }

    public function setisBlocked($isBlocked)
    {
        $this->isBlocked = $isBlocked;
    }
    public function getisBlocked($isBlocked)
    {
        return $this->isBlocked;
    }

    public function setisEmergency($isEmergency)
    {
        $this->isEmergency=$isEmergency;
    }
    public function getisEmergency()
    {
        return $this->isEmergency;
    }
    
    public function Favourite(){

    }
    public function Unfavourite(){

    }
    public function Block(){

    }
    public function Unblock(){

    }
    public function Emergency(){

    }
    public function Unemergency(){

    }
    public function Report(){

    }
    public function Edit_name(){//abstract

    }
    public function Edit_number(){//abstract

    }
}
?>