<?php

namespace App\Http\Controllers;

use App\Events\DeleteAncetaExpertEvent;
use App\Http\Requests\Investor\UpdateRequest;
use App\Http\Requests\Investor\StoreRequest;
use App\Models\AncetaExpert;
use App\Services\InvestorService;
use App\Traits\FileUpload;
use Illuminate\Http\Request;

class InvestorController extends Controller
{
    use FileUpload;
    protected $service;

    public function __construct(InvestorService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $investors = $this->service->index();
        return view('investor.index', compact('investors'));
    }

    public function show(int $id)
    {
        $investor = $this->service->show($id);
        $investor->update([
            'is_showed' => true
        ]);
        $anceta_expert = $this->service->getAncetaExpert($id, AncetaExpert::TYPE_INVESTOR);
        $experts = $this->service->getAncetaExpertAnswers($id, AncetaExpert::TYPE_INVESTOR);
        return view('investor.show', compact('investor', 'anceta_expert', 'experts'));
    }

    public function create()
    {
        return view('investor.create');
    }

    public function store(StoreRequest $request)
    {
        $params = $request->validated();
        $params = $this->fileUpload($params, $request, 'investor');
        $this->service->create($params);
        return redirect()->route('thanks');
    }


    public function edit(int $id)
    {
        $investor = $this->service->edit($id);
        return view('investor.edit', compact('investor'));
    }

    public function update(int $id, UpdateRequest $request)
    {
        $params = $request->validated();
        $params = $this->fileUpload($params, $request, 'investor');
        $investor = $this->service->update($params,$id);
        return redirect()->route('investor.index');
    }

    public function delete(int $id)
    {
        try {
            $this->service->delete($id);
            event(new DeleteAncetaExpertEvent(AncetaExpert::TYPE_INVESTOR, $id));
            return redirect()->route('investor.index');
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function sendToExpert($id)
    {
        $params['type'] = AncetaExpert::TYPE_INVESTOR;
        $params['anceta_id'] = $id;
        $this->service->sendToExpert($params);
        $this->service->update(['status' => AncetaExpert::STATUS_WAITING], $id);
        return redirect()->route('investor.show', ['investor' => $id]);
    }

    public function changeStatus(Request $request, int $id)
    {
        $params = $request->all();
        if (password_verify($params['password'], \auth()->user()->password)) {
            $params['type'] = AncetaExpert::TYPE_INVESTOR;
            $model = $this->service->changeStatus($params, $id);
            if($model)
                return redirect()->route('investor.show', ['investor' => $id]);
            return back()->withErrors('Не удалось изменить статус');

        }
        return back()->withErrors('Неверный пароль. Пожалуйста, проверьте и введите заново');

    }
}
