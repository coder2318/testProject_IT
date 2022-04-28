<?php

namespace App\Http\Controllers;

use App\Http\Requests\SpecialistRelocation\StoreRequest;
use App\Services\SpecialistRelocationService;
use App\Traits\FileUpload;
use Illuminate\Http\Request;

class SpecialistRelocationController extends Controller
{
    use FileUpload;
    protected $service;

    public function __construct(SpecialistRelocationService $service)
    {
        $this->service = $service;
    }

    public function create()
    {
        return view('specialist_relocation.create');
    }

    public function store(StoreRequest $request)
    {
        $params = $request->validated();
        $params = $this->fileUpload($params, $request, 'specialist-relocation');
        if($params['employment'] == 'other'){
            $params['employment'] = $params['employment_other'];
        }
        $this->service->create($params);
        return redirect()->route('home');
    }
}
