<?php

namespace App\Http\Controllers;

use App\Events\DeleteAncetaExpertEvent;
use App\Http\Requests\Founder\UpdateRequest;
use App\Http\Requests\SpecialistVisa\StoreRequest;
use App\Models\AncetaExpert;
use App\Services\SpecialistVisaService;
use App\Traits\FileUpload;
use Illuminate\Http\Request;

class SpecialistVisaController extends Controller
{
    use FileUpload;
    protected $service;

    public function __construct(SpecialistVisaService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $specialists = $this->service->index();
        return view('specialist_visa.index', compact('specialists'));
    }

    public function show(int $id)
    {
        $specialist = $this->service->show($id);
        $specialist->update([
            'is_showed' => true
        ]);
        $anceta_expert = $this->service->getAncetaExpert($id, AncetaExpert::TYPE_VISA);
        $experts = $this->service->getAncetaExpertAnswers($id, AncetaExpert::TYPE_VISA);
        return view('specialist_visa.show', compact('specialist', 'anceta_expert', 'experts'));
    }

    public function create()
    {
        return view('specialist_visa.create');
    }

    public function store(StoreRequest $request)
    {
        $params = $request->validated();
        $params = $this->fileUpload($params, $request, 'specialist-visa');
        $this->service->create($params);
        return redirect()->route('thanks');
    }


    public function edit(int $id)
    {
        $specialist = $this->service->edit($id);
        return view('specialist_visa.edit', compact('specialist'));
    }

    public function update(int $id, UpdateRequest $request)
    {
        $params = $request->validated();
        $params = $this->fileUpload($params, $request, 'specialist_visa');
        $specialist = $this->service->update($params,$id);
        return redirect()->route('specialist-visa.index');
    }

    public function delete(int $id)
    {
        try {
            $this->service->delete($id);
            event(new DeleteAncetaExpertEvent(AncetaExpert::TYPE_VISA, $id));
            return redirect()->route('specialist-visa.index');
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function sendToExpert($id)
    {
        $params['type'] = AncetaExpert::TYPE_VISA;
        $params['anceta_id'] = $id;
        $this->service->sendToExpert($params);
        $this->service->update(['status' => AncetaExpert::STATUS_WAITING], $id);
        return redirect()->route('specialist-visa.show', ['specialist' => $id]);
    }

    public function changeStatus(Request $request, int $id)
    {
        $params = $request->all();
        if (password_verify($params['password'], \auth()->user()->password)) {
            $params['type'] = AncetaExpert::TYPE_VISA;
            $model = $this->service->changeStatus($params, $id);
            if($model)
                return redirect()->route('specialist-visa.show', ['specialist' => $id]);
            return back()->withErrors('Не удалось изменить статус');

        }
        return back()->withErrors('Неверный пароль. Пожалуйста, проверьте и введите заново');

    }

}
