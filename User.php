<?php
class User extends Person {
    private string $email;
    private string $password;
    private string $country;
    public function setemail($email)
    {
        $this->email = $email;
    }
    public function getemail()
    {
        return $this->email;
    }
    public function setpassword($password)
    {
        $this->password = $password;
    }
    public function getpassword()
    {
        return $this->password;
    }
    public function setcountry($country)
    {
        $this->country = $country;
    }
    public function getcountry()
    {
        return $this->country;
    }
    
    
    public function Register()
    {

    }
    public function View_contact()
    {

    }
    public function Search_contact()
    {

    }
    public function Add_contact()
    {

    }
    public function Delete_contact()
    {

    }
    
    public function Viewblockedcontact(){
    }
    public function Viewfavouritecontact(){
    }
    public function Viewemergencycontact(){
    }
    public function Edit_name()
    {

    }
    public function Edit_number()
    {

    }
    
}
?>