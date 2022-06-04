<?php

namespace App\Observers;

use App\Models\Application;
use App\Services\QrCodeService;

class ApplicationObserver
{
    public function created(Application $application)
    {
        $path = QrCodeService::generateQrCode($application->id);
        $application->update(['qr_code' => $path]);
    }
}
