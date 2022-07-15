<?php

namespace App\Http\Controllers;

use App\Http\Requests\Founder\StoreRequest;
use App\Http\Requests\Founder\UpdateRequest;
use App\Models\AncetaExpert;
use App\Services\FounderService;
use App\Traits\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
        $anceta_expert = $this->service->getAncetaExpert($id, AncetaExpert::TYPE_FOUNDER);
        $experts = $this->service->getAncetaExpertAnswers($id, AncetaExpert::TYPE_FOUNDER);
        return view('founder.show', compact('founder', 'anceta_expert', 'experts'));
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

    public function sendToExpert($id)
    {
        $params['type'] = AncetaExpert::TYPE_FOUNDER;
        $params['anceta_id'] = $id;
        $this->service->sendToExpert($params);
        $this->service->update(['status' => AncetaExpert::STATUS_WAITING], $id);
        return redirect()->route('founder.show', ['founder' => $id]);
    }

    public function changeStatus(Request $request, int $id)
    {
        $params = $request->all();
        if (password_verify($params['password'], \auth()->user()->password)) {
            $params['type'] = AncetaExpert::TYPE_FOUNDER;
            $model = $this->service->changeStatus($params, $id);
            if($model)
                return redirect()->route('founder.show', ['founder' => $id]);
            return back()->withErrors('Не удалось изменить статус');

        }
        return back()->withErrors('Неверный пароль. Пожалуйста, проверьте и введите заново');

    }
}
