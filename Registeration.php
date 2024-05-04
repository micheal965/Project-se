<?php
class Registeration
{
    private $id;
    private $verificationCode;
    public function setVerificationCode($verificationCode)
    {
        $this->verificationCode = $verificationCode;
    }

    public function getVerificationCode()
    {
        return $this->verificationCode;
    }

    public function Send_code()
    {

    }
    public function Get_code()
    {
    }
    public function Verify_code()
    {
    }
    public function Resend_code()
    {

    }
}
?>