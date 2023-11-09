<?php

class DB
{
    public static string $driver = 'mysql';
    public static string $table = '';

    public static function table($table)
    {
        static::$table = $table;
        return new self();
    }

    public static function get()
    {
        return "select * from " . static::$table;
    }
    public static function find($id)
    {
        return "select * from " . static::$table  . " where id = $id";
    }
}