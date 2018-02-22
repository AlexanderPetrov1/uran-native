<?php

/**
 * Trait Exporter
 */
trait Exporter
{
    /**
     * Get Data from database
     *
     * @return mixed
     */
    public function getData()
    {
        $db = DB::getInstance();
        return $db->query("SELECT * FROM products");
    }

    public function export() {}
}
