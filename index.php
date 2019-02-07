<?php

public function read()
    {

        $parser = new \Smalot\PdfParser\Parser();
        $pdf = $parser->parseFile('attechment5655782019-02-02.pdf');


        // Retrieve all pages from the pdf file.
        $pages  = $pdf->getPages();

// Loop over each page to extract text.
        foreach ($pages as $page) {
            echo $page->getText();
        }



    }

?>
