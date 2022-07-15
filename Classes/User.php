<?php

class User {
    private $emp_id, $role, $username, $photo, $is_supervisor;

    public function __construct($emp_id, $role, $username, $photo, $is_supervisor)
    {
        $this->emp_id = $emp_id;
        $this->role = $role;
        $this->username = $username;
        $this->photo = $photo;
        $this->is_supervisor = $is_supervisor;
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
    
    public function getIsSupervisor()
    {
        return $this->is_supervisor;
    }

}

?>