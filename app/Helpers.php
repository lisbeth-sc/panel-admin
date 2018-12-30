<?php

function csv_to_array($filename = '', $delimiter = ',')
{
    if (!file_exists($filename) || !is_readable($filename))
        return FALSE;

    $header = NULL;
    $data = array();
    if (($handle = fopen($filename, 'r')) !== FALSE) {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE) {
            if (!$header)
                $header = $row;
            else
                $data[] = array_combine($header, $row);
        }
        fclose($handle);
    }
    return $data;
}

function returnHTMLText($text, $id)
{
    $dom = new \DomDocument();

    $dom->loadHtml($text, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

    $images = $dom->getElementsByTagName('img');

    foreach ($images as $k => $img) {

        $data = $img->getAttribute('src');
        list($type, $data) = explode(';', $data);
        list(, $data) = explode(',', $data);
        $data = base64_decode($data);
        $image_name = "/" . $id . "/" . time() . $k . '.png';
        $path = public_path() . $image_name;

        file_put_contents($path, $data);

        $img->removeAttribute('src');

        $img->setAttribute('src', $image_name);

    }

    return $dom->saveHTML();
}

function parseDatetime($fecha)
{
    return $fecha ? Carbon\Carbon::createFromFormat('Y-m-d', $fecha)->format('d/m/Y') : null;
}
