<?php
class Message
{
    private $id;
    private string $Textmessage;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setText($Textmessage)
    {
        $this->Textmessage = $Textmessage;
    }
    

    public function getText()
    {
        return $this->Textmessage;
    }

    public function Sendmessage()
    {

    }
    public function Recievemessage()
    {

    }
    public function Sendvoice()
    {

    }
    public function Recievevoice()
    {

    }
    public function Deletemessage()
    {

    }
}
?>