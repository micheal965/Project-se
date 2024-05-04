<?php
require_once '../controller/DBController.php';

class register
{
    protected $db;

    public function register($phone, $firstName, $lastName, $email, $password)
    {
        $this->db = new DBController;
        if ($this->db->openConnection()) {
            $sql = "INSERT INTO Person (p_num,f_name,l_name,email,password) 
                VALUES ('$phone','$firstName','$lastName','$email', '$password')";
            echo 'inserted succesfully';
            $this->db->insert($sql);


        } else {
            echo "error in database connection";
            return false;

        }
    }
}
?>