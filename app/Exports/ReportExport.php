<?php

namespace App\Exports;

use App\Models\Loans;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
// use Illuminate\Contracts\View\View;
// use Maatwebsite\Excel\Concerns\FromView;

class ReportExport implements FromQuery, ShouldAutoSize, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function query()
    {
        return Loans::query();
    }
    // public function view(): View
    // {
    //     return view(
    //         'ReportSearch',
    //         [
    //             'loans' => Loans::all()
    //         ]
    //     );
    // }

    public function map($loan): array
    {
        return [
            $loan->id
        ];
    }
}
