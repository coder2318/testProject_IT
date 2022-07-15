<?php

namespace App\Services;

use App\Models\AncetaExpert;
use Illuminate\Support\Facades\DB;

class DashboardService
{
    public function getReport()
    {
        $array  = ['investors', 'founders', 'specialist_visas'];
        $all = [
            'all' => 0,
            'last_30_count' => 0,
            'last_7_count' => 0,
            'today_count' => 0
        ];
        $all_sent = [
            'all' => 0,
            'last_30_count' => 0,
            'last_7_count' => 0,
            'today_count' => 0
        ];
        $data = [
            DB::raw("count(id) all_count"),
            DB::raw("sum(case when created_at > DATE_SUB(CURRENT_DATE(), INTERVAL 1 MONTH) then 1 else 0 end) last_30_count"),
            DB::raw("sum(case when created_at > DATE_SUB(CURRENT_DATE(), INTERVAL 7 DAY)  then 1 else 0 end) last_7_count"),
            DB::raw("sum(case when created_at > DATE_ADD(CURRENT_DATE(), INTERVAL 1 SECOND) then 1 else 0 end) today_count"),
        ];
        foreach ($array as $item) {
            $value = DB::table($item)
                ->select(...$data)
                ->get()->toArray();
            $all['all'] += $value[0]->all_count;
            $all['last_30_count'] += $value[0]->last_30_count;
            $all['last_7_count'] += $value[0]->last_7_count;
            $all['today_count'] += $value[0]->today_count;

            $value2 = DB::table($item)
                ->select(...$data)
                ->where('status', '!=', AncetaExpert::STATUS_DEFAULT)
                ->get()->toArray();
            $all_sent['all'] += $value2[0]->all_count;
            $all_sent['last_30_count'] += $value2[0]->last_30_count;
            $all_sent['last_7_count'] += $value2[0]->last_7_count;
            $all_sent['today_count'] += $value2[0]->today_count;
        }

        $expert = DB::table('anceta_experts')
            ->leftJoin('users', 'anceta_experts.user_id', '=', 'users.id')
            ->select('user_id', 'users.fullname',
                DB::raw("count(user_id) all_count"),
                DB::raw("sum(case when status = 2 then 1 else 0 end) waiting_count"),
                DB::raw("sum(case when status = 3 then 1 else 0 end) confirm_count"),
                DB::raw("sum(case when status = 4 then 1 else 0 end) reject_count"),
            )
            ->groupBy('user_id')
            ->get()->toArray();

        return [
            'all' => $all,
            'all_sent' => $all_sent,
            'expert' => $expert,
        ];

    }

    public function ancetas()
    {
        $array  = ['investor', 'founder', 'visa'];
        $ancetas = [];
        foreach ($array as $item) {
            $ancetas[$item] = AncetaExpert::with($item)->where('type', $item)->select('anceta_id',
                DB::raw("GROUP_CONCAT(user_id) as user_id"),
                DB::raw("GROUP_CONCAT(status) as status"),
                DB::raw("GROUP_CONCAT(updated_at) as updated"),
            )
                ->groupBy('anceta_id')->get();
        }

        return $ancetas;
    }
}
