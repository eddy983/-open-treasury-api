<?php

namespace App\Listeners;

use App\Events\DataCrawled;
use App\Imports\TreasuryImport;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel; 
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ParseData implements ShouldQueue
{
    /**
     * The time (seconds) before the job should be processed.
     *
     * @var int
     */
    public $delay = 5;

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
     * @param  DataCrawled  $event
     * @return void
     */
    public function handle(DataCrawled $event)
    {
        
        Log::info("Event received: $event->filename");
        //$contents = Storage::disk('s3')->get($event->filename);

        Excel::import(new TreasuryImport($event->date), "$event->filename", 's3', \Maatwebsite\Excel\Excel::XLSX);
    }
}
