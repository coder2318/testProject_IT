<?php

namespace App\Listeners;

use App\Events\DeleteAncetaExpertEvent;
use App\Models\AncetaExpert;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;

class AncetaExpertDeleteListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\DeleteAncetaExpertEvent  $event
     * @return void
     */
    public function handle(DeleteAncetaExpertEvent $event)
    {
        try {
            AncetaExpert::where('type', $event->type)->where('anceta_id', $event->anceta_id)->delete();
        } catch (\Exception $exception){

        }
    }
}
