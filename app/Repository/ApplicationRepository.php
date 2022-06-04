<?php

namespace App\Repository;

use App\Models\Application;
use App\Models\Reletion;

class ApplicationRepository extends BaseRepository
{
    public function __construct(Application $application)
    {
        $this->entity  = $application;
    }

    public function index()
    {
        return $this->entity->paginate(10);
    }

    public function edit($id)
    {
        $application = Application::find($id);

        return $application;
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
                        'application_id' => $id
                    ];
                }
                Reletion::insert($arr);
            }
        }

    }

    public function update(array $params, int $id)
    {
        $query = Application::find($id);
        $query->update($params);
//        dd($query->reletions);
        $i = 0;
        foreach ($query->reletions as $reletion)
        {
            $reletion['reletion_level'] = $params['reletion_level'][$i];
            $reletion['reletion_fio'] = $params['reletion_fio'][$i];
            $reletion['reletion_birth'] = $params['reletion_birth'][$i];
            $reletion['reletion_citizen'] = $params['reletion_citizen'][$i];
            $reletion['application_id'] = $id;
            $reletion->update();
            $i++;
        }
        return $query;
    }

}
