<?php

class Chat
{
    private $id;
    private $chatName;
    private $chatNumber;




    public function setId($id)
    {
        $this->id = $id;
    }


    public function getId()
    {
        return $this->id;
    }

    public function setChatName($chatName)
    {
        $this->chatName = $chatName;
    }



    public function setChatNumber($chatNumber)
    {
        $this->chatNumber = $chatNumber;
    }




    public function getChatName()
    {
        return $this->chatName;
    }


    public function getChatNumber()
    {
        return $this->chatNumber;
    }

}


?>