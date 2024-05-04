<?php
class FlashMessage
{
    private $id;
    private $callerNumber;
    private $callerName;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setCallerNumber($callerNumber)
    {
        $this->callerNumber = $callerNumber;
    }

    public function getCallerNumber()
    {
        return $this->callerNumber;
    }

    public function setCallerName($callerName)
    {
        $this->callerName = $callerName;
    }

    public function getCallerName()
    {
        return $this->callerName;
    }

}


?>