<?php

class User {
    private $emp_id, $role, $username, $photo;

    public function __construct($emp_id, $role, $username, $photo)
    {
        $this->emp_id = $emp_id;
        $this->role = $role;
        $this->username = $username;
        $this->photo = $photo;
    }

    public function getEmpId()
    {
        return $this->emp_id;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

}

?>