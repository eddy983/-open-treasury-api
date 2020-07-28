<?php

namespace App\Imports;

use Carbon\Carbon;
use App\TreasuryTemporary;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToCollection;

class TreasuryImport implements ToModel
{

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
        /*return new User([
           'name'     => $row[0],
           'email'    => $row[1],
           'password' => Hash::make($row[2]),
        ]);*/
        $day = empty($row[1]) ? '01' : (int) trim($row[1]);
        $month = empty($row[1]) ? '01' : (int) trim($row[2]);
        $year = empty($row[1]) ? '2021' : (int) trim($row[3]);

        return new TreasuryTemporary([ 
            //'date' => trim($row[0]),
            //'date' => Carbon::create($year, $month, $day, 0, 0 ,0,  null),
            'date' => Carbon::now()->toDateString(),
            'day' => Carbon::now()->day,
            'month' => Carbon::now()->month,
            'year' => Carbon::now()->year,
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
