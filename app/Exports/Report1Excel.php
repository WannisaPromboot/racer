<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\Collection\Collection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class Report1Excel implements FromView,WithEvents
{
      /**
    * @return \Illuminate\Support\Collection
    */

    // protected $id;

    //     function __construct($id) {
    //     $this->id = $id;
    // }

    public function view(): View
    {

        $data = array(
            'customer' => \App\Customer::all(), 
        );
        return view('Admin.Excel.report',$data);
    }

    public function registerEvents(): array
    {
        
        $styleArray = [
            'font' => [
                'name' => 'AngsanaUPC',
            
            ],
            'alignment' => [
                'horizontal' =>'center',
            ]
        ];

        
            
            return [
               
            ];
    }
}
