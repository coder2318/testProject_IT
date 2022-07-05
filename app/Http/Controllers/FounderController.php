<?php

namespace App\Http\Controllers;

use App\Http\Requests\Founder\StoreRequest;
use App\Http\Requests\Founder\UpdateRequest;
use App\Services\FounderService;
use App\Traits\FileUpload;
use Illuminate\Http\Request;


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

    public function store(Request $request)
    {
        // $params = $request->validated();
        $params = $request->all();
        $params = $this->fileUpload($params, $request, 'founder');
        $this->service->create($params);
        return redirect()->route('thanks');
    }

    public function edit(int $id)
    {
        $founder = $this->service->edit($id);
        return view('founder.edit', compact('founder'));
    }

    public function update(int $id, UpdateRequest $request)
    {
        $params = $request->validated();
        $params = $this->fileUpload($params, $request, 'founder');
        $founder = $this->service->update($params,$id);
        return redirect()->route('founder.index');
    }

    public function delete(int $id)
    {
        try {
            $this->service->delete($id);
            return redirect()->route('founder.index');
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
