<?php

namespace App\Repository;

use App\Models\Founder;

class FounderRepository extends BaseRepository
{
    public function __construct(Founder $founder)
    {
        $this->entity  = $founder;
    }

    public function index()
    {
        return $this->entity->get();
    }
}