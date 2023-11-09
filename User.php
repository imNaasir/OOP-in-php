<?php

abstract class User
{
    use HasComment;
    protected string $first_name = 'Ise';
    protected string $last_name = 'muse';
    protected string $user_name;

    public function __construct(string $f_name, string $l_name = "")
    {
        $this->first_name = $f_name;
        $this->last_name = $l_name;
        $this->user_name = substr($this->first_name, 0, 3) . $l_name;
    }
    public function getFullName(): string
    {
        return "your full name: ".$this->first_name . ' ' . $this->last_name;
    }
    public function getUserName(): string
    {
        return "your emil address: " . $this->user_name . '@gmail.com';
    }

}
