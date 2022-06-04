<?php

namespace App\Repository;

use App\Models\Founder;
use App\Models\Reletion;
use App\Models\SpecialistVisa;

class SpecialistVisaRepository extends BaseRepository
{
    public function __construct(SpecialistVisa $specialistVisa)
    {
        $this->entity  = $specialistVisa;
    }

    public function index()
    {
        return $this->entity->paginate(10);
    }

    public function store($params)
    {
        $this->entity->create($params);
        $id = $this->entity->latest()->first()->id;
        if (isset($params['reletion_level']))
        {
            if ($params['reletion_level'][0] != null) {

                $count = count($params['reletion_level']);
                $arr = [];
                for ($i = 0; $i < $count; $i++) {
                    $arr[] = [
                        'reletion_level' => $params['reletion_level'][$i],
                        'reletion_fio' => $params['reletion_fio'][$i],
                        'reletion_birth' => $params['reletion_birth'][$i],
                        'reletion_citizen' => $params['reletion_citizen'][$i],
                        'file6' => $params['file6'][$i],
                        'investor_id' => null,
                        'founder_id' => null,
                        'specialist_id' => $id,
                    ];
                }

                Reletion::insert($arr);
            }
        }

    }

    public function edit($id)
    {
        $founder = SpecialistVisa::find($id);

        return $founder;
    }

    public function update(array $params, int $id)
    {
        $query = SpecialistVisa::find($id);
        $query->update($params);
        $i = 0;
        foreach ($query->reletions as $reletion)
        {
            $reletion['reletion_level'] = $params['reletion_level'][$i];
            $reletion['reletion_fio'] = $params['reletion_fio'][$i];
            $reletion['reletion_birth'] = $params['reletion_birth'][$i];
            $reletion['reletion_citizen'] = $params['reletion_citizen'][$i];
            $reletion['specialist_id'] = $id;
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
