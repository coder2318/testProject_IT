<?php

namespace App\Services;

use App\Models\AncetaExpert;
use App\Repository\InvestorRepository;

class InvestorService extends BaseService
{
    public function __construct(InvestorRepository $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        if (auth()->user()->role == 'expert') {
            $investor_ids = AncetaExpert::where('type', AncetaExpert::TYPE_INVESTOR)->get()->pluck('anceta_id')->toArray();
            $query = $this->repo->getQuery();
            $query = $query->whereIn('id', $investor_ids);
            $query = $query->orderByDesc('id');
            return $query->paginate(10);
        }
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
