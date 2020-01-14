<?php

namespace App\Exports;

use App\Player;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PlayersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Player::all();
    }

    public function headings(): array
    {
        return [
            'id',
            'user_id',
            'level',
            'health',
            'max_health',
            'xp',
            'max_xp'
        ];
    }
}
