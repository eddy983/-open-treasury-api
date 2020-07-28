<?php

namespace App\Console\Commands;

//use \GuzzleHttp\Client;
use Goutte\Client; 
use App\Events\DataCrawled;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Console\Command;

class FetchPayments extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'payments:crawl';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Log::info("Crawl Payments initialized");
        $client = new \Goutte\Client();
        
        $guzzleClient = new \GuzzleHttp\Client(array(
        'timeout' => 90,
        'verify' => false,
        ));
        
        $client->setClient($guzzleClient);
        $crawler = $client->request('GET', "https://opentreasury.gov.ng/index.php/component/content/article/11-dpr/3015-2020-daily-payment?Itemid=101");
        
        $crawler->filter('.sppb-panel.sppb-panel-modern table tbody tr strong > span > a')->each(function ($node) use (&$data) {
            $href  = $node->attr('href');
            $title = $node->attr('title');
            $text  = $node->text();
        
            $data[] = compact('href', 'title', 'text'); 

            if(strpos($href, 'JULY') !== false){
                
                $arrContextOptions=[
                    "ssl"=>[ "verify_peer"=>false, "verify_peer_name"=>false]
                ]; 

                Log::info("Downloading: https://opentreasury.gov.ng$href"); 
                $contents = file_get_contents("https://opentreasury.gov.ng$href", false, stream_context_create($arrContextOptions));
                //dd($node);
                $name = substr("https://opentreasury.gov.ng$href", strrpos("https://opentreasury.gov.ng$href", '/') + 1);
                
                Log::info("Uploading to: data/excel/$name");
                Storage::disk('s3')->put("data/excel/$name", $contents);

                event(new DataCrawled("data/excel/$name"));
            }
            
           
        }); 
    }
}
