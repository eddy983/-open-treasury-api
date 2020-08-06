<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Events\DataCrawled;

class DownloadPaymentDocument implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $href;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $href)
    { 
        $this->href = $href; 
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Log::info("Job DownloadPaymentDocument() Dispatched.");
        $href = $this->href; 
                
        $arrContextOptions=[
            "ssl"=>[ "verify_peer"=>false, "verify_peer_name"=>false]
        ]; 

        $url = "https://opentreasury.gov.ng$href";

        Log::info("Downloading: $url"); 
        
        
        //dd($node);
        $name = substr("https://opentreasury.gov.ng$href", strrpos("https://opentreasury.gov.ng$href", '/') + 1);
        
        Log::info("Uploading to: data/excel/$name");
        if(!Storage::disk('s3')->exists("data/excel/$name")){
            $contents = file_get_contents($url, false, stream_context_create($arrContextOptions));
            Storage::disk('s3')->put("data/excel/$name", $contents);
        }
            

        event(new DataCrawled("data/excel/$name"));
    }
}
