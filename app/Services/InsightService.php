<?php
namespace App\Services;

use App\Treasury;

class InsightService
{
    public function getOverviewStatistics(): array
    {
        $omitted_details = Treasury::where('beneficiary_name', '=', '')
                                    ->orWhere('organization_name', '=', '')
                                    ->orWhere('mother_ministry', '=', '')
                                    ->orderby('date', 'DESC')
                                    ->count();

        return compact("omitted_details");
    }

}