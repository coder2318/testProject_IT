<?php

namespace App\Http\Controllers;

use App\Http\Requests\Founder\StoreRequest;
use App\Services\FounderService;
use App\Traits\FileUpload;

class FounderController extends Controller
{
    use FileUpload;
    protected $service;

    public function __construct(FounderService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $founders = $this->service->index();
        return view('founder.index', compact('founders'));
    }

    public function show(int $id)
    {
        $founder = $this->service->show($id);
        return view('founder.show', compact('founder'));
    }

    public function create()
    {
        return view('founder.create');
    }

    public function store(StoreRequest $request)
    {
        $params = $request->validated();
        $params = $this->fileUpload($params, $request, 'founder');
        $this->service->create($params);
        return redirect()->route('thanks');
    }
}
