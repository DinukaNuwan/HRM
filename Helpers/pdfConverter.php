<?php

// reference the Dompdf namespaceෆ
use Dompdf\Dompdf;
$dompdf = new Dompdf(array('enable_remote' => true));

class PdfConverter {

    public function convert($file_name, $download_name)
    {
        var_dump($file_name);
        // instantiate and use the dompdf class
        $html = file_get_contents('index.php');
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream($download_name);

        // Output the generated PDF to Server
        // $data = $dompdf->output();
        // file_put_contents(WEBROOT . 'name.pdf', $data);
    }

}