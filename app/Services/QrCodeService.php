<?php

namespace App\Services;

use File;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

class QrCodeService
{
    public static function generateQrCode($id)
    {
        $qrCode = QrCode::create('');
        $qrCode->setSize(300);
        $qrCode->setMargin(10);
        $writer = new PngWriter();
        $result = $writer->write($qrCode);
        $folder = public_path().'/qr-code';
        if (!File::exists($folder)) {
            File::makeDirectory($folder, 0775, true, true);
        }
        $path = '/qr-code/'.time().'.jpg';
        $result->saveToFile(public_path().$path);
        return $path;
    }
}
