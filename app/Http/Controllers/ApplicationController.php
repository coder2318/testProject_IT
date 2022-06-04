<?php

namespace App\Http\Controllers;

use App\Http\Requests\Application\StoreRequest;
use App\Http\Requests\Application\UpdateRequest;
use App\Models\Application;
use App\Services\AppliactionService;
use App\Traits\FileUpload;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    use FileUpload;
    protected $service;

    public function __construct(AppliactionService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $applications = $this->service->index();
        return view('application.index', compact('applications'));
    }

    public function show(int $id)
    {
        $application = $this->service->show($id);
        return view('application.show', compact('application'));
    }

    public function create()
    {
        return view('application.create');
    }

    public function store(StoreRequest $request)
    {
        $params = $request->validated();
        $this->service->create($params);
        return redirect()->route('application.index');
    }

    public function edit(int $id)
    {

        $application = $this->service->edit($id);
        return view('application.edit', compact('application'));
    }

    public function update(int $id, UpdateRequest $request)
    {
        $params = $request->validated();
        $params = $this->fileUpload($params, $request, 'application');
        $application = $this->service->update($params,$id);
        return redirect()->route('application.index');
    }

    public function delete(int $id)
    {
        try {
            $this->service->delete($id);
            return redirect()->route('application.index');
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function qrCode(int $id)
    {
        $application = $this->service->show($id);
        return view('application.qr_code', compact('application'));
    }
}
