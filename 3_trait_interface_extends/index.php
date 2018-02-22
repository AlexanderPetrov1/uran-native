<?php

    umask(0);
    include 'config.php';

    spl_autoload_register(function ($class)
    {
        include $class . '.php';
    });

    $result = [];

    $CSV = new ExporterCSV();
    // Run export to CSV
    $result['csv'] = $CSV->export();

    $HTML = new ExporterHTML();
    // Run export to HTML
    $result['html'] = $HTML->export();

    $XML = new ExporterXML();
    // Run export to XML
    $result['xml'] = $XML->export();

    echo "
    <html>
    <body>
        <h3>CSV File</h3>
        <a href='{$result['csv']}'>{$result['csv']}</a><br /><br />

        <h3>XML File</h3>
        <a href='{$result['xml']}'>{$result['xml']}</a><br /><br />

        <h3>HTML Files</h3>
    ";

    foreach ($result['html'] as $file)
    {
        echo "<a href='{$file}'>{$file}</a><br />";
    }


    echo "</body></html>";