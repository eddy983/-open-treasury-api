<?php

namespace App\Imports;

use Carbon\Carbon;
use App\TreasuryTemporary;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;

class TreasuryImport implements ToModel
{

    public $date;

    public function __construct(string $date)
    {
        $this->date = $date;
    }

    /**
     * @return int
     */
    public function startRow(): int
    {
        return 20;
    } 

    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        //
    }

    public function model(array $row)
    { 
        Log::info("TreasuryImport() initialized. Date: $this->date");
        $year = explode('-', $this->date)[2];
        $month = explode('-', $this->date)[1];
        $day = explode('-', $this->date)[0];
        $date = Carbon::create($year . "20", $month, $day, 0, 0 ,0,  null);

        Log::info("Date: $date");

        /*$day = empty($row[1]) ? '01' : (int) trim($row[1]);
        $month = empty($row[1]) ? '01' : (int) trim($row[2]);
        $year = empty($row[1]) ? '2021' : (int) trim($row[3]);*/

        //$day = empty($this->date) ? '01' : (int) trim($row[1]);
        //$month = empty($this->date) ? '01' : (int) trim($row[2]);
        //$year = empty($this->date) ? '2021' : (int) trim($row[3]);

        return new TreasuryTemporary([ 
            //'date' => trim($row[0]),
            //'date' => Carbon::create($year, $month, $day, 0, 0 ,0,  null),
            'date' => $date->toDateString(),
            'day' => $date->day,
            'month' => $date->month,
            'year' => $date->year,
            'payment_number' => trim($row[0]),
            'payer_code' => (int) trim($row[1]),
            //'mother_ministry' => (string) trim($row[6]),
            'mother_ministry' => "",
            'organization_name' => (string) trim($row[2]),
            'beneficiary_name' => (string) trim($row[3]),
            'amount' => (float) str_replace(',','',$row[4]),
            'description' => (string) trim($row[5]),
            //'irregularities'  => empty($row[11]) ? '' : (string) trim($row[11]),
            'irregularities'  => "",
        ]);
    }
}
