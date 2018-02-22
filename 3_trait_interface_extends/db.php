<?php

/**
 * Class DB
 */

class DB
{
    /**
     * @var null
     */
    private static $instance = null;

    /**
     * @var
     */
    public static $DB;

    /**
     * Create instance and connect to database
     *
     * @return DB|null
     */
    public static function getInstance()
    {
        if (null === self::$instance)
        {
            self::$instance = new self();
            self::$DB = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
        }
        return self::$instance;
    }

    public function __construct() {}
    public function __clone() {}

    /**
     * @param $query    string
     * @return mixed
     */
    public function query($query)
    {
        return self::$DB->query($query);
    }

}