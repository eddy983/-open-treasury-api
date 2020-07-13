<?php

namespace App\Http\Controllers;

use App\Treasury;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TreasuryController extends Controller
{
    public function get()
    {
        Log::info("GET /treasury");
        $count = isset($_GET['count']) ? $_GET['count'] : 10;

        $treasuries = Treasury::paginate($count);

        return response()
                ->json(compact("treasuries"));
    }
}
