<?php

/**
 * Class ExporterHTML
 */
class ExporterHTML
{
    use Exporter;

    /**
     * Export all products to HTML files
     *
     * @return array filenames
     */
    public function export()
    {
        $dir = 'HTML/' . time();
        mkdir($dir);
        $filenames = [];

        $products = $this->getData();

        while ($product = $products->fetch_object())
        {
            $file = "{$dir}/{$product->id}.html";
            file_put_contents($file, "<html><body>ID: {$product->id}, TITLE: {$product->title}</body></html>");
            $filenames[] = $file;
        }

        return $filenames;
    }
}