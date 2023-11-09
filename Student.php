<?php
class Student extends User
{

    public bool $is_active = true;


    public function verify(bool $state = true)
    {
        $this->is_active = $state ;
    }
    public function is_verified(): string
    {
       return $this->is_active ? "verified" : "not_verified";
    }


}