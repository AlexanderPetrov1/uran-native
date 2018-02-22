<?php

/**
 * Class ExporterCSV
 */
class ExporterCSV
{
    use Exporter;

    /**
     * Export all products to CSV file
     *
     * @return string filename
     */
    public function export()
    {
        $filename = 'CSV/' . time() . '.csv';

        $products = $this->getData();

        $csv = fopen($filename, 'w');
        while ($product = $products->fetch_object())
        {
            fputcsv($csv, [$product->id, $product->title]);
        }
        fclose($csv);

        return $filename;
    }
}