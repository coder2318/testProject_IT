<?php

namespace App\Services;

use App\Models\AncetaExpert;
use App\Models\Reletion;
use App\Repository\FounderRepository;

class FounderService extends BaseService
{
    public function __construct(FounderRepository $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        if (auth()->user()->role == 'expert') {
            $founder_ids = AncetaExpert::where('type', AncetaExpert::TYPE_FOUNDER)->get()->pluck('anceta_id')->toArray();
            $query = $this->repo->getQuery();
            $query = $query->whereIn('id', $founder_ids);
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
