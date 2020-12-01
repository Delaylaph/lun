<?php

namespace App\Core\FileCreator;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use XMLWriter;

class XMLFileCreator implements FileCreator
{

    public function generateFile($announcements) {
        $xml = new XMLWriter();
        $xml->openMemory();
        $xml->startDocument('1.0', 'utf-8');
        $xml->startElement("page");
        $xml->writeElement('generation_time', Carbon::now());
        $xml->startElement("announcements");
        foreach ($announcements as $announcement) {
            $xml->startElement("announcement");
            foreach ($announcement as $key => $value) {
                if($key !== 'id' && $value !== false && $value !== null) {
                    $xml->writeElement($key, $value);
                }
            }
            $xml->endElement();
        }
        $xml->endElement();
        $xml->endElement();
        $xml->endDocument();
        $file_name = Str::random(32) . '.xml';
        $url = null;
        if(Storage::put('public/xmls/' . $file_name, $xml->outputMemory())) {
            $url = Storage::url('public/xmls/' . $file_name);
        }
        return $url;
    }
}
