<?php
class Admin  extends User
{

    public array $permissions = [];


    public function givePermission($permission): void
    {
        array_push($this->permissions, $permission);
    }
    public function getPermissions()
    {
        return implode(",", $this->permissions);
    }
    public function getFullName(): string
    {
        return "admin fullName: " . $this->first_name. $this->last_name;
    }

}