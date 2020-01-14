<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $user = User::all();
        return $user;
    }

    public function headings(): array
    {
        return [
            'id',
            'name',
            'email',
            'password',
            'created_at',
            'updated_at'
        ];
    }
}
