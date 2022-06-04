<?php

namespace App\Services;

use App\Repository\ApplicationRepository;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\Writer\PngWriter;
use Illuminate\Support\Facades\Storage;
use Endroid\QrCode\QrCode;

class AppliactionService extends BaseService
{
    public function __construct(ApplicationRepository $repo)
    {
        $this->repo = $repo;
    }
//    public function create($params)
//    {
////        $fio = preg_match('/[А-Яа-яЁё]/u','Данные заявителя:');
////        dd($fio);
////            echo $fio;
////        $image = QrCode::format('png')->size(300)->generate('ффф'
//////            'Дата оформления'.$params['register_date'].'<br>'.
//////            'Срок действия'.$params['expire_date']
////        );
//
//        $qrCode = QrCode::create('http://itvisa.uz');
//        $qrCode->setSize(300);
//        $qrCode->setMargin(10);
//        $writer = new PngWriter();
//        $img = Logo::create(public_path().'/'.time().'jpg')->setResizeToWidth(50);
//        $result = $writer->write($qrCode);
//        $result->saveToFile(public_path().'/'.time().'.jpg');
//        $dataUri = $result->getDataUri();
//        dd($dataUri);
//        $output_file = '/img/qr-code/img-' . time() . '.png';
//        dd(Storage::disk('local')->put($output_file, $image));
//        $path = public_path().
//        dd($image);
//    }
    public function index()
    {
        return $this->repo->index();
    }
    public function edit($id)
    {
        return $this->repo->edit($id);
    }

    public function update($params, $id)
    {
        return $this->repo->update($params, $id);
    }
}
