<?php
abstract class Person{
    private  $id;
    private  $f_name;
    private  $l_name;
    private  $p_number;
    public function setid($id)
    {
        $this->id = $id;
    }

    public function getid()
    {
        return $this->id;
    }
    public function setfirstname($f_name)
    {
        $this->f_name = $f_name;
    }
    

    public function getfirstname()
    {
        return $this->f_name;
    }
    public function setlastname($l_name)
    {
        $this->l_name = $l_name;
    }
    
    public function getlastname()
    {
        return $this->l_name;
    }

    public function setphone_number($p_number)
    {
        $this->p_number = $p_number;
    }
    public function getphone_number()
    {
        return $this->p_number;
    }

    abstract public  function Edit_name();
    abstract public  function Edit_number();
}
?>