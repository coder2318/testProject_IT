<?php

namespace App\Traits;

use App\Models\AncetaExpert;
use App\Models\User;

trait ChangeStatusAncetaTrait
{
    public function changeStatusAnceta($params, $id)
    {
        if($params['status'] == AncetaExpert::STATUS_CONFIRMED){
            $params['reject_reason'] = null;
        }

        $anceta_expert = AncetaExpert::where('anceta_id', $id)->where('user_id', auth()->id())->where('type', $params['type'])->first();
        if($anceta_expert){
            return $anceta_expert->update($params);
        }
        return false;
    }

    public function createAncetaExpert(array $params)
    {
        $users = User::where('role', 'expert')->get();
        foreach ($users as $item){
            $params['user_id'] = $item->id;
            $anceta_expert = AncetaExpert::where('anceta_id', $params['anceta_id'])->where('user_id', $item->id)->where('type', $params['type'])->first();
            if(!$anceta_expert){
                AncetaExpert::create($params);
            }
        }
        return true;
    }
}
