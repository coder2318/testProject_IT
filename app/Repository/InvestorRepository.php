<?php

namespace App\Repository;

use App\Models\Investor;
use App\Models\Reletion;

class InvestorRepository extends BaseRepository
{
    public function __construct(Investor $Investor)
    {
        $this->entity  = $Investor;
    }

    public function index()
    {
        return $this->entity->orderByDesc('id')->paginate(10);
    }

    public function store($params)
    {
        $this->entity->create($params);
        $id = $this->entity->latest()->first()->id;
//        dd($params);
        if (isset($params['reletion_level']))
        {
            if ($params['reletion_level'][0] != null)
            {
                $count = count($params['reletion_level']);
                $arr = [];
                for ($i=0; $i < $count; $i++) {
                    $arr[] = [
                        'reletion_level' => $params['reletion_level'][$i],
                        'reletion_fio' => $params['reletion_fio'][$i],
                        'reletion_birth' => $params['reletion_birth'][$i],
                        'reletion_citizen' => $params['reletion_citizen'][$i],
                        'file6' => $params['file6'][$i],
                        'founder_id' => null,
                        'specialist_id' => null,
                        'investor_id' => $id,
                    ];
                }
                Reletion::insert($arr);
            }

        }

    }

    public function edit($id)
    {
        $investor = Investor::find($id);

        return $investor;
    }

    public function update(array $params, int $id)
{
    $query = Investor::find($id);
    $query->update($params);
//        dd($query->reletions);
    $i = 0;
    foreach ($query->reletions as $reletion)
    {
        $reletion['reletion_level'] = $params['reletion_level'][$i];
        $reletion['reletion_fio'] = $params['reletion_fio'][$i];
        $reletion['reletion_birth'] = $params['reletion_birth'][$i];
        $reletion['reletion_citizen'] = $params['reletion_citizen'][$i];
        $reletion['investor_id'] = $id;
        if (isset($params['file6']) && $params['file6'])
        {
            if (isset($params['file6'][$i]) && $params['file6'][$i])
            {
                $reletion['file6'] = $params['file6'][$i];
            }
        }
        $reletion->update();
        $i++;
    }
    return $query;
}
}
