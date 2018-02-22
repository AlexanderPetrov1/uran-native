<?php

/**
 * Class ExporterXML
 */
class ExporterXML
{
    use Exporter;

    /**
     * Export first 10 products to XML file
     *
     * @return string filename
     */
    public function export()
    {
        $products = $this->getData();
        $xml = [];
        $xml[] = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';
        $xml[] = '<products>';

        while ($product = $products->fetch_object())
        {
            $xml[] = '<product>';
            $xml[] = "<id>{$product->id}</id>";
            $xml[] = "<title>{$product->title}</title>";
            $xml[] = '</product>';
        }
        $xml[] = "</products>";

        $filename = 'XML/' . time() . '.xml';
        file_put_contents($filename, implode(PHP_EOL, $xml));
        return $filename;

    }

    /**
     * Separate method of obtaining data ( LIMIT 10 )
     *
     * @return mixed
     */
    public function getData()
    {
        $db = DB::getInstance();
        return $db->query('SELECT * FROM products limit 10');
    }
}