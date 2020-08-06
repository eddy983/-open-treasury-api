<?php

namespace App\Console\Commands;

//use \GuzzleHttp\Client;
use Goutte\Client; 
use App\Jobs\DownloadPaymentDocument;
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

    private function get_http_response_code($url) {
        stream_context_set_default( [
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
            ],
        ]);
        $headers = get_headers($url, 1);
        return substr($headers[0], 9, 3);
    }

    private function externalFileExists($url){
        return $this->get_http_response_code($url) == "200" ;        
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
        
        $guzzleClient = new \GuzzleHttp\Client([
            'timeout' => 90,
            'verify' => false,
        ]);
        
        $client->setClient($guzzleClient);

        Log::info("Initialting Request to crawl");
        $crawler = $client->request('GET', "https://opentreasury.gov.ng/index.php/component/content/article/11-dpr/3015-2020-daily-payment?Itemid=101");
        
 
        Log::info("Website curled. Parsing data..");
        $crawler->filter('.sppb-panel.sppb-panel-modern table tbody tr strong > span > a')->each(function ($node) use (&$data) {
            $href  = $node->attr('href');
            $title = $node->attr('title');
            $text  = $node->text();
        
            $data[] = compact('href', 'title', 'text'); 

            if(strpos($href, 'JUNE') !== false)
                DownloadPaymentDocument::dispatch($href);
                      
        });
     
    }
}
