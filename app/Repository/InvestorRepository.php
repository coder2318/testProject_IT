<?php

namespace App\Repository;

use App\Models\Investor;

class InvestorRepository extends BaseRepository
{
    public function __construct(Investor $Investor)
    {
        $this->entity  = $Investor;
    }

    public function index()
    {
        return $this->entity->get();
    }
}